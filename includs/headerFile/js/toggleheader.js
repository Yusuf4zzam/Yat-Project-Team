var toggleButton = document.querySelector(".toggle-button"),
    boxToggle = document.querySelector(".toggle"),
    toggle_time = document.querySelector(".toggle-time");

toggleButton.onclick = function() {
    boxToggle.style.right = "0";
}
toggle_time.onclick = function() {
    boxToggle.style.right = "-90%";
}