<?php

/*
|--------------------------------------------------------------------------
| SERVICES - USER MODULE
|--------------------------------------------------------------------------
| MOCK DATA ONLY
|
| Later:
| - Project Admin provides service master data
| - Hospital Admin selects services
| - User Module fetches selected services from database
|--------------------------------------------------------------------------
*/


/* ==========================================================
                    MOCK SERVICES DATA
========================================================== */

$services = [

    [
        'id' => 1,
        'name' => 'Pharmacy',
        'icon' => 'vaccines',
        'description' => 'Full-service in-house pharmacy providing certified medications and clinical support.'
    ],

    [
        'id' => 2,
        'name' => 'Blood Bank',
        'icon' => 'bloodtype',
        'description' => 'State-certified 24/7 blood storage and component processing facility.'
    ],

    [
        'id' => 3,
        'name' => 'Ambulance',
        'icon' => 'ambulance',
        'description' => 'Rapid response emergency fleet equipped with life-saving advanced technology.'
    ],

    [
        'id' => 4,
        'name' => 'Fixed X-ray',
        'icon' => 'radiology',
        'description' => 'High-precision digital radiography for detailed musculoskeletal imaging.'
    ],

    [
        'id' => 5,
        'name' => 'Mobile X-ray',
        'icon' => 'screenshot_monitor',
        'description' => 'Portable diagnostic imaging units for bedside patient care in critical wards.'
    ],

    [
        'id' => 6,
        'name' => 'Radiology',
        'icon' => 'settings_input_antenna',
        'description' => 'Comprehensive medical imaging department offering expert diagnostic interpretations.'
    ],

    [
        'id' => 7,
        'name' => 'CT Scan',
        'icon' => 'view_in_ar',
        'description' => 'Advanced multi-slice computed tomography for rapid internal cross-sectional imaging.'
    ],

    [
        'id' => 8,
        'name' => '3D CT',
        'icon' => 'layers',
        'description' => 'High-definition 3D reconstructions for complex surgical planning and vascular analysis.'
    ],

    [
        'id' => 9,
        'name' => 'MRI',
        'icon' => 'biotech',
        'description' => 'Advanced magnetic resonance imaging for detailed visualization of soft tissues.'
    ],

    [
        'id' => 10,
        'name' => 'Diagnostics',
        'icon' => 'science',
        'description' => 'Integrated clinical pathology and laboratory services with accurate result tracking.'
    ],

    [
        'id' => 11,
        'name' => 'Surgery',
        'icon' => 'handyman',
        'description' => 'Expert surgical teams performing minimally invasive and major complex procedures.'
    ],

    [
        'id' => 12,
        'name' => 'Rehabilitation',
        'icon' => 'accessibility_new',
        'description' => 'Personalized physical therapy and recovery programs for functional restoration.'
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
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Services &amp; Departments | Health Hub
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
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
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

                        "on-surface": "#0b1c30",
                        "error-container": "#ffdad6",
                        "background": "#f8f9ff",
                        "primary": "#003d9b",
                        "tertiary-fixed-dim": "#ffb3ae",
                        "surface-container-lowest": "#ffffff",
                        "on-primary-fixed": "#001848",
                        "on-primary-fixed-variant": "#0040a2",
                        "on-tertiary-fixed": "#410004",
                        "on-secondary-fixed": "#001f26",
                        "surface-dim": "#cbdbf5",
                        "tertiary": "#8c0013",
                        "primary-container": "#0052cc",
                        "on-tertiary-container": "#ffc5c0",
                        "secondary-container": "#6ae1ff",
                        "on-primary-container": "#c4d2ff",
                        "on-tertiary-fixed-variant": "#930014",
                        "on-background": "#0b1c30",
                        "secondary-fixed-dim": "#5dd6f3",
                        "inverse-on-surface": "#eaf1ff",
                        "tertiary-container": "#b51220",
                        "outline-variant": "#c3c6d6",
                        "on-error-container": "#93000a",
                        "error": "#ba1a1a",
                        "secondary-fixed": "#adecff",
                        "on-surface-variant": "#434654",
                        "on-error": "#ffffff",
                        "surface-bright": "#f8f9ff",
                        "surface-container-low": "#eff4ff",
                        "surface-container": "#e5eeff",
                        "on-secondary": "#ffffff",
                        "outline": "#737685",
                        "secondary": "#00687a",
                        "inverse-surface": "#213145",
                        "surface-tint": "#0c56d0",
                        "on-tertiary": "#ffffff",
                        "surface-container-highest": "#d3e4fe",
                        "primary-fixed": "#dae2ff",
                        "inverse-primary": "#b2c5ff",
                        "surface-container-high": "#dce9ff",
                        "primary-fixed-dim": "#b2c5ff",
                        "on-secondary-container": "#006374",
                        "on-primary": "#ffffff",
                        "surface": "#f8f9ff",
                        "on-secondary-fixed-variant": "#004e5d",
                        "surface-variant": "#d3e4fe",
                        "tertiary-fixed": "#ffdad7"

                    },


                    borderRadius: {

                        DEFAULT: "0.25rem",
                        lg: "0.5rem",
                        xl: "0.75rem",
                        full: "9999px"

                    },


                    spacing: {

                        "margin-desktop": "40px",
                        "base": "8px",
                        "container-max": "1280px",
                        "margin-mobile": "16px",
                        "gutter": "24px"

                    },


                    fontFamily: {

                        "label-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "body-md": ["Inter"],
                        "display-lg": ["Inter"],
                        "label-sm": ["Inter"]

                    },


                    fontSize: {

                        "label-md": [
                            "14px",
                            {
                                "lineHeight": "20px",
                                "letterSpacing": "0.01em",
                                "fontWeight": "500"
                            }
                        ],

                        "body-lg": [
                            "18px",
                            {
                                "lineHeight": "28px",
                                "fontWeight": "400"
                            }
                        ],

                        "headline-lg": [
                            "32px",
                            {
                                "lineHeight": "40px",
                                "letterSpacing": "-0.01em",
                                "fontWeight": "600"
                            }
                        ],

                        "headline-md": [
                            "24px",
                            {
                                "lineHeight": "32px",
                                "fontWeight": "600"
                            }
                        ],

                        "headline-lg-mobile": [
                            "24px",
                            {
                                "lineHeight": "32px",
                                "fontWeight": "600"
                            }
                        ],

                        "body-md": [
                            "16px",
                            {
                                "lineHeight": "24px",
                                "fontWeight": "400"
                            }
                        ],

                        "display-lg": [
                            "48px",
                            {
                                "lineHeight": "56px",
                                "letterSpacing": "-0.02em",
                                "fontWeight": "700"
                            }
                        ],

                        "label-sm": [
                            "12px",
                            {
                                "lineHeight": "16px",
                                "fontWeight": "600"
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
        href="../css/services.css?v=1"
    >

</head>


<body
    class="bg-background text-on-surface font-body-md overflow-x-hidden"
>


<!-- ==========================================================
                        TOP NAVIGATION
========================================================== -->

<nav
    class="relative flex justify-between items-center px-margin-mobile md:px-margin-desktop h-20 w-full max-w-container-max mx-auto"
>


    <!-- LOGO -->

    <a
        href="home.php"
        class="font-headline-md text-headline-md font-bold text-primary dark:text-primary-fixed flex items-center gap-2"
    >

        <span
            class="material-symbols-outlined"
            style="font-variation-settings: &quot;FILL&quot; 1"
        >
            medical_services
        </span>

        <span>
            Health Hub
        </span>

    </a>


    <!-- NAVIGATION -->

    <div
        class="hidden md:flex items-center gap-8 absolute left-1/2 -translate-x-1/2"
    >

        <a
            class="text-on-surface-variant dark:text-outline-variant hover:text-primary transition-colors duration-200"
            href="home.php"
        >
            Home
        </a>


        <a
            class="text-on-surface-variant dark:text-outline-variant hover:text-primary transition-colors duration-200"
            href="specialists.php"
        >
            Doctors
        </a>


        <a
            class="text-primary dark:text-primary-fixed font-bold border-b-2 border-primary transition-colors duration-200 py-1"
            href="services.php"
        >
            Services
        </a>

    </div>

</nav>


<!-- ==========================================================
                    HOSPITAL HEADER
========================================================== -->

<iframe
    src="hospital-header.php"
    class="w-full h-[130px] border-0"
    scrolling="no"
></iframe>


<!-- ==========================================================
                            MAIN
========================================================== -->

<main
    class="pt-24 pb-20 relative"
>


    <!-- BACKGROUND PATTERN -->

    <div
        class="absolute inset-0 medical-grid-pattern pointer-events-none"
    ></div>


    <!-- ======================================================
                            HERO
    ======================================================= -->

    <section
        class="max-w-container-max mx-auto px-margin-desktop mb-20 relative"
    >

        <div
            class="flex flex-col md:flex-row items-center gap-12"
        >


            <!-- HERO TEXT -->

            <div
                class="flex-1 space-y-6"
            >

                <span
                    class="bg-secondary-fixed text-on-secondary-fixed px-4 py-1.5 rounded-full text-label-sm font-label-sm"
                >
                    ADVANCED
                    MEDICAL FACILITY
                </span>


                <h1
                    class="text-display-lg font-display-lg text-on-surface leading-tight"
                >

                    Patient-Centered

                    <br>

                    <span
                        class="text-primary"
                    >
                        Healthcare Solutions
                    </span>

                </h1>


                <p
                    class="text-body-lg font-body-lg text-on-surface-variant max-w-xl"
                >
                    Health Hub provides comprehensive medical care through
                    our state-of-the-art facilities and a team of globally
                    recognized clinical specialists.
                </p>


                <div
                    class="flex gap-4"
                ></div>

            </div>


            <!-- HERO IMAGE -->

            <div
                class="flex-1 relative"
            >

                <div
                    class="rounded-3xl overflow-hidden shadow-2xl aspect-[4/3]"
                >

                    <img
                        class="w-full h-full object-cover"
                        data-alt="A clean, modern hospital lobby with high ceilings and large windows letting in natural sunlight. The interior features minimalist white walls, polished floors, and comfortable blue seating areas. The atmosphere is calm and professional, with a focus on sterile efficiency and welcoming design. A few healthcare professionals in blue scrubs are visible in the background, reinforcing the high-trust medical environment."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDfjVeu9oi-JVGSMEW1JUiba_nXphU_cJPcHFx922m3IstaRuKpUTPB-66uXqpF1hF4V3deR8uu05l9JKP3okYKsWniDndpjUwx0N0Zev8HHwGWNEL2iud6mYoF5w4aw5p7JPz0UklOM5KLZb5dah2wxC8NVzuYWFccHAIcRh1FZ8VUynH7bg9FIH3Ll-vytqCXEjSNYFN14R6v9HwyqPEyMCX69wX0Gol0WV578IWpH7WqoIzGNghZ7wbiEzFmSaCuSjbpI4LLjJ8"
                    >

                </div>


                <!-- STATS CARD -->

                <div
                    class="absolute -bottom-6 -left-6 glass-card p-6 rounded-2xl shadow-xl border border-white/40"
                >

                    <div
                        class="flex items-center gap-4"
                    >

                        <div
                            class="w-12 h-12 bg-primary-container rounded-full flex items-center justify-center"
                        >

                            <span
                                class="material-symbols-outlined text-on-primary-container"
                            >
                                groups
                            </span>

                        </div>


                        <div>

                            <div
                                class="text-headline-md font-headline-md text-primary"
                            >
                                500+
                            </div>


                            <div
                                class="text-label-sm font-label-sm text-on-surface-variant"
                            >
                                Specialist Doctors
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ======================================================
                    HEALTHCARE SERVICES
    ======================================================= -->

    <section
        class="max-w-container-max mx-auto px-margin-desktop mb-24"
    >


        <!-- SECTION HEADING -->

        <div
            class="text-center mb-12"
        >

            <h2
                class="text-headline-lg font-headline-lg text-on-surface mb-2"
            >
                Our Healthcare Services
            </h2>


            <p
                class="text-body-md font-body-md text-on-surface-variant"
            >
                Round-the-clock medical assistance for all your
                health needs.
            </p>

        </div>


        <!-- SERVICE GRID -->

        <div
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter"
        >


            <?php foreach ($services as $service): ?>

                <div
                    class="service-card group bg-surface-container-lowest p-8 rounded-2xl shadow-sm border border-outline-variant hover:border-primary transition-all duration-300 hover:-translate-y-1"
                    data-service-id="<?= htmlspecialchars((string) $service['id']) ?>"
                >

                    <div
                        class="service-icon w-14 h-14 bg-surface-container-high rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors"
                    >

                        <span
                            class="material-symbols-outlined text-primary group-hover:text-on-primary text-3xl"
                        >
                            <?= htmlspecialchars($service['icon']) ?>
                        </span>

                    </div>


                    <h3
                        class="text-headline-md font-headline-md mb-2"
                    >
                        <?= htmlspecialchars($service['name']) ?>
                    </h3>


                    <p
                        class="text-body-md font-body-md text-on-surface-variant"
                    >
                        <?= htmlspecialchars($service['description']) ?>
                    </p>

                </div>

            <?php endforeach; ?>


        </div>

    </section>


    <!-- ======================================================
                SPECIALIZED DEPARTMENTS SECTION
    ======================================================= -->

    <section
        class="max-w-container-max mx-auto px-margin-desktop my-24"
    ></section>

</main>


<!-- ==========================================================
                            FOOTER
========================================================== -->

<footer
    class="bg-surface-container-highest dark:bg-surface-container-lowest border-t border-outline-variant w-full rounded-t-xl"
>


    <div
        class="grid grid-cols-1 md:grid-cols-4 gap-gutter px-margin-desktop py-12 w-full max-w-container-max mx-auto"
    >


        <!-- BRAND -->

        <div
            class="space-y-4"
        >

            <div
                class="text-headline-sm font-headline-sm font-black text-on-surface"
            >
                Health Hub
            </div>


            <p
                class="text-body-md font-body-md text-on-surface-variant"
            >
                Setting the standard in healthcare excellence
                through innovation and empathy since 1998.
            </p>


            <div
                class="flex gap-4"
            >

                <a
                    class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-primary hover:bg-primary hover:text-on-primary transition-all"
                    href="#"
                >

                    <svg
                        class="w-5 h-5 fill-current"
                        viewBox="0 0 24 24"
                    >

                        <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"
                        ></path>

                    </svg>

                </a>


                <a
                    class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-primary hover:bg-primary hover:text-on-primary transition-all"
                    href="#"
                >

                    <svg
                        class="w-5 h-5 fill-current"
                        viewBox="0 0 24 24"
                    >

                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.791-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.209-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"
                        ></path>

                    </svg>

                </a>

            </div>

        </div>


        <!-- QUICK LINKS -->

        <div>

            <h5
                class="text-label-md font-label-md font-bold text-on-surface mb-6"
            >
                Quick Links
            </h5>


            <ul
                class="space-y-3"
            >

                <li>

                    <a
                        class="text-on-surface-variant font-label-sm text-label-sm hover:text-primary underline transition-all"
                        href="#"
                    >
                        About Us
                    </a>

                </li>


                <li>

                    <a
                        class="text-on-surface-variant font-label-sm text-label-sm hover:text-primary underline transition-all"
                        href="specialists.php"
                    >
                        Find a Doctor
                    </a>

                </li>


                <li>

                    <a
                        class="text-on-surface-variant font-label-sm text-label-sm hover:text-primary underline transition-all"
                        href="services.php"
                    >
                        Our Services
                    </a>

                </li>


                <li>

                    <a
                        class="text-on-surface-variant font-label-sm text-label-sm hover:text-primary underline transition-all"
                        href="#"
                    >
                        Patient Testimonials
                    </a>

                </li>


                <li>

                    <a
                        class="text-on-surface-variant font-label-sm text-label-sm hover:text-primary underline transition-all"
                        href="#"
                    >
                        News &amp; Media
                    </a>

                </li>

            </ul>

        </div>


        <!-- DEPARTMENTS -->

        <div>

            <h5
                class="text-label-md font-label-md font-bold text-on-surface mb-6"
            >
                Departments
            </h5>


            <ul
                class="space-y-3"
            >

                <li>

                    <a
                        class="text-on-surface-variant font-label-sm text-label-sm hover:text-primary underline transition-all"
                        href="#"
                    >
                        Cardiology
                    </a>

                </li>


                <li>

                    <a
                        class="text-on-surface-variant font-label-sm text-label-sm hover:text-primary underline transition-all"
                        href="#"
                    >
                        Neurology
                    </a>

                </li>


                <li>

                    <a
                        class="text-on-surface-variant font-label-sm text-label-sm hover:text-primary underline transition-all"
                        href="#"
                    >
                        Pediatrics
                    </a>

                </li>


                <li>

                    <a
                        class="text-on-surface-variant font-label-sm text-label-sm hover:text-primary underline transition-all"
                        href="#"
                    >
                        Orthopedics
                    </a>

                </li>


                <li>

                    <a
                        class="text-on-surface-variant font-label-sm text-label-sm hover:text-primary underline transition-all"
                        href="#"
                    >
                        Emergency Care
                    </a>

                </li>

            </ul>

        </div>


        <!-- LEGAL -->

        <div>

            <h5
                class="text-label-md font-label-md font-bold text-on-surface mb-6"
            >
                Legal
            </h5>


            <ul
                class="space-y-3"
            >

                <li>

                    <a
                        class="text-on-surface-variant font-label-sm text-label-sm hover:text-primary underline transition-all"
                        href="#"
                    >
                        Privacy Policy
                    </a>

                </li>


                <li>

                    <a
                        class="text-on-surface-variant font-label-sm text-label-sm hover:text-primary underline transition-all"
                        href="#"
                    >
                        Terms of Service
                    </a>

                </li>


                <li>

                    <a
                        class="text-on-surface-variant font-label-sm text-label-sm hover:text-primary underline transition-all"
                        href="#"
                    >
                        Cookie Policy
                    </a>

                </li>


                <li>

                    <a
                        class="text-on-surface-variant font-label-sm text-label-sm hover:text-primary underline transition-all"
                        href="#"
                    >
                        Accessibility
                    </a>

                </li>


                <li>

                    <a
                        class="text-on-surface-variant font-label-sm text-label-sm hover:text-primary underline transition-all"
                        href="#"
                    >
                        Contact Support
                    </a>

                </li>

            </ul>

        </div>

    </div>


    <!-- COPYRIGHT -->

    <div
        class="max-w-container-max mx-auto px-margin-desktop py-6 border-t border-outline-variant flex flex-col md:flex-row justify-between items-center gap-4"
    >

        <p
            class="text-label-sm font-label-sm text-on-surface-variant"
        >
            © 2024 Health Hub Medical Systems.
            All rights reserved.
        </p>


        <div
            class="flex items-center gap-6"
        >

            <div
                class="flex items-center gap-2 text-label-sm font-label-sm text-on-surface-variant"
            >

                <span
                    class="material-symbols-outlined text-sm"
                >
                    language
                </span>

                English (US)

            </div>

        </div>

    </div>

</footer>


<!-- ==========================================================
                            JAVASCRIPT
========================================================== -->

<script
    src="../js/services.js?v=1"
></script>


</body>

</html>