<?php

/*
|--------------------------------------------------------------------------
| HEALTH HUB - INDEX PAGE
|--------------------------------------------------------------------------
| MOCK DATA ONLY
| Later this data will come from database tables.
|--------------------------------------------------------------------------
*/


/* ==========================================================
                    MOCK HOSPITAL DATA
========================================================== */

$hospitals = [

    [
        "name" => "Silver Line Clinics",
        "type" => "Clinic • Private",
        "location" => "Sadar, Nagpur",
        "rating" => "4.5",
        "doctors" => "15+",
        "image" => "../best-hospital-in-bangalore.jpg",
        "image_alt" => "Modern multi-story clinic building with glass windows and professional branding in Nagpur."
    ],

    [
        "name" => "Life Care Multi Speciality",
        "type" => "Multi Speciality",
        "location" => "Hinjewadi, Pune",
        "rating" => "4.7",
        "doctors" => "80+",
        "image" => "../best-hospital-in-bangalore.jpg",
        "image_alt" => "Large suburban multi-speciality hospital complex with a dedicated trauma center in Pune."
    ],

    [
        "name" => "NeuroCare Wellness",
        "type" => "Neurology • Private",
        "location" => "Colaba, Mumbai",
        "rating" => "4.8",
        "doctors" => "25+",
        "image" => "../best-hospital-in-bangalore.jpg",
        "image_alt" => "Boutique neuro-care medical facility with advanced technological facade."
    ],

    [
        "name" => "Global Dental Hub",
        "type" => "Dental • Private",
        "location" => "Trimurti Nagar, Nagpur",
        "rating" => "4.4",
        "doctors" => "10+",
        "image" => "../best-hospital-in-bangalore.jpg",
        "image_alt" => "Contemporary dental surgical center."
    ],

    [
        "name" => "Unity Childrens Hospital",
        "type" => "Pediatrics • Private",
        "location" => "Wakad, Pune",
        "rating" => "4.9",
        "doctors" => "40+",
        "image" => "../best-hospital-in-bangalore.jpg",
        "image_alt" => "Professional pediatric hospital."
    ],

    [
        "name" => "Reliance Care Network",
        "type" => "Multi Speciality",
        "location" => "Powai, Mumbai",
        "rating" => "4.7",
        "doctors" => "200+",
        "image" => "../best-hospital-in-bangalore.jpg",
        "image_alt" => "Corporate multi-speciality hospital."
    ]

];


/*
|--------------------------------------------------------------------------
| DUPLICATE CARDS FOR CONTINUOUS CAROUSEL
|--------------------------------------------------------------------------
*/

$carouselHospitals = array_merge(
    $hospitals,
    $hospitals
);

?>


<!DOCTYPE html>

<html
    class="scroll-smooth"
    lang="en"
>

