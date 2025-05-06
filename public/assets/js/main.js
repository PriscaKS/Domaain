


// PASS LANDING PAGE

document.addEventListener("DOMContentLoaded", function () {

  // LOAD THE  FOOTER
  fetch("/partials/footer")

    .then(response => response.text())
    .then(data => {
      document.getElementById("footer-container").innerHTML = data;
    })
    .catch(error => console.error("Error loading footer:", error));


  // LOAD THE HISTORY

    fetch("/partials/history")

    .then(response => response.text())
    .then(data => {
      document.getElementById("history-container").innerHTML = data;
    })
    .catch(error => console.error("Error loading footer:", error));

});

//END LANDING PAGE



// BECOME A VOLUNTEER FROM THE INDEX PAGE START

document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".counter");
  const section = document.querySelector(".volunteer-section");

  function countUp() {
    counters.forEach(counter => {
      let target = +counter.getAttribute("data-target");
      let count = 0;
      let speed = target / 150;

      let updateCount = setInterval(() => {
        count += speed;
        if (count >= target) {
          counter.innerText = target;
          clearInterval(updateCount);
        } else {
          counter.innerText = Math.floor(count);
        }
      }, 20);
    });
  }

  function revealOnScroll() {
    let windowHeight = window.innerHeight;
    let sectionTop = section.getBoundingClientRect().top;

    if (sectionTop < windowHeight - 100) {
      document.querySelectorAll('.slide-in').forEach(el => el.classList.add("visible"));
      countUp();
      window.removeEventListener("scroll", revealOnScroll);
    }
  }

  window.addEventListener("scroll", revealOnScroll);
});
/* END OF BECOME A VOLUNTEER FROM THE INDEX PAGE */

// START OF ANIMATION FOR THE ABOUT SECTION


// END OF ANIMATION FOR THE ABOUT SECTION




// START OF ANIMATION FOR THE FOCUS AREAS SECTION

document.addEventListener('DOMContentLoaded', function () {
  // Register GSAP plugins
  gsap.registerPlugin(ScrollTrigger);

  // Focus Area Containers Animation
  const focusItems = document.querySelectorAll('.focus-item');
  if (focusItems.length > 0) {
    gsap.from(focusItems, {
      y: 50, // Slide up from the bottom
      opacity: 0,
      duration: 1,
      stagger: 0.2, // Delay between each item
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".relative.py-24", // Trigger on the section
        start: "top 70%", // Start animation when the section is 70% in view
        toggleActions: "play none none none"
      }
    });
  }
});

// END OF ANIMATION FOR THE FOCUS AREAS SECTION

// START OF FLOATING CONTAINER


document.addEventListener('DOMContentLoaded', function () {
  // Register GSAP plugins
  gsap.registerPlugin(ScrollTrigger);

  // Floating Image Animation
  const floatingImage = document.getElementById('floating-image');
  if (floatingImage) {
    gsap.from(floatingImage, {
      x: -100, // Slide in from the left
      opacity: 0,
      duration: 1.5,
      ease: "power2.out",
      scrollTrigger: {
        trigger: floatingImage,
        start: "top 80%", // Start animation when the image is 80% in view
        toggleActions: "play none none none"
      }
    });
  }

  // Floating Text Animation
  const floatingText = document.getElementById('floating-text');
  if (floatingText) {
    gsap.from(floatingText, {
      x: 100, // Slide in from the right
      opacity: 0,
      duration: 1.5,
      delay: 0.3, // Slight delay after the image animation
      ease: "power2.out",
      scrollTrigger: {
        trigger: floatingText,
        start: "top 80%", // Start animation when the text is 80% in view
        toggleActions: "play none none none"
      }
    });
  }
});

const volunteerButton = document.querySelector('#floating-text button');
if (volunteerButton) {
  gsap.from(volunteerButton, {
    y: 30,
    opacity: 0,
    duration: 1,
    delay: 0.6, // Delay after the text animation
    ease: "power2.out",
    scrollTrigger: {
      trigger: volunteerButton,
      start: "top 80%",
      toggleActions: "play none none none"
    }
  });
}



// END OF FLOATING CONTAINER
// START OF PARTY LEADERS SECTION

document.addEventListener('DOMContentLoaded', function () {
  // Register GSAP plugins
  gsap.registerPlugin(ScrollTrigger);

  // Leader Cards Animation (One at a time on scroll)
  const leaderCards = document.querySelectorAll('.leader-card');
  if (leaderCards.length > 0) {
    leaderCards.forEach((card, index) => {
      // Animate the card
      gsap.from(card, {
        y: 50, // Slide up from the bottom
        opacity: 0,
        scale: 0.9, // Start slightly scaled down
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
          trigger: card, // Trigger on the individual card
          start: "top 80%", // Start animation when the card is 80% in view
          toggleActions: "play none none none"
        }
      });

      // Animate the text inside the card
      const cardText = card.querySelectorAll('h3, p');
      if (cardText.length > 0) {
        gsap.from(cardText, {
          y: 20,
          opacity: 0,
          duration: 0.8,
          stagger: 0.2,
          delay: 0.3, // Slight delay after the card animation
          scrollTrigger: {
            trigger: card, // Trigger on the individual card
            start: "top 80%", // Start animation when the card is 80% in view
            toggleActions: "play none none none"
          }
        });
      }
    });
  }
});


