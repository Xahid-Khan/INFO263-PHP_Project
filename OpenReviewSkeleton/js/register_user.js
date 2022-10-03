"use-scrict"

const firstName = document.getElementById("first-name");
const lastName = document.getElementById("last-name");
const email = document.getElementById("user-email");
const password = document.getElementById("user-password");
const matchPassword = document.getElementById("match-password");

const errorMessage = document.getElementById("error-message");

const NAMEREGEX = /^[a-zA-Z ]*$/;

const validateForm = () => {
    if (firstName.value.length === 0 || firstName.value.length > 20) {
        errorMessage.innerText = "First name must be between 1 and 20 characters";
        return false;
    }
    if (!firstName.value.match(NAMEREGEX)) {
        errorMessage.innerText = "First name can only alphabetical characters";
        return false;
    }

    if (lastName.value.length === 0 || lastName.value.length > 20) {
        errorMessage.innerText = "Last name must be between 1 and 20 characters";
        return false;
    }
    if (!lastName.value.match(NAMEREGEX)) {
        errorMessage.innerText = "Last name can only alphabetical characters";
        return false;
    }

    if (!(email.value.length > 0 && email.value.split("@").length > 1)) {
        errorMessage.innerText = "Please enter a valid email";
        return false;
    }

    if (password.value.length < 6 || password.value.length > 15) {
        errorMessage.innerText = "A password must be between 6 and 15 characters";
        return false;
    }

    if (!matchPassword.value.match(password.value)) {
        errorMessage.innerText = "Password does not match";
        return false;
    }
    errorMessage.innerText = "";
    return true;
}