/* =========================================================
   DOCTOR PROFILE
   Health Hub
========================================================= */

document.addEventListener("DOMContentLoaded", function () {

    /* =====================================================
       HEADER SCROLL EFFECT
    ===================================================== */

    const header =
        document.querySelector("header");


    function updateHeaderShadow() {

        if (!header) {
            return;
        }


        if (window.scrollY > 20) {

            header.classList.add("shadow-md");

        } else {

            header.classList.remove("shadow-md");

        }
    }


    window.addEventListener(
        "scroll",
        updateHeaderShadow
    );


    updateHeaderShadow();


    /* =====================================================
       VIEW AVAILABLE SLOTS
    ===================================================== */

    const viewSlotsButton =
        document.querySelector(
            ".view-slots-btn"
        );


    if (viewSlotsButton) {

        viewSlotsButton.addEventListener(
            "click",
            function () {

                /*
                 * Future functionality:
                 * Load doctor's available OPD
                 * slots from backend/API.
                 */

                console.log(
                    "View Available Slots clicked"
                );

            }
        );
    }


    /* =====================================================
       AFFILIATION CARDS
    ===================================================== */

    const affiliationCards =
        document.querySelectorAll(
            ".affiliation-card"
        );


    affiliationCards.forEach(
        function (card) {

            card.addEventListener(
                "click",
                function () {

                    console.log(
                        "Medical affiliation selected"
                    );

                }
            );

        }
    );


    /* =====================================================
       EMERGENCY FAB
    ===================================================== */

    const emergencyButton =
        document.querySelector(
            ".emergency-fab"
        );


    if (emergencyButton) {

        emergencyButton.addEventListener(
            "click",
            function () {

                console.log(
                    "Emergency button clicked"
                );

            }
        );
    }

});