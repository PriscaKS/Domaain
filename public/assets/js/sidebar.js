document.addEventListener("DOMContentLoaded", function () {
    
    fetch("/components/sidebar.html")
        .then(response => response.text())
        .then(data => {
            document.getElementById("sidebar-container").innerHTML = data;
            attachSidebarEvents(); 
        })
        .catch(error => console.error("Error loading sidebar:", error));









        
    // ✅ Make closeSidebar global
    window.closeSidebar = function () {  
        const sidebar = document.getElementById("sidebar");
        const overlay = document.getElementById("overlay");
        
        if (sidebar && overlay) {
            sidebar.classList.remove("open");
            sidebar.style.transform = "translateX(-100%)";
            overlay.classList.remove("active");
        }
    };

    window.openSidebar = function () {
        const sidebar = document.getElementById("sidebar");
        const overlay = document.getElementById("overlay");

        if (sidebar && overlay) {
            sidebar.classList.add("open");
            sidebar.style.transform = "translateX(0)";
            overlay.classList.add("active");
        }
    };

    function attachSidebarEvents() {
        setTimeout(() => {
            const sidebar = document.getElementById("sidebar");
            const overlay = document.getElementById("overlay");
            const menuToggle = document.getElementById("menu-toggle");
            const closeBtn = document.getElementById("close-btn");

            if (!sidebar || !menuToggle || !closeBtn || !overlay) {
                console.error("Sidebar elements not found!");
                return;
            }

            menuToggle.addEventListener("click", () => {
                sidebar.classList.contains("open") ? closeSidebar() : openSidebar();
            });

            closeBtn.addEventListener("click", closeSidebar);
            overlay.addEventListener("click", closeSidebar);

            window.addEventListener("resize", () => {
                if (window.innerWidth > 768) {
                    closeSidebar();
                }
            });
        }, 100);
    }
});


        // Make sure overlay is hidden on page load
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('overlay').style.display = 'none';
        });
        
        // Modified functions for sidebar toggle
        function openSidebar() {
            document.getElementById('overlay').style.display = 'block';
            // Your existing sidebar open code here
        }
        
        function closeSidebar() {
            document.getElementById('overlay').style.display = 'none';
            // Your existing sidebar close code here
        }



////////////////
function toggleDropdown(menuId) {
    // Get the dropdown menu and the arrow icon
    let menu = document.getElementById(menuId);
    let arrow = document.getElementById(menuId + "-arrow");

    // Ensure both the menu and the arrow exist before proceeding
    if (menu && arrow) {
        if (menu.classList.contains("hidden")) {
            menu.classList.remove("hidden");  // Show the dropdown
            arrow.classList.remove("fa-chevron-right");
            arrow.classList.add("fa-chevron-down");  // Change arrow direction
        } else {
            menu.classList.add("hidden");  // Hide the dropdown
            arrow.classList.remove("fa-chevron-down");
            arrow.classList.add("fa-chevron-right");  // Change arrow direction
        }
    } else {
        console.error(`Element with id '${menuId}' or '${menuId}-arrow' not found.`);
    }
}

// Automatically set up the dropdown buttons
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll("button[data-dropdown]").forEach((button) => {
        button.addEventListener("click", function () {
            toggleDropdown(this.getAttribute("data-dropdown"));
        });
    });
});
