<?php

/*
|--------------------------------------------------------------------------
| OPD BOOKING
|--------------------------------------------------------------------------
| MOCK DATA ONLY
|
| Later this data will come from database tables.
|--------------------------------------------------------------------------
*/


/* ==========================================================
                    MOCK DOCTOR
========================================================== */

$doctor = [

    "id" => 1,

    "name" => "Dr. Karan Agrawal",

    "role" => "General Surgeon",

    "hospital" => "Parashree Hospital",

    "image" => "https://lh3.googleusercontent.com/aida-public/AB6AXuCAhgTQPYCMsZUn8GQbZRb5-BefMx3od0v-F_cFTHVrJ4E65WHdeDk7RXhVu1I47TDiPcey86HauJC-pXfkJadewnFB0HiZ-aZbVIzworTYPrQs2dkrtc8Ji0csMUSOzjo5T16nCXdP5jqQU7JXp-VmhzUkvxeJ6Ix69nS8ocZMtYHhPU8Hg1_7J6ISm9f_8z7uoLrTszkEmBR1xUGkQquStFez5tYL5zyqlqVw2Rvlyzuxn_hmaWR568X6RZLJD14VnDMtaQ6tl1I"

];


/* ==========================================================
                    MOCK SHIFTS
========================================================== */

$shifts = [

    [
        "id" => 1,

        "name" => "OPD - Shift 01",

        "type" => "Routine",

        "opd_time" => "13.00 - 15.00",

        "booking_time" => "10.00 – 13.00",

        "status" => "Booking Open",

        "status_type" => "open",

        "slots_available" => 12
    ],


    [
        "id" => 2,

        "name" => "OPD - Shift 02",

        "type" => "Fresher",

        "opd_time" => "16.00- 20.00",

        "booking_time" => "10:00 – 13:30",

        "status" => "Booking Closed",

        "status_type" => "closed",

        "slots_available" => 0
    ],


    [
        "id" => 3,

        "name" => "OPD - Shift 03",

        "type" => "Informal Schedule",

        "opd_time" => "17:00 - 19:00",

        "booking_time" => "10:00 – 13:30",

        "status" => "Booking Full",

        "status_type" => "full",

        "slots_available" => 0
    ],


    [
        "id" => 4,

        "name" => "OPD - Shift 04",

        "type" => "Test Report",

        "opd_time" => "19:00 - 21:00",

        "booking_time" => "10:00 – 13:30",

        "status" => "Booking Open",

        "status_type" => "open",

        "slots_available" => 0
    ]

];


/* ==========================================================
                    MOCK SLOTS
========================================================== */

