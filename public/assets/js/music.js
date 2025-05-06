
// JavaScript 

    // 🎵 Array of Songs
    const songs = [
      
        {
            title: "Lozani zanu",
            artist: "Dan Lu",
            image: "/assets/images/music/charismatic-modern-young-attractive-africanamerican-girl-with-afro-haircut-listening-music-headph.jpg",
            url: "/assets/Music/Dan Lu  Feat APM  - Lozani Zanu(Official Music Video)(MP3_160K).mp3"
        },

        {
            title: "Mose wa Lero",
            artist: "Phungu Joseph Nkasa",
            image: "/assets/images/music/charismatic-modern-young-attractive-africanamerican-girl-with-afro-haircut-listening-music-headph.jpg",
            url: "/assets/Music/Phungu Joseph Nkasa - Mose wa lero(MP3_160K).mp3"
        },
        {
            title: "Abetcha loya",
            artist: "Sendera Sisters",
            image: "/assets/images/music/charismatic-modern-young-attractive-africanamerican-girl-with-afro-haircut-listening-music-headph.jpg",
            url: "/assets/Music/DPP SENDERA SISTERS_ ABETCHA LOYA(MP3_160K).mp3"
        },
        {
            title: "Agwazi Sendera",
            artist: "Sendera Sisters",
            image: "/assets/images/music/charismatic-modern-young-attractive-africanamerican-girl-with-afro-haircut-listening-music-headph.jpg",
            url: "/assets/Music/Angwazi Sendezani(MP3_160K).mp3"
        },
        {
            title: "Ayamba Kale",
            artist: "Sendera Sisters",
            image: "/assets/images/music/charismatic-modern-young-attractive-africanamerican-girl-with-afro-haircut-listening-music-headph.jpg",
            url: "/assets/Music/DPP SENDERA SISTERS_ AYAMBA KALE(MP3_160K).mp3"
        },
        {
            title: "Malawi Moto Moto",
            artist: "Sendera Sisters",
            image: "/assets/images/music/portrait-happy-young-woman.jpg",
            url: "/assets/Music/DPP Moto Moto Eya_ Malawi Moto Moto Eya(MP3_160K).mp3"
        },
    ];

    


