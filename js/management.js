/* ==========================================================
                    MANAGEMENT BODY
                    USER MODULE
========================================================== */


/* ==========================================================
                    INITIALIZE
========================================================== */

document.addEventListener("DOMContentLoaded", function () {

    initializeManagement();

});


/* ==========================================================
                INITIALIZE MANAGEMENT
========================================================== */

function initializeManagement() {

    initializeContactButtons();

    initializeEmptyMembers();

}


/* ==========================================================
                    CONTACT BUTTONS
========================================================== */

function initializeContactButtons() {

    const contactButtons =
        document.querySelectorAll(".contact-button");


    contactButtons.forEach(function (button) {

        button.addEventListener("click", function () {

            toggleContact(button);

        });

    });

}


/* ==========================================================
                    TOGGLE CONTACT
========================================================== */

function toggleContact(button) {

    const phone =
        button.dataset.phone;


    if (!phone) {

        return;

    }


    const isVisible =
        button.dataset.visible === "true";


    if (isVisible) {

        button.textContent =
            "View Contact";

        button.dataset.visible =
            "false";

    } else {

        button.textContent =
            phone;

        button.dataset.visible =
            "true";

    }

}


/* ==========================================================
                    EMPTY MEMBER CARDS
========================================================== */

function initializeEmptyMembers() {

    const emptyMembers =
        document.querySelectorAll(".empty-member");


    emptyMembers.forEach(function (member) {

        member.addEventListener("click", function () {

            const type =
                member.dataset.type || "member";


            console.log(
                "Add " + type + " selected."
            );


            /*
            --------------------------------------------------
                        FUTURE BACKEND
            --------------------------------------------------

            Later this can open a page such as:

            window.location.href =
                "management-registration.php?type=" +
                encodeURIComponent(type);

            --------------------------------------------------
            */

        });

    });

}