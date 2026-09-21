/* ==========================================================
                        DONOR SERVICES
                        USER MODULE
========================================================== */


/* ==========================================================
                    INITIALIZE
========================================================== */

document.addEventListener("DOMContentLoaded", function () {

    initializeDonorServices();

});


/* ==========================================================
                INITIALIZE DONOR SERVICES
========================================================== */

function initializeDonorServices() {

    const buttons =
        document.querySelectorAll(".register-button");


    buttons.forEach(function (button) {

        button.addEventListener("click", function () {

            const card =
                button.closest(".donor-card");


            if (!card) {

                return;

            }


            registerDonor(card);

        });

    });

}


/* ==========================================================
                    REGISTER DONOR
========================================================== */

function registerDonor(card) {

    const donorTitle =
        card.querySelector(".donor-title");


    if (!donorTitle) {

        return;

    }


    const donorType =
        donorTitle.textContent.trim();


    console.log(
        "Donor registration selected:",
        donorType
    );


    /*
    ----------------------------------------------------------
                    FUTURE BACKEND
    ----------------------------------------------------------

    When the donor registration page is ready,
    replace the alert with:

    window.location.href =
        "donor-registration.php?type=" +
        encodeURIComponent(donorType);

    ----------------------------------------------------------
    */


    alert(
        "Registration selected for " + donorType
    );

}