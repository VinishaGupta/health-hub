<?php

/*
|--------------------------------------------------------------------------
| DOCTOR PROFILE
|--------------------------------------------------------------------------
| MOCK DATA ONLY
|
| Later:
| Replace these arrays with database queries.
| The HTML structure should not need to change.
|--------------------------------------------------------------------------
*/


/* =========================================================
   MOCK DOCTOR DATA
========================================================= */

$doctor = [

    "id" => 1,

    "name" => "Dr. A. Mashankar",

    "designation" => "Senior Cardiologist",

    "title" => "Heart Surgery Specialist",

    "experience" => "15+ Yrs Exp",

    "medical_system" => "Allopathy (Modern Medicine)",

    "specialization" => "Interventional Cardiology",

    "image" => "https://lh3.googleusercontent.com/aida-public/AB6AXuAgB3v7SrhmrlXlBMRczvs2BR_aV_GXBHaHPdS8l9GkGVG9UJgOXnycJxVTTI5zsw8OBSWnJXLxcMOK8tdWFH8_zMdPta7rMxObFVUcit-IEYO8k-w1RmbzZt5Sjd6jUBE0Z5H-vsi5MVyIczMQFV1eiC_ms_A4Lgi_hmNOjTC6UjtwF7rJrXH_ujKlJwbsc5TxE1clx7ocjNKG2iKvfENqwH8Ch7Ew-5J8ACetbxAoebpIeQNl5PK4bDQtDYoCdWpLuQvkHATlA-o",

    "phone" => "+91 712 245 6789",

    "verified" => true

];


/* =========================================================
   MOCK OPD AVAILABILITY
========================================================= */

$opdAvailability = [

    "status" => "Available Today",

    "status_type" => "available",

    "sessions" => [

        [
            "name" => "Morning Session",

            "start_time" => "10:00 AM",

            "end_time" => "01:00 PM"
        ],

        [
            "name" => "Evening Session",

            "start_time" => "05:00 PM",

            "end_time" => "08:00 PM"
        ]

    ]

];


/* =========================================================
   MOCK DOCTOR STATISTICS
========================================================= */

$doctorStats = [

    [
        "value" => "5000+",

        "label" => "Patients Treated",

        "type" => "primary"
    ],

    [
        "value" => "98%",

        "label" => "Success Rating",

        "type" => "secondary"
    ]

];


/* =========================================================
   MOCK EXPERTISE
========================================================= */

$expertise = [

    "Heart Disease",

    "Blood Pressure",

    "Heart Surgery",

    "Angioplasty",

    "ECG Management",

    "Cardiac Rehabilitation"

];


/* =========================================================
   MOCK MEDICAL AFFILIATIONS
========================================================= */

$medicalAffiliations = [

    [

        "name" => "Health Hub Hospital",

        "location" => "Nagpur, Maharashtra",

        "tags" => [

            [
                "name" => "ICU Available",

                "type" => "icu"
            ],

            [
                "name" => "Emergency 24/7",

                "type" => "emergency"
            ]

        ]

    ],

    [

        "name" => "Heart Care Clinic",

        "location" => "Civil Lines, Nagpur",

        "tags" => [

            [
                "name" => "OPD Services",

                "type" => "opd"
            ]

        ]

    ]

];


/* =========================================================
   MOCK FOOTER LINKS
========================================================= */

$quickLinks = [

    [
        "name" => "Privacy Policy",

        "url" => "#"
    ],

    [
        "name" => "Terms of Service",

        "url" => "#"
    ],

    [
        "name" => "Contact Support",

        "url" => "#"
    ]

];


$supportLinks = [

    [
        "name" => "Emergency Protocol",

        "url" => "#"
    ],

    [
        "name" => "Help Center",

        "url" => "#"
    ],

    [
        "name" => "FAQs",

        "url" => "#"
    ]

];

?>

<!DOCTYPE html>

<html
    class="scroll-smooth"
    lang="en"
>

