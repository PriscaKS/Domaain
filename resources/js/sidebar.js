document.addEventListener("DOMContentLoaded", () => {
    const sidebar = document.getElementById("sidebar");
    const overlay = document.getElementById("overlay");
    const menuToggle = document.getElementById("menu-toggle");
    const closeBtn = document.getElementById("close-btn");

    // Ensure all required elements exist
    if (!sidebar || !overlay || !closeBtn) {
        console.warn("Sidebar: Required elements not found.");
        return;
    }

    // Make open/close globally accessible if needed
    window.openSidebar = function () {
        sidebar.classList.add("open");
        sidebar.style.transform = "translateX(0)";
        overlay.classList.remove("hidden");
    };

    window.closeSidebar = function () {
        sidebar.classList.remove("open");
        sidebar.style.transform = "translateX(-100%)";
        overlay.classList.add("hidden");
    };

    if (menuToggle) {
        menuToggle.addEventListener("click", () => {
            sidebar.classList.contains("open") ? closeSidebar() : openSidebar();
        });
    }

    closeBtn.addEventListener("click", closeSidebar);
    overlay.addEventListener("click", closeSidebar);

    window.addEventListener("resize", () => {
        if (window.innerWidth > 768) {
            closeSidebar();
        }
    });

    // Handle dropdown toggles
    document.querySelectorAll("button[data-dropdown]").forEach((button) => {
        button.addEventListener("click", () => {
            const menuId = button.getAttribute("data-dropdown");
            const menu = document.getElementById(menuId);
            const arrow = document.getElementById(`${menuId}-arrow`);

            if (!menu || !arrow) return;

            menu.classList.toggle("hidden");
            arrow.classList.toggle("fa-chevron-right");
            arrow.classList.toggle("fa-chevron-down");
        });
    });
});
