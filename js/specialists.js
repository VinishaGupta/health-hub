/* ==========================================================
                    DOCTORS
========================================================== */


/* ==========================================================
                    MOCK DATA FROM PHP
========================================================== */

const doctors = window.doctorData || [];


/* ==========================================================
                    ELEMENTS
========================================================== */

const track =
    document.getElementById("carousel-track");

const specialtyFilter =
    document.getElementById("specialty-filter");

const availabilityFilter =
    document.getElementById("availability-filter");

const doctorCount =
    document.getElementById("doctor-count");

const noResults =
    document.getElementById("no-results");

const previousButton =
    document.getElementById("carousel-prev");

const nextButton =
    document.getElementById("carousel-next");


let filteredDoctors = [...doctors];

let currentIndex = 0;

let autoplay = null;


/* ==========================================================
                    CREATE CARD
========================================================== */

function createDoctorCard(doctor) {

    const card =
        document.createElement("a");


    card.href =
        "doctor.php?id=" + doctor.id;


    card.className =
        "doctor-card";


    card.innerHTML = `

        <div class="doctor-main">

            <div class="doctor-image-wrapper">

                <img
                    class="doctor-image"
                    src="${doctor.image}"
                    alt="${doctor.name}"
                >

            </div>


            <div class="doctor-information">

                <div class="doctor-top-row">

                    <span class="doctor-specialty">
                        ${doctor.specialty}
                    </span>


                    <div class="doctor-rating">

                        <span
                            class="material-symbols-outlined"
                        >
                            star
                        </span>

                        <span>
                            ${doctor.rating}
                        </span>

                    </div>

                </div>


                <h3 class="doctor-name">
                    ${doctor.name}
                </h3>


                <p class="doctor-qualification">

                    ${doctor.qualification}

                    •

                    ${doctor.experience}

                </p>

            </div>

        </div>


        <div class="doctor-divider"></div>


        <div class="doctor-bottom">

            <div class="doctor-next">

                <span class="material-symbols-outlined">
                    event_available
                </span>

                <span>
                    Next: ${doctor.next}
                </span>

            </div>


            <span class="doctor-profile">

                View Profile

                <span
                    class="material-symbols-outlined"
                >
                    chevron_right
                </span>

            </span>

        </div>

    `;


    return card;

}


/* ==========================================================
                RENDER CAROUSEL
========================================================== */

function renderCarousel() {

    track.innerHTML = "";

    currentIndex = 0;


    filteredDoctors.forEach(
        function (doctor) {

            const item =
                document.createElement("div");


            item.className =
                "carousel-item";


            item.appendChild(
                createDoctorCard(doctor)
            );


            track.appendChild(item);

        }
    );


    updateCarousel();

}


/* ==========================================================
                UPDATE CAROUSEL
========================================================== */

function updateCarousel() {

    const items =
        Array.from(track.children);


    if (!items.length) {

        track.style.transform =
            "translateX(0)";

        return;

    }


    items.forEach(
        function (item, index) {

            item.classList.remove(
                "active",
                "prev-item",
                "next-item",
                "far-item"
            );


            if (
                index === currentIndex
            ) {

                item.classList.add(
                    "active"
                );

            }

            else if (
                index === currentIndex - 1
            ) {

                item.classList.add(
                    "prev-item"
                );

            }

            else if (
                index === currentIndex + 1
            ) {

                item.classList.add(
                    "next-item"
                );

            }

            else {

                item.classList.add(
                    "far-item"
                );

            }

        }
    );


    const itemWidth =
        items[0].getBoundingClientRect().width;


    const containerWidth =
        track.parentElement.getBoundingClientRect().width;


    const offset =
        (
            containerWidth / 2
        )
        -
        (
            itemWidth / 2
        )
        -
        (
            currentIndex * itemWidth
        );


    track.style.transform =
        `translateX(${offset}px)`;


    const disabled =
        filteredDoctors.length <= 1;


    previousButton.disabled =
        disabled;

    nextButton.disabled =
        disabled;


    previousButton.style.opacity =
        disabled ? "0.35" : "1";

    nextButton.style.opacity =
        disabled ? "0.35" : "1";

}


/* ==========================================================
                        NEXT
========================================================== */

function nextSlide() {

    if (
        filteredDoctors.length <= 1
    ) {

        return;

    }


    currentIndex =
        (
            currentIndex + 1
        )
        %
        filteredDoctors.length;


    updateCarousel();

}


/* ==========================================================
                    PREVIOUS
========================================================== */

function previousSlide() {

    if (
        filteredDoctors.length <= 1
    ) {

        return;

    }


    currentIndex =
        (
            currentIndex -
            1 +
            filteredDoctors.length
        )
        %
        filteredDoctors.length;


    updateCarousel();

}


/* ==========================================================
                    AUTOPLAY
========================================================== */

function startAutoplay() {

    stopAutoplay();


    if (
        filteredDoctors.length <= 1
    ) {

        return;

    }


    autoplay =
        setInterval(
            nextSlide,
            4500
        );

}


function stopAutoplay() {

    if (autoplay) {

        clearInterval(
            autoplay
        );

        autoplay = null;

    }

}


/* ==========================================================
                        FILTER
========================================================== */

function applyFilters() {

    const specialty =
        specialtyFilter.value;

    const availability =
        availabilityFilter.value;


    filteredDoctors =
        doctors.filter(
            function (doctor) {

                const specialtyMatch =
                    specialty === "all" ||
                    doctor.specialty === specialty;


                const availabilityMatch =
                    availability === "all" ||
                    doctor.availability === availability;


                return (
                    specialtyMatch &&
                    availabilityMatch
                );

            }
        );


    doctorCount.textContent =
        `Showing ${filteredDoctors.length} Specialist${filteredDoctors.length === 1 ? "" : "s"}`;


    if (
        filteredDoctors.length === 0
    ) {

        track.innerHTML = "";

        noResults.classList.remove(
            "hidden"
        );

        stopAutoplay();

        return;

    }


    noResults.classList.add(
        "hidden"
    );


    renderCarousel();

    startAutoplay();

}


/* ==========================================================
                    BUTTON EVENTS
========================================================== */

nextButton.addEventListener(
    "click",
    function () {

        nextSlide();

        startAutoplay();

    }
);


previousButton.addEventListener(
    "click",
    function () {

        previousSlide();

        startAutoplay();

    }
);


specialtyFilter.addEventListener(
    "change",
    applyFilters
);


availabilityFilter.addEventListener(
    "change",
    applyFilters
);


/* ==========================================================
                    PAUSE ON HOVER
========================================================== */

document
    .getElementById("carousel-container")
    .addEventListener(
        "mouseenter",
        stopAutoplay
    );


document
    .getElementById("carousel-container")
    .addEventListener(
        "mouseleave",
        startAutoplay
    );


/* ==========================================================
                        RESIZE
========================================================== */

window.addEventListener(
    "resize",
    function () {

        updateCarousel();

    }
);


/* ==========================================================
                    INITIAL LOAD
========================================================== */

applyFilters();