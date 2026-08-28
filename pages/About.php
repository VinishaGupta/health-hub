```php
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

        body {
            margin: 0;
            font-family: "Inter", sans-serif;
            background: #fff;
        }

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

        #hospitalName {
            transition: opacity .35s ease;
        }

        @media (max-width: 768px) {

            .header {
                padding: 16px;
            }

            .hospital-logo {
                width: 70px;
                height: 70px;
                font-size: 18px;
            }

            #hospitalName {
                font-size: 26px !important;
            }

            .location {
                font-size: 16px !important;
            }

        }

    </style>

</head>


<body>


<!-- ==================================================
     HOSPITAL HEADER
=================================================== -->

<section class="border-b shadow-sm bg-white">

    <div class="max-w-7xl mx-auto px-8 py-6">

        <div class="flex justify-between items-center w-full gap-10">

            <!-- LEFT SIDE -->

            <div class="flex items-center gap-6 flex-1">

                <!-- Logo -->

                <div class="hospital-logo">
                    <?= htmlspecialchars($logo) ?>
                </div>


                <!-- Hospital Details -->

                <div class="flex flex-col">

                    <!-- Short Name -->

                    <?php if (!empty($shortName)): ?>

                        <p class="text-sm font-semibold text-indigo-600 tracking-wide uppercase">
                            <?= htmlspecialchars($shortName) ?>
                        </p>

                    <?php endif; ?>


                    <!-- Hospital Name -->

                    <h1
                        id="hospitalName"
                        class="text-4xl font-bold text-[#0B4DA2] leading-tight mt-1"
                    >
                        <?= htmlspecialchars($hospitalNames[0]) ?>
                    </h1>


                    <!-- Managed By -->

                    <?php if (!empty($managedBy)): ?>

                        <div class="mt-2 inline-flex items-center gap-2 flex-wrap">

                            <span class="text-sm font-semibold text-gray-700">
                                <?= htmlspecialchars($managedByLabel) ?>
                            </span>

                            <span class="px-3 py-1 rounded-full bg-slate-100 text-slate-700 text-sm font-medium">
                                <?= htmlspecialchars($managedBy) ?>
                            </span>

                        </div>

                    <?php endif; ?>


                    <!-- Establishment Date -->

                    <?php if (!empty($establishedDate)): ?>

                        <div class="mt-3 flex items-center gap-2">

                            <span class="material-symbols-outlined text-[#0B4DA2] text-[20px]">
                                calendar_month
                            </span>

                            <span class="text-sm font-semibold text-gray-700">
                                Established
                            </span>

                            <span class="px-3 py-1 rounded-full bg-blue-50 text-[#0B4DA2] text-sm font-semibold">
                                <?= htmlspecialchars($establishedDate) ?>
                            </span>

                        </div>

                    <?php endif; ?>


                    <!-- Location -->

                    <?php if (!empty($locationName)): ?>

                        <div class="mt-3 flex items-center gap-2">

                            <span class="material-symbols-outlined text-[#006878] text-[20px]">
                                location_on
                            </span>

                            <p class="text-xl font-semibold text-[#006878]">
                                <?= htmlspecialchars($locationName) ?>
                            </p>

                        </div>

                    <?php endif; ?>

                </div>

            </div>


            <!-- RIGHT SIDE BUTTONS -->

            <div class="flex flex-col gap-4 ml-auto mr-4">

                <?php if (!empty($website)): ?>

                    <a
                        href="<?= htmlspecialchars($website) ?>"
                        target="_blank"
                        class="px-8 py-4 border-4 border-sky-500 rounded-2xl text-lg font-semibold bg-white shadow"
                    >
                        <?= htmlspecialchars($websiteDisplay) ?>
                    </a>

                <?php endif; ?>


                <?php if (!empty($googleLocation)): ?>

                    <a
                        href="<?= htmlspecialchars($googleLocation) ?>"
                        target="_blank"
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

<div class="max-w-6xl mx-auto px-8 py-12">


    <!-- PAGE HEADER -->

    <header class="mb-12">

        <h1 class="text-5xl md:text-5xl font-extrabold text-blue-700 leading-tight">
            Health Headquarters
        </h1>

        <p class="mt-4 text-xl text-slate-600 max-w-4xl leading-relaxed">
            Explore medical systems, therapies, healthcare facilities,
            insurance providers and complete hospital information.
        </p>

    </header>


    <!-- MANAGEMENT BUTTON -->

    <div class="mb-12 -mt-6">

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

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">


        <!-- DISTINCT MEDICAL SYSTEMS -->

        <div class="border border-gray-300 rounded-2xl p-6 bg-white shadow-sm">

            <h3 class="text-sky-500 text-xl font-bold border-b-4 border-sky-500 pb-2 inline-block">
                Distinct Medical Systems
            </h3>

            <div class="mt-5 space-y-3 text-lg text-slate-700">

                <?php foreach ($medicalSystems as $system): ?>

                    <p>
                        <?= htmlspecialchars($system) ?>
                    </p>

                <?php endforeach; ?>

            </div>

        </div>



        <!-- PUBLIC HEALTHCARE SYSTEM -->

        <div class="border border-gray-300 rounded-2xl p-6 bg-white shadow-sm">

            <h3 class="text-sky-500 text-xl font-bold border-b-4 border-sky-500 pb-2 inline-block">
                Public Healthcare System
            </h3>

            <div class="mt-5 space-y-3 text-lg text-slate-700">

                <?php foreach ($publicHealthcareSystems as $system): ?>

                    <p>
                        <?= htmlspecialchars($system) ?>
                    </p>

                <?php endforeach; ?>

            </div>

        </div>



        <!-- CURE CENTER -->

        <div class="border border-gray-300 rounded-2xl p-6 bg-white shadow-sm">

            <h3 class="text-sky-500 text-xl font-bold border-b-4 border-sky-500 pb-2 inline-block">
                Cure Center
            </h3>

            <div class="mt-5 space-y-3 text-lg text-slate-700">

                <?php foreach ($cureCenters as $center): ?>

                    <p>
                        <?= htmlspecialchars($center) ?>
                    </p>

                <?php endforeach; ?>

            </div>

        </div>



        <!-- THERAPY HUB -->

        <div class="border border-gray-300 rounded-2xl p-6 bg-white shadow-sm">

            <h3 class="text-sky-500 text-xl font-bold border-b-4 border-sky-500 pb-2 inline-block">
                Therapy Hub
            </h3>

            <div class="mt-5 space-y-3 text-lg text-slate-700">

                <?php foreach ($therapies as $therapy): ?>

                    <p>
                        <?= htmlspecialchars($therapy) ?>
                    </p>

                <?php endforeach; ?>

            </div>

        </div>



        <!-- HEALTH INSURANCE COMPANY -->

        <div class="border border-gray-300 rounded-2xl p-6 bg-white shadow-sm lg:col-span-2">

            <h3 class="text-sky-500 text-xl font-bold border-b-4 border-sky-500 pb-2 inline-block">
                Health Insurance Company
            </h3>

            <div class="mt-5 space-y-3 text-lg text-slate-700">

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

    <div class="bg-blue-50 rounded-2xl border border-blue-100 p-8 mt-[28px]">

        <div class="flex flex-col lg:flex-row justify-between items-center gap-10">


            <!-- ADDRESS -->

            <div class="flex-1">

                <p class="text-xl leading-10 text-gray-800">

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
```