<head>

    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Health Hub
    </title>


    <!-- ======================================================
                            TAILWIND
    ======================================================= -->

    <script
        src="https://cdn.tailwindcss.com?plugins=forms,container-queries"
    ></script>


    <!-- ======================================================
                            FONTS
    ======================================================= -->

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet"
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet"
    >


    <!-- ======================================================
                        TAILWIND CONFIG
    ======================================================= -->

    <script>

        tailwind.config = {

            darkMode: "class",

            theme: {

                extend: {

                    colors: {

                        "tertiary-container": "#b51220",
                        "outline-variant": "#c3c6d6",
                        "secondary-container": "#6ae1ff",
                        "on-tertiary": "#ffffff",
                        "surface-container-highest": "#d3e4fe",
                        "primary-fixed": "#dae2ff",
                        "primary": "#003d9b",
                        "inverse-primary": "#b2c5ff",
                        "secondary": "#00687a",
                        "on-primary": "#ffffff",
                        "surface-bright": "#f8f9ff",
                        "surface-container": "#e5eeff",
                        "error": "#ba1a1a",
                        "on-error": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "surface-dim": "#cbdbf5",
                        "surface": "#f8f9ff",
                        "on-secondary-fixed-variant": "#004e5d",
                        "on-primary-fixed-variant": "#0040a2",
                        "inverse-on-surface": "#eaf1ff",
                        "primary-fixed-dim": "#b2c5ff",
                        "on-error-container": "#93000a",
                        "on-background": "#0b1c30",
                        "tertiary-fixed-dim": "#ffb3ae",
                        "outline": "#737685",
                        "on-surface-variant": "#434654",
                        "on-primary-fixed": "#001848",
                        "tertiary": "#8c0013",
                        "surface-variant": "#d3e4fe",
                        "surface-tint": "#0c56d0",
                        "secondary-fixed-dim": "#5dd6f3",
                        "on-tertiary-fixed": "#410004",
                        "on-surface": "#0b1c30",
                        "on-secondary": "#ffffff",
                        "on-tertiary-container": "#ffc5c0",
                        "on-secondary-container": "#006374",
                        "surface-container-low": "#eff4ff",
                        "secondary-fixed": "#adecff",
                        "surface-container-high": "#dce9ff",
                        "on-tertiary-fixed-variant": "#930014",
                        "on-secondary-fixed": "#001f26",
                        "error-container": "#ffdad6",
                        "tertiary-fixed": "#ffdad7",
                        "primary-container": "#0052cc",
                        "background": "#f8f9ff",
                        "on-primary-container": "#c4d2ff",
                        "inverse-surface": "#213145"
                    },


                    borderRadius: {

                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"

                    },


                    spacing: {

                        "gutter": "24px",
                        "base": "8px",
                        "margin-mobile": "16px",
                        "margin-desktop": "40px",
                        "container-max": "1280px"

                    },


                    fontFamily: {

                        "label-sm": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-lg": ["Inter"],
                        "display-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-md": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-lg-mobile": ["Inter"]

                    },


                    fontSize: {

                        "headline-lg-mobile": [
                            "24px",
                            {
                                lineHeight: "32px",
                                fontWeight: "600"
                            }
                        ],

                        "headline-md": [
                            "24px",
                            {
                                lineHeight: "32px",
                                fontWeight: "600"
                            }
                        ],

                        "display-lg": [
                            "48px",
                            {
                                lineHeight: "56px",
                                letterSpacing: "-0.02em",
                                fontWeight: "700"
                            }
                        ],

                        "label-md": [
                            "14px",
                            {
                                lineHeight: "20px",
                                letterSpacing: "0.01em",
                                fontWeight: "500"
                            }
                        ],

                        "body-lg": [
                            "18px",
                            {
                                lineHeight: "28px",
                                fontWeight: "400"
                            }
                        ],

                        "label-sm": [
                            "12px",
                            {
                                lineHeight: "16px",
                                fontWeight: "600"
                            }
                        ],

                        "headline-lg": [
                            "32px",
                            {
                                lineHeight: "40px",
                                letterSpacing: "-0.01em",
                                fontWeight: "600"
                            }
                        ],

                        "body-md": [
                            "16px",
                            {
                                lineHeight: "24px",
                                fontWeight: "400"
                            }
                        ]

                    }

                }

            }

        };

    </script>


    <!-- ======================================================
                            CSS
    ======================================================= -->

    <link
        rel="stylesheet"
        href="../css/index.css?v=2"
    >

</head>


<body
    class="bg-background text-on-background font-body-md overflow-x-hidden leaf-pattern"
>


<!-- ==========================================================
                        TOP NAVIGATION
========================================================== -->

<header
    class="bg-white/70 dark:bg-on-background/70 backdrop-blur-md shadow-sm sticky top-0 z-50"
>

    <nav
        class="relative flex justify-between items-center px-margin-mobile md:px-margin-desktop h-20 w-full"
    >


        <!-- ==================================================
                            HEALTH HUB
        =================================================== -->

        <a
            href="./home.php"
            class="font-headline-md font-bold text-primary dark:text-primary-fixed flex items-center gap-2"
        >

            <span
                class="material-symbols-outlined"
                style="font-variation-settings: 'FILL' 1"
            >
                medical_services
            </span>

            <span>
                Health Hub
            </span>

        </a>


        <!-- ==================================================
                            HOME
        =================================================== -->

        <div
            class="hidden md:flex items-center gap-8 absolute left-1/2 -translate-x-1/2"
        >

            <a
                href="#"
                class="text-primary dark:text-primary-fixed font-bold border-b-2 border-primary transition-colors duration-200 py-1"
            >
                Home
            </a>

        </div>


        <!-- ==================================================
                        HEALTH INSIGHTS
        =================================================== -->

        <a
            href="health-insights/index.php"
            class="ml-auto border-2 border-[#159F00] text-[#159F00] px-8 py-3 rounded-xl font-bold hover:bg-[#107800] hover:text-white transition-all duration-300"
        >
            Health Insights
        </a>

    </nav>

