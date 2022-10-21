"use-strict"

const first_name = document.getElementById('first-name');
const last_name = document.getElementById('last-name');
const user_email = document.getElementById('user-email');
const edit_button = document.getElementById('edit-button');

const editFields = () => {
    first_name.removeAttribute('disabled');
    last_name.removeAttribute('disabled');
    user_email.removeAttribute('disabled');
    edit_button.setAttribute('disabled', 'true');
}