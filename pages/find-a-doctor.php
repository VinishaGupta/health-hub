<?php

/*
|--------------------------------------------------------------------------
| FIND A DOCTOR
|--------------------------------------------------------------------------
| MOCK DATA ONLY
|
| Later:
| Replace the mock arrays with database queries.
|
| Current URL example:
|
| find-a-doctor.php
|
| CSS:
| ../css/find-a-doctor.css
|
| JS:
| ../js/find-a-doctor.js
|--------------------------------------------------------------------------
*/


/* =========================================================
   MOCK LOCATION DATA
========================================================= */

$states = [

    "Maharashtra",

    "Madhya Pradesh",

    "Gujarat",

    "Rajasthan"

];


$districts = [

    "Nagpur",

    "Pune",

    "Mumbai",

    "Nashik",

    "Amravati"

];


$talukas = [

    "Nagpur City",

    "Hingna",

    "Katol",

    "Kamptee",

    "Ramtek"

];


$areas = [

    "Civil Lines",

    "Dharampeth",

    "Manish Nagar",

    "Sadar",

    "Wardha Road"

];


/* =========================================================
   MOCK DOCTOR TYPES
========================================================= */

$doctorTypes = [

    "General Physician",

    "Specialist",

    "Surgeon",

    "Consultant",

    "Emergency",

    "Visiting"

];


/* =========================================================
   MOCK SPECIALIZATIONS
========================================================= */

$specializations = [

    "Cardiology",

    "Neurology",

    "Orthopedics",

    "Pediatrics",

    "Gynecology",

    "Dermatology",

    "ENT",

    "Dental",

    "Oncology",

    "Physiotherapy"

];


/* =========================================================
   MOCK DOCTOR DATA
========================================================= */

$doctors = [

    [

        "id" => 1,

        "name" => "Dr. A. Mashankar",

        "designation" => "Senior Cardiologist",

        "doctor_type" => "Specialist",

        "specialization" => "Cardiology",

        "disease" => "Heart Disease",

        "treatment" => "Angioplasty",

        "state" => "Maharashtra",

        "district" => "Nagpur",

        "taluka" => "Nagpur City",

        "area" => "Civil Lines",

        "experience" => "15+ Years",

        "hospital" => "Health Hub Hospital",

        "location" => "Nagpur, Maharashtra",

        "verified" => true,

        "image" => "https://lh3.googleusercontent.com/aida-public/AB6AXuAgB3v7SrhmrlXlBMRczvs2BR_aV_GXBHaHPdS8l9GkGVG9UJgOXnycJxVTTI5zsw8OBSWnJXLxcMOK8tdWFH8_zMdPta7rMxObFVUcit-IEYO8k-w1RmbzZt5Sjd6jUBE0Z5H-vsi5MVyIczMQFV1eiC_ms_A4Lgi_hmNOjTC6UjtwF7rJrXH_ujKlJwbsc5TxE1clx7ocjNKG2iKvfENqwH8Ch7Ew-5J8ACetbxAoebpIeQNl5PK4bDQtDYoCdWpLuQvkHATlA-o"

    ],


    [

        "id" => 2,

        "name" => "Dr. Prafulla Kadu",

        "designation" => "Consultant Neurologist",

        "doctor_type" => "Consultant",

        "specialization" => "Neurology",

        "disease" => "Neurological Disorders",

        "treatment" => "Neurological Treatment",

        "state" => "Maharashtra",

        "district" => "Nagpur",

        "taluka" => "Nagpur City",

        "area" => "Dharampeth",

        "experience" => "12+ Years",

        "hospital" => "RIMS",

        "location" => "Nagpur, Maharashtra",

        "verified" => true,

        "image" => "https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&w=500&q=80"

    ],


    [

        "id" => 3,

        "name" => "Dr. Sneha Patil",

        "designation" => "Orthopedic Surgeon",

        "doctor_type" => "Surgeon",

        "specialization" => "Orthopedics",

        "disease" => "Bone & Joint Problems",

        "treatment" => "Joint Replacement",

        "state" => "Maharashtra",

        "district" => "Nagpur",

        "taluka" => "Hingna",

        "area" => "Manish Nagar",

        "experience" => "10+ Years",

        "hospital" => "City Care Hospital",

        "location" => "Nagpur, Maharashtra",

        "verified" => true,

        "image" => "https://images.unsplash.com/photo-1594824476967-48c8b964273f?auto=format&fit=crop&w=500&q=80"

    ],


    [

        "id" => 4,

        "name" => "Dr. Priya Sharma",

        "designation" => "Consultant Gynecologist",

        "doctor_type" => "Specialist",

        "specialization" => "Gynecology",

        "disease" => "Women's Health",

        "treatment" => "Gynecological Consultation",

        "state" => "Maharashtra",

        "district" => "Nagpur",

        "taluka" => "Nagpur City",

        "area" => "Wardha Road",

        "experience" => "9+ Years",

        "hospital" => "Women's Care Hospital",

        "location" => "Nagpur, Maharashtra",

        "verified" => true,

        "image" => "https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?auto=format&fit=crop&w=500&q=80"

    ]

];


