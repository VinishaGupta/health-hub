/* ==========================================================
                    OPD BOOKING JS
========================================================== */


/* ==========================================================
                    ELEMENTS
========================================================== */

const overlay =
    document.getElementById("modalOverlay");

const confirmModal =
    document.getElementById("confirmModal");

const successModal =
    document.getElementById("successModal");

const timeDisplay =
    document.getElementById("selectedTimeDisplay");

const toast =
    document.getElementById("toast");

const selectedDateElements =
    document.querySelectorAll("[data-selected-date]");

const selectedDateLabel =
    document.getElementById("selectedDateLabel");

const appointmentDateInput =
    document.getElementById("appointmentDateInput");

const previousDateButton =
    document.getElementById("previousDateButton");

const nextDateButton =
    document.getElementById("nextDateButton");


/* ==========================================================
                    DATE
========================================================== */

const startingDate =
    new Date(2026, 4, 17);

let selectedDate =
    new Date(startingDate);


/* ==========================================================
                    DATE FORMAT
========================================================== */

function formatDisplayDate(date) {

    return date.toLocaleDateString(
        "en-GB",
        {
            day: "numeric",
            month: "long",
            year: "numeric"
        }
    );

}


function formatInputDate(date) {

    const year =
        date.getFullYear();

    const month =
        String(
            date.getMonth() + 1
        ).padStart(2, "0");

    const day =
        String(
            date.getDate()
        ).padStart(2, "0");

    return `${year}-${month}-${day}`;

}


function isSameDate(firstDate, secondDate) {

    return (
        firstDate.getFullYear() ===
        secondDate.getFullYear() &&

        firstDate.getMonth() ===
        secondDate.getMonth() &&

        firstDate.getDate() ===
        secondDate.getDate()
    );

}


/* ==========================================================
                    SET DATE
========================================================== */

function setSelectedDate(date) {

    selectedDate =
        new Date(
            date.getFullYear(),
            date.getMonth(),
            date.getDate()
        );


    selectedDateElements.forEach(
        function (element) {

            element.innerText =
                formatDisplayDate(
                    selectedDate
                );

        }
    );


    selectedDateLabel.innerText =
        isSameDate(
            selectedDate,
            startingDate
        )
            ? "Today"
            : "Selected Date";


    appointmentDateInput.value =
        formatInputDate(
            selectedDate
        );

}


/* ==========================================================
                    MOVE DATE
========================================================== */

function moveSelectedDate(dayOffset) {

    const nextDate =
        new Date(selectedDate);

    nextDate.setDate(
        nextDate.getDate() + dayOffset
    );

    setSelectedDate(nextDate);

}


previousDateButton.addEventListener(
    "click",
    function () {

        moveSelectedDate(-1);

    }
);


nextDateButton.addEventListener(
    "click",
    function () {

        moveSelectedDate(1);

    }
);


appointmentDateInput.addEventListener(
    "change",
    function (event) {

        if (!event.target.value) {
            return;
        }

        setSelectedDate(
            new Date(
                `${event.target.value}T00:00:00`
            )
        );

    }
);


/* ==========================================================
                    INITIAL DATE
========================================================== */

setSelectedDate(selectedDate);


/* ==========================================================
                    CALENDAR
========================================================== */

appointmentDateInput.addEventListener(
    "click",
    function () {

        try {

            if (
                typeof appointmentDateInput.showPicker ===
                "function"
            ) {

                appointmentDateInput.showPicker();

            }

        } catch (error) {

            console.error(error);

        }

    }
);


/* ==========================================================
                    BOOKING MODAL
========================================================== */

function openBookingModal(time) {

    timeDisplay.innerText =
        time;


    overlay.classList.remove(
        "hidden"
    );


    setTimeout(
        function () {

            overlay.classList.remove(
                "opacity-0"
            );


            confirmModal.classList.remove(
                "hidden"
            );


            setTimeout(
                function () {

                    confirmModal.classList.remove(
                        "scale-95"
                    );

                },
                10
            );

        },
        10
    );

}


/* ==========================================================
                    CLOSE MODALS
========================================================== */

