/* ==========================================================
                    SERVICES JS
========================================================== */


/* ==========================================================
                    BUTTON MICRO-INTERACTIONS
========================================================== */

document
    .querySelectorAll("button")
    .forEach((button) => {

        button.addEventListener(
            "mousedown",
            () => {

                button.classList.add(
                    "scale-95"
                );

            }
        );


        button.addEventListener(
            "mouseup",
            () => {

                button.classList.remove(
                    "scale-95"
                );

            }
        );


        button.addEventListener(
            "mouseleave",
            () => {

                button.classList.remove(
                    "scale-95"
                );

            }
        );

    });


/* ==========================================================
                    NAVIGATION SCROLL EFFECT
========================================================== */

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

        } else {

            nav.classList.remove(
                "shadow-md"
            );

        }

    }
);


/* ==========================================================
                    SERVICE CARD DATA
========================================================== */

const serviceCards =
    document.querySelectorAll(
        ".service-card"
    );


/*
|--------------------------------------------------------------------------
| Service card click handler
|--------------------------------------------------------------------------
| Currently mock/front-end only.
| Database/API integration can be added later.
|--------------------------------------------------------------------------
*/

serviceCards.forEach(
    (card) => {

        card.addEventListener(
            "click",
            () => {

                const serviceId =
                    card.dataset.serviceId;


                console.log(
                    "Selected Service ID:",
                    serviceId
                );

            }
        );

    }
);