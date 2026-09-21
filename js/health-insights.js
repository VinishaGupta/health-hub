/* =========================================================
   HEALTH INSIGHTS JS
   ========================================================= */

document.addEventListener("DOMContentLoaded", function () {

    /* =====================================================
       HEALTH CHECKUP TABLE ROW CLICK
       ===================================================== */

    const rows = document.querySelectorAll("tbody tr");

    rows.forEach(function (row) {

        row.addEventListener("click", function () {

            const firstCell = row.querySelector("td");

            if (!firstCell) {
                return;
            }

            const firstCellText = firstCell.textContent.trim();

            // Do not activate placeholder rows
            if (firstCellText === "---") {
                return;
            }

            row.classList.add("scale-[0.99]");

            setTimeout(function () {
                row.classList.remove("scale-[0.99]");
            }, 150);

        });

    });


    /* =====================================================
       HEADER SHADOW ON SCROLL
       ===================================================== */

    const header = document.querySelector("header");

    if (header) {

        function updateHeaderShadow() {

            if (window.scrollY > 10) {

                header.classList.remove("shadow-sm");
                header.classList.add("shadow-md");

            } else {

                header.classList.remove("shadow-md");
                header.classList.add("shadow-sm");

            }

        }

        window.addEventListener("scroll", updateHeaderShadow);

        updateHeaderShadow();
    }


    /* =====================================================
       HEALTH INSIGHT CARDS
       ===================================================== */

    const insightCards = document.querySelectorAll(
        ".health-insight-card"
    );

    insightCards.forEach(function (card) {

        card.addEventListener("click", function () {

            const link = card.querySelector("a");

            if (link) {
                // Navigation is handled by the anchor.
                return;
            }

        });

    });

});