/* =========================================================
   GET FILTER VALUES
========================================================= */

$selectedState =
    $_GET["state"] ?? "";

$selectedDistrict =
    $_GET["district"] ?? "";

$selectedTaluka =
    $_GET["taluka"] ?? "";

$selectedArea =
    $_GET["area"] ?? "";

$selectedDoctorType =
    $_GET["doctor_type"] ?? "";

$selectedSpecialization =
    $_GET["specialization"] ?? "";

$searchQuery =
    trim($_GET["search"] ?? "");


/* =========================================================
   FILTER DOCTORS
========================================================= */

$filteredDoctors = [];


foreach ($doctors as $doctor) {

    $matches = true;


    /* STATE */

    if (
        $selectedState !== "" &&
        $doctor["state"] !== $selectedState
    ) {

        $matches = false;

    }


    /* DISTRICT */

    if (
        $selectedDistrict !== "" &&
        $doctor["district"] !== $selectedDistrict
    ) {

        $matches = false;

    }


    /* TALUKA */

    if (
        $selectedTaluka !== "" &&
        $doctor["taluka"] !== $selectedTaluka
    ) {

        $matches = false;

    }


    /* AREA */

    if (
        $selectedArea !== "" &&
        $doctor["area"] !== $selectedArea
    ) {

        $matches = false;

    }


    /* DOCTOR TYPE */

    if (
        $selectedDoctorType !== "" &&
        $doctor["doctor_type"] !== $selectedDoctorType
    ) {

        $matches = false;

    }


    /* SPECIALIZATION */

    if (
        $selectedSpecialization !== "" &&
        $doctor["specialization"] !== $selectedSpecialization
    ) {

        $matches = false;

    }


    /* SEARCH */

    if ($searchQuery !== "") {

        $searchText = strtolower(

            $doctor["name"] . " " .
            $doctor["designation"] . " " .
            $doctor["doctor_type"] . " " .
            $doctor["specialization"] . " " .
            $doctor["disease"] . " " .
            $doctor["treatment"] . " " .
            $doctor["hospital"]

        );


        if (
            strpos(
                $searchText,
                strtolower($searchQuery)
            ) === false
        ) {

            $matches = false;

        }

    }


    if ($matches) {

        $filteredDoctors[] =
            $doctor;

    }

}


/* =========================================================
   RESET URL
========================================================= */

