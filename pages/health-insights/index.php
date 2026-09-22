<?php
/*
|--------------------------------------------------------------------------
| HEALTH INSIGHTS
|--------------------------------------------------------------------------
| Page:
| pages/health-insights/index.php
|
| CSS:
| ../../css/health-insights.css
|
| JS:
| ../../js/health-insights.js
|--------------------------------------------------------------------------
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Health Insights | Health Hub</title>


    <!-- =====================================================
         GOOGLE FONTS
         ===================================================== -->

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >


    <!-- =====================================================
         MATERIAL SYMBOLS
         ===================================================== -->

    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,0..200"
        rel="stylesheet"
    >


    <!-- =====================================================
         TAILWIND CSS
         ===================================================== -->

    <script src="https://cdn.tailwindcss.com"></script>

    <script>

        tailwind.config = {

            theme: {

                extend: {

                    colors: {

                        primary: "#0B4DA2",

                        secondary: "#14A5D8",

                        surface: "#F8FAFC",

                        "surface-dark": "#0F172A",

                        "text-main": "#0F172A",

                        "text-muted": "#64748B",

                        "health-blue": "#0B4DA2",

                        "health-cyan": "#14A5D8"

                    },

                    fontFamily: {

                        display: ["Inter", "sans-serif"]

                    }

                }

            }

        };

    </script>


    <!-- =====================================================
         HEALTH INSIGHTS CSS
         ===================================================== -->

    <link
        rel="stylesheet"
        href="../../css/health-insights.css"
    >

</head>


<body class="bg-slate-50 text-slate-900">


    <!-- =====================================================
         HEADER
         ===================================================== -->

    <header
        class="fixed top-0 left-0 right-0 z-50
               bg-white/90 backdrop-blur-md
               border-b border-slate-200
               shadow-sm"
    >

        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8
                   h-20 flex items-center justify-between"
        >

            <!-- Logo -->

            <a
                href="../../home.php"
                class="flex items-center gap-3"
            >

                <div
                    class="w-11 h-11 rounded-full
                           bg-white border-2 border-[#14A5D8]
                           flex items-center justify-center
                           overflow-hidden"
                >

                    <span
                        class="material-symbols-outlined text-[#0B4DA2]"
                    >
                        health_and_safety
                    </span>

                </div>

                <div class="leading-tight">

                    <div
                        class="text-[#0B4DA2]
                               text-xl font-extrabold"
                    >
                        Health Hub
                    </div>

                    <div
                        class="text-xs text-slate-500"
                    >
                        Your Health. Our Priority.
                    </div>

                </div>

            </a>


            <!-- Desktop Navigation -->

            <nav
                class="desktop-nav hidden md:flex
                       items-center gap-8"
            >

                <a
                    href="../../home.php"
                    class="text-sm font-semibold
                           text-slate-600 hover:text-[#0B4DA2]
                           transition-colors"
                >
                    Home
                </a>

                <a
                    href="../../Search-A-Doctor.html"
                    class="text-sm font-semibold
                           text-slate-600 hover:text-[#0B4DA2]
                           transition-colors"
                >
                    Find a Doctor
                </a>

            </nav>

        </div>

    </header>



    <!-- =====================================================
         MAIN
         ===================================================== -->

    <main class="min-h-screen">


        <!-- =================================================
             HERO
             ================================================= -->

        <section class="health-hero">

            <div
                class="max-w-7xl mx-auto
                       px-4 sm:px-6 lg:px-8"
            >


                <!-- Back Button -->

                <div class="mb-8">

                    <button
                        type="button"
                        onclick="history.back()"
                        class="inline-flex items-center gap-2
                               px-4 py-2
                               rounded-lg
                               bg-white
                               border border-slate-200
                               text-slate-700
                               font-semibold text-sm
                               shadow-sm
                               hover:bg-slate-50
                               transition"
                    >

                        <span class="material-symbols-outlined text-lg">
                            arrow_back
                        </span>

                        Back

                    </button>

                </div>



                <!-- Hero Text -->

                <div class="mb-10">

                    <div
                        class="inline-flex items-center gap-2
                               px-3 py-1.5
                               rounded-full
                               bg-blue-50
                               text-[#0B4DA2]
                               text-sm font-semibold
                               mb-4"
                    >

                        <span
                            class="material-symbols-outlined text-lg"
                        >
                            insights
                        </span>

                        Health Insights

                    </div>


                    <h1
                        class="health-title
                               text-[#0B4DA2]"
                    >
                        Health Insights
                    </h1>


                    <p
                        class="health-description
                               mt-5
                               text-slate-600
                               text-base
                               leading-7"
                    >
                        Dear Manoj, Monitor your journey towards wellness.
                        View your schedules, upcoming appointments, and
                        deep-dive into your personal health data in real-time.
                    </p>

                </div>



                <!-- =================================================
                     CONTENT GRID
                     ================================================= -->

                <div
                    class="grid grid-cols-1
                           xl:grid-cols-12
                           gap-8
                           items-start"
                >


                    <!-- =================================================
                         LEFT SIDE - HEALTH INSIGHTS
                         ================================================= -->

                    <div
                        class="xl:col-span-4
                               space-y-5"
                    >


                        <!-- Pure Health -->

                        <a
                            href="pure-health.php"
                            class="health-insight-card
                                   glass-card
                                   block
                                   rounded-2xl
                                   border border-slate-200
                                   p-6
                                   shadow-sm
                                   hover:shadow-lg"
                        >

                            <div
                                class="flex items-center
                                       justify-between"
                            >

                                <div
                                    class="w-14 h-14
                                           rounded-xl
                                           bg-emerald-50
                                           flex items-center
                                           justify-center"
                                >

                                    <span
                                        class="material-symbols-outlined
                                               text-emerald-600
                                               text-3xl"
                                    >
                                        spa
                                    </span>

                                </div>

                                <span
                                    class="material-symbols-outlined
                                           text-slate-400"
                                >
                                    arrow_forward
                                </span>

                            </div>


                            <h2
                                class="mt-5
                                       text-xl
                                       font-bold
                                       text-slate-900"
                            >
                                Pure Health
                            </h2>


                            <p
                                class="mt-2
                                       text-sm
                                       leading-6
                                       text-slate-500"
                            >
                                Explore your health information,
                                wellness details, and personal health data.
                            </p>

                        </a>



                        <!-- Donor Bank -->

                        <a
                            href="donor.php"
                            class="health-insight-card
                                   glass-card
                                   block
                                   rounded-2xl
                                   border border-slate-200
                                   p-6
                                   shadow-sm
                                   hover:shadow-lg"
                        >

                            <div
                                class="flex items-center
                                       justify-between"
                            >

                                <div
                                    class="w-14 h-14
                                           rounded-xl
                                           bg-red-50
                                           flex items-center
                                           justify-center"
                                >

                                    <span
                                        class="material-symbols-outlined
                                               text-red-500
                                               text-3xl"
                                    >
                                        bloodtype
                                    </span>

                                </div>

                                <span
                                    class="material-symbols-outlined
                                           text-slate-400"
                                >
                                    arrow_forward
                                </span>

                            </div>


                            <h2
                                class="mt-5
                                       text-xl
                                       font-bold
                                       text-slate-900"
                            >
                                Donor Bank
                            </h2>


                            <p
                                class="mt-2
                                       text-sm
                                       leading-6
                                       text-slate-500"
                            >
                                Find information about blood,
                                organ, plasma, and other donor services.
                            </p>

                        </a>



                        <!-- Health Insurance -->

                        <a
                            href="insurance.php"
                            class="health-insight-card
                                   glass-card
                                   block
                                   rounded-2xl
                                   border border-slate-200
                                   p-6
                                   shadow-sm
                                   hover:shadow-lg"
                        >

                            <div
                                class="flex items-center
                                       justify-between"
                            >

                                <div
                                    class="w-14 h-14
                                           rounded-xl
                                           bg-blue-50
                                           flex items-center
                                           justify-center"
                                >

                                    <span
                                        class="material-symbols-outlined
                                               text-[#0B4DA2]
                                               text-3xl"
                                    >
                                        health_and_safety
                                    </span>

                                </div>

                                <span
                                    class="material-symbols-outlined
                                           text-slate-400"
                                >
                                    arrow_forward
                                </span>

                            </div>


                            <h2
                                class="mt-5
                                       text-xl
                                       font-bold
                                       text-slate-900"
                            >
                                Health Insurance
                            </h2>


                            <p
                                class="mt-2
                                       text-sm
                                       leading-6
                                       text-slate-500"
                            >
                                Explore health insurance information,
                                coverage, and related services.
                            </p>

                        </a>

                    </div>



                    <!-- =================================================
                         RIGHT SIDE - CHECKUP SCHEDULE
                         ================================================= -->

                    <div
                        class="xl:col-span-8"
                    >

                        <div
                            class="bg-white
                                   rounded-2xl
                                   border border-slate-200
                                   shadow-sm
                                   overflow-hidden"
                        >


                            <!-- Table Header -->

                            <div
                                class="px-6 py-5
                                       border-b border-slate-200"
                            >

                                <div
                                    class="flex items-center
                                           gap-3"
                                >

                                    <div
                                        class="w-11 h-11
                                               rounded-xl
                                               bg-blue-50
                                               flex items-center
                                               justify-center"
                                    >

                                        <span
                                            class="material-symbols-outlined
                                                   text-[#0B4DA2]"
                                        >
                                            calendar_month
                                        </span>

                                    </div>


                                    <div>

                                        <h2
                                            class="text-xl
                                                   font-bold
                                                   text-slate-900"
                                        >
                                            Health Checkup Schedule
                                        </h2>

                                        <p
                                            class="text-sm
                                                   text-slate-500
                                                   mt-1"
                                        >
                                            Your recent health checkups
                                            and appointments.
                                        </p>

                                    </div>

                                </div>

                            </div>



                            <!-- Table -->

                            <div
                                class="health-table-wrapper
                                       overflow-x-auto"
                            >

                                <table
                                    class="w-full
                                           text-left
                                           border-collapse"
                                >

                                    <thead>

                                        <tr
                                            class="bg-slate-50
                                                   border-b
                                                   border-slate-200"
                                        >

                                            <th
                                                class="px-5 py-4
                                                       text-xs
                                                       font-bold
                                                       uppercase
                                                       tracking-wide
                                                       text-slate-500"
                                            >
                                                Sr. No.
                                            </th>

                                            <th
                                                class="px-5 py-4
                                                       text-xs
                                                       font-bold
                                                       uppercase
                                                       tracking-wide
                                                       text-slate-500"
                                            >
                                                Hospital Name
                                            </th>

                                            <th
                                                class="px-5 py-4
                                                       text-xs
                                                       font-bold
                                                       uppercase
                                                       tracking-wide
                                                       text-slate-500"
                                            >
                                                Doctor Name
                                            </th>

                                            <th
                                                class="px-5 py-4
                                                       text-xs
                                                       font-bold
                                                       uppercase
                                                       tracking-wide
                                                       text-slate-500"
                                            >
                                                Last Checkup Date
                                            </th>

                                            <th
                                                class="px-5 py-4
                                                       text-xs
                                                       font-bold
                                                       uppercase
                                                       tracking-wide
                                                       text-slate-500"
                                            >
                                                Time
                                            </th>

                                            <th
                                                class="px-5 py-4
                                                       text-xs
                                                       font-bold
                                                       uppercase
                                                       tracking-wide
                                                       text-slate-500"
                                            >
                                                Booking Appointment
                                            </th>

                                        </tr>

                                    </thead>


                                    <tbody
                                        class="divide-y
                                               divide-slate-100"
                                    >


                                        <!-- Row 1 -->

                                        <tr
                                            class="checkup-row
                                                   cursor-pointer"
                                            onclick="window.location.href='myhealth.php'"
                                        >

                                            <td
                                                class="px-5 py-5
                                                       text-sm
                                                       font-bold
                                                       text-slate-700"
                                            >
                                                01
                                            </td>

                                            <td
                                                class="px-5 py-5
                                                       text-sm
                                                       font-semibold
                                                       text-slate-800"
                                            >
                                                Parashree Hospital
                                            </td>

                                            <td
                                                class="px-5 py-5
                                                       text-sm
                                                       text-slate-700"
                                            >
                                                Dr. Manoj Mundhada
                                            </td>

                                            <td
                                                class="px-5 py-5
                                                       text-sm
                                                       text-slate-600"
                                            >
                                                25/06/2026
                                            </td>

                                            <td
                                                class="px-5 py-5
                                                       text-sm
                                                       text-slate-600"
                                            >
                                                10:30 AM
                                            </td>

                                            <td
                                                class="px-5 py-5"
                                            >

                                                <a
                                                    href="../../OPD-Booking.html"
                                                    onclick="event.stopPropagation();"
                                                    class="inline-flex
                                                           items-center
                                                           gap-2
                                                           px-4 py-2
                                                           rounded-lg
                                                           bg-[#0B4DA2]
                                                           text-white
                                                           text-sm
                                                           font-semibold
                                                           hover:bg-blue-800
                                                           transition"
                                                >

                                                    Book Appointment

                                                    <span
                                                        class="material-symbols-outlined
                                                               text-base"
                                                    >
                                                        arrow_forward
                                                    </span>

                                                </a>

                                            </td>

                                        </tr>



                                        <!-- Row 2 -->

                                        <tr
                                            class="checkup-row
                                                   cursor-pointer"
                                            onclick="window.location.href='myhealth.php'"
                                        >

                                            <td
                                                class="px-5 py-5
                                                       text-sm
                                                       font-bold
                                                       text-slate-700"
                                            >
                                                02
                                            </td>

                                            <td
                                                class="px-5 py-5
                                                       text-sm
                                                       font-semibold
                                                       text-slate-800"
                                            >
                                                RIMS
                                            </td>

                                            <td
                                                class="px-5 py-5
                                                       text-sm
                                                       text-slate-700"
                                            >
                                                Dr. Prafulla Kadu
                                            </td>

                                            <td
                                                class="px-5 py-5
                                                       text-sm
                                                       text-slate-600"
                                            >
                                                14/03/2026
                                            </td>

                                            <td
                                                class="px-5 py-5
                                                       text-sm
                                                       text-slate-600"
                                            >
                                                11:30 AM
                                            </td>

                                            <td
                                                class="px-5 py-5"
                                            >

                                                <a
                                                    href="../../OPD-Booking.html"
                                                    onclick="event.stopPropagation();"
                                                    class="inline-flex
                                                           items-center
                                                           gap-2
                                                           px-4 py-2
                                                           rounded-lg
                                                           bg-[#0B4DA2]
                                                           text-white
                                                           text-sm
                                                           font-semibold
                                                           hover:bg-blue-800
                                                           transition"
                                                >

                                                    Book Appointment

                                                    <span
                                                        class="material-symbols-outlined
                                                               text-base"
                                                    >
                                                        arrow_forward
                                                    </span>

                                                </a>

                                            </td>

                                        </tr>



                                        <!-- Row 3 -->

                                        <tr
                                            class="checkup-row
                                                   placeholder-row"
                                        >

                                            <td
                                                class="px-5 py-5
                                                       text-sm
                                                       font-bold"
                                            >
                                                ---
                                            </td>

                                            <td
                                                class="px-5 py-5
                                                       text-sm"
                                            >
                                                ---
                                            </td>

                                            <td
                                                class="px-5 py-5
                                                       text-sm"
                                            >
                                                ---
                                            </td>

                                            <td
                                                class="px-5 py-5
                                                       text-sm"
                                            >
                                                ---
                                            </td>

                                            <td
                                                class="px-5 py-5
                                                       text-sm"
                                            >
                                                ---
                                            </td>

                                            <td
                                                class="px-5 py-5
                                                       text-sm"
                                            >
                                                ---
                                            </td>

                                        </tr>



                                        <!-- Row 4 -->

                                        <tr
                                            class="checkup-row
                                                   placeholder-row"
                                        >

                                            <td
                                                class="px-5 py-5
                                                       text-sm
                                                       font-bold"
                                            >
                                                ---
                                            </td>

                                            <td
                                                class="px-5 py-5
                                                       text-sm"
                                            >
                                                ---
                                            </td>

                                            <td
                                                class="px-5 py-5
                                                       text-sm"
                                            >
                                                ---
                                            </td>

                                            <td
                                                class="px-5 py-5
                                                       text-sm"
                                            >
                                                ---
                                            </td>

                                            <td
                                                class="px-5 py-5
                                                       text-sm"
                                            >
                                                ---
                                            </td>

                                            <td
                                                class="px-5 py-5
                                                       text-sm"
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

            </div>

        </section>

    </main>



    <!-- =====================================================
         FOOTER
         ===================================================== -->

    <footer
        class="mt-20
               bg-white
               border-t border-slate-200"
    >

        <div
            class="max-w-7xl mx-auto
                   px-4 sm:px-6 lg:px-8
                   py-10"
        >

            <div
                class="grid grid-cols-1
                       md:grid-cols-3
                       gap-8"
            >


                <!-- Health Hub -->

                <div>

                    <div
                        class="flex items-center
                               gap-2"
                    >

                        <span
                            class="material-symbols-outlined
                                   text-[#0B4DA2]"
                        >
                            health_and_safety
                        </span>

                        <span
                            class="font-extrabold
                                   text-[#0B4DA2]"
                        >
                            Health Hub
                        </span>

                    </div>


                    <p
                        class="mt-3
                               text-sm
                               leading-6
                               text-slate-500"
                    >
                        Your Health. Our Priority.
                    </p>

                </div>



                <!-- Resources -->

                <div>

                    <h3
                        class="font-bold
                               text-slate-900"
                    >
                        Resources
                    </h3>


                    <div
                        class="footer-links
                               flex flex-col
                               gap-2
                               mt-4"
                    >

                        <a
                            href="../../home.php"
                            class="text-sm
                                   text-slate-500
                                   hover:text-[#0B4DA2]"
                        >
                            Home
                        </a>

                        <a
                            href="../../Search-A-Doctor.html"
                            class="text-sm
                                   text-slate-500
                                   hover:text-[#0B4DA2]"
                        >
                            Find a Doctor
                        </a>

                    </div>

                </div>



                <!-- Connect -->

                <div>

                    <h3
                        class="font-bold
                               text-slate-900"
                    >
                        Connect
                    </h3>


                    <div
                        class="flex items-center
                               gap-3
                               mt-4"
                    >

                        <a
                            href="#"
                            aria-label="Facebook"
                            class="w-10 h-10
                                   rounded-full
                                   bg-slate-100
                                   flex items-center
                                   justify-center
                                   hover:bg-blue-50
                                   transition"
                        >

                            <span
                                class="material-symbols-outlined
                                       text-slate-600"
                            >
                                public
                            </span>

                        </a>


                        <a
                            href="#"
                            aria-label="Email"
                            class="w-10 h-10
                                   rounded-full
                                   bg-slate-100
                                   flex items-center
                                   justify-center
                                   hover:bg-blue-50
                                   transition"
                        >

                            <span
                                class="material-symbols-outlined
                                       text-slate-600"
                            >
                                mail
                            </span>

                        </a>

                    </div>

                </div>

            </div>


            <div
                class="mt-10
                       pt-6
                       border-t border-slate-200
                       text-center
                       text-sm
                       text-slate-400"
            >

                © <?php echo date("Y"); ?> Health Hub.
                All rights reserved.

            </div>

        </div>

    </footer>



    <!-- =====================================================
         HEALTH INSIGHTS JS
         ===================================================== -->

    <script
        src="../../js/health-insights.js"
    ></script>

</body>

</html>