// 🎼 Function to Load Songs
function loadMusicList() {
    const musicListContainer = document.getElementById("musicList");
    musicListContainer.innerHTML = ""; // Clear previous content

    songs.forEach((song, index) => {
        musicListContainer.innerHTML += `
            <div class="flex items-center bg-white p-6 rounded-md shadow-md hover:shadow-lg transition mb-4">
                <img src="${song.image}" alt="${song.title}" class="w-14 h-14 rounded-md object-cover">
                <div class="ml-4 flex-1">
                    <h3 class="text-lg font-semibold text-gray-800">${song.title}</h3>
                    <p class="text-sm text-gray-500">By ${song.artist}</p>

                    <!-- Audio Player -->
                    <div class="mt-2">
                        <audio id="audioPlayer${index}" class="hidden" >
                            <source src="${song.url}" type="audio/mpeg">
                        </audio>

                        <!-- Controls -->
                        <div class="flex items-center space-x-3">
                            <!-- Play/Pause Button -->
                            <button onclick="playPause(${index})" id="playPauseButton${index}" class="text-[var(--theme-color)]  p-1.5 rounded-full w-10 h-10 flex items-center justify-center">
                                <i id="playPauseIcon${index}" class="fas fa-play text-sm"></i>
                            </button>

                            <span id="currentTime${index}" class="text-sm text-gray-600">0:00</span>
                            <div class="progress-container w-full relative">
                                <input type="range" id="progressBar${index}" value="0" class="w-full h-1 bg-gray-200 rounded-lg cursor-pointer">
                            </div>
                            <span id="duration${index}" class="text-sm text-gray-600">0:00</span>

                            <!-- Volume -->
                            <div class="relative group">
                                <button class="p-2 rounded-full">
                                    <i class="fas fa-volume-up text-[var(--theme-color)]"></i>
                                </button>
                                <div class="volume-slider absolute bottom-10 left-1/2 transform -translate-x-1/2 w-20">
                                    <input type="range" id="volumeControl${index}" min="0" max="1" step="0.1" value="1"
                                        class="w-24 h-1 bg-gray-200 rounded-lg cursor-pointer"
                                        onchange="setVolume(${index}, this.value)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;
    });
    
    // Set up event listeners AFTER all the DOM elements are created
    songs.forEach((song, index) => {
        const audio = document.getElementById(`audioPlayer${index}`);
        const progressBar = document.getElementById(`progressBar${index}`);
        const currentTimeEl = document.getElementById(`currentTime${index}`);
        const durationEl = document.getElementById(`duration${index}`);
        const volumeControl = document.getElementById(`volumeControl${index}`);
        
        // Initialize the progress bar
        progressBar.style.background = `linear-gradient(to right, var(--theme-color) 0%, #ddd 0%)`;
        
        // Update progress bar and time on playback
        audio.addEventListener("timeupdate", () => {
            if (audio.duration) {
                let progress = (audio.currentTime / audio.duration) * 100;
                progressBar.value = progress;
                progressBar.style.background = `linear-gradient(to right, var(--theme-color) ${progress}%, #ddd ${progress}%)`;
                currentTimeEl.textContent = formatTime(audio.currentTime);
                durationEl.textContent = formatTime(audio.duration);
            }
        });
        
        // Load metadata to get duration
        audio.addEventListener("loadedmetadata", () => {
            durationEl.textContent = formatTime(audio.duration);
        });
        
        // Update progress bar on manual seek
        progressBar.addEventListener("input", function() {
            const value = this.value;
            this.style.background = `linear-gradient(to right, var(--theme-color) ${value}%, #ddd ${value}%)`;
            if (audio.duration) {
                audio.currentTime = (value / 100) * audio.duration;
            }
        });
        
        // Initialize volume control
        volumeControl.style.background = `linear-gradient(to right, var(--theme-color) 100%, #ddd 0%)`;
        
        // Update volume control on change
        volumeControl.addEventListener("input", function() {
            const value = this.value * 100;
            this.style.background = `linear-gradient(to right, var(--theme-color) ${value}%, #ddd ${value}%)`;
            audio.volume = this.value;
        });
    });
}

// 🎵 Play/Pause Function
function playPause(index) {
    let audio = document.getElementById(`audioPlayer${index}`);
    let icon = document.getElementById(`playPauseIcon${index}`);

    // Pause all other audio players
    songs.forEach((_, i) => {
        if (i !== index) {
            const otherAudio = document.getElementById(`audioPlayer${i}`);
            const otherIcon = document.getElementById(`playPauseIcon${i}`);
            otherAudio.pause();
            otherIcon.classList.remove("fa-pause");
            otherIcon.classList.add("fa-play");
        }
    });

    if (audio.paused) {
        audio.play();
        icon.classList.remove("fa-play");
        icon.classList.add("fa-pause");
    } else {
        audio.pause();
        icon.classList.remove("fa-pause");
        icon.classList.add("fa-play");
    }
}

// 🔊 Set Volume
function setVolume(index, value) {
    let audio = document.getElementById(`audioPlayer${index}`);
    audio.volume = value;
    
    // Update the volume slider appearance
    const volumeControl = document.getElementById(`volumeControl${index}`);
    volumeControl.value = value;
    volumeControl.style.background = `linear-gradient(to right, var(--theme-color) ${value * 100}%, #ddd ${value * 100}%)`;
}

// ⏳ Format Time
function formatTime(time) {
    if (isNaN(time) || time === Infinity) return "0:00";
    let minutes = Math.floor(time / 60);
    let seconds = Math.floor(time % 60);
    return `${minutes}:${seconds < 10 ? "0" : ""}${seconds}`;
}

// 🏁 Load Music on Page Load
document.addEventListener("DOMContentLoaded", loadMusicList);