</header>


<main>


<!-- ==========================================================
                            HERO
========================================================== -->

<section
    class="relative min-h-[870px] flex items-center overflow-hidden"
>

    <!-- BACKGROUND IMAGE -->

    <div
        class="absolute inset-0 z-0"
    >

        <img
            class="w-full h-full object-cover"
            src="../image.png"
            alt="Hospital"
        >

        <div
            class="absolute inset-0 bg-gradient-to-r from-surface/40 via-surface/10 to-transparent"
        ></div>

    </div>


    <!-- HERO CONTENT -->

    <div
        class="relative z-10 w-full max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop"
    >

        <div
            class="max-w-2xl space-y-8"
        >


            <!-- BADGE -->

            <div
                class="inline-flex items-center gap-2 px-4 py-2 bg-secondary-container/30 border border-secondary/20 rounded-full text-secondary font-label-sm"
            >

                <span
                    class="material-symbols-outlined text-[16px]"
                >
                    eco
                </span>

                A safe healthcare place for every generation

            </div>


            <!-- TITLE -->

            <h1
                class="text-display-lg font-display-lg text-primary tracking-tight"
            >

                Health Hub -

                <br>

                <span class="text-on-surface">
                    Caring For Every Life
                </span>

            </h1>


            <!-- DESCRIPTION -->

            <p
                class="text-body-lg font-body-lg text-on-surface-variant max-w-lg"
            >

                Advanced healthcare with compassion, comfort, and trust.
                Experience a new standard of medical excellence designed
                around your well-being.

            </p>

        </div>

    </div>

</section>



<!-- ==========================================================
                    HOSPITAL FINDER
========================================================== -->

<section
    class="py-16 px-margin-mobile md:px-margin-desktop w-full"
