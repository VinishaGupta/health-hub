<?php

// ======================================================
// HOSPITAL / MEDICAL FIRM DATA
// Replace these values with database values later.
// ======================================================

$medicalFirmName = "City Care Hospital";
$shortName = "CCH";

$logo = "Logo";

$managedByLabel = "Managed by / Promoted by / Conducted by";
$managedBy = "India Youth Old Welfare Society, New Delhi";

$establishedDate = "05 June 2010";

$locationName = "Nagpur, Maharashtra";

$website = "https://www.lifeline.com";
$websiteDisplay = "www.lifeline.com";

$googleLocation = "https://maps.google.com";
$googleLocationText = "Google Link";

// ======================================================
// MEDICAL / HEALTH SYSTEM DATA
// ======================================================

$medicalSystems = [
    "Ayurveda"
];

$publicHealthcareSystems = [
    "Semi-Government Hospital",
    "Charity Hospital"
];

$cureCenters = [
    "Neurology Hospital",
    "Dental Hospital"
];

$therapies = [
    "Autism Therapy",
    "Autologous Immune Enhancement Therapy",
    "Balneotherapy",
    "Bioidentical Hormone Replacement Therapy",
    "Biotherapy",
    "Blood Irradiation Therapy",
    "Brachytherapy",
    "Cardiac Resynchronization Therapy"
];

$healthInsuranceCompanies = [
    "HDFC Health Insurance",
    "Star Health Insurance",
    "ICICI Lombard Health Insurance"
];

// ======================================================
// ADDRESS
// ======================================================

$address = [
    "Plot No. 42, Sunrise Medical Complex",
    "Medical Square Colony, Dhantoli",
    "Behind SBI Main Branch",
    "Opposite Government Medical College",
    "Nagpur Urban, Nagpur - 440010",
    "Maharashtra, India."
];

// ======================================================
// HOSPITAL NAME LANGUAGES
// ======================================================

