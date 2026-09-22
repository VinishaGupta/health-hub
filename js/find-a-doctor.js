/* =========================================================
   FIND A DOCTOR
========================================================= */

document.addEventListener("DOMContentLoaded", function () {

    /* =====================================================
       SEARCH BAR FOCUS EFFECT
    ===================================================== */

    const searchInput =
        document.querySelector(
            'input[type="text"]'
        );

    const searchIcon =
        document.querySelector(
            '[data-icon="search"]'
        );


    if (searchInput && searchIcon) {

        searchInput.addEventListener(
            "focus",
            function () {

                searchIcon.classList.add(
                    "text-secondary"
                );

            }
        );


        searchInput.addEventListener(
            "blur",
            function () {

                searchIcon.classList.remove(
                    "text-secondary"
                );

            }
        );

    }


    /* =====================================================
       TOGGLE STICKY SIDEBAR SHADOW ON SCROLL
    ===================================================== */

    const sidebar =
        document.querySelector(
            "aside > div"
        );


    if (sidebar) {

        window.addEventListener(
            "scroll",
            function () {

                if (window.scrollY > 200) {

                    sidebar.classList.add(
                        "shadow-md"
                    );

                } else {

                    sidebar.classList.remove(
                        "shadow-md"
                    );

                }

            }
        );

    }

});