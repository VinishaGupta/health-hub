/* ==========================================================
                    MY HEALTH JS
========================================================== */


/* ==========================================================
                TABLE ROW MICRO-INTERACTION
========================================================== */

document.querySelectorAll("tr").forEach((row) => {

    row.addEventListener("click", () => {

        const firstCell = row.querySelector("td");

        if (
            firstCell &&
            firstCell.innerText.trim() !== "---"
        ) {

            row.classList.add("scale-[0.99]");

            setTimeout(() => {

                row.classList.remove("scale-[0.99]");

            }, 150);

        }

    });

});


/* ==========================================================
                    HEADER SHADOW
========================================================== */

window.addEventListener("scroll", () => {

    const header =
        document.querySelector("header");

    if (!header) {
        return;
    }

    if (window.scrollY > 20) {

        header.classList.add("shadow-md");

        header.classList.remove("shadow-sm");

    } else {

        header.classList.remove("shadow-md");

        header.classList.add("shadow-sm");

    }

});