$hospitalNames = [
    $medicalFirmName,
    "सिटी केयर हॉस्पिटल",
    "সিটি কেয়ার হাসপাতাল"
];

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title><?= htmlspecialchars($medicalFirmName) ?></title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
    >

    <style>

        /* ======================================================
           GLOBAL
        ====================================================== */

        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden;
        }

        body {
            font-family: "Inter", sans-serif;
            background: #f8f9ff;
        }


        /* ======================================================
           HOSPITAL HEADER
        ====================================================== */

        .hospital-header-container {
            width: 100%;
        }

        .hospital-header-main {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 40px;
            width: 100%;
        }


        /* ======================================================
           HOSPITAL INFORMATION
        ====================================================== */

        .hospital-info {
            display: flex;
            align-items: flex-start;
            gap: 24px;
            flex: 1;
            min-width: 0;
        }

        .hospital-details {
            flex: 1;
            min-width: 0;
        }


        /* ======================================================
           LOGO
        ====================================================== */

        .hospital-logo {
            width: 95px;
            height: 95px;

            border: 4px solid #14a5d8;
            border-radius: 9999px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 22px;
            font-weight: 700;

            color: #0B4DA2;
            background: #fff;

            flex-shrink: 0;
        }


        /* ======================================================
           HOSPITAL NAME
        ====================================================== */

        #hospitalName {
            transition: opacity .35s ease;
            overflow-wrap: anywhere;
            word-break: break-word;
        }


        /* ======================================================
           MANAGED BY
        ====================================================== */

        .managed-by {
            display: flex;
            align-items: flex-start;
            gap: 8px;
            flex-wrap: wrap;
        }

        .managed-by-label {
            line-height: 1.5;
        }

        .managed-by-name {
            line-height: 1.5;
            max-width: 100%;
            overflow-wrap: anywhere;
        }


        /* ======================================================
           ESTABLISHMENT
        ====================================================== */

        .established-row {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
        }


        /* ======================================================
           LOCATION
        ====================================================== */

        .location-row {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .location-name {
            overflow-wrap: anywhere;
        }


        /* ======================================================
           RIGHT SIDE BUTTONS
        ====================================================== */

        .hospital-buttons {
            display: flex;
            flex-direction: column;
            gap: 16px;

            width: 280px;
            flex-shrink: 0;

            margin-left: auto;
        }

        .hospital-buttons a {
            width: 100%;
            text-align: center;
            overflow-wrap: anywhere;
        }


        /* ======================================================
           MAIN CONTENT
        ====================================================== */

        .main-container {
            width: 100%;
        }


        /* ======================================================
           MEDICAL CARDS
        ====================================================== */

        .medical-grid {
            width: 100%;
        }

        .medical-card {
            min-width: 0;
        }

        .medical-card h3 {
            overflow-wrap: anywhere;
        }

        .medical-card-content p {
            overflow-wrap: anywhere;
        }


        /* ======================================================
           ADDRESS
        ====================================================== */

        .address-section {
            width: 100%;
        }

        .address-text {
            overflow-wrap: anywhere;
        }


        /* ======================================================
           TABLET
        ====================================================== */

        @media (max-width: 1024px) {

            .hospital-header-main {
                gap: 25px;
            }

            .hospital-info {
                gap: 18px;
            }

            .hospital-buttons {
                width: 230px;
            }

            #hospitalName {
                font-size: 32px !important;
            }

        }


        /* ======================================================
           MOBILE
        ====================================================== */

        @media (max-width: 768px) {

            /* --------------------------------------------------
               HEADER
            -------------------------------------------------- */

            .hospital-header-container {
                padding: 20px 16px !important;
            }

            .hospital-header-main {
                display: flex;
                flex-direction: column;
                gap: 22px;
            }


            /* --------------------------------------------------
               HOSPITAL INFORMATION
            -------------------------------------------------- */

            .hospital-info {
                width: 100%;
                gap: 14px;
                align-items: flex-start;
            }

            .hospital-details {
                width: calc(100% - 86px);
            }


            /* --------------------------------------------------
               LOGO
            -------------------------------------------------- */

            .hospital-logo {
                width: 72px;
                height: 72px;
                min-width: 72px;

                border-width: 3px;

                font-size: 17px;
            }


            /* --------------------------------------------------
               SHORT NAME
            -------------------------------------------------- */

            .short-name {
                font-size: 12px !important;
                line-height: 1.2;
            }


            /* --------------------------------------------------
               HOSPITAL NAME
            -------------------------------------------------- */

            #hospitalName {
                font-size: 27px !important;
                line-height: 1.15 !important;

                margin-top: 5px !important;
            }


            /* --------------------------------------------------
               MANAGED BY
            -------------------------------------------------- */

            .managed-by {
                display: block;

                margin-top: 10px !important;
            }

            .managed-by-label {
                display: block;

                font-size: 13px !important;
                line-height: 1.5;

                margin-bottom: 7px;
            }

            .managed-by-name {
                display: block;

                width: 100%;

                padding: 9px 13px !important;

                font-size: 13px !important;

                border-radius: 17px !important;
            }


            /* --------------------------------------------------
               ESTABLISHED
            -------------------------------------------------- */

            .established-row {
                margin-top: 12px !important;
                gap: 6px;
            }

            .established-row .material-symbols-outlined {
                font-size: 19px !important;
            }

            .established-label {
                font-size: 13px !important;
            }

            .established-date {
                font-size: 13px !important;
                padding: 6px 10px !important;
            }


            /* --------------------------------------------------
               LOCATION
            -------------------------------------------------- */

            .location-row {
                margin-top: 12px !important;
                gap: 6px;
            }

            .location-row .material-symbols-outlined {
                font-size: 21px !important;
            }

            .location-name {
                font-size: 18px !important;
            }


            /* --------------------------------------------------
               WEBSITE / GOOGLE BUTTONS
            -------------------------------------------------- */

            .hospital-buttons {
                width: 100%;

                margin: 0 !important;

                gap: 10px;
            }

            .hospital-buttons a {
                width: 100%;

                padding: 13px 15px !important;

                font-size: 15px !important;

                border-radius: 14px !important;
            }


            /* --------------------------------------------------
               MAIN CONTENT
            -------------------------------------------------- */

            .main-container {
                padding: 32px 16px !important;
            }


            /* --------------------------------------------------
               PAGE HEADING
            -------------------------------------------------- */

            .page-heading {
                margin-bottom: 30px !important;
            }

            .page-heading h1 {
                font-size: 34px !important;
                line-height: 1.15 !important;
            }

            .page-heading p {
                font-size: 16px !important;
                line-height: 1.6 !important;

                margin-top: 12px !important;
            }


            /* --------------------------------------------------
               MANAGEMENT BUTTON
            -------------------------------------------------- */

            .management-section {
                margin-top: -5px !important;
                margin-bottom: 30px !important;
            }

            .management-section a {
                width: 100%;

                justify-content: center;

                font-size: 16px !important;

                padding: 13px 18px !important;
            }


            /* --------------------------------------------------
               MEDICAL GRID
            -------------------------------------------------- */

            .medical-grid {
                grid-template-columns: 1fr !important;
                gap: 16px !important;
            }

            .medical-card {
                grid-column: auto !important;

                padding: 20px !important;

                border-radius: 16px !important;
            }


            /* --------------------------------------------------
               CARD HEADINGS
            -------------------------------------------------- */

            .medical-card h3 {
                font-size: 18px !important;
                line-height: 1.35;
            }


            /* --------------------------------------------------
               CARD CONTENT
            -------------------------------------------------- */

            .medical-card-content {
                font-size: 16px !important;
                line-height: 1.6;
            }


            /* --------------------------------------------------
               ADDRESS SECTION
            -------------------------------------------------- */

            .address-section {
                margin-top: 22px !important;

                padding: 22px 18px !important;

                border-radius: 16px !important;
            }

            .address-grid {
                grid-template-columns: 1fr !important;

                gap: 32px !important;
            }

            .address-text {
                font-size: 16px !important;
                line-height: 1.8 !important;
            }

        }


        /* ======================================================
           SMALL PHONES
        ====================================================== */

        @media (max-width: 400px) {

            .hospital-header-container {
                padding: 18px 12px !important;
            }

            .hospital-info {
                gap: 11px;
            }

            .hospital-logo {
                width: 62px;
                height: 62px;
                min-width: 62px;

                font-size: 15px;
            }

            .hospital-details {
                width: calc(100% - 73px);
            }

            .short-name {
                font-size: 11px !important;
            }

            #hospitalName {
                font-size: 23px !important;
            }

            .managed-by-label {
                font-size: 12px !important;
            }

            .managed-by-name {
                font-size: 12px !important;
                padding: 8px 11px !important;
            }

            .established-label {
                font-size: 12px !important;
            }

            .established-date {
                font-size: 12px !important;
            }

            .location-name {
                font-size: 17px !important;
            }


            .main-container {
                padding-left: 12px !important;
                padding-right: 12px !important;
            }

            .page-heading h1 {
                font-size: 30px !important;
            }

            .page-heading p {
                font-size: 15px !important;
            }

            .medical-card {
                padding: 17px !important;
            }

            .medical-card h3 {
                font-size: 17px !important;
            }

            .medical-card-content {
                font-size: 15px !important;
            }

            .address-section {
                padding: 18px 15px !important;
            }

            .address-text {
                font-size: 15px !important;
                line-height: 1.75 !important;
            }

        }

    </style>

