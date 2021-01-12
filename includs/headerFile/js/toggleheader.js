var toggleButton = document.querySelector(".toggle-button"),
    boxToggle = document.querySelector(".toggle"),
    toggle_time = document.querySelector(".toggle-time");

toggleButton.onclick = function() {
    boxToggle.style.right = "0";
}
toggle_time.onclick = function() {
    boxToggle.style.right = "-90%";
}

// button-warnning
var button_warnning = document.querySelector(".button-warnning"),
    box_warnning = document.querySelector(".check-login");

button_warnning.onclick = function() {
    box_warnning.style.display = "none";
}