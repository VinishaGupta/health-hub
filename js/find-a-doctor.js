/* =========================================================
   FIND A DOCTOR
   Health Hub
========================================================= */

document.addEventListener("DOMContentLoaded", function () {

    /* =====================================================
       SEARCH INPUT FOCUS EFFECT
    ===================================================== */

    const searchInput =
        document.getElementById("doctorSearchInput");

    const searchIcon =
        document.getElementById("doctorSearchIcon");


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
       STICKY SIDEBAR SHADOW
    ===================================================== */

    const sidebar =
        document.querySelector(
            ".filter-sidebar"
        );


    function updateSidebarShadow() {

        if (!sidebar) {
            return;
        }


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


    window.addEventListener(
        "scroll",
        updateSidebarShadow
    );


    updateSidebarShadow();


    /* =====================================================
       DOCTOR CARD CLICK
    ===================================================== */

    const doctorCards =
        document.querySelectorAll(
            ".doctor-card"
        );


    doctorCards.forEach(
        function (card) {

            card.addEventListener(
                "click",
                function (event) {

                    const button =
                        event.target.closest(
                            ".view-doctor-btn"
                        );


                    if (!button) {
                        return;
                    }


                    /*
                     * Navigation is handled by
                     * the anchor tag.
                     */

                }
            );

        }
    );


    /* =====================================================
       FILTER FORM
    ===================================================== */

    const filterForm =
        document.getElementById(
            "doctorFilterForm"
        );


    if (filterForm) {

        filterForm.addEventListener(
            "submit",
            function () {

                /*
                 * PHP currently handles the mock
                 * filtering through GET parameters.
                 *
                 * No preventDefault() here.
                 */

            }
        );

    }


    /* =====================================================
       SEARCH SUBMIT
    ===================================================== */

    const searchForm =
        document.getElementById(
            "doctorSearchForm"
        );


    if (searchForm) {

        searchForm.addEventListener(
            "submit",
            function () {

                /*
                 * Search is submitted to PHP.
                 * Later this can be replaced by
                 * an AJAX/API request.
                 */

            }
        );

    }

});