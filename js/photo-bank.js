// ==========================================================
// PHOTO BANK
// ==========================================================


// ==========================================================
// OPEN IMAGE
// ==========================================================

function openImage(src) {

    const popup =
        document.getElementById("imagePopup");

    const popupImage =
        document.getElementById("popupImage");


    popupImage.src = src;

    popup.style.display = "flex";

}


// ==========================================================
// CLOSE IMAGE
// ==========================================================

function closeImage() {

    const popup =
        document.getElementById("imagePopup");

    popup.style.display = "none";

}


// ==========================================================
// CLOSE WHEN CLICKING OUTSIDE IMAGE
// ==========================================================

document
    .getElementById("imagePopup")
    .addEventListener("click", function(e) {

        if (e.target.id === "imagePopup") {

            closeImage();

        }

    });


// ==========================================================
// CLOSE WITH ESC KEY
// ==========================================================

document.addEventListener("keydown", function(e) {

    if (e.key === "Escape") {

        closeImage();

    }

});