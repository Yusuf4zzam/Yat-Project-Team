// Start Form Number One.
const form_1  = document.getElementById("form-1");
const username  = document.getElementById("username");

form_1.addEventListener('submit', (e) => {
    checkUserName();
    e.preventDefault();
});

function checkUserName() {

    // Check username value
    if(username.value.trim() === "") {
        setErrorFor(username, "User Name Cannot Be Empty");
    }
    else if (username.value.trim().match(/^[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]*$/)) {
        setErrorFor(username, "User Name cannot Start with @#$.. etc");
    }
    else if (username.value.trim().length < 8) {
        setErrorFor(username, "User Name Cannot be less than 8");
    }
    else {
        setSuccessFor(username);
    }
    if(username.parentElement.classList.contains("success")) {
        form_1.submit();
    }
}


// Start Form Number two.
const form_2  = document.getElementById("form-2");
const email  = document.getElementById("email");


form_2.addEventListener('submit', (e) => {
    checkEmail();
    e.preventDefault();
});

function checkEmail() {
    // Check email Value
    if(email.value.trim() === "") {
        setErrorFor(email, "Email Cannot Be Empty");
    }
    else if(!isEmail(email.value.trim())) {
        setErrorFor(email, "Email is not valid");
    }
    else {
        setSuccessFor(email);
    }
    if(email.parentElement.classList.contains("success")) {
        form_1.submit();
    }
}

// Start Form Number three.
const form_3  = document.getElementById("form-3");
const oldPassword = document.getElementById("old-password");
const newPassword  = document.getElementById("new-password");
const confirmPassword = document.getElementById("confirm-password");


form_3.addEventListener('submit', (e) => {
    checkPassword();
    e.preventDefault();
});

function checkPassword() {
        
    // Check new password Value
    if(newPassword.value === "") {
        setErrorFor(newPassword, "Password Cannot Be Empty");
    }
    else if (newPassword.value.length < 8) {
        setErrorFor(newPassword, "Password cannot be less than 8");
    }
    else {
        setSuccessFor(newPassword)
    }

    // Check Confirm Password
    if(confirmPassword.value !== newPassword.value) {
        setErrorFor(confirmPassword, "Paswords Not Does Match");
    }
    else if (confirmPassword.value === "") {
        setErrorFor(confirmPassword, "Password Cannot Be Empty");
    }
    else {
        setSuccessFor(confirmPassword)
    }
    if(confirmPassword.parentElement.classList.contains("success") && newPassword.parentElement.classList.contains("success")) {
        form_1.submit();
    }
}

function setErrorFor(input, message) {
    const formControl = input.parentElement;

    const error_text = formControl.querySelector("div");

    error_text.textContent = message;

    formControl.className = "control-form error";
}

function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = "control-form success";
}

function isEmail(email) {
    return /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