<head>

    <meta charset="utf-8">

    <meta
        content="width=device-width, initial-scale=1.0"
        name="viewport"
    >

    <title>
        <?= htmlspecialchars($doctor["name"]) ?>
        |
        <?= htmlspecialchars($doctor["designation"]) ?>
        - Health Hub
    </title>


    <!-- =====================================================
         TAILWIND
    ====================================================== -->

    <script
        src="https://cdn.tailwindcss.com?plugins=forms,container-queries"
    ></script>


    <!-- =====================================================
         INTER
    ====================================================== -->

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >


    <!-- =====================================================
         MATERIAL SYMBOLS
    ====================================================== -->

    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet"
    >


    <!-- =====================================================
         TAILWIND CONFIG
    ====================================================== -->

    <script>

        tailwind.config = {

            darkMode: "class",

            theme: {

                extend: {

                    colors: {

                        "on-surface": "#0b1c30",

                        "inverse-surface": "#213145",

                        "surface-dim": "#cbdbf5",

                        "on-error-container": "#93000a",

                        "surface-tint": "#0c56d0",

                        "on-primary-fixed-variant": "#0040a2",

                        "on-primary-container": "#c4d2ff",

                        "on-tertiary": "#ffffff",

                        "tertiary-fixed-dim": "#ffb3ae",

                        "tertiary-container": "#b51220",

                        "on-secondary": "#ffffff",

                        "error": "#ba1a1a",

                        "surface-container-highest": "#d3e4fe",

                        "on-secondary-container": "#006374",

                        "surface-container-high": "#dce9ff",

                        "on-tertiary-fixed-variant": "#930014",

                        "inverse-primary": "#b2c5ff",

                        "surface-variant": "#d3e4fe",

                        "primary-fixed": "#dae2ff",

                        "on-primary-fixed": "#001848",

                        "error-container": "#ffdad6",

                        "surface": "#f8f9ff",

                        "on-background": "#0b1c30",

                        "on-error": "#ffffff",

                        "background": "#f8f9ff",

                        "on-secondary-fixed": "#001f26",

                        "on-primary": "#ffffff",

                        "primary": "#003d9b",

                        "inverse-on-surface": "#eaf1ff",

                        "outline-variant": "#c3c6d6",

                        "secondary": "#00687a",

                        "tertiary-fixed": "#ffdad7",

                        "outline": "#737685",

                        "secondary-fixed-dim": "#5dd6f3",

                        "surface-bright": "#f8f9ff",

                        "secondary-container": "#6ae1ff",

                        "on-surface-variant": "#434654",

                        "on-tertiary-container": "#ffc5c0",

                        "tertiary": "#8c0013",

                        "surface-container-lowest": "#ffffff",

                        "secondary-fixed": "#adecff",

                        "surface-container-low": "#eff4ff",

                        "primary-container": "#0052cc",

                        "on-tertiary-fixed": "#410004",

                        "surface-container": "#e5eeff",

                        "primary-fixed-dim": "#b2c5ff",

                        "on-secondary-fixed-variant": "#004e5d"

                    },

                    borderRadius: {

                        DEFAULT: "0.25rem",

                        lg: "0.5rem",

                        xl: "0.75rem",

                        full: "9999px"

                    },

                    spacing: {

                        "margin-desktop": "40px",

                        "gutter": "24px",

                        "container-max": "1280px",

                        "base": "8px",

                        "margin-mobile": "16px"

                    },

                    fontFamily: {

                        "body-md": ["Inter"],

                        "label-sm": ["Inter"],

                        "headline-lg-mobile": ["Inter"],

                        "body-lg": ["Inter"],

                        "headline-lg": ["Inter"],

                        "display-lg": ["Inter"],

                        "label-md": ["Inter"],

                        "headline-md": ["Inter"]

                    },

                    fontSize: {

                        "body-md": [
                            "16px",
                            {
                                lineHeight: "24px",
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

                        "headline-lg-mobile": [
                            "24px",
                            {
                                lineHeight: "32px",
                                fontWeight: "600"
                            }
                        ],

                        "body-lg": [
                            "18px",
                            {
                                lineHeight: "28px",
                                fontWeight: "400"
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

                        "headline-md": [
                            "24px",
                            {
                                lineHeight: "32px",
                                fontWeight: "600"
                            }
                        ]

                    }

                }

            }

        };

    </script>


    <!-- =====================================================
         DOCTOR CSS
    ====================================================== -->

    <link
        rel="stylesheet"
        href="../css/doctor.css"
    >

</head>


<body
    class="bg-background font-body-md text-on-surface"
>


<!-- =========================================================
     HEADER
========================================================= -->

<header
    class="fixed
           top-0
           w-full
           z-50
           bg-surface/70
           backdrop-blur-xl
           shadow-sm"
>

    <nav
        class="relative
               flex
               justify-between
               items-center
               px-margin-mobile
               md:px-margin-desktop
               h-20
               w-full
               max-w-container-max
               mx-auto"
    >


        <!-- LOGO -->

        <a
            href="../index.html"
            class="font-headline-md
                   text-headline-md
                   font-bold
                   text-primary
                   flex
                   items-center
                   gap-2"
        >

            <span
                class="material-symbols-outlined"
                style="
                    font-variation-settings:
                    'FILL' 1
                "
            >
                medical_services
            </span>

            <span>
                Health Hub
            </span>

        </a>


        <!-- NAVIGATION -->

        <div
            class="hidden
                   md:flex
                   items-center
                   gap-8
                   absolute
                   left-1/2
                   -translate-x-1/2"
        >

            <a
                class="text-primary
                       font-bold
                       border-b-2
                       border-primary
                       transition-colors
                       duration-200
                       py-1"
                href="../index.html"
            >
                Home
            </a>


            <a
                class="text-on-surface-variant
                       hover:text-primary
                       transition-colors
                       duration-200"
                href="../Doctors-and-Appointments.html"
            >
                Doctors
            </a>


            <a
                class="text-on-surface-variant
                       hover:text-primary
                       transition-colors
                       duration-200"
                href="../Services.html"
            >
                Services
            </a>

        </div>

    </nav>

</header>



<!-- =========================================================
     MAIN
========================================================= -->

<main
    class="pt-24
           pb-12
           max-w-container-max
           mx-auto
           px-margin-desktop"
>


    <!-- =====================================================
         DOCTOR HEADER
    ====================================================== -->

    <section
        class="grid
               grid-cols-1
               lg:grid-cols-12
               gap-gutter
               mb-12"
    >


        <!-- =================================================
             DOCTOR PROFILE
        ================================================== -->

        <div
            class="lg:col-span-8
                   bg-surface-container-lowest
                   rounded-xl
                   p-8
                   medical-shadow
                   flex
                   flex-col
                   md:flex-row
                   gap-8
                   relative
                   overflow-hidden"
        >


            <!-- VERIFIED -->

            <?php if ($doctor["verified"]): ?>

                <div
                    class="absolute
                           top-0
                           right-0
                           p-4"
                >

                    <div
                        class="flex
                               items-center
                               gap-1
                               bg-secondary-container/20
                               text-on-secondary-container
                               px-3
                               py-1
                               rounded-full"
                    >

                        <span
                            class="material-symbols-outlined
                                   text-sm
                                   fill-icon"
                        >
                            verified
                        </span>


                        <span
                            class="text-label-sm
                                   font-label-sm"
                        >
                            Verified Professional
                        </span>

                    </div>

                </div>

            <?php endif; ?>


            <!-- DOCTOR IMAGE -->

            <div
                class="doctor-profile-image-wrapper
                       w-full
                       md:w-64
                       h-80
                       flex-shrink-0"
            >

                <img
                    class="doctor-profile-image"
                    src="<?= htmlspecialchars($doctor["image"]) ?>"
                    alt="<?= htmlspecialchars($doctor["name"]) ?>"
                >

            </div>


            <!-- DOCTOR BASIC DETAILS -->

            <div
                class="flex
                       flex-col
                       justify-center
                       space-y-4"
            >

                <div>

                    <h1
                        class="font-headline-lg
                               text-headline-lg
                               text-primary
                               mb-1"
                    >
                        <?= htmlspecialchars($doctor["name"]) ?>
                    </h1>


                    <p
                        class="text-body-lg
                               font-body-lg
                               text-on-surface-variant"
                    >
                        <?= htmlspecialchars($doctor["designation"]) ?>,
                        <?= htmlspecialchars($doctor["title"]) ?>
                    </p>

                </div>


                <!-- EXPERIENCE -->

                <div
                    class="flex
                           flex-wrap
                           gap-6
                           items-center"
                >

                    <div
                        class="flex
                               items-center
                               gap-2"
                    >

                        <span
                            class="material-symbols-outlined
                                   text-secondary"
                        >
                            work_history
                        </span>


                        <span
                            class="font-bold
                                   text-on-surface"
                        >
                            <?= htmlspecialchars($doctor["experience"]) ?>
                        </span>

                    </div>

                </div>


                <!-- BOOK APPOINTMENT -->

                <div
                    class="grid
                           grid-cols-1
                           sm:grid-cols-2
                           gap-4
                           mt-4"
                >

                    <a
                        href="../OPD-Booking2.html"
                    >

                        <button
                            type="button"
                            class="book-opd-btn
                                   w-full
                                   flex
                                   items-center
                                   justify-center
                                   gap-2"
                        >

                            <span
                                class="material-symbols-outlined"
                            >
                                event_available
                            </span>

                            Book OPD Appointment

                        </button>

                    </a>

                </div>

            </div>

        </div>



        <!-- =================================================
             OPD AVAILABILITY
        ================================================== -->

        <div
            class="lg:col-span-4
                   space-y-6"
        >


            <div
                class="bg-surface-container-lowest
                       rounded-xl
                       p-6
                       medical-shadow
                       border-t-4
                       border-secondary"
            >

                <div
                    class="flex
                           justify-between
                           items-center
                           mb-6"
                >

                    <h3
                        class="font-headline-md
                               text-headline-md"
                    >
                        OPD Availability
                    </h3>


                    <span
                        class="bg-green-100
                               text-green-700
                               px-3
                               py-1
                               rounded-full
                               text-label-sm
                               font-label-sm
                               flex
                               items-center
                               gap-1"
                    >

                        <span
                            class="w-2
                                   h-2
                                   bg-green-500
                                   rounded-full
                                   animate-pulse"
                        ></span>


                        <?= htmlspecialchars($opdAvailability["status"]) ?>

                    </span>

                </div>


                <!-- OPD SESSIONS FROM MOCK DATA -->

                <div
                    class="space-y-4
                           mb-8"
                >

                    <?php foreach ($opdAvailability["sessions"] as $session): ?>

                        <div
                            class="flex
                                   items-start
                                   gap-4"
                        >

                            <span
                                class="material-symbols-outlined
                                       text-secondary
                                       mt-1"
                            >
                                schedule
                            </span>


                            <div>

                                <p
                                    class="text-label-sm
                                           font-label-sm
                                           text-on-surface-variant
                                           uppercase
                                           tracking-wider"
                                >
                                    <?= htmlspecialchars($session["name"]) ?>
                                </p>


                                <p
                                    class="text-body-md
                                           font-body-md
                                           font-semibold"
                                >
                                    <?= htmlspecialchars($session["start_time"]) ?>

                                    -

                                    <?= htmlspecialchars($session["end_time"]) ?>
                                </p>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>


                <button
                    type="button"
                    class="view-slots-btn"
                >
                    View Available Slots
                </button>

            </div>



            <!-- =================================================
                 STATISTICS FROM MOCK DATA
            ================================================== -->

            <div
                class="grid
                       grid-cols-2
                       gap-4"
            >

                <?php foreach ($doctorStats as $stat): ?>

                    <div
                        class="
                        <?=
                            $stat["type"] === "primary"
                                ? "bg-primary/5"
                                : "bg-secondary/5"
                        ?>
                        rounded-xl
                        p-4
                        text-center"
                    >

                        <p
                            class="
                            text-headline-md
                            font-bold
                            <?=
                                $stat["type"] === "primary"
                                    ? "text-primary"
                                    : "text-secondary"
                            ?>"
                        >
                            <?= htmlspecialchars($stat["value"]) ?>
                        </p>


                        <p
                            class="text-label-sm
                                   text-on-surface-variant"
                        >
                            <?= htmlspecialchars($stat["label"]) ?>
                        </p>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </section>



    <!-- =====================================================
         MAIN CONTENT
    ====================================================== -->

    <div
        class="grid
               grid-cols-1
               lg:grid-cols-12
               gap-gutter"
    >


        <!-- =================================================
             LEFT COLUMN
        ================================================== -->

        <div
            class="lg:col-span-8
                   space-y-gutter"
        >


            <!-- =================================================
                 DOCTOR OVERVIEW
            ================================================== -->

            <div
                class="bg-surface-container-lowest
                       rounded-xl
                       p-8
                       medical-shadow"
            >

                <h2
                    class="font-headline-md
                           text-headline-md
                           mb-6
                           flex
                           items-center
                           gap-2"
                >

                    <span
                        class="material-symbols-outlined
                               text-primary"
                    >
                        info
                    </span>

                    Doctor Overview

                </h2>


                <div
                    class="grid
                           grid-cols-1
                           sm:grid-cols-2
                           gap-8"
                >

                    <div
                        class="space-y-4"
                    >

                        <div>

                            <p
                                class="text-label-sm
                                       font-label-sm
                                       text-on-surface-variant"
                            >
                                Medical System
                            </p>


                            <p
                                class="text-body-md
                                       font-semibold"
                            >
                                <?= htmlspecialchars($doctor["medical_system"]) ?>
                            </p>

                        </div>


                        <div>

                            <p
                                class="text-label-sm
                                       font-label-sm
                                       text-on-surface-variant"
                            >
                                Specialization
                            </p>


                            <p
                                class="text-body-md
                                       font-semibold"
                            >
                                <?= htmlspecialchars($doctor["specialization"]) ?>
                            </p>

                        </div>

                    </div>

                </div>

            </div>



            <!-- =================================================
                 EXPERTISE
            ================================================== -->

            <div
                class="bg-surface-container-lowest
                       rounded-xl
                       p-8
                       medical-shadow"
            >

                <h2
                    class="font-headline-md
                           text-headline-md
                           mb-6
                           flex
                           items-center
                           gap-2"
                >

                    <span
                        class="material-symbols-outlined
                               text-primary"
                    >
                        psychology
                    </span>

                    Expertise &amp; Treatments

                </h2>


                <div
                    class="flex
                           flex-wrap
                           gap-3"
                >

                    <?php foreach ($expertise as $item): ?>

                        <span
                            class="px-4
                                   py-2
                                   rounded-lg
                                   bg-primary-container/10
                                   border
                                   border-primary/20
                                   text-primary
                                   font-label-md"
                        >
                            <?= htmlspecialchars($item) ?>
                        </span>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>



        <!-- =================================================
             RIGHT COLUMN
        ================================================== -->

        <div
            class="lg:col-span-4
                   space-y-gutter"
        >


            <!-- =================================================
                 MEDICAL AFFILIATIONS
            ================================================== -->

            <div
                class="bg-surface-container-lowest
                       rounded-xl
                       p-6
                       medical-shadow"
            >

                <h3
                    class="font-label-md
                           text-label-md
                           text-on-surface-variant
                           uppercase
                           mb-6
                           tracking-widest"
                >
                    Medical Affiliations
                </h3>


                <div
                    class="space-y-4"
                >

                    <?php foreach ($medicalAffiliations as $affiliation): ?>

                        <div
                            class="p-4
                                   rounded-xl
                                   border
                                   border-outline-variant
                                   hover:border-primary
                                   transition-colors
                                   cursor-pointer
                                   group"
                        >

                            <h4
                                class="font-bold
                                       text-body-lg
                                       mb-1
                                       group-hover:text-primary"
                            >
                                <?= htmlspecialchars($affiliation["name"]) ?>
                            </h4>


                            <p
                                class="text-label-md
                                       text-on-surface-variant
                                       mb-3
                                       flex
                                       items-center
                                       gap-1"
                            >

                                <span
                                    class="material-symbols-outlined
                                           text-sm"
                                >
                                    location_on
                                </span>


                                <?= htmlspecialchars($affiliation["location"]) ?>

                            </p>


                            <div
                                class="flex
                                       flex-wrap
                                       gap-2"
                            >

                                <?php foreach ($affiliation["tags"] as $tag): ?>

                                    <span
                                        class="
                                        text-[10px]
                                        uppercase
                                        font-bold
                                        px-2
                                        py-0.5
                                        rounded

                                        <?php

                                        if ($tag["type"] === "icu") {
                                            echo "bg-tertiary-container/10 text-tertiary";
                                        }

                                        elseif ($tag["type"] === "emergency") {
                                            echo "bg-tertiary-container/10 text-tertiary";
                                        }

                                        else {
                                            echo "bg-secondary-container/10 text-secondary";
                                        }

                                        ?>
                                        "
                                    >
                                        <?= htmlspecialchars($tag["name"]) ?>
                                    </span>

                                <?php endforeach; ?>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>



            <!-- =================================================
                 CONTACT
            ================================================== -->

            <div
                class="bg-surface-container-lowest
                       rounded-xl
                       overflow-hidden
                       medical-shadow"
            >

                <div
                    class="p-6"
                >

                    <div
                        class="flex
                               items-center
                               gap-3"
                    >

                        <span
                            class="material-symbols-outlined
                                   text-primary"
                        >
                            phone
                        </span>


                        <p
                            class="text-body-md
                                   font-semibold"
                        >
                            <?= htmlspecialchars($doctor["phone"]) ?>
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</main>



<!-- =========================================================
     FOOTER
========================================================= -->

<footer
    class="bg-surface-container-low
           mt-12"
>

    <div
        class="grid
               grid-cols-1
               md:grid-cols-2
               lg:grid-cols-4
               gap-gutter
               px-margin-desktop
               py-12
               max-w-container-max
               mx-auto"
    >


        <!-- BRAND -->

        <div>

            <div
                class="font-headline-md
                       text-headline-md
                       font-bold
                       text-primary
                       mb-4"
            >
                Health Hub
            </div>


            <p
                class="text-on-surface-variant
                       text-body-md"
            >
                Your trusted partner in cardiac care
                and holistic wellness.
            </p>

        </div>



        <!-- QUICK LINKS -->

        <div>

            <h4
                class="font-bold
                       text-on-surface
                       mb-4"
            >
                Quick Links
            </h4>


            <ul
                class="space-y-2
                       text-on-surface-variant"
            >

                <?php foreach ($quickLinks as $link): ?>

                    <li>

                        <a
                            class="hover:text-primary
                                   transition-colors"
                            href="<?= htmlspecialchars($link["url"]) ?>"
                        >
                            <?= htmlspecialchars($link["name"]) ?>
                        </a>

                    </li>

                <?php endforeach; ?>

            </ul>

        </div>



        <!-- SUPPORT -->

        <div>

            <h4
                class="font-bold
                       text-on-surface
                       mb-4"
            >
                Support
            </h4>


            <ul
                class="space-y-2
                       text-on-surface-variant"
            >

                <?php foreach ($supportLinks as $link): ?>

                    <li>

                        <a
                            class="hover:text-primary
                                   transition-colors"
                            href="<?= htmlspecialchars($link["url"]) ?>"
                        >
                            <?= htmlspecialchars($link["name"]) ?>
                        </a>

                    </li>

                <?php endforeach; ?>

            </ul>

        </div>



        <!-- FOLLOW US -->

        <div>

            <h4
                class="font-bold
                       text-on-surface
                       mb-4"
            >
                Follow Us
            </h4>


            <div
                class="flex
                       gap-4"
            >

                <span
                    class="material-symbols-outlined
                           text-primary
                           cursor-pointer
                           hover:scale-110
                           transition-transform"
                >
                    share
                </span>


                <span
                    class="material-symbols-outlined
                           text-primary
                           cursor-pointer
                           hover:scale-110
                           transition-transform"
                >
                    mail
                </span>

            </div>

        </div>

    </div>



    <!-- COPYRIGHT -->

    <div
        class="border-t
               border-outline-variant
               px-margin-desktop
               py-6
               max-w-container-max
               mx-auto
               text-center
               text-on-surface-variant
               text-label-sm"
    >

        © 2024 Health Hub Medical Group.
        All rights reserved.

    </div>

</footer>



<!-- =========================================================
     EMERGENCY FAB
========================================================= -->

<button
    type="button"
    class="fixed
           bottom-8
           right-8
           bg-tertiary
           text-on-tertiary
           p-4
           rounded-full
           shadow-xl
           flex
           items-center
           gap-2
           hover:scale-105
           active:scale-95
           transition-all
           z-40
           group
           animate-pulse"
    aria-label="Emergency"
>
</button>



<!-- =========================================================
     DOCTOR JS
========================================================= -->

<script
    src="../js/doctor.js"
></script>


</body>

</html>