/* ==========================================================
                        HOME PAGE JS
========================================================== */


/* ==========================================================
                    HEADER SCROLL EFFECT
========================================================== */

document.addEventListener("DOMContentLoaded", () => {

    const header = document.querySelector("nav");

    if (!header) {
        return;
    }

    window.addEventListener("scroll", () => {

        if (window.scrollY > 20) {

            header.classList.add("shadow-md");
            header.classList.remove("shadow-sm");

        } else {

            header.classList.remove("shadow-md");
            header.classList.add("shadow-sm");

        }

    });

});


/* ==========================================================
                    HOSPITAL IMAGE SLIDER
========================================================== */

let currentSlide = 0;


/* ----------------------------------------------------------
   Initialize Slider
---------------------------------------------------------- */

window.addEventListener("load", () => {

    const slider =
        document.getElementById("hospitalImages");

    if (!slider) {
        return;
    }

    const totalSlides =
        slider.children.length;

    if (totalSlides === 0) {
        return;
    }


    /* ------------------------------------------------------
       Show Slide
    ------------------------------------------------------ */

    function showSlide() {

        slider.style.transform =
            `translateX(-${currentSlide * 100}%)`;

    }


    /* ------------------------------------------------------
       Next Slide
    ------------------------------------------------------ */

    window.nextSlide = function () {

        currentSlide++;

        if (currentSlide >= totalSlides) {

            currentSlide = 0;

        }

        showSlide();

    };


    /* ------------------------------------------------------
       Previous Slide
    ------------------------------------------------------ */

    window.prevSlide = function () {

        currentSlide--;

        if (currentSlide < 0) {

            currentSlide =
                totalSlides - 1;

        }

        showSlide();

    };


    /* ------------------------------------------------------
       Auto Slide
    ------------------------------------------------------ */

    setInterval(() => {

        window.nextSlide();

    }, 3000);

});


/* ==========================================================
                    HOSPITAL NAME
                LANGUAGE ROTATION
========================================================== */

/*
|--------------------------------------------------------------------------
| MOCK DATA ONLY
|--------------------------------------------------------------------------
| Later this data can come from the database.
|--------------------------------------------------------------------------
*/

const hospitalNames = [

    "City Care Hospital",

    "सिटी केयर हॉस्पिटल",

    "সিটি কেয়ার হাসপাতাল"

];


let languageIndex = 0;


/* ==========================================================
                    HOSPITAL NAME ROTATION
========================================================== */

document.addEventListener("DOMContentLoaded", () => {

    const hospitalNameElement =
        document.getElementById("hospitalName");


    if (!hospitalNameElement) {
        return;
    }


    setInterval(() => {

        hospitalNameElement.style.opacity = "0";


        setTimeout(() => {

            languageIndex++;


            if (
                languageIndex >=
                hospitalNames.length
            ) {

                languageIndex = 0;

            }


            hospitalNameElement.innerText =
                hospitalNames[languageIndex];


            hospitalNameElement.style.opacity = "1";

        }, 400);

    }, 2500);

});