// END OF PARTY LEADERS SECTION

//   HISTORY JAVASCRIPT

document.addEventListener('DOMContentLoaded', () => {
  // Animation on scroll
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate-fadeIn');
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('.timeline-item').forEach(item => {
    observer.observe(item);
    // Add initial hidden state in JS to avoid flash on page load
    item.style.opacity = '0';
    item.style.transform = 'translateX(20px)';
    item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
  });

  // Staggered animation for timeline items
  let delay = 0;
  document.querySelectorAll('.timeline-item').forEach((item, index) => {
    setTimeout(() => {
      item.style.opacity = '1';
      item.style.transform = 'translateX(0)';
    }, 300 + (index * 200));
  });

  // Read more button effect

});



document.addEventListener('DOMContentLoaded', () => {
  const track = document.getElementById('carouselTrack');

  if (!track) {
    console.error('Carousel track not found!');
    return;
  }

  const items = Array.from(track.children);


  items.forEach(item => {
    const clone = item.cloneNode(true);
    track.appendChild(clone);
  });
});

// HISTORY ANIMATION

document.addEventListener("DOMContentLoaded", function () {
  gsap.registerPlugin(ScrollTrigger, TextPlugin);

  function animateHistorySection() {
    // Enhanced Typing Effect for "Bingu wa Mutharika" with letter-by-letter animation
    function typeEffect(target, text) {
      const element = document.querySelector(target);
      if (!element) return;

      // Clear existing text
      element.textContent = "";

      // Split text into letters and wrap each in a span
      const letters = text.split("");
      letters.forEach((letter, index) => {
        const span = document.createElement("span");
        span.textContent = letter === " " ? "\u00A0" : letter; // Preserve spaces
        span.style.display = "inline-block";
        span.style.opacity = "0";
        span.style.transform = "translateY(20px)";
        element.appendChild(span);

        // Animate each letter
        gsap.to(span, {
          opacity: 1,
          y: 0,
          duration: 0.3,
          delay: index * 0.1, // Stagger effect
          ease: "power2.out",
          scrollTrigger: {
            trigger: target,
            start: "top 80%",
            once: true
          }
        });
      });
    }

    // Call with your specific selector and text
    typeEffect(".history-information.text-3xl", "Bingu wa Mutharika");

    // Rest of your existing animations remain unchanged
    // Founder Badge Animation
    gsap.from(".history-section .absolute span", {
      scale: 0,
      opacity: 0,
      duration: 1,
      ease: "bounce.out",
      scrollTrigger: {
        trigger: ".history-section .absolute span",
        start: "top 85%",
        once: true,
      },
    });

    // Title Animation (DPP History)
    gsap.from("h1.text-4xl", {
      opacity: 0,
      scale: 0.8,
      duration: 1,
      ease: "power2.out",
      scrollTrigger: {
        trigger: "h1.text-4xl",
        start: "top 90%",
        once: true,
      },
    });

    // Slide-in Effect for Each Timeline Item
    gsap.utils.toArray(".timeline-item").forEach((item, index) => {
      gsap.from(item, {
        opacity: 0,
        y: 50,
        duration: 1,
        ease: "power2.out",
        delay: index * 0.2,
        scrollTrigger: {
          trigger: item,
          start: "top 85%",
          once: true,
        },
      });
    });
  }

  // Existing observer logic remains the same
  const historyContainer = document.getElementById("history-container");
  if (historyContainer) {
    const observer = new MutationObserver(() => {
      if (historyContainer.innerHTML.trim() !== "") {
        animateHistorySection();
        observer.disconnect();
      }
    });
    observer.observe(historyContainer, { childList: true, subtree: true });
  } else {
    animateHistorySection();
  }
});
//HISTORY ANIMATION