>


    <!-- SECTION HEADING -->

    <header
        class="mb-12 border-l-4 border-primary pl-6"
    >

        <h1
            class="text-headline-lg font-headline-lg text-primary mb-2"
        >
            Find Hospitals Near You
        </h1>

        <p
            class="text-body-lg text-on-surface-variant max-w-2xl"
        >
            Explore trusted hospitals and healthcare centers
            across Maharashtra with 24/7 medical support.
        </p>

    </header>



    <!-- ======================================================
                        FIND A DOCTOR
    ======================================================= -->

    <a
        href="./specialists.php"
        class="bg-[#006878] text-white border border-[#006878]/20 px-[50px] py-4 rounded-full text-label-md font-bold hover:bg-[#00889b] hover:text-white transition-all shadow-medical transform hover:-translate-y-1 w-fit mr-auto text-center block my-6"
    >
        Find a Doctor
    </a>



    <!-- ======================================================
                            SEARCH
    ======================================================= -->

    <section
        class="mb-10 bg-white p-6 rounded-2xl shadow-sm border border-outline-variant/30 flex flex-col md:flex-row gap-4 items-center"
    >

        <div
            class="relative flex-grow w-full"
        >

            <span
                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline"
            >
                search
            </span>


            <input
                class="w-full pl-12 pr-4 py-3 bg-surface-container-low border-none rounded-xl focus:ring-2 focus:ring-primary placeholder:text-outline text-body-md transition-all"
                placeholder="Hospital Name, Location, Speciality, Services, Doctor's Name..."
                type="text"
            >

        </div>


        <button
            class="bg-primary-container text-on-primary-container px-6 py-3 rounded-xl font-label-md flex items-center gap-2 hover:opacity-90 transition-all"
            type="button"
        >

            <span
                class="material-symbols-outlined text-[20px]"
            >
                filter_list
            </span>

            Search

        </button>

    </section>



    <!-- ======================================================
                        HOSPITAL CAROUSEL
    ======================================================= -->

    <div
        class="flex gap-gutter"
    >

        <div
            class="flex-grow relative carousel-wrapper"
        >


            <!-- CAROUSEL -->

            <div
                id="hospitalSlider"
                class="auto-scroll"
            >


                <?php foreach ($carouselHospitals as $hospital): ?>


                    <!-- HOSPITAL CARD -->

                    <a
                        href="./home.php"
                        class="hospital-card-link"
                    >

                        <article
                            class="hospital-card bg-white rounded-2xl overflow-hidden border border-outline-variant/30 shadow-sm transition-all duration-300 flex flex-col h-full"
                        >


                            <!-- IMAGE -->

                            <div
                                class="relative h-48 w-full bg-surface-dim"
                            >

                              


                                <!-- RATING -->

                                <div
                                    class="absolute top-4 right-4 bg-white/90 backdrop-blur px-2 py-1 rounded-lg flex items-center gap-1 shadow-sm"
                                >

                                    <span
                                        class="material-symbols-outlined text-amber-500 text-[18px]"
                                        style="font-variation-settings: 'FILL' 1;"
                                    >
                                        star
                                    </span>

                                    <span
                                        class="text-label-md font-bold text-on-surface"
                                    >
                                        <?= htmlspecialchars($hospital["rating"]) ?>
                                    </span>

                                </div>

                            </div>



                            <!-- CARD CONTENT -->

                            <div
                                class="p-5 flex-grow flex flex-col"
                            >


                                <!-- TYPE -->

                                <div
                                    class="mb-3"
                                >

                                    <span
                                        class="text-label-sm font-label-sm text-secondary uppercase tracking-widest"
                                    >
                                        <?= htmlspecialchars($hospital["type"]) ?>
                                    </span>


                                    <h3
                                        class="text-headline-md font-headline-md text-on-surface mt-1 leading-tight"
                                    >
                                        <?= htmlspecialchars($hospital["name"]) ?>
                                    </h3>


                                    <div
                                        class="flex items-center gap-1 text-on-surface-variant text-label-md mt-1"
                                    >

                                        <span
                                            class="material-symbols-outlined text-[16px]"
                                        >
                                            location_on
                                        </span>

                                        <?= htmlspecialchars($hospital["location"]) ?>,
                                        Maharashtra

                                    </div>

                                </div>



                                <!-- SERVICES -->

                                <div
                                    class="flex flex-wrap gap-2 mb-4"
                                >

                                    <span
                                        class="px-2 py-1 bg-surface-container text-primary rounded-md text-label-sm"
                                    >
                                        OPD
                                    </span>

                                    <span
                                        class="px-2 py-1 bg-surface-container text-primary rounded-md text-label-sm"
                                    >
                                        Emergency
                                    </span>

                                    <span
                                        class="px-2 py-1 bg-surface-container text-primary rounded-md text-label-sm"
                                    >
                                        Pharmacy
                                    </span>

                                </div>



                                <!-- DETAILS -->

                                <div
                                    class="grid grid-cols-2 gap-4 pt-4 border-t border-outline-variant/20 mb-6"
                                >

                                    <div
                                        class="flex items-center gap-2"
                                    >

                                        <span
                                            class="material-symbols-outlined text-primary text-[20px]"
                                        >
                                            stethoscope
                                        </span>

                                        <span
                                            class="text-label-sm text-on-surface-variant"
                                        >
                                            <?= htmlspecialchars($hospital["doctors"]) ?>
                                            Doctors
                                        </span>

                                    </div>


                                    <div
                                        class="flex items-center gap-2"
                                    >

                                        <span
                                            class="material-symbols-outlined text-primary text-[20px]"
                                        >
                                            schedule
                                        </span>

                                        <span
                                            class="text-label-sm text-on-surface-variant"
                                        >
                                            Open 24/7
                                        </span>

                                    </div>

                                </div>



                                <!-- DETAILS BUTTON -->

                                <span
                                    class="w-full py-3 rounded-xl border border-primary text-primary font-label-md text-center block mt-auto"
                                >
                                    Details
                                </span>


                            </div>

                        </article>

                    </a>


                <?php endforeach; ?>


            </div>



            <!-- ==================================================
                            PREVIOUS BUTTON
            =================================================== -->

            <button
                class="hospital-arrow hospital-arrow-left"
                id="prevBtn"
                type="button"
                aria-label="Previous hospitals"
            >

                <span
                    class="material-symbols-outlined"
                >
                    arrow_back_ios_new
                </span>

            </button>



            <!-- ==================================================
                            NEXT BUTTON
            =================================================== -->

            <button
                class="hospital-arrow hospital-arrow-right"
                id="nextBtn"
                type="button"
                aria-label="Next hospitals"
            >

                <span
                    class="material-symbols-outlined"
                >
                    arrow_forward_ios
                </span>

            </button>


        </div>

    </div>

