const menuButton = document.getElementById("menu-button");
const dropdownMenu = document.querySelector(".absolute");

menuButton.addEventListener("click", function() {
    dropdownMenu.classList.toggle("hidden");
});

window.addEventListener("click", function(event) {
    if (!menuButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
        dropdownMenu.classList.add("hidden");
    }
});

window.addEventListener("load", function() {
    dropdownMenu.classList.add("hidden");
});