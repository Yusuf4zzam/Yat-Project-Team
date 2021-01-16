var toggleButton = document.querySelector(".toggle-button"),
    boxToggle = document.querySelector(".toggle"),
    toggle_time = document.querySelector(".toggle-time"),
    over_lay = document.querySelector(".overlay");

toggleButton.onclick = function() {
    boxToggle.style.right = "0";
    over_lay.style.display = "block";
}
toggle_time.onclick = function() {
    boxToggle.style.right = "-90%";
    over_lay.style.display = "none";
}
over_lay.onclick = function() {
    boxToggle.style.right = "-90%";
    over_lay.style.display = "none";
}

// button-warnning
var button_warnning = document.querySelector(".button-warnning"),
    box_warnning = document.querySelector(".check-login");

button_warnning.onclick = function() {
    box_warnning.style.display = "none";
}