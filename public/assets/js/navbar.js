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

           
        }
});