</head>


<body>


<!-- ==================================================
     HOSPITAL HEADER
=================================================== -->

<section class="border-b shadow-sm bg-white">

    <div class="max-w-7xl mx-auto px-8 py-6 hospital-header-container">

        <div class="hospital-header-main">


            <!-- ==================================================
                 LEFT SIDE / HOSPITAL INFORMATION
            =================================================== -->

            <div class="hospital-info">


                <!-- LOGO -->

                <div class="hospital-logo">

                    <?= htmlspecialchars($logo) ?>

                </div>


                <!-- HOSPITAL DETAILS -->

                <div class="hospital-details">


                    <!-- SHORT NAME -->

                    <?php if (!empty($shortName)): ?>

                        <p class="short-name text-sm font-semibold text-indigo-600 tracking-wide uppercase">

                            <?= htmlspecialchars($shortName) ?>

                        </p>

                    <?php endif; ?>


                    <!-- HOSPITAL NAME -->

                    <h1
                        id="hospitalName"
                        class="text-4xl font-bold text-[#0B4DA2] leading-tight mt-1"
                    >

                        <?= htmlspecialchars($hospitalNames[0]) ?>

                    </h1>


                    <!-- MANAGED BY -->

                    <?php if (!empty($managedBy)): ?>

                        <div class="managed-by mt-2">


                            <span class="managed-by-label text-sm font-semibold text-gray-700">

                                <?= htmlspecialchars($managedByLabel) ?>

                            </span>


                            <span class="managed-by-name px-3 py-1 rounded-full bg-slate-100 text-slate-700 text-sm font-medium">

                                <?= htmlspecialchars($managedBy) ?>

                            </span>


                        </div>

                    <?php endif; ?>


                    <!-- ESTABLISHMENT DATE -->

                    <?php if (!empty($establishedDate)): ?>

                        <div class="established-row mt-3">


                            <span class="material-symbols-outlined text-[#0B4DA2] text-[20px]">

                                calendar_month

                            </span>


                            <span class="established-label text-sm font-semibold text-gray-700">

                                Established

                            </span>


                            <span class="established-date px-3 py-1 rounded-full bg-blue-50 text-[#0B4DA2] text-sm font-semibold">

                                <?= htmlspecialchars($establishedDate) ?>

                            </span>


                        </div>

                    <?php endif; ?>


                    <!-- LOCATION -->

                    <?php if (!empty($locationName)): ?>

                        <div class="location-row mt-3">


                            <span class="material-symbols-outlined text-[#006878] text-[20px]">

                                location_on

                            </span>


                            <p class="location-name text-xl font-semibold text-[#006878]">

                                <?= htmlspecialchars($locationName) ?>

                            </p>


                        </div>

                    <?php endif; ?>


                </div>

            </div>


            <!-- ==================================================
                 RIGHT SIDE BUTTONS
            =================================================== -->

            <div class="hospital-buttons">


                <!-- WEBSITE -->

                <?php if (!empty($website)): ?>

                    <a
                        href="<?= htmlspecialchars($website) ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="px-8 py-4 border-4 border-sky-500 rounded-2xl text-lg font-semibold bg-white shadow"
                    >

                        <?= htmlspecialchars($websiteDisplay) ?>

                    </a>

                <?php endif; ?>


                <!-- GOOGLE LOCATION -->

                <?php if (!empty($googleLocation)): ?>

                    <a
                        href="<?= htmlspecialchars($googleLocation) ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="px-14 py-4 bg-blue-600 text-white rounded-2xl text-lg font-bold shadow"
                    >

                        <?= htmlspecialchars($googleLocationText) ?>

                    </a>

                <?php endif; ?>


            </div>


        </div>

    </div>

