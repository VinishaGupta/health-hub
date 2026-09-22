<?php

/*
|--------------------------------------------------------------------------
| MY HEALTH
|--------------------------------------------------------------------------
| MOCK DATA ONLY
|
| Later these values will come from database tables.
|--------------------------------------------------------------------------
*/


/* ==========================================================
                    MOCK HOSPITAL
========================================================== */

$hospital = [

    "short_name" => "City Care Hospital",

    "name" => "সিটি কেয়ার হাসপাতাল",

    "location" => "Location",

    "logo" => "Logo"

];


/* ==========================================================
                    MOCK DOCTOR
========================================================== */

$doctor = [

    "name" => "Doctor's Name"

];


/* ==========================================================
                MOCK HEALTH CHECKUP DATA
========================================================== */

$healthCheckups = [

    [
        "date" => "25/06/2026",
        "time" => "10:30 AM",
        "booking_time" => "10:00 AM",
        "symptoms" => "Fever, weakness",
        "diagnosis" => "Viral Fever",
        "treatment" => "Medication"
    ],

    [
        "date" => "14/03/2026",
        "time" => "11:15 AM",
        "booking_time" => "10:45 AM",
        "symptoms" => "Headache",
        "diagnosis" => "Migraine",
        "treatment" => "Medication"
    ],

    [
        "date" => "05/01/2026",
        "time" => "09:30 AM",
        "booking_time" => "09:00 AM",
        "symptoms" => "Back pain",
        "diagnosis" => "Muscle strain",
        "treatment" => "Physiotherapy"
    ]

];

?>
<!doctype html>

<html
    class="light"
    lang="en"
>

