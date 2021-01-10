// Start Sign-Up Form Validation 

 
const form  = document.getElementById("form");
const username  = document.getElementById("username");
const email  = document.getElementById("email");
const password  = document.getElementById("password");
const password2  = document.getElementById("password2");
const check = document.getElementById("check-terms");


form.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs();
    e.stopPropagation();
});

function checkInputs() {
    // Get The Values
    const userNameValue = username.value.trim();
    const emailvalue = email.value.trim();
    const passwordValue = password.value.trim();
    const passwrod2Value = password2.value.trim();

    // Check username value
    if(userNameValue === "") {
        setErrorFor(username, "User Name Cannot Be Empty");
    }
    else if (userNameValue.match(/^[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]*$/)) {
        setErrorFor(username, "User Name cannot Start with @#$.. etc");
    }
    else if (userNameValue.length < 8) {
        setErrorFor(username, "User Name Cannot be less than 8");
    }
    else {
        setSeccessFor(username)
    }

    // Check email Value
    if(emailvalue === "") {
        setErrorFor(email, "Email Cannot Be Empty");
    }
    else if(!isEmail(emailvalue)) {
        setErrorFor(email, "Email is not valid");
    }
    else {
        setSeccessFor(email)
    }

    // Check password Value
    if(passwordValue === "") {
        setErrorFor(password, "Password Cannot Be Empty");
    }
    else if (passwordValue.length < 14) {
        setErrorFor(password, "Password cannot be less than 14");
    }
    else {
        setSeccessFor(password)
    }

    // Check password2 Value
    if(passwrod2Value !== passwordValue) {
        setErrorFor(password2, "Passwords Does Not Match");
    }
    else if (passwrod2Value == "") {
        setErrorFor(password2, "Password Cannot Be Empty");
    }
    else {
        setSeccessFor(password2)
    }

    // Check check Box
    if(check.checked == 0) {
        setErrorFor(check, "You Must agree Terms & Conditions");
    }
    else {
        setSeccessFor(check);
    }
}

function setErrorFor(input, message) {
    const formControl = input.parentElement;

    const error_text = formControl.querySelector("div");

    error_text.textContent = message;

    formControl.className = "control-form error";
}

function setSeccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = "control-form success";
}

function isEmail(email) {
    return /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
