/* ==========================================================
                    HOSPITAL SCHEDULE
                    USER MODULE
========================================================== */


/* ==========================================================
                    INITIALIZE
========================================================== */

document.addEventListener("DOMContentLoaded", function () {

    initializeSchedule();

});


/* ==========================================================
                    INITIALIZE SCHEDULE
========================================================== */

function initializeSchedule() {

    const timingRows =
        document.querySelectorAll(".timing-row");


    timingRows.forEach(function (row) {

        row.addEventListener("click", function () {

            selectSchedule(row);

        });

    });


}


/* ==========================================================
                    SELECT SCHEDULE
========================================================== */

function selectSchedule(row) {

    const doctor =
        row.querySelector(".timing-name");

    const time =
        row.querySelector(".time-badge");


    if (!doctor || !time) {
        return;
    }


    const doctorName =
        doctor.textContent.trim();

    const timing =
        time.textContent.trim();


    console.log(
        "Doctor selected:",
        doctorName
    );


    console.log(
        "Available timing:",
        timing
    );


    /*
    ----------------------------------------------------------
                    FUTURE BACKEND
    ----------------------------------------------------------

    Later this can open the OPD booking page:

    window.location.href =
        "opd-booking.php?doctor_id=" +
        row.dataset.doctorId;

    ----------------------------------------------------------
    */

}