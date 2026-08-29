/* ==========================================================
                AVAILABLE FACILITIES
                USER MODULE
========================================================== */


/* ==========================================================
                INITIALIZE
========================================================== */

document.addEventListener("DOMContentLoaded", function () {

    initializeFacilities();

});



/* ==========================================================
                INITIALIZE FACILITIES
========================================================== */

function initializeFacilities() {

    const cards = document.querySelectorAll(".facility-card");


    cards.forEach(function (card) {

        card.addEventListener("click", function () {

            openFacility(card);

        });

    });

}



/* ==========================================================
                OPEN FACILITY
========================================================== */

function openFacility(card) {

    const name =
        card.querySelector("h3").textContent.trim();


    const description =
        card.querySelector("p").textContent.trim();


    console.log("Facility selected:", name);

    console.log("Description:", description);


    /*
    ----------------------------------------------------------
    FUTURE BACKEND
    ----------------------------------------------------------

    Later this can open a facility details page:

    window.location.href =
        "facility-details.php?id=" + card.dataset.id;

    ----------------------------------------------------------
    */

}