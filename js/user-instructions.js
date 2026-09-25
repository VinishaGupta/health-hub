/* ==========================================================
        USER INSTRUCTIONS / INFORMATION POPUP
========================================================== */

(function () {

    "use strict";


    /* ======================================================
                    MOCK DATA FOR NOW
    ======================================================= */

    const mockData = {

        update_date: "Last update Date: 18.09.2026",

        title: "*Informations & Instructions to user.*",

        instructions: [

            "This is a healthcare discovery platform.",

            "Search hospitals and doctors according to your location.",

            "Check available medical services before visiting.",

            "Hospital information may change from time to time.",

            "In an emergency, contact the appropriate emergency service."

        ],

        promise_text:
            "I read and understand all above Informations & Instructions. I promised.....",

        continue_text:
            "Promised & continued"

    };


    /* ======================================================
                    ELEMENTS
    ======================================================= */

    const overlay =
        document.getElementById(
            "userInstructionsOverlay"
        );

    const dateElement =
        document.getElementById(
            "userInstructionsDate"
        );

    const titleElement =
        document.getElementById(
            "userInstructionsTitle"
        );

    const listElement =
        document.getElementById(
            "userInstructionsList"
        );

    const promiseElement =
        document.getElementById(
            "userInstructionsPromise"
        );

    const continueButton =
        document.getElementById(
            "userInstructionsContinue"
        );

    const continueText =
        document.getElementById(
            "userInstructionsContinueText"
        );


    /* ======================================================
                    SAFETY CHECK
    ======================================================= */

    if (!overlay) {
        return;
    }


    /* ======================================================
                    DISPLAY DATA
    ======================================================= */

    function displayInformation(data) {

        /* DATE */

        dateElement.textContent =
            data.update_date || "";


        /* TITLE */

        titleElement.textContent =
            data.title || "";


        /* INSTRUCTIONS */

        listElement.innerHTML = "";


        if (
            Array.isArray(
                data.instructions
            )
        ) {

            data.instructions.forEach(
                function (instruction) {

                    const li =
                        document.createElement("li");

                    li.textContent =
                        instruction;

                    listElement.appendChild(
                        li
                    );

                }
            );

        }


        /* PROMISE */

        promiseElement.textContent =
            data.promise_text || "";


        /* CONTINUE BUTTON */

        continueText.textContent =
            data.continue_text || "";

    }


    /* ======================================================
                    HIDE POPUP
    ======================================================= */

    function hidePopup() {

        overlay.classList.add(
            "is-hidden"
        );


        setTimeout(function () {

            overlay.remove();

        }, 300);

    }


    /* ======================================================
                    CONTINUE BUTTON
    ======================================================= */

    if (continueButton) {

        continueButton.addEventListener(
            "click",
            function () {

                hidePopup();

            }
        );

    }


    /* ======================================================
                    ESC KEY
    ======================================================= */

    document.addEventListener(
        "keydown",
        function (event) {

            if (
                event.key === "Escape"
            ) {

                hidePopup();

            }

        }
    );


    /* ======================================================
                    LOAD MOCK DATA
    ======================================================= */

    displayInformation(
        mockData
    );


})();