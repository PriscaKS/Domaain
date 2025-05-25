document.addEventListener("DOMContentLoaded", function () {
    attachNavbarEvents();

    function attachNavbarEvents() {
        const menuToggle = document.getElementById("menu-toggle");

        if (menuToggle) {
            menuToggle.addEventListener("click", function () {
                // Add your toggle logic here
                console.log("Menu toggled");
            });
        }
    }
});
