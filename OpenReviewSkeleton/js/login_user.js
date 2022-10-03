"use-scrict"

const errorMessage = document.getElementById("error-message");
const userEmail = document.getElementById("user-email");
const password = document.getElementById("password");


const validateLoginForm = () => {
    if (!(userEmail.value.length > 0 && userEmail.value.split("@").length > 1)) {
        errorMessage.innerText = "Please enter your email address";
        return false;
    }

    if (password.value.length === 0) {
        errorMessage.innerText = "Please enter your password";
        return  false;
    }

    errorMessage.innerText = "";
    return true;
}