$resetUrl =
    basename($_SERVER["PHP_SELF"]);

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
        Find Your Doctor | Health Hub
    </title>


    <!-- =====================================================
         TAILWIND
    ====================================================== -->

    <script
        src="https://cdn.tailwindcss.com?plugins=forms,container-queries"
    ></script>


    <!-- =====================================================
         GOOGLE FONTS
    ====================================================== -->

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >


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

                        "tertiary-container": "#b51220",

                        "on-tertiary-fixed-variant": "#930014",

                        "error": "#ba1a1a",

                        "surface-container": "#e5eeff",

                        "background": "#f8f9ff",

                        "outline": "#737685",

                        "surface-container-low": "#eff4ff",

                        "surface-container-lowest": "#ffffff",

                        "secondary-fixed-dim": "#5dd6f3",

                        "surface": "#f8f9ff",

                        "secondary-container": "#6ae1ff",

                        "on-secondary-fixed": "#001f26",

                        "on-secondary-container": "#006374",

                        "on-secondary-fixed-variant": "#004e5d",

                        "tertiary-fixed": "#ffdad7",

                        "on-error-container": "#93000a",

                        "inverse-on-surface": "#eaf1ff",

                        "primary-fixed": "#dae2ff",

                        "surface-variant": "#d3e4fe",

                        "primary-container": "#0052cc",

                        "surface-bright": "#f8f9ff",

                        "primary": "#003d9b",

                        "inverse-surface": "#213145",

                        "on-surface-variant": "#434654",

                        "outline-variant": "#c3c6d6",

                        "on-tertiary": "#ffffff",

                        "on-background": "#0b1c30",

                        "primary-fixed-dim": "#b2c5ff",

                        "surface-dim": "#cbdbf5",

                        "on-primary-fixed-variant": "#0040a2",

                        "on-primary-fixed": "#001848",

                        "surface-tint": "#0c56d0",

                        "surface-container-high": "#dce9ff",

                        "secondary": "#00687a",

                        "on-secondary": "#ffffff",

                        "on-tertiary-container": "#ffc5c0",

                        "tertiary": "#8c0013",

                        "on-error": "#ffffff",

                        "surface-container-highest": "#d3e4fe",

                        "inverse-primary": "#b2c5ff",

                        "secondary-fixed": "#adecff",

                        "on-tertiary-fixed": "#410004",

                        "error-container": "#ffdad6",

                        "on-surface": "#0b1c30",

                        "on-primary-container": "#c4d2ff",

                        "tertiary-fixed-dim": "#ffb3ae",

                        "on-primary": "#ffffff"

                    },


                    borderRadius: {

                        DEFAULT: "0.25rem",

                        lg: "0.5rem",

                        xl: "0.75rem",

                        full: "9999px"

                    },


                    spacing: {

                        base: "8px",

                        gutter: "24px",

                        "margin-mobile": "16px",

                        "margin-desktop": "40px",

                        "container-max": "1280px"

                    },


                    fontFamily: {

                        "label-sm": ["Inter"],

                        "headline-lg-mobile": ["Inter"],

                        "body-lg": ["Inter"],

                        "headline-lg": ["Inter"],

                        "display-lg": ["Inter"],

                        "label-md": ["Inter"],

                        "headline-md": ["Inter"],

                        "body-md": ["Inter"]

                    },


                    fontSize: {

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


    <!-- =====================================================
         FIND A DOCTOR CSS
    ====================================================== -->

    <link
        rel="stylesheet"
        href="../css/find-a-doctor.css"
    >

</head>


<body
    class="bg-background
           text-on-background
           font-body-md
           selection:bg-primary-container
           selection:text-white"
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
           shadow-sm
           h-20"
>

    <div
        class="max-w-container-max
               mx-auto
               px-margin-desktop
               h-full
               flex
               items-center
               justify-between"
    >


        <!-- LOGO -->

        <div
            class="flex
                   items-center"
        >

            <a
                class="font-headline-md
                       text-headline-md
                       text-primary
                       font-bold
                       tracking-tight"
                href="index.php"
            >
                Health Hub
            </a>

        </div>


        <!-- NAV -->

        <nav
            class="hidden
                   md:flex
                   gap-8
                   items-center"
        >

            <a
                class="text-on-surface-variant
                       hover:text-primary
                       transition-colors
                       font-body-md"
                href="index.php"
            >
                Home
            </a>

        </nav>


        <div
            class="flex
                   items-center
                   gap-6"
        >
        </div>

    </div>

</header>



<!-- =========================================================
     MAIN
========================================================= -->

<main
    class="pt-20
           pb-20"
>


    <!-- =====================================================
         HERO
    ====================================================== -->

    <section
        class="relative
               py-16
               overflow-hidden"
    >

        <div
            class="absolute
                   inset-0
                   z-0
                   opacity-10"
        >

            <div
                class="absolute
                       top-0
                       left-0
                       w-96
                       h-96
                       bg-primary-container
                       rounded-full
                       blur-[100px]
                       -translate-x-1/2
                       -translate-y-1/2"
            ></div>


            <div
                class="absolute
                       bottom-0
                       right-0
                       w-96
                       h-96
                       bg-secondary-container
                       rounded-full
                       blur-[100px]
                       translate-x-1/2
                       translate-y-1/2"
            ></div>

        </div>


        <div
            class="max-w-container-max
                   mx-auto
                   px-margin-desktop
                   relative
                   z-10
                   text-center"
        >

            <h1
                class="font-display-lg
                       text-display-lg
                       text-primary
                       mb-4"
            >
                Find Your Doctor
            </h1>


            <p
                class="font-body-lg
                       text-body-lg
                       text-on-surface-variant
                       max-w-2xl
                       mx-auto"
            >
                Search trusted healthcare professionals near you
                with ease. Access specialized care and book
                appointments instantly.
            </p>

        </div>

    </section>



    <!-- =====================================================
         MAIN CONTENT
    ====================================================== -->

    <div
        class="max-w-container-max
               mx-auto
               px-margin-desktop
               grid
               grid-cols-1
               md:grid-cols-12
               gap-gutter
               items-start"
    >


        <!-- =================================================
             FILTER SIDEBAR
        ================================================== -->

        <aside
            class="md:col-span-4
                   space-y-6"
        >

            <div
                class="filter-sidebar
                       bg-surface-container-low
                       p-6
                       rounded-xl
                       border
                       border-outline-variant/30
                       sticky
                       top-28"
            >

                <div
                    class="flex
                           items-center
                           justify-between
                           mb-6"
                >

                    <h2
                        class="font-headline-md
                               text-on-surface"
                    >
                        Filters
                    </h2>

                </div>


                <!-- =================================================
                     FILTER FORM
                ================================================== -->

                <form
                    id="doctorFilterForm"
                    method="GET"
                    action=""
                    class="space-y-5"
                >


                    <!-- LOCATION -->

                    <div
                        class="space-y-3"
                    >

                        <label
                            class="font-label-md
                                   text-on-surface-variant
                                   block"
                        >
                            Location Details
                        </label>


                        <!-- STATE -->

                        <select
                            name="state"
                            class="filter-select"
                        >

                            <option value="">
                                All States
                            </option>


                            <?php foreach ($states as $state): ?>

                                <option
                                    value="<?= htmlspecialchars($state) ?>"
                                    <?= $selectedState === $state ? "selected" : "" ?>
                                >
                                    <?= htmlspecialchars($state) ?>
                                </option>

                            <?php endforeach; ?>

                        </select>


                        <!-- DISTRICT -->

                        <select
                            name="district"
                            class="filter-select"
                        >

                            <option value="">
                                All Districts
                            </option>


                            <?php foreach ($districts as $district): ?>

                                <option
                                    value="<?= htmlspecialchars($district) ?>"
                                    <?= $selectedDistrict === $district ? "selected" : "" ?>
                                >
                                    <?= htmlspecialchars($district) ?>
                                </option>

                            <?php endforeach; ?>

                        </select>


                        <!-- TALUKA -->

                        <select
                            name="taluka"
                            class="filter-select"
                        >

                            <option value="">
                                Taluka/City
                            </option>


                            <?php foreach ($talukas as $taluka): ?>

                                <option
                                    value="<?= htmlspecialchars($taluka) ?>"
                                    <?= $selectedTaluka === $taluka ? "selected" : "" ?>
                                >
                                    <?= htmlspecialchars($taluka) ?>
                                </option>

                            <?php endforeach; ?>

                        </select>


                        <!-- AREA -->

                        <select
                            name="area"
                            class="filter-select"
                        >

                            <option value="">
                                Village/Area
                            </option>


                            <?php foreach ($areas as $area): ?>

                                <option
                                    value="<?= htmlspecialchars($area) ?>"
                                    <?= $selectedArea === $area ? "selected" : "" ?>
                                >
                                    <?= htmlspecialchars($area) ?>
                                </option>

                            <?php endforeach; ?>

                        </select>

                    </div>



                    <!-- =================================================
                         DOCTOR TYPE
                    ================================================== -->

                    <div
                        class="space-y-2"
                    >

                        <label
                            class="font-label-md
                                   text-on-surface-variant
                                   block"
                        >
                            Doctor Type
                        </label>


                        <select
                            name="doctor_type"
                            class="filter-select"
                        >

                            <option value="">
                                All Doctor Types
                            </option>


                            <?php foreach ($doctorTypes as $doctorType): ?>

                                <option
                                    value="<?= htmlspecialchars($doctorType) ?>"
                                    <?= $selectedDoctorType === $doctorType ? "selected" : "" ?>
                                >
                                    <?= htmlspecialchars($doctorType) ?>
                                </option>

                            <?php endforeach; ?>

                        </select>

                    </div>



                    <!-- =================================================
                         SPECIALIZATION
                    ================================================== -->

                    <div
                        class="space-y-2"
                    >

                        <label
                            class="font-label-md
                                   text-on-surface-variant
                                   block"
                        >
                            Specialization
                        </label>


                        <div
                            class="relative"
                        >

                            <select
                                name="specialization"
                                class="filter-select
                                       appearance-none"
                            >

                                <option value="">
                                    All Specializations
                                </option>


                                <?php foreach ($specializations as $specialization): ?>

                                    <option
                                        value="<?= htmlspecialchars($specialization) ?>"
                                        <?= $selectedSpecialization === $specialization ? "selected" : "" ?>
                                    >
                                        <?= htmlspecialchars($specialization) ?>
                                    </option>

                                <?php endforeach; ?>

                            </select>


                            <span
                                class="material-symbols-outlined
                                       absolute
                                       right-3
                                       top-2.5
                                       text-on-surface-variant
                                       pointer-events-none"
                            >
                                search
                            </span>

                        </div>

                    </div>



                    <!-- SEARCH -->

                    <button
                        class="search-doctor-btn
                               mt-6"
                        type="submit"
                    >
                        Search Doctors
                    </button>


                    <!-- RESET -->

                    <a
                        href="<?= htmlspecialchars($resetUrl) ?>"
                        class="reset-filter-btn
                               block
                               text-center"
                    >
                        Reset Filters
                    </a>

                </form>

            </div>

        </aside>



        <!-- =================================================
             RIGHT COLUMN
        ================================================== -->

        <section
            class="md:col-span-8
                   space-y-8"
        >


            <!-- =================================================
                 SEARCH BAR
            ================================================== -->

            <form
                id="doctorSearchForm"
                method="GET"
                action=""
            >

                <div
                    class="relative
                           group
                           search-wrapper"
                >

                    <input
                        id="doctorSearchInput"
                        name="search"
                        value="<?= htmlspecialchars($searchQuery) ?>"
                        class="doctor-search-input"
                        placeholder="Search by doctor name, post, specialization, disease, or treatment..."
                        type="text"
                    >


                    <span
                        id="doctorSearchIcon"
                        class="material-symbols-outlined
                               doctor-search-icon
                               absolute
                               left-5
                               top-1/2
                               -translate-y-1/2
                               text-primary
                               text-3xl"
                    >
                        search
                    </span>

                </div>

            </form>



            <!-- =================================================
                 RESULT HEADER
            ================================================== -->

            <div
                class="flex
                       items-center
                       justify-between"
            >

                <p
                    class="result-count"
                >

                    <?php if (count($filteredDoctors) > 0): ?>

                        <?= count($filteredDoctors) ?>
                        doctor(s) found

                    <?php else: ?>

                        No doctors found

                    <?php endif; ?>

                </p>

            </div>



            <!-- =================================================
                 DOCTOR RESULTS
            ================================================== -->

            <?php if (count($filteredDoctors) > 0): ?>


                <div
                    class="space-y-5"
                >

                    <?php foreach ($filteredDoctors as $doctor): ?>


                        <article
                            class="doctor-card
                                   bg-surface-container-lowest
                                   rounded-2xl
                                   border
                                   border-outline-variant/40
                                   p-6"
                        >


                            <!-- DOCTOR HEADER -->

                            <div
                                class="doctor-card-header"
                            >


                                <!-- IMAGE -->

                                <img
                                    src="<?= htmlspecialchars($doctor["image"]) ?>"
                                    alt="<?= htmlspecialchars($doctor["name"]) ?>"
                                    class="doctor-image"
                                >


                                <!-- INFO -->

                                <div
                                    class="flex-1"
                                >

                                    <div
                                        class="flex
                                               flex-wrap
                                               items-center
                                               gap-2"
                                    >

                                        <h3
                                            class="doctor-name"
                                        >
                                            <?= htmlspecialchars($doctor["name"]) ?>
                                        </h3>


                                        <?php if ($doctor["verified"]): ?>

                                            <span
                                                class="verified-badge"
                                            >

                                                <span
                                                    class="material-symbols-outlined
                                                           text-sm"
                                                >
                                                    verified
                                                </span>

                                                Verified

                                            </span>

                                        <?php endif; ?>

                                    </div>


                                    <p
                                        class="doctor-designation"
                                    >
                                        <?= htmlspecialchars($doctor["designation"]) ?>
                                    </p>


                                    <div
                                        class="mt-3"
                                    >

                                        <span
                                            class="specialization-tag"
                                        >
                                            <?= htmlspecialchars($doctor["specialization"]) ?>
                                        </span>

                                    </div>

                                </div>

                            </div>



                            <!-- DOCTOR META -->

                            <div
                                class="doctor-meta"
                            >

                                <span
                                    class="doctor-meta-item"
                                >

                                    <span
                                        class="material-symbols-outlined"
                                    >
                                        location_on
                                    </span>

                                    <?= htmlspecialchars($doctor["location"]) ?>

                                </span>


                                <span
                                    class="doctor-meta-item"
                                >

                                    <span
                                        class="material-symbols-outlined"
                                    >
                                        local_hospital
                                    </span>

                                    <?= htmlspecialchars($doctor["hospital"]) ?>

                                </span>


                                <span
                                    class="doctor-meta-item"
                                >

                                    <span
                                        class="material-symbols-outlined"
                                    >
                                        work_history
                                    </span>

                                    <?= htmlspecialchars($doctor["experience"]) ?>

                                </span>

                            </div>



                            <!-- DOCTOR ACTIONS -->

                            <div
                                class="doctor-card-actions"
                            >

                                <a
                                    href="doctor.php?id=<?= (int) $doctor["id"] ?>"
                                    class="view-doctor-btn"
                                >

                                    View Doctor Profile

                                    <span
                                        class="material-symbols-outlined
                                               text-lg"
                                    >
                                        arrow_forward
                                    </span>

                                </a>

                            </div>

                        </article>


                    <?php endforeach; ?>

                </div>


            <?php else: ?>


                <!-- =================================================
                     EMPTY RESULTS
                ================================================== -->

                <div
                    class="empty-results"
                >

                    <span
                        class="material-symbols-outlined
                               empty-results-icon"
                    >
                        person_search
                    </span>


                    <div
                        class="space-y-1"
                    >

                        <h3
                            class="font-headline-md
                                   text-on-surface"
                        >
                            No results found
                        </h3>


                        <p
                            class="text-on-surface-variant
                                   font-body-md"
                        >
                            Adjust your filters or search
                            to find doctors.
                        </p>

                    </div>

                </div>


            <?php endif; ?>

        </section>

    </div>

</main>



<!-- =========================================================
     FOOTER
========================================================= -->

<footer
    class="doctor-footer
           bg-surface-container-low
           w-full
           mt-auto"
>

    <div
        class="max-w-container-max
               mx-auto
               px-margin-desktop
               py-12
               flex
               flex-col
               md:flex-row
               justify-between
               items-start
               md:items-center
               gap-base"
    >


        <!-- BRAND -->

        <div>

            <a
                class="font-headline-md
                       text-headline-md
                       text-on-surface
                       font-bold"
                href="index.php"
            >
                Health Hub
            </a>


            <p
                class="mt-4
                       text-on-surface-variant
                       font-label-md"
            >
                © 2024 Health Hub Medical Group.
                All rights reserved.
            </p>

        </div>


        <!-- FOOTER LINKS -->

        <nav
            class="flex
                   flex-wrap
                   gap-8
                   items-center"
        >

            <a
                class="text-on-surface-variant
                       hover:text-primary
                       underline
                       decoration-2
                       underline-offset-4
                       transition-all
                       duration-200
                       font-label-md"
                href="#"
            >
                Privacy Policy
            </a>


            <a
                class="text-on-surface-variant
                       hover:text-primary
                       underline
                       decoration-2
                       underline-offset-4
                       transition-all
                       duration-200
                       font-label-md"
                href="#"
            >
                Terms of Service
            </a>


            <a
                class="text-on-surface-variant
                       hover:text-primary
                       underline
                       decoration-2
                       underline-offset-4
                       transition-all
                       duration-200
                       font-label-md"
                href="#"
            >
                Contact Us
            </a>


            <a
                class="text-on-surface-variant
                       hover:text-primary
                       underline
                       decoration-2
                       underline-offset-4
                       transition-all
                       duration-200
                       font-label-md"
                href="#"
            >
                Careers
            </a>


            <a
                class="text-on-surface-variant
                       hover:text-primary
                       underline
                       decoration-2
                       underline-offset-4
                       transition-all
                       duration-200
                       font-label-md"
                href="#"
            >
                Support
            </a>

        </nav>

    </div>

</footer>



<!-- =========================================================
     FIND A DOCTOR JS
========================================================= -->

<script
    src="../js/find-a-doctor.js"
></script>


</body>

</html>