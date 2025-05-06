document.addEventListener("DOMContentLoaded", function() {
    // Fetch the navbar HTML and insert it into the page
    fetch("/components/navbar.html")
        .then(response => response.text())
        .then(data => {
            document.getElementById("navbar-container").innerHTML = data;
            attachNavbarEvents(); 
           
        });
           // Function to attach event listeners to the navbar
           function attachNavbarEvents() {
            const menuToggle = document.getElementById("menu-toggle");

            // if (menuToggle) {
            //     menuToggle.addEventListener("click", () => {
            //         // You can handle the mobile menu toggle here
            //         alert('Menu button clicked!');
            //         // Add your mobile menu toggle logic here (e.g., toggle a class to show/hide menu)
            //     });
            // }
        }
});