// footer-animations.js
document.addEventListener("DOMContentLoaded", function () {
  // Register ScrollTrigger plugin
  gsap.registerPlugin(ScrollTrigger);

  // Function to animate footer sections
  function animateFooter() {
    const footerSections = document.querySelectorAll(".footer-section");
    const footerCopyright = document.querySelector(".footer-copyright");

    if (footerSections.length === 0 || !footerCopyright) {
      console.warn("Footer elements not found.");
      return; // Exit if elements are missing
    }

    // Animate footer sections
    gsap.from(footerSections, {
      y: 20, // Move elements up by 20px
      opacity: 0, // Start with opacity 0
      duration: 1,
      stagger: 0.2, // Staggered delay between sections
      ease: "power2.out",
      scrollTrigger: {
        trigger: footerSections[0], // Trigger on the first section
        start: "top bottom", // Start animation when the footer enters the viewport
        toggleActions: "play none none none"
      },
      onComplete: () => {
        // Ensure elements are fully visible after animation
        gsap.set(footerSections, { opacity: 1, y: 0 });
      }
    });

    // Animate footer copyright
    gsap.from(footerCopyright, {
      y: 20, // Move element up by 20px
      opacity: 0, // Start with opacity 0
      duration: 1,
      delay: 0.5, // Delay after the sections
      ease: "power2.out",
      scrollTrigger: {
        trigger: footerCopyright,
        start: "top bottom", // Start animation when the copyright enters the viewport
        toggleActions: "play none none none"
      },
      onComplete: () => {
        // Ensure the copyright is fully visible after animation
        gsap.set(footerCopyright, { opacity: 1, y: 0 });
      }
    });
  }

  // Wait for footer to load (if it's fetched dynamically)
  const footerContainer = document.getElementById("footer-container");
  if (footerContainer) {
    const observer = new MutationObserver(() => {
      if (footerContainer.innerHTML.trim() !== "") {
        animateFooter();
        observer.disconnect();
      }
    });
    observer.observe(footerContainer, { childList: true, subtree: true });
  } else {
    animateFooter(); // Run immediately if footer is already present
  }
});
//END FOOTER ANIMATION  

// LANDING PAGE ANIMATION
document.addEventListener("DOMContentLoaded", function () {
  function animateLanding() {
    const heroText = document.getElementById("heroText");
    const imageContainer = document.getElementById("imageContainer");

    if (!heroText || !imageContainer) {
      console.warn("Hero text or image container not found.");
      return;
    }

    // Animate hero text - Fade in and move up
    gsap.from(heroText, {
      opacity: 0,
      y: 50,
      duration: 1.2,
      ease: "power2.out",
      scrollTrigger: {
        trigger: heroText,
        start: "top 80%", // Starts when heroText is in viewport
        toggleActions: "play none none none"
      }
    });

    // Animate image - Fade in and slide from right
    gsap.from(imageContainer, {
      opacity: 0,
      x: 100,
      duration: 1.5,
      ease: "power2.out",
      scrollTrigger: {
        trigger: imageContainer,
        start: "top 80%",
        toggleActions: "play none none none"
      }
    });
  }

  // Observe if the landing section is dynamically loaded
  const landingContainer = document.getElementById("landing-container");
  if (landingContainer) {
    const observer = new MutationObserver(() => {
      if (landingContainer.innerHTML.trim() !== "") {
        animateLanding();
        observer.disconnect();
      }
    });
    observer.observe(landingContainer, { childList: true, subtree: true });
  } else {
    animateLanding(); // Run immediately if content is already present
  }
});

// END LADNING PAGE ANIAMTION

// START OF ABOUT ANIMATION
document.addEventListener("DOMContentLoaded", function () {
  function setupAboutAnimations() {
    const aboutSection = document.getElementById("about-section");
    if (!aboutSection) return;

    // Elements to animate
    const elements = {
      image: aboutSection.querySelector(".relative.flex.justify-center.overflow-hidden"),
      overlay: aboutSection.querySelector(".absolute.bottom-0"),
      content: aboutSection.querySelector(".text-left"),
      agendaItems: aboutSection.querySelectorAll("ul li")
    };

    // Initial hidden state
    Object.values(elements).forEach(el => {
      if (el) {
        if (el instanceof NodeList) {
          el.forEach(item => item.style.opacity = '0');
        } else {
          el.style.opacity = '0';
        }
      }
    });

    // Intersection Observer
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          // Image animation (slide up + fade)
          elements.image?.animate([
            { opacity: 0, transform: 'translateY(40px)' },
            { opacity: 1, transform: 'translateY(0)' }
          ], {
            duration: 800,
            easing: 'ease-out',
            fill: 'forwards'
          });

          // Overlay animation (delayed fade)
          elements.overlay?.animate([
            { opacity: 0 },
            { opacity: 1 }
          ], {
            duration: 600,
            delay: 300,
            easing: 'ease-out',
            fill: 'forwards'
          });

          // Content animation (fade + slight scale)
          elements.content?.animate([
            { opacity: 0, transform: 'scale(0.98)' },
            { opacity: 1, transform: 'scale(1)' }
          ], {
            duration: 700,
            delay: 150,
            easing: 'ease-out',
            fill: 'forwards'
          });

          // Agenda items (staggered)
          elements.agendaItems?.forEach((item, index) => {
            item.animate([
              { opacity: 0, transform: 'translateX(20px)' },
              { opacity: 1, transform: 'translateX(0)' }
            ], {
              duration: 400,
              delay: 200 + (index * 100),
              easing: 'ease-out',
              fill: 'forwards'
            });
          });

          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });

    observer.observe(aboutSection);
  }

  // Dynamic content handling (matches your structure)
  const mainContent = document.querySelector(".main-content");
  if (mainContent && !document.getElementById("about-section")) {
    const observer = new MutationObserver(() => {
      if (document.getElementById("about-section")) {
        setupAboutAnimations();
        observer.disconnect();
      }
    });
    observer.observe(mainContent, { childList: true, subtree: true });
  } else {
    setupAboutAnimations();
  }
});
// END ANIMATION ON ABOUT SECTION