function closeModals() {

    if (
        !confirmModal.classList.contains(
            "hidden"
        ) &&
        successModal.classList.contains(
            "hidden"
        )
    ) {

        showToast();

    }


    confirmModal.classList.add(
        "scale-95"
    );

    successModal.classList.add(
        "scale-95"
    );

    overlay.classList.add(
        "opacity-0"
    );


    setTimeout(
        function () {

            overlay.classList.add(
                "hidden"
            );

            confirmModal.classList.add(
                "hidden"
            );

            successModal.classList.add(
                "hidden"
            );

        },
        300
    );

}


/* ==========================================================
                    SUCCESS MODAL
========================================================== */

function showSuccessModal() {

    confirmModal.classList.add(
        "scale-95"
    );


    setTimeout(
        function () {

            confirmModal.classList.add(
                "hidden"
            );

            successModal.classList.remove(
                "hidden"
            );


            setTimeout(
                function () {

                    successModal.classList.remove(
                        "scale-95"
                    );

                },
                10
            );

        },
        300
    );

}


/* ==========================================================
                    TOAST
========================================================== */

function showToast() {

    toast.classList.remove(
        "translate-y-20",
        "opacity-0"
    );


    setTimeout(
        function () {

            toast.classList.add(
                "translate-y-20",
                "opacity-0"
            );

        },
        3000
    );

}


/* ==========================================================
                    SHIFT TOGGLE
========================================================== */

function toggleShift(id) {

    const section =
        document.getElementById(id);

    const icon =
        document.getElementById(
            "icon-" + id
        );


    if (!section || !icon) {
        return;
    }


    section.classList.toggle(
        "hidden"
    );


    if (
        section.classList.contains(
            "hidden"
        )
    ) {

        icon.innerHTML =
            "expand_more";

    } else {

        icon.innerHTML =
            "expand_less";

    }

}


/* ==========================================================
                    BOOKING DETAILS
========================================================== */

function openBookingDetails(shift) {

    const bookingTime =
        document.getElementById(
            "bookingTime"
        );

    const bookingOpdTime =
        document.getElementById(
            "bookingOpdTime"
        );

    const status =
        document.getElementById(
            "bookingStatus"
        );

    const modal =
        document.getElementById(
            "bookingDetailsModal"
        );


    if (shift === 1) {

        bookingTime.innerHTML =
            "10:00 – 13:00";

        bookingOpdTime.innerHTML =
            "13:00 - 15:00";

        status.innerHTML =
            "Booking Open";

        status.className =
            "text-green-600 font-semibold";

    }


    else if (shift === 2) {

        bookingTime.innerHTML =
            "10:00 – 13:30 – On dates 23/07/2026, 24/07/2026, 25/07/2026...";

        bookingOpdTime.innerHTML =
            "16:00 - 20:00";

        status.innerHTML =
            "Booking Closed";

        status.className =
            "text-red-600 font-semibold";

    }


    else if (shift === 3) {

        bookingTime.innerHTML =
            "24 Hours – All day";

        bookingOpdTime.innerHTML =
            "17:00 - 19:00";

        status.innerHTML =
            "Booking Full";

        status.className =
            "text-slate-600 font-semibold";

    }


    else if (shift === 4) {

        bookingTime.innerHTML =
            "10:00 – 13:30 – All day";

        bookingOpdTime.innerHTML =
            "19:00 - 21:00";

        status.innerHTML =
            "Booking Open";

        status.className =
            "text-green-600 font-semibold";

    }


    modal.classList.remove(
        "hidden"
    );

    modal.classList.add(
        "flex"
    );

}


function closeBookingDetails() {

    const modal =
        document.getElementById(
            "bookingDetailsModal"
        );


    modal.classList.add(
        "hidden"
    );

    modal.classList.remove(
        "flex"
    );

}


/* ==========================================================
                    CLOSE DETAILS
========================================================== */

document
    .getElementById(
        "bookingDetailsModal"
    )
    .addEventListener(
        "click",
        function (event) {

            if (
                event.target === this
            ) {

                closeBookingDetails();

            }

        }
    );