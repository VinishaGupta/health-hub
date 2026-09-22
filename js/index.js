/* ==========================================================
                    INDEX / HOME JS
========================================================== */


/* =========================================
   ROW HEADINGS
========================================= */

const rowHeadings = [

    {
        title: "Top Hospitals",
        subtitle: "Featured hospitals and healthcare centers"
    },

    {
        title: "Hospitals across India",
        subtitle: "Hospitals and healthcare facilities across India"
    },

    {
        title: "Diagnostic centre and Pharmacy",
        subtitle: "Diagnosis centers and pharmacy"
    }

];


/* =========================================
   CREATE ROW HEADING
========================================= */

function createRowHeading(index) {

    const heading =
        document.createElement("div");

    heading.className =
        "row-heading";

    heading.innerHTML = `
        <div class="underline">
            ${rowHeadings[index].title}
        </div>
    `;

    return heading;
}


/* =========================================
   CREATE CAROUSEL ROWS
========================================= */

const firstCarousel =
    document.querySelector(".carousel-wrapper");

const firstCarouselRow =
    firstCarousel?.parentElement;

const carouselRows = [];


if (firstCarousel && firstCarouselRow) {

    firstCarousel
        .querySelectorAll(".row-heading")
        .forEach(el => el.remove());


    /* =========================================
       FIRST ROW
    ========================================= */

    firstCarousel.prepend(
        createRowHeading(0)
    );

    carouselRows.push(
        firstCarousel
    );


    let insertAfter =
        firstCarouselRow;


    /* =========================================
       SECOND + THIRD ROW
    ========================================= */

    for (
        let i = 1;
        i < rowHeadings.length;
        i++
    ) {

        const clone =
            firstCarousel.cloneNode(true);


        clone
            .querySelectorAll(".row-heading")
            .forEach(el => el.remove());


        clone.prepend(
            createRowHeading(i)
        );


        const sliderClone =
            clone.querySelector(".auto-scroll");

        const prevClone =
            clone.querySelector(".hospital-arrow-left");

        const nextClone =
            clone.querySelector(".hospital-arrow-right");


        clone.classList.add("mt-10");


        if (sliderClone) {

            sliderClone.id =
                `hospitalSlider${i + 1}`;

        }


        if (prevClone) {

            prevClone.id =
                `prevBtn${i + 1}`;

        }


        if (nextClone) {

            nextClone.id =
                `nextBtn${i + 1}`;

        }


        insertAfter.insertAdjacentElement(
            "afterend",
            clone
        );


        insertAfter =
            clone;


        carouselRows.push(
            clone
        );

    }

}


/* =========================================
   ARROW SCROLLING
========================================= */

const cardScrollAmount = 444;


carouselRows.forEach((row) => {

    const slider =
        row.querySelector(".auto-scroll");

    const nextBtn =
        row.querySelector(".hospital-arrow-right");

    const prevBtn =
        row.querySelector(".hospital-arrow-left");


    let manualOffset = 0;

    let moveTimer;


    function moveHospitalSlider(direction) {

        if (!slider) {
            return;
        }


        clearTimeout(moveTimer);


        slider.classList.add(
            "is-moving"
        );


        manualOffset +=
            direction * cardScrollAmount;


        slider.style.setProperty(
            "--manual-offset",
            `${manualOffset}px`
        );


        moveTimer =
            setTimeout(() => {

                slider.classList.remove(
                    "is-moving"
                );

            }, 650);

    }


    /* NEXT */

    nextBtn?.addEventListener(
        "click",
        () => {

            moveHospitalSlider(-1);

        }
    );


    /* PREVIOUS */

    prevBtn?.addEventListener(
        "click",
        () => {

            moveHospitalSlider(1);

        }
    );

});


/* =========================================
   STICKY HEADER SHADOW
========================================= */

window.addEventListener(
    "scroll",
    () => {

        const nav =
            document.querySelector("nav");


        if (!nav) {
            return;
        }


        if (window.scrollY > 20) {

            nav.classList.add(
                "shadow-md"
            );

            nav.classList.remove(
                "shadow-sm"
            );

        } else {

            nav.classList.add(
                "shadow-sm"
            );

            nav.classList.remove(
                "shadow-md"
            );

        }

    }
);