<head>

    <meta charset="utf-8">


    <meta
        content="width=device-width, initial-scale=1.0"
        name="viewport"
    >


    <title>
        Health Hub - My Health
    </title>


    <!-- ======================================================
                        TAILWIND
    ======================================================= -->

    <script
        src="https://cdn.tailwindcss.com?plugins=forms,container-queries"
    ></script>


    <!-- ======================================================
                        GOOGLE FONTS
    ======================================================= -->

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >


    <!-- ======================================================
                    MATERIAL SYMBOLS
    ======================================================= -->

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

                        "outline-variant": "#c3c6d6",

                        "tertiary-fixed": "#ffdad7",

                        "on-error-container": "#93000a",

                        "on-secondary-fixed-variant": "#004e5d",

                        "surface-variant": "#d3e4fe",

                        error: "#ba1a1a",

                        "on-secondary-fixed": "#001f26",

                        "surface-container-highest": "#d3e4fe",

                        "on-tertiary-fixed": "#410004",

                        "on-primary-fixed-variant": "#0040a2",

                        surface: "#f8f9ff",

                        secondary: "#00687a",

                        "on-tertiary-container": "#ffc5c0",

                        "on-surface-variant": "#434654",

                        "surface-container": "#e5eeff",

                        outline: "#737685",

                        "inverse-on-surface": "#eaf1ff",

                        "error-container": "#ffdad6",

                        "surface-container-high": "#dce9ff",

                        "surface-bright": "#f8f9ff",

                        "primary-fixed": "#dae2ff",

                        "on-primary": "#ffffff",

                        primary: "#003d9b",

                        "on-tertiary-fixed-variant": "#930014",

                        "on-primary-fixed": "#001848",

                        "primary-fixed-dim": "#b2c5ff",

                        "on-surface": "#0b1c30",

                        "surface-tint": "#0c56d0",

                        "on-secondary-container": "#006374",

                        "on-error": "#ffffff",

                        "secondary-container": "#6ae1ff",

                        "inverse-surface": "#213145",

                        tertiary: "#8c0013",

                        "on-secondary": "#ffffff",

                        "on-tertiary": "#ffffff",

                        "tertiary-container": "#b51220",

                        "secondary-fixed": "#adecff",

                        "inverse-primary": "#b2c5ff",

                        "surface-container-low": "#eff4ff",

                        background: "#f8f9ff",

                        "secondary-fixed-dim": "#5dd6f3",

                        "primary-container": "#0052cc",

                        "on-primary-container": "#c4d2ff",

                        "surface-container-lowest": "#ffffff",

                        "on-background": "#0b1c30",

                        "surface-dim": "#cbdbf5",

                        "tertiary-fixed-dim": "#ffb3ae"

                    },


                    borderRadius: {

                        DEFAULT: "0.25rem",

                        lg: "0.5rem",

                        xl: "0.75rem",

                        full: "9999px"

                    },


                    spacing: {

                        "container-max": "1280px",

                        "margin-desktop": "40px",

                        base: "8px",

                        "margin-mobile": "16px",

                        gutter: "24px"

                    },


                    fontFamily: {

                        "label-sm": ["Inter"],

                        "display-lg": ["Inter"],

                        "body-lg": ["Inter"],

                        "body-md": ["Inter"],

                        "headline-lg-mobile": ["Inter"],

                        "headline-md": ["Inter"],

                        "label-md": ["Inter"],

                        "headline-lg": ["Inter"]

                    },


                    fontSize: {

                        "label-sm": [
                            "12px",
                            {
                                lineHeight: "16px",
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

                        "body-lg": [
                            "18px",
                            {
                                lineHeight: "28px",
                                fontWeight: "400"
                            }
                        ],

                        "body-md": [
                            "16px",
                            {
                                lineHeight: "24px",
                                fontWeight: "400"
                            }
                        ],

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

                        "label-md": [
                            "14px",
                            {
                                lineHeight: "20px",
                                letterSpacing: "0.01em",
                                fontWeight: "500"
                            }
                        ],

                        "headline-lg": [
                            "32px",
                            {
                                lineHeight: "40px",
                                letterSpacing: "-0.01em",
                                fontWeight: "600"
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
        href="../css/myhealth.css"
    >

</head>


<body
    class="bg-background text-on-surface selection:bg-primary-container selection:text-on-primary-container"
>


<!-- ==========================================================
                    HOSPITAL HEADER
========================================================== -->

<iframe
    src="../hospital-header.html"
    class="w-full h-[130px] border-0 mt-[60px] mb-[-60px]"
    scrolling="no"
>
</iframe>


<!-- ==========================================================
                        TOP NAVBAR
========================================================== -->

<header
    class="fixed top-0 w-full z-50 bg-surface/70 backdrop-blur-xl shadow-sm"
>

    <div
        class="relative h-16 max-w-container-max mx-auto px-margin-desktop"
    >

        <!-- LOGO -->

        <div
            class="absolute left-0 top-1/2 -translate-y-1/2"
        >

            <span
                class="font-headline-md text-headline-md font-bold text-primary px-20"
            >
                Health Hub
            </span>

        </div>


        <!-- CENTER NAVIGATION -->

        <nav
            class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex items-center gap-10"
        >

            <a
                class="font-label-md text-label-md text-primary border-b-2 border-primary pb-1"
                href="home.php"
            >
                Home
            </a>


            <a
                class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors"
                href="find-a-doctor.php"
            >
                Find a Doctor
            </a>

        </nav>

    </div>

</header>


<!-- ==========================================================
                            MAIN
========================================================== -->

<main
    class="pt-24 pb-16 px-margin-desktop max-w-container-max mx-auto"
>


    <!-- ======================================================
                    DOCTOR NAME
    ======================================================= -->

    <div class="mb-6">

        <h1
            id="hospitalName"
            class="text-2xl font-bold text-[#0B4DA2] leading-tight pb-8"
        >
            <?= htmlspecialchars($doctor["name"]) ?>
        </h1>


        <!-- ==================================================
                        BOOK APPOINTMENT
        =================================================== -->

        <a
            href="opd-booking.php"
            onclick="event.stopPropagation();"
            class="inline-flex items-center justify-center bg-[#138a3d] text-white font-bold text-sm px-6 py-4 rounded-full shadow-md hover:bg-[#0f7333] transition-all duration-300 whitespace-nowrap mb-6"
        >
            Book Appointment
        </a>

    </div>


    <!-- ======================================================
                    MAIN DATA TABLE
    ======================================================= -->

    <div class="w-full">

        <div class="space-y-gutter">


            <!-- ==================================================
                        HEALTH CHECKUP TABLE
            =================================================== -->

            <div
                class="bg-surface-container-lowest rounded-[32px] border border-outline-variant/30 shadow-sm overflow-hidden"
            >

                <div
                    class="p-8 border-b border-outline-variant/20 flex flex-col sm:flex-row justify-between items-center gap-4"
                >

                    <h2
                        class="font-headline-md text-headline-md text-primary"
                    >
                        Health Checkup Schedule
                    </h2>

                </div>


                <div class="overflow-x-auto">

                    <table
                        class="w-full text-left border-collapse"
                    >

                        <!-- ==================================================
                                    TABLE HEADER
                        =================================================== -->

                        <thead>

                            <tr
                                class="bg-surface-container-low/50"
                            >

                                <th
                                    class="px-8 py-5 font-label-md text-label-md text-on-surface-variant border-b border-outline-variant/30"
                                >
                                    Date
                                </th>


                                <th
                                    class="px-8 py-5 font-label-md text-label-md text-on-surface-variant border-b border-outline-variant/30"
                                >
                                    Time
                                </th>


                                <th
                                    class="px-8 py-5 font-label-md text-label-md text-on-surface-variant border-b border-outline-variant/30"
                                >
                                    Booking Time
                                </th>


                                <th
                                    class="px-8 py-5 font-label-md text-label-md text-on-surface-variant border-b border-outline-variant/30"
                                >
                                    Symptoms
                                </th>


                                <th
                                    class="px-8 py-5 font-label-md text-label-md text-on-surface-variant border-b border-outline-variant/30"
                                >
                                    Diagnosis
                                </th>


                                <th
                                    class="px-8 py-5 font-label-md text-label-md text-on-surface-variant border-b border-outline-variant/30"
                                >
                                    Treatment
                                </th>

                            </tr>

                        </thead>


                        <!-- ==================================================
                                    TABLE BODY
                        =================================================== -->

                        <tbody
                            class="divide-y divide-outline-variant/20"
                        >

                            <?php foreach ($healthCheckups as $checkup): ?>

                                <tr
                                    class="hover:bg-primary/5 transition-colors cursor-pointer group"
                                >

                                    <td
                                        class="px-8 py-6 font-body-md text-body-md text-primary"
                                    >
                                        <?= htmlspecialchars($checkup["date"]) ?>
                                    </td>


                                    <td
                                        class="px-8 py-6 font-body-md text-body-md font-semibold"
                                    >
                                        <?= htmlspecialchars($checkup["time"]) ?>
                                    </td>


                                    <td
                                        class="px-8 py-6 font-body-md text-body-md"
                                    >
                                        <?= htmlspecialchars($checkup["booking_time"]) ?>
                                    </td>


                                    <td
                                        class="px-8 py-6 font-body-md text-body-md"
                                    >
                                        <?= htmlspecialchars($checkup["symptoms"]) ?>
                                    </td>


                                    <td
                                        class="px-8 py-6 font-body-md text-body-md"
                                    >
                                        <?= htmlspecialchars($checkup["diagnosis"]) ?>
                                    </td>


                                    <td
                                        class="px-8 py-6 font-body-md text-body-md"
                                    >
                                        <?= htmlspecialchars($checkup["treatment"]) ?>
                                    </td>

                                </tr>

                            <?php endforeach; ?>


                            <!-- ==================================================
                                EMPTY PLACEHOLDER ROWS
                            =================================================== -->

                            <tr
                                class="bg-surface-container-lowest/50 opacity-40"
                            >

                                <td
                                    class="px-8 py-6 font-body-md text-body-md text-outline"
                                >
                                    04
                                </td>

                                <td
                                    class="px-8 py-6 font-body-md text-body-md text-outline"
                                >
                                    ---
                                </td>

                                <td
                                    class="px-8 py-6 font-body-md text-body-md text-outline"
                                >
                                    ---
                                </td>

                                <td
                                    class="px-8 py-6 font-body-md text-body-md text-outline"
                                >
                                    ---
                                </td>

                                <td
                                    class="px-8 py-6 font-body-md text-body-md text-outline"
                                >
                                    ---
                                </td>

                                <td
                                    class="px-8 py-6 font-body-md text-body-md text-outline"
                                >
                                    ---
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</main>


<!-- ==========================================================
                            FOOTER
========================================================== -->

<footer
    class="bg-surface-container-low dark:bg-surface-dim border-t border-outline-variant/30 dark:border-outline/20 w-full py-12"
>

    <div
        class="grid grid-cols-1 md:grid-cols-2 gap-gutter px-margin-desktop max-w-container-max mx-auto items-center"
    >

        <div class="space-y-4">

            <span
                class="font-headline-md text-headline-md font-bold text-primary dark:text-primary-fixed"
            >
                Health Hub
            </span>


            <p
                class="font-label-sm text-label-sm text-on-surface-variant max-w-md"
            >
                Empowering healthcare through data. Connecting patients and
                providers with precision, trust, and clarity.
            </p>


            <p
                class="font-label-sm text-label-sm text-secondary dark:text-secondary-fixed opacity-80 hover:opacity-100 transition-opacity"
            >
                © 2024 Health Hub. All rights reserved.
            </p>

        </div>


        <div class="flex md:justify-end gap-8">

            <div class="flex flex-col gap-3">

                <span
                    class="font-label-md text-label-md text-primary uppercase tracking-wider"
                >
                    Resources
                </span>


                <a
                    class="font-label-sm text-label-sm text-on-surface-variant dark:text-outline-variant hover:text-secondary dark:hover:text-secondary-fixed transition-colors"
                    href="#"
                >
                    Privacy Policy
                </a>


                <a
                    class="font-label-sm text-label-sm text-on-surface-variant dark:text-outline-variant hover:text-secondary dark:hover:text-secondary-fixed transition-colors"
                    href="#"
                >
                    Terms of Service
                </a>


                <a
                    class="font-label-sm text-label-sm text-on-surface-variant dark:text-outline-variant hover:text-secondary dark:hover:text-secondary-fixed transition-colors"
                    href="#"
                >
                    Support Center
                </a>

            </div>


            <div class="flex flex-col gap-3">

                <span
                    class="font-label-md text-label-md text-primary uppercase tracking-wider"
                >
                    Connect
                </span>


                <div class="flex gap-4">

                    <button
                        class="p-2 bg-surface-container rounded-full hover:bg-primary-container transition-colors"
                    >

                        <span
                            class="material-symbols-outlined text-on-surface"
                        >
                            public
                        </span>

                    </button>


                    <button
                        class="p-2 bg-surface-container rounded-full hover:bg-primary-container transition-colors"
                    >

                        <span
                            class="material-symbols-outlined text-on-surface"
                        >
                            mail
                        </span>

                    </button>

                </div>

            </div>

        </div>

    </div>

</footer>


<!-- ==========================================================
                            JS
========================================================== -->

<script
    src="../js/myhealth.js"
></script>


</body>

</html>