</section>



<!-- ==================================================
     MAIN CONTENT
=================================================== -->

<div class="max-w-6xl mx-auto px-8 py-12 main-container">


    <!-- ==================================================
         PAGE HEADER
    =================================================== -->

    <header class="mb-12 page-heading">


        <h1 class="text-5xl md:text-5xl font-extrabold text-blue-700 leading-tight">

            Health Headquarters

        </h1>


        <p class="mt-4 text-xl text-slate-600 max-w-4xl leading-relaxed">

            Explore medical systems, therapies, healthcare facilities,
            insurance providers and complete hospital information.

        </p>


    </header>



    <!-- ==================================================
         MANAGEMENT BUTTON
    =================================================== -->

    <div class="mb-12 -mt-6 management-section">


        <a
            href="management.html"
            class="inline-flex items-center gap-3
                   bg-blue-600 hover:bg-blue-700
                   text-white font-bold text-lg
                   px-7 py-3.5
                   rounded-xl
                   shadow-md hover:shadow-lg
                   transition-all duration-200
                   hover:-translate-y-0.5"
        >


            <span class="material-symbols-outlined text-[24px]">

                business

            </span>


            Management


        </a>


    </div>



    <!-- ==================================================
         MEDICAL INFORMATION
    =================================================== -->

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 medical-grid">


        <!-- ==================================================
             DISTINCT MEDICAL SYSTEMS
        =================================================== -->

        <div class="border border-gray-300 rounded-2xl p-6 bg-white shadow-sm medical-card">


            <h3 class="text-sky-500 text-xl font-bold border-b-4 border-sky-500 pb-2 inline-block">

                Distinct Medical Systems

            </h3>


            <div class="mt-5 space-y-3 text-lg text-slate-700 medical-card-content">


                <?php foreach ($medicalSystems as $system): ?>

                    <p>

                        <?= htmlspecialchars($system) ?>

                    </p>

                <?php endforeach; ?>


            </div>


        </div>



        <!-- ==================================================
             PUBLIC HEALTHCARE SYSTEM
        =================================================== -->

        <div class="border border-gray-300 rounded-2xl p-6 bg-white shadow-sm medical-card">


            <h3 class="text-sky-500 text-xl font-bold border-b-4 border-sky-500 pb-2 inline-block">

                Public Healthcare System

            </h3>


            <div class="mt-5 space-y-3 text-lg text-slate-700 medical-card-content">


                <?php foreach ($publicHealthcareSystems as $system): ?>

                    <p>

                        <?= htmlspecialchars($system) ?>

                    </p>

                <?php endforeach; ?>


            </div>


        </div>



        <!-- ==================================================
             CURE CENTER
        =================================================== -->

        <div class="border border-gray-300 rounded-2xl p-6 bg-white shadow-sm medical-card">


            <h3 class="text-sky-500 text-xl font-bold border-b-4 border-sky-500 pb-2 inline-block">

                Cure Center

            </h3>


            <div class="mt-5 space-y-3 text-lg text-slate-700 medical-card-content">


                <?php foreach ($cureCenters as $center): ?>

                    <p>

                        <?= htmlspecialchars($center) ?>

                    </p>

                <?php endforeach; ?>


            </div>


        </div>



        <!-- ==================================================
             THERAPY HUB
        =================================================== -->

        <div class="border border-gray-300 rounded-2xl p-6 bg-white shadow-sm medical-card">


            <h3 class="text-sky-500 text-xl font-bold border-b-4 border-sky-500 pb-2 inline-block">

                Therapy Hub

            </h3>


            <div class="mt-5 space-y-3 text-lg text-slate-700 medical-card-content">


                <?php foreach ($therapies as $therapy): ?>

                    <p>

                        <?= htmlspecialchars($therapy) ?>

                    </p>

                <?php endforeach; ?>


            </div>


        </div>



        <!-- ==================================================
             HEALTH INSURANCE COMPANY
        =================================================== -->

        <div
            class="border border-gray-300 rounded-2xl p-6 bg-white shadow-sm lg:col-span-2 medical-card"
        >


            <h3 class="text-sky-500 text-xl font-bold border-b-4 border-sky-500 pb-2 inline-block">

                Health Insurance Company

            </h3>


            <div class="mt-5 space-y-3 text-lg text-slate-700 medical-card-content">


                <?php foreach ($healthInsuranceCompanies as $company): ?>

                    <p>

                        <?= htmlspecialchars($company) ?>

                    </p>

                <?php endforeach; ?>


            </div>


        </div>


    </div>



    <!-- ==================================================
         ADDRESS
    =================================================== -->

    <div class="bg-blue-50 rounded-2xl border border-blue-100 p-8 mt-[28px] address-section">


        <div class="address-grid grid grid-cols-1 lg:grid-cols-2 gap-10">


            <div class="flex-1">


                <p class="text-xl leading-10 text-gray-800 address-text">


                    <span class="font-bold">

                        <?= htmlspecialchars($medicalFirmName) ?>

                    </span>


                    <?php foreach ($address as $line): ?>

                        <br>

                        <?= htmlspecialchars($line) ?>

                    <?php endforeach; ?>


                </p>


            </div>


        </div>


    </div>


</div>



<!-- ==================================================
     HOSPITAL NAME LANGUAGE ROTATION
=================================================== -->

<script>

const hospitalNames = <?= json_encode(
    $hospitalNames,
    JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
) ?>;

let current = 0;

setInterval(() => {

    const title = document.getElementById("hospitalName");

    if (!title) {
        return;
    }

    title.style.opacity = "0";

    setTimeout(() => {

        current = (current + 1) % hospitalNames.length;

        title.textContent = hospitalNames[current];

        title.style.opacity = "1";

    }, 300);

}, 2500);

</script>


</body>

</html>