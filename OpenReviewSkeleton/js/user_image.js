"use-strict"

function showPreview () {
    const imageInput = document.getElementById("user-image");
    const imagePreview = document.getElementById("image-preview");
    imagePreview.src = imageInput.value;
}