$slots = [

    [
        "time" => "13:00",
        "status" => "Available",
        "status_type" => "available",
        "types" => [
            "",
            "Anybody",
            "Self",
            "Other",
            "Test Report",
            "Informal Consultant",
            "MR"
        ]
    ],


    [
        "time" => "13:10",
        "status" => "Checked",
        "status_type" => "checked",
        "types" => [
            ""
        ]
    ],


    [
        "time" => "13.20",
        "status" => "Absent",
        "status_type" => "absent",
        "types" => [
            "",
            "Self",
            "Other"
        ]
    ],


    [
        "time" => "13.30",
        "status" => "Booked",
        "status_type" => "booked",
        "types" => [
            ""
        ]
    ],


    [
        "time" => "13.40",
        "status" => "Available",
        "status_type" => "available",
        "types" => [
            "",
            "Self",
            "Other"
        ]
    ],


    [
        "time" => "13:50",
        "status" => "Available",
        "status_type" => "available",
        "types" => [
            "",
            "Self",
            "Other"
        ]
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
        OPD Booking - Health Hub
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
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
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

                        "on-surface-variant": "#434654",

                        "surface-bright": "#f8f9ff",

                        "surface-tint": "#0c56d0",

                        "primary-fixed": "#dae2ff",

                        "on-error-container": "#93000a",

                        "error-container": "#ffdad6",

                        "on-error": "#ffffff",

                        "on-tertiary-container": "#ffc5c0",

                        "surface-container-high": "#dce9ff",

                        tertiary: "#8c0013",

                        "inverse-primary": "#b2c5ff",

                        "surface-container-low": "#eff4ff",

                        "tertiary-fixed-dim": "#ffb3ae",

                        "on-secondary": "#ffffff",

                        outline: "#737685",

                        "on-secondary-fixed-variant": "#004e5d",

                        "on-background": "#0b1c30",

                        "tertiary-container": "#b51220",

                        "tertiary-fixed": "#ffdad7",

                        "surface-dim": "#cbdbf5",

                        "surface-container-highest": "#d3e4fe",

                        "surface-container": "#e5eeff",

                        surface: "#f8f9ff",

                        "on-primary-container": "#c4d2ff",

                        "on-primary-fixed-variant": "#0040a2",

                        secondary: "#00687a",

                        "primary-fixed-dim": "#b2c5ff",

                        "on-tertiary-fixed": "#410004",

                        "on-tertiary": "#ffffff",

                        "secondary-fixed": "#adecff",

                        "inverse-surface": "#213145",

                        primary: "#003d9b",

                        "surface-container-lowest": "#ffffff",

                        "inverse-on-surface": "#eaf1ff",

                        error: "#ba1a1a",

                        background: "#f8f9ff",

                        "secondary-container": "#6ae1ff",

                        "on-surface": "#0b1c30",

                        "on-primary": "#ffffff",

                        "primary-container": "#0052cc",

                        "on-secondary-container": "#006374",

                        "on-primary-fixed": "#001848",

                        "surface-variant": "#d3e4fe",

                        "outline-variant": "#c3c6d6",

                        "on-secondary-fixed": "#001f26",

                        "secondary-fixed-dim": "#5dd6f3",

                        "on-tertiary-fixed-variant": "#930014"

                    },


                    borderRadius: {

                        DEFAULT: "0.25rem",

                        lg: "0.5rem",

                        xl: "0.75rem",

                        full: "9999px"

                    },


                    spacing: {

                        "margin-mobile": "16px",

                        "margin-desktop": "40px",

                        base: "8px",

                        gutter: "24px",

                        "container-max": "1280px"

                    },


                    fontFamily: {

                        "headline-md": ["Inter"],

                        "label-sm": ["Inter"],

                        "label-md": ["Inter"],

                        "display-lg": ["Inter"],

                        "headline-lg-mobile": ["Inter"],

                        "headline-lg": ["Inter"],

                        "body-md": ["Inter"],

                        "body-lg": ["Inter"]

                    },


                    fontSize: {

                        "headline-md": [
                            "24px",
                            {
                                lineHeight: "32px",
                                fontWeight: "600"
                            }
                        ],

                        "label-sm": [
                            "12px",
                            {
                                lineHeight: "16px",
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

                        "display-lg": [
                            "48px",
                            {
                                lineHeight: "56px",
                                letterSpacing: "-0.02em",
                                fontWeight: "700"
                            }
                        ],

                        "headline-lg-mobile": [
                            "24px",
                            {
                                lineHeight: "32px",
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
                        ],

                        "body-lg": [
                            "18px",
                            {
                                lineHeight: "28px",
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
        href="../css/opd-booking.css"
    >

</head>


<body
    class="bg-background font-body-md text-on-surface min-h-screen flex flex-col"
>


<!-- ==========================================================
                            NAVBAR
========================================================== -->

<nav
    class="fixed top-0 w-full z-50 bg-surface/70 backdrop-blur-xl shadow-sm"
>

    <div
        class="opd-nav-inner relative flex justify-between items-center px-margin-desktop py-4 max-w-container-max mx-auto"
    >

        <div class="flex items-center gap-8">

            <a
                href="index.php"
                class="font-headline-md text-headline-md font-bold text-primary"
            >
                Health Hub
            </a>

        </div>


        <div
            class="hidden md:flex items-center gap-8 absolute left-1/2 -translate-x-1/2"
        >

            <a
                class="text-primary dark:text-primary-fixed font-bold border-b-2 border-primary transition-colors duration-200 py-1"
                href="index.php"
            >
                Home
            </a>


            <a
                class="text-on-surface-variant dark:text-outline-variant hover:text-primary transition-colors duration-200"
                href="specialists.php"
            >
                Specialists
            </a>


            <a
                class="text-on-surface-variant dark:text-outline-variant hover:text-primary transition-colors duration-200"
                href="find-a-doctor.php"
            >
                Find a Doctor
            </a>

        </div>

    </div>

</nav>


<!-- ==========================================================
                            MAIN
========================================================== -->

<main
    class="opd-main mt-24 px-margin-desktop max-w-container-max mx-auto w-full pb-12 flex flex-col gap-8"
>


    <!-- ======================================================
                    PAGE HEADER
    ======================================================= -->

    <header
        class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6"
    >

        <div class="flex flex-col gap-1">

            <h1
                class="opd-title font-headline-lg text-headline-lg text-on-background"
            >
                OPD Booking -
                <?= htmlspecialchars($doctor["name"]) ?>
            </h1>


            <p
                class="text-on-surface-variant font-label-md"
            >
                Schedule clinical appointments with precision and ease.
            </p>


            <h2
                class="mt-4 text-[25px] font-semibold text-green-700"
            >
                Appointment Slots Available = 04
            </h2>

        </div>


        <!-- ==================================================
                        DOCTOR CARD
        =================================================== -->

        <div
            class="doctor-card bg-surface-container-lowest p-6 rounded-xl shadow-sm border border-outline-variant flex flex-col sm:flex-row items-center gap-6 max-w-2xl w-full md:w-auto"
        >

            <div
                class="w-20 h-20 rounded-xl overflow-hidden shadow-inner flex-shrink-0"
            >

                <img
                    class="w-full h-full object-cover"
                    src="<?= htmlspecialchars($doctor["image"]) ?>"
                    alt="<?= htmlspecialchars($doctor["name"]) ?>"
                >

            </div>


            <div class="flex flex-col gap-1">

                <div class="flex items-center gap-2">

                    <span
                        class="doctor-name font-headline-md text-primary"
                    >
                        <?= htmlspecialchars($doctor["name"]) ?>
                    </span>


                    <span
                        class="doctor-role bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider"
                    >
                        <?= htmlspecialchars($doctor["role"]) ?>
                    </span>

                </div>


                <div
                    class="mt-2 text-label-md text-on-surface-variant"
                >

                    <div
                        class="flex items-center gap-2"
                    >

                        <span
                            class="material-symbols-outlined text-[18px] text-primary"
                        >
                            groups
                        </span>


                        <span
                            class="text-primary font-bold"
                        >
                            12 Slots Available
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </header>


    <!-- ======================================================
                    DATE FILTER
    ======================================================= -->

    <section
        class="date-filter flex items-center justify-start bg-surface-container-low p-4 rounded-xl border border-outline-variant/30"
    >

        <div
            class="date-picker flex items-center bg-surface-container-lowest rounded-lg border border-outline-variant p-1 shadow-sm"
        >

            <button
                class="p-2 hover:bg-surface-container rounded-md transition-colors text-on-surface-variant hover:text-primary flex items-center justify-center"
                id="previousDateButton"
                type="button"
                aria-label="Previous date"
            >

                <span
                    class="material-symbols-outlined text-[20px] font-bold"
                >
                    chevron_left
                </span>

            </button>


            <div
                class="date-display relative flex items-center px-4 gap-4 border-x border-outline-variant/30 min-w-[200px] justify-between"
            >

                <div
                    class="flex flex-col items-center flex-grow select-none"
                >

                    <span
                        class="text-[10px] text-outline uppercase font-bold tracking-wider"
                        id="selectedDateLabel"
                    >
                        Today
                    </span>


                    <span
                        class="text-label-md font-bold text-on-surface"
                        data-selected-date
                    >
                        17 May 2026
                    </span>

                </div>


                <div
                    class="relative cursor-pointer p-1.5 rounded-md hover:bg-surface-container text-primary flex items-center justify-center transition-colors"
                >

                    <span
                        class="material-symbols-outlined text-[20px]"
                    >
                        calendar_today
                    </span>


                    <input
                        class="absolute inset-0 opacity-0 cursor-pointer w-full h-full p-0 border-0"
                        id="appointmentDateInput"
                        type="date"
                    >

                </div>

            </div>


            <button
                class="p-2 hover:bg-surface-container rounded-md transition-colors text-on-surface-variant hover:text-primary flex items-center justify-center"
                id="nextDateButton"
                type="button"
                aria-label="Next date"
            >

                <span
                    class="material-symbols-outlined text-[20px] font-bold"
                >
                    chevron_right
                </span>

            </button>

        </div>

    </section>


    <!-- ======================================================
                        CONTENT
    ======================================================= -->

    <div
        class="grid grid-cols-1 lg:grid-cols-12 gap-8"
    >

        <div
            class="lg:col-span-12 flex flex-col gap-4"
        >


            <?php foreach ($shifts as $shift): ?>

                <?php

                $statusClasses = [
                    "open" => "bg-green-50 border-green-300",
                    "closed" => "bg-red-50 border-red-300",
                    "full" => "bg-slate-200 border-slate-400"
                ];

                $textClasses = [
                    "open" => "text-green-700",
                    "closed" => "text-red-700",
                    "full" => "text-slate-700"
                ];

                $statusDotClasses = [
                    "open" => "bg-green-600",
                    "closed" => "bg-red-600",
                    "full" => "bg-slate-600"
                ];

                ?>


                <!-- ==================================================
                            SHIFT HEADER
                =================================================== -->

                <div
                    class="shift-row flex flex-col lg:flex-row gap-4 mb-5"
                >

                    <button
                        onclick="toggleShift('shift<?= $shift["id"] ?>')"
                        class="shift-button w-full border-2 border-violet-500 rounded-xl bg-white hover:bg-violet-50 transition px-4 sm:px-6 py-5"
                        type="button"
                    >

                        <div
                            class="shift-summary grid grid-cols-[180px_1fr_300px_40px] items-center"
                        >

                            <div class="whitespace-nowrap">

                                <span
                                    class="text-[20px] font-bold text-blue-700"
                                >
                                    <?= htmlspecialchars($shift["name"]) ?>
                                </span>

                            </div>


                            <div
                                class="whitespace-nowrap text-center"
                            >

                                <span
                                    class="text-[20px] font-bold text-emerald-700"
                                >
                                    <?= htmlspecialchars($shift["type"]) ?>
                                </span>

                            </div>


                            <div
                                class="whitespace-nowrap text-center"
                            >

                                <span
                                    class="text-[20px] font-bold text-orange-600"
                                >
                                    OPD Time:
                                    <?= htmlspecialchars($shift["opd_time"]) ?>
                                </span>

                            </div>


                            <span
                                id="icon-shift<?= $shift["id"] ?>"
                                class="material-symbols-outlined text-3xl text-purple-600"
                            >
                                expand_more
                            </span>

                        </div>

                    </button>


                    <!-- ==================================================
                                BOOKING WINDOW
                    =================================================== -->

                    <div
                        class="booking-window w-[380px] flex-shrink-0 <?= $statusClasses[$shift["status_type"]] ?> border rounded-xl p-5 flex flex-col justify-center"
                    >

                        <span
                            class="text-xs font-bold uppercase <?= $textClasses[$shift["status_type"]] ?>"
                        >
                            Allowed Booking Time
                        </span>


                        <span
                            class="text-2xl font-bold <?= $textClasses[$shift["status_type"]] ?> mt-2"
                        >
                            <?= htmlspecialchars($shift["booking_time"]) ?>
                        </span>


                        <div
                            class="mt-4 flex items-center justify-between"
                        >

                            <div
                                class="flex items-center gap-2"
                            >

                                <div
                                    class="w-2 h-2 rounded-full <?= $statusDotClasses[$shift["status_type"]] ?>"
                                ></div>


                                <span
                                    class="<?= $textClasses[$shift["status_type"]] ?> font-medium"
                                >
                                    <?= htmlspecialchars($shift["status"]) ?>
                                </span>

                            </div>


                            <button
                                onclick="openBookingDetails(<?= $shift["id"] ?>)"
                                class="text-sm font-semibold <?= $textClasses[$shift["status_type"]] ?> hover:underline transition"
                                type="button"
                            >
                                View Details
                            </button>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                            SHIFT CONTENT
                =================================================== -->

                <div
                    id="shift<?= $shift["id"] ?>"
                    class="hidden"
                >

                    <?php if ($shift["id"] === 1): ?>

                        <div class="w-full overflow-x-auto">

                            <table
                                class="slot-table w-full min-w-[600px] text-left border-collapse"
                            >

                                <thead>

                                    <tr
                                        class="bg-surface-container border-b border-outline-variant"
                                    >

                                        <th
                                            class="px-6 py-4 font-label-md text-on-surface"
                                        >
                                            Time Slot
                                        </th>


                                        <th
                                            class="px-6 py-4 font-label-md text-on-surface"
                                        >
                                            Status
                                        </th>


                                        <th
                                            class="px-6 py-4 font-label-md text-on-surface"
                                        >
                                            OPD Type
                                        </th>


                                        <th
                                            class="w-44 px-6 py-4 font-label-md text-on-surface text-center"
                                        >
                                            Action
                                        </th>

                                    </tr>

                                </thead>


                                <tbody
                                    class="divide-y divide-outline-variant/30"
                                >


                                    <?php foreach ($slots as $slot): ?>

                                        <?php

                                        $isAvailable =
                                            $slot["status_type"] === "available";

                                        $isChecked =
                                            $slot["status_type"] === "checked";

                                        $isAbsent =
                                            $slot["status_type"] === "absent";

                                        $isBooked =
                                            $slot["status_type"] === "booked";

                                        ?>


                                        <tr
                                            class="<?= $isAvailable ? 'hover:bg-surface-container-low transition-colors group' : 'bg-surface-container-lowest/50 opacity-70' ?>"
                                        >

                                            <!-- TIME -->

                                            <td
                                                class="px-6 py-4 text-left"
                                            >

                                                <div
                                                    class="flex items-center gap-3"
                                                >

                                                    <div
                                                        class="w-2 h-2 rounded-full
                                                        <?= $isAvailable ? 'bg-green-700' : ($isBooked ? 'bg-error' : ($isChecked ? 'bg-orange-700' : 'bg-green-700')) ?>"
                                                    ></div>


                                                    <span
                                                        class="font-bold
                                                        <?= $isAvailable ? 'text-green-700' : ($isChecked ? 'text-orange-700' : ($isBooked ? 'text-red-700' : 'text-green-700')) ?>"
                                                    >
                                                        <?= htmlspecialchars($slot["time"]) ?>
                                                    </span>

                                                </div>

                                            </td>


                                            <!-- STATUS -->

                                            <td
                                                class="px-6 py-4 text-left"
                                            >

                                                <?php if ($isAvailable): ?>

                                                    <span
                                                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700 border border-green-200"
                                                    >
                                                        Available
                                                    </span>

                                                <?php elseif ($isChecked): ?>

                                                    <span
                                                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-orange-100 text-orange-700 border border-orange-200"
                                                    >
                                                        Checked
                                                    </span>

                                                <?php elseif ($isAbsent): ?>

                                                    <span
                                                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-slate-100 text-slate-700 border border-slate-200"
                                                    >
                                                        Absent
                                                    </span>

                                                <?php else: ?>

                                                    <span
                                                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-red-100 text-red-700 border border-red-200"
                                                    >
                                                        Booked
                                                    </span>

                                                <?php endif; ?>

                                            </td>


                                            <!-- OPD TYPE -->

                                            <td
                                                class="px-6 py-4 text-left"
                                            >

                                                <select
                                                    class="w-full max-w-[300px] px-3 py-2 border border-outline-variant rounded-lg"
                                                    <?= (!$isAvailable) ? 'disabled' : '' ?>
                                                >

                                                    <?php foreach ($slot["types"] as $type): ?>

                                                        <option>
                                                            <?= htmlspecialchars($type) ?>
                                                        </option>

                                                    <?php endforeach; ?>

                                                </select>

                                            </td>


                                            <!-- ACTION -->

                                            <td
                                                class="px-6 py-4 text-right"
                                            >

                                                <?php if ($isAvailable): ?>

                                                    <button
                                                        class="bg-green-700 text-on-primary px-5 py-2 rounded-lg text-label-sm hover:bg-primary-container transition-all shadow-sm"
                                                        onclick="openBookingModal('<?= htmlspecialchars($slot["time"]) ?>')"
                                                        type="button"
                                                    >
                                                        Book Slot
                                                    </button>

                                                <?php else: ?>

                                                    <button
                                                        class="bg-outline-variant text-on-surface-variant/50 px-5 py-2 rounded-lg text-label-sm cursor-not-allowed"
                                                        disabled
                                                    >
                                                        Unavailable
                                                    </button>

                                                <?php endif; ?>

                                            </td>

                                        </tr>

                                    <?php endforeach; ?>

                                </tbody>

                            </table>

                        </div>

                    <?php else: ?>

                        <div
                            class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant overflow-hidden"
                        >
                        </div>

                    <?php endif; ?>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</main>


<!-- ==========================================================
                            FOOTER
========================================================== -->

<footer
    class="opd-footer bg-surface-container-lowest py-12 mt-auto border-t border-outline-variant"
>

    <div
        class="opd-footer-inner flex flex-col md:flex-row justify-between items-center px-margin-desktop max-w-container-max mx-auto gap-8"
    >

        <div
            class="flex flex-col gap-2 items-center md:items-start"
        >

            <span
                class="font-headline-md text-primary font-bold"
            >
                Health Hub
            </span>


            <p
                class="text-on-surface-variant font-label-md"
            >
                Empowering healthcare through clinical precision.
            </p>

        </div>


        <div class="footer-links flex gap-8">

            <a
                class="text-on-surface-variant hover:text-primary transition-colors font-label-md"
                href="#"
            >
                Privacy Policy
            </a>


            <a
                class="text-on-surface-variant hover:text-primary transition-colors font-label-md"
                href="#"
            >
                Terms of Service
            </a>


            <a
                class="text-on-surface-variant hover:text-primary transition-colors font-label-md"
                href="#"
            >
                Support
            </a>


            <a
                class="text-on-surface-variant hover:text-primary transition-colors font-label-md"
                href="#"
            >
                Compliance
            </a>

        </div>


        <p
            class="text-on-surface-variant font-label-md"
        >
            © 2024 Health Hub Medical Systems. All rights reserved.
        </p>

    </div>

</footer>


<!-- ==========================================================
                        MODAL OVERLAY
========================================================== -->

<div
    class="fixed inset-0 bg-on-background/60 backdrop-blur-sm z-[60] flex items-center justify-center hidden opacity-0 transition-opacity duration-300"
    id="modalOverlay"
>


    <!-- ======================================================
                        CONFIRM MODAL
    ======================================================= -->

    <div
        class="bg-surface-container-lowest rounded-2xl p-8 max-w-md w-full shadow-2xl scale-95 transition-transform duration-300 hidden"
        id="confirmModal"
    >

        <div
            class="flex flex-col items-center text-center gap-4"
        >

            <div
                class="w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center mb-2"
            >

                <span
                    class="material-symbols-outlined text-primary text-4xl"
                >
                    book_online
                </span>

            </div>


            <h2
                class="font-headline-md text-on-surface"
            >
                Confirm OPD Booking
            </h2>


            <p
                class="text-body-md text-on-surface-variant"
            >
                Do you want to book this OPD slot for the following details?
            </p>


            <div
                class="w-full bg-slate-50 rounded-xl border border-slate-200 p-5 mt-3 text-left"
            >

                <div
                    class="flex justify-between mb-3"
                >

                    <span class="text-sm text-gray-500">
                        Doctor
                    </span>


                    <span
                        class="font-semibold text-gray-800"
                    >
                        <?= htmlspecialchars($doctor["name"]) ?>
                    </span>

                </div>


                <div
                    class="flex justify-between mb-3"
                >

                    <span class="text-sm text-gray-500">
                        Date
                    </span>


                    <span
                        class="font-semibold text-gray-800"
                        data-selected-date
                    >
                        17 May 2026
                    </span>

                </div>


                <div class="flex justify-between">

                    <span class="text-sm text-gray-500">
                        Time
                    </span>


                    <span
                        class="font-bold text-blue-700"
                        id="selectedTimeDisplay"
                    >
                        13:00
                    </span>

                </div>

            </div>


            <p
                class="mt-5 text-[13px] font-semibold text-red-600 leading-5"
            >
                Please come 10 minutes before of your Appointment Time Slot.
            </p>


            <p
                class="mt-3 text-[13px] font-semibold text-green-600 leading-5"
            >
                Note:
                <span class="text-green-600">
                    ₹1 will be debited from your DigiBalance account as a processing fee for confirmation of Appointment.
                </span>
            </p>


            <div
                class="grid grid-cols-2 gap-4 w-full mt-6"
            >

                <button
                    class="py-3 rounded-xl bg-surface-container-highest text-on-surface font-bold hover:bg-outline-variant transition-colors"
                    onclick="closeModals()"
                    type="button"
                >
                    Cancel
                </button>


                <button
                    class="py-3 rounded-xl bg-green-600 text-white font-bold hover:bg-green-700 transition-colors shadow-lg shadow-green-600/20"
                    onclick="showSuccessModal()"
                    type="button"
                >
                    Confirm Booking
                </button>

            </div>

        </div>

    </div>


    <!-- ======================================================
                        SUCCESS MODAL
    ======================================================= -->

    <div
        class="bg-surface-container-lowest rounded-2xl p-8 max-w-md w-full shadow-2xl scale-95 transition-transform duration-300 hidden"
        id="successModal"
    >

        <div
            class="flex flex-col items-center text-center gap-4"
        >

            <div
                class="w-20 h-20 rounded-full bg-green-100 flex items-center justify-center mb-2"
            >

                <span
                    class="material-symbols-outlined text-green-600 text-5xl font-bold"
                >
                    check_circle
                </span>

            </div>


            <h2
                class="font-headline-md text-on-surface"
            >
                Booking Successful!
            </h2>


            <p
                class="text-body-md text-on-surface-variant"
            >
                Your appointment has been confirmed. A confirmation SMS and Email have been sent to your registered contact.
            </p>


            <div
                class="w-full flex flex-col gap-1 text-center mt-2"
            >

                <span
                    class="text-label-sm text-outline"
                >
                    Reference ID
                </span>


                <span
                    class="font-mono text-primary font-bold"
                >
                    #HH-OPD-99201
                </span>

            </div>


            <button
                class="w-full mt-6 py-3 rounded-xl bg-primary text-on-primary font-bold hover:bg-primary-container transition-colors"
                onclick="closeModals()"
                type="button"
            >
                OK, Great!
            </button>

        </div>

    </div>

</div>


<!-- ==========================================================
                        TOAST
========================================================== -->

<div
    class="fixed bottom-8 left-1/2 -translate-x-1/2 z-[100] px-6 py-3 bg-inverse-surface text-inverse-on-surface rounded-full shadow-xl flex items-center gap-3 translate-y-20 opacity-0 transition-all duration-300"
    id="toast"
>

    <span
        class="material-symbols-outlined text-error"
    >
        error
    </span>


    <span
        class="text-label-md font-medium"
    >
        Booking cancelled. Slot remains available.
    </span>

</div>


<!-- ==========================================================
                    BOOKING DETAILS MODAL
========================================================== -->

<div
    id="bookingDetailsModal"
    class="fixed inset-0 hidden bg-black/40 z-[70] items-center justify-center"
>

    <div
        class="bg-white rounded-2xl p-6 w-[500px] max-w-[90%] shadow-2xl relative"
    >

        <button
            onclick="closeBookingDetails()"
            class="absolute top-4 right-5 text-3xl text-gray-500 hover:text-red-500"
            type="button"
        >
            &times;
        </button>


        <h2
            class="text-2xl font-bold text-primary mb-5"
        >
            Booking Details
        </h2>


        <div class="space-y-4">

            <div class="flex justify-between">

                <span class="text-gray-500">
                    Allowed Booking Time
                </span>


                <span
                    id="bookingTime"
                    class="font-semibold"
                >
                    10:00 – 13:30
                </span>

            </div>


            <div class="flex justify-between">

                <span class="text-gray-500">
                    OPD Time
                </span>


                <span
                    id="bookingOpdTime"
                    class="font-semibold"
                >
                    13:00 - 15:00
                </span>

            </div>


            <div class="flex justify-between">

                <span class="text-gray-500">
                    Status
                </span>


                <span
                    id="bookingStatus"
                    class="text-green-600 font-semibold"
                >
                    Booking Open
                </span>

            </div>


            <div class="flex justify-between">

                <span class="text-gray-500">
                    Doctor
                </span>


                <span>
                    <?= htmlspecialchars($doctor["name"]) ?>
                </span>

            </div>


            <div class="flex justify-between">

                <span class="text-gray-500">
                    Hospital
                </span>


                <span>
                    <?= htmlspecialchars($doctor["hospital"]) ?>
                </span>

            </div>

        </div>

    </div>

</div>


<!-- ==========================================================
                            JS
========================================================== -->

<script
    src="../js/opd-booking.js"
></script>


</body>

</html>