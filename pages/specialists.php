<?php

/*
|--------------------------------------------------------------------------
| DOCTORS
|--------------------------------------------------------------------------
| MOCK DATA ONLY
|
| Later:
| Replace this array with the database query.
|--------------------------------------------------------------------------
*/


/* ==========================================================
                    MOCK DOCTOR DATA
========================================================== */

$doctors = [

    [
        "id" => 1,

        "name" => "Dr. Sarah Mitchell",

        "specialty" => "Cardiology",

        "qualification" => "MD, FACC",

        "experience" => "12 Years Exp.",

        "rating" => "4.9",

        "next" => "Tomorrow, 9:00 AM",

        "availability" => "Tomorrow",

        "image" => "https://lh3.googleusercontent.com/aida-public/AB6AXuAHp69AkhZhbLTTUwbvudF7OGlQI0aXhssENnkYFFvYTAz4AzwUk1T8Jo-hgSu3DskpmnjZOmUqaq0fR5fmKXDn9OQH81ama0Et5U_4GMs4JnhW1CiIBzcVNGEJDRbtkJSilyEtvTUpQFN5Qx0QQ9sSl34DA4wUwvZYhzpYCIx5d8OwhojTxM41tMb5bDols2CRUQ3CLJXDlkTkneblkjE5jQzdeMLv6d-EkBVzVRFXBbvJye19AaUMaUGkrFuwwIK_eJ9V616qDuo"
    ],


    [
        "id" => 2,

        "name" => "Dr. James Wilson",

        "specialty" => "Neurology",

        "qualification" => "PhD, Neurology",

        "experience" => "15 Years Exp.",

        "rating" => "4.8",

        "next" => "Today, 2:30 PM",

        "availability" => "Today",

        "image" => "https://lh3.googleusercontent.com/aida-public/AB6AXuCRHz0vBFerctmRhjwgHZK06IJdje1579-l4ddD3bPpqRI5CgjnaXdNeUGC_5Vduq4hYHsgDgZmIS59jdxCnqP969ydbsRaT8UK0pDXin-kqfsaF_wlNsSP0DOHWNUBUz2aRDjGvouqlzRliKY8WABISOyij0Yf-aCYf0gu7cS3MrSlxMShPnhD2sxpbv57yi6wHegNk65oX_CCK8IAZs1HDfPcT2zuOuwZfWuPtu0u322LZNzjzgVKmw3Lb_NDx9X3-QDCcQMGjCs"
    ],


    [
        "id" => 3,

        "name" => "Dr. Elena Rodriguez",

        "specialty" => "Pediatrics",

        "qualification" => "MD, Pediatrics",

        "experience" => "18 Years Exp.",

        "rating" => "5.0",

        "next" => "Wednesday, 10:00 AM",

        "availability" => "Wednesday",

        "image" => "https://lh3.googleusercontent.com/aida-public/AB6AXuA_zwcuMnoCl8XNQQq95TnHvacXPxHr4p-grVbvNc6WAxuW63cr7yKqIFkw33jzR-SVDBLphpVnq4WyBxhtII6p5j_l6jBhwOKQAABNaf_ICg2WCbPKunQM0H9Y0WNMzw6hyliD5DlutuOIvoohTmo51g1RqlPGdIb8b11-faGITvjQmks51mBAgsmm6RkYet4ooamgoGEeLGiZWshRyxuKPup3_k5vf1tTnxzXzY3Tt7IYskIYRTqAJfbG-A7Nn8pAdYsW-FHEgoM"
    ],


    [
        "id" => 4,

        "name" => "Dr. Michael Chang",

        "specialty" => "Orthopedics",

        "qualification" => "MS, Orthopedics",

        "experience" => "9 Years Exp.",

        "rating" => "4.7",

        "next" => "Today, 4:15 PM",

        "availability" => "Today",

        "image" => "https://lh3.googleusercontent.com/aida-public/AB6AXuCpv5I5ZMIdC_z61UUUyk8QaCM17JAOOeL_qzQlqa9ZQRgq4UhR6vJYa1FkbD7C7E5zHv-ecUsWKhtls6nvI-LiB5fmhZEw4ZkVc43XQ7y179tp6g5Ln_6Vh5PjiEHh7g0zlmbOuytnB7jJUE_0wjFTS86qSjrs8aeHqWt736tyiNBsLd1mR-zijXBvm_Bw2pb_H6J3eUxp5NfDIGhrRUvhFDNTXDnvDuBp7xfkeSU8cfGoYUCYeMptYsPd3REr7QcOvgFW5MZBkHI"
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
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >


    <title>
        Doctors - Health Hub
    </title>


    <!-- ==========================================================
                            TAILWIND
    =========================================================== -->

    <script
        src="https://cdn.tailwindcss.com?plugins=forms,container-queries"
    ></script>


    <!-- ==========================================================
                        GOOGLE FONTS
    =========================================================== -->

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet"
    >


    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet"
    >


    <!-- ==========================================================
                    TAILWIND CONFIG
    =========================================================== -->

    <script>

        tailwind.config = {

            theme: {

                extend: {

                    colors: {

                        primary: "#003d9b",

                        "primary-container": "#0052cc",

                        background: "#f8f9ff",

                        "surface-container-lowest": "#ffffff",

                        "surface-container-low": "#eff4ff",

                        "surface-container": "#e5eeff",

                        "surface-container-highest": "#d3e4fe",

                        "on-surface": "#0b1c30",

                        "on-surface-variant": "#434654",

                        outline: "#737685",

                        "outline-variant": "#c3c6d6",

                        "secondary-fixed": "#adecff",

                        "on-secondary-fixed": "#001f26"

                    },


                    fontFamily: {

                        inter: [
                            "Inter",
                            "sans-serif"
                        ]

                    }

                }

            }

        };

    </script>


    <!-- ==========================================================
                        DOCTORS CSS
    =========================================================== -->

    <link
        rel="stylesheet"
        href="../css/specialists.css"
    >

</head>


<body>


<!-- ==========================================================
                            NAVBAR
========================================================== -->

<header
    class="bg-white
           shadow-sm
           sticky
           top-0
           z-50"
>

    <nav
        class="relative
               flex
               items-center
               justify-between
               px-4
               md:px-10
               h-20
               max-w-7xl
               mx-auto"
    >


        <!-- LOGO -->

        <a
            href="index.php"
            class="flex
                   items-center
                   gap-2
                   text-primary
                   text-2xl
                   md:text-3xl
                   font-bold"
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
                   gap-10
                   absolute
                   left-1/2
                   -translate-x-1/2"
        >

            <a
                href="index.php"
                class="text-gray-700
                       hover:text-primary"
            >
                Home
            </a>


            <a
                href="#"
                class="text-primary
                       font-bold
                       border-b-2
                       border-primary
                       pb-1"
            >
                Find A Doctor
            </a>

        </div>

    </nav>

</header>



<!-- ==========================================================
                            MAIN
========================================================== -->

<main
    class="max-w-7xl
           mx-auto
           px-4
           md:px-10
           py-10"
>


    <!-- ======================================================
                        HEADING
    ======================================================= -->

    <header
        class="mb-10"
    >

        <h1
            class="text-5xl
                   font-bold
                   text-blue-900
                   mb-2"
        >
            Our Specialists
        </h1>


        <p
            class="text-lg
                   text-gray-600
                   max-w-2xl"
        >
            Connect with our world-class medical professionals.
            Expert care across over 40 medical specialties,
            focused on your long-term health and wellbeing.
        </p>

    </header>



    <!-- ======================================================
                        SPECIALISTS
    ======================================================= -->

    <div
        id="specialists-section"
        class="carousel-active"
    >

        <section>


            <!-- ==================================================
                            FILTER BAR
            ================================================== -->

            <div
                class="flex
                       justify-between
                       items-center
                       bg-[#eff4ff]
                       p-4
                       rounded-xl
                       mb-5"
            >

                <div
                    class="flex
                           items-center
                           gap-3
                           flex-wrap"
                >


                    <!-- SPECIALTY FILTER -->

                    <select
                        id="specialty-filter"
                        class="bg-white
                               border
                               border-gray-300
                               rounded-lg
                               px-4
                               py-2"
                    >

                        <option value="all">
                            All Specialities
                        </option>

                        <option value="Cardiology">
                            Cardiology
                        </option>

                        <option value="Neurology">
                            Neurology
                        </option>

                        <option value="Pediatrics">
                            Pediatrics
                        </option>

                        <option value="Orthopedics">
                            Orthopedics
                        </option>

                    </select>


                    <!-- AVAILABILITY FILTER -->

                    <select
                        id="availability-filter"
                        class="bg-white
                               border
                               border-gray-300
                               rounded-lg
                               px-4
                               py-2"
                    >

                        <option value="all">
                            Availability
                        </option>

                        <option value="Today">
                            Today
                        </option>

                        <option value="Tomorrow">
                            Tomorrow
                        </option>

                        <option value="Wednesday">
                            This Week
                        </option>

                    </select>

                </div>


                <span
                    id="doctor-count"
                    class="hidden
                           sm:block
                           text-sm
                           text-gray-600"
                >
                    Showing 4 Specialists
                </span>

            </div>



            <!-- ==================================================
                            CAROUSEL
            ================================================== -->

            <div
                id="carousel-container"
                class="carousel-container"
            >

                <div
                    id="carousel-track"
                    class="carousel-track"
                ></div>


                <!-- ARROWS -->

                <div
                    class="carousel-arrow-container"
                >

                    <button
                        id="carousel-prev"
                        type="button"
                        class="carousel-arrow"
                        aria-label="Previous doctor"
                    >

                        <span
                            class="material-symbols-outlined"
                        >
                            arrow_back_ios_new
                        </span>

                    </button>


                    <button
                        id="carousel-next"
                        type="button"
                        class="carousel-arrow"
                        aria-label="Next doctor"
                    >

                        <span
                            class="material-symbols-outlined"
                        >
                            arrow_forward_ios
                        </span>

                    </button>

                </div>

            </div>



            <!-- ==================================================
                            GRID
            ================================================== -->

            <div
                id="grid-container"
                class="grid-container
                       grid-cols-1
                       md:grid-cols-2
                       gap-6"
            ></div>



            <!-- ==================================================
                            NO RESULTS
            ================================================== -->

            <div
                id="no-results"
                class="hidden
                       text-center
                       py-16"
            >

                <span
                    class="material-symbols-outlined
                           text-5xl
                           text-gray-400"
                >
                    search_off
                </span>


                <h2
                    class="text-xl
                           font-bold
                           mt-4"
                >
                    No specialists found
                </h2>


                <p
                    class="text-gray-500
                           mt-2"
                >
                    Try changing your filters.
                </p>

            </div>

        </section>

    </div>

</main>



<!-- ==========================================================
                        DOCTOR DATA
========================================================== -->

<script>

    window.doctorData =
        <?= json_encode(
            $doctors,
            JSON_HEX_TAG |
            JSON_HEX_AMP |
            JSON_HEX_APOS |
            JSON_HEX_QUOT
        ); ?>;

</script>



<!-- ==========================================================
                        DOCTORS JS
========================================================== -->

<script
    src="../js/specialists.js"
></script>


</body>

</html>