</section>

</main>



<!-- ==========================================================
                            FOOTER
========================================================== -->

<footer
    class="w-full rounded-t-xl bg-surface-container-highest border-t border-outline-variant"
>

    <div
        class="grid grid-cols-1 md:grid-cols-4 gap-gutter px-margin-desktop py-12 w-full max-w-container-max mx-auto"
    >


        <!-- BRAND -->

        <div
            class="space-y-4"
        >

            <span
                class="text-headline-md font-headline-md font-black text-on-surface"
            >
                Health Hub
            </span>

            <p
                class="text-body-md text-on-surface-variant"
            >
                Providing accessible healthcare discovery
                across India. Your health, our priority.
            </p>

        </div>



        <!-- QUICK LINKS -->

        <div>

            <h4
                class="text-label-md font-bold text-on-surface mb-6"
            >
                Quick Links
            </h4>

            <ul class="space-y-3">

                <li>

                    <a
                        href="./specialists.php"
                        class="text-label-sm text-on-surface-variant hover:text-primary transition-all"
                    >
                        Find a Doctor
                    </a>

                </li>

                <li>

                    <a
                        href="health-insights/index.php"
                        class="text-label-sm text-on-surface-variant hover:text-primary transition-all"
                    >
                        Health Insights
                    </a>

                </li>

            </ul>

        </div>



        <!-- SUPPORT -->

        <div>

            <h4
                class="text-label-md font-bold text-on-surface mb-6"
            >
                Support
            </h4>

            <ul class="space-y-3">

                <li>
                    <a
                        href="#"
                        class="text-label-sm text-on-surface-variant hover:text-primary transition-all"
                    >
                        Contact Support
                    </a>
                </li>

                <li>
                    <a
                        href="#"
                        class="text-label-sm text-on-surface-variant hover:text-primary transition-all"
                    >
                        Privacy Policy
                    </a>
                </li>

                <li>
                    <a
                        href="#"
                        class="text-label-sm text-on-surface-variant hover:text-primary transition-all"
                    >
                        Terms of Service
                    </a>
                </li>

            </ul>

        </div>



        <!-- NEWSLETTER -->

        <div>

            <h4
                class="text-label-md font-bold text-on-surface mb-6"
            >
                Newsletter
            </h4>

            <p
                class="text-label-sm text-on-surface-variant mb-4"
            >
                Stay updated with latest health news.
            </p>

            <div
                class="flex gap-2"
            >

                <input
                    class="bg-surface border border-outline-variant rounded-lg px-3 py-2 text-label-sm w-full"
                    placeholder="Email address"
                    type="email"
                >

                <button
                    class="bg-primary text-on-primary px-4 py-2 rounded-lg text-label-sm font-bold"
                    type="button"
                >
                    Join
                </button>

            </div>

        </div>

    </div>



    <!-- COPYRIGHT -->

    <div
        class="px-margin-desktop py-6 border-t border-outline-variant/30"
    >

        <span
            class="text-label-sm text-on-surface-variant"
        >
            © 2024 Health Hub Medical Systems.
            All rights reserved.
        </span>

    </div>

</footer>



<!-- ==========================================================
                        JAVASCRIPT
========================================================== -->

<script
    src="../js/index.js?v=2"
></script>


</body>

</html>