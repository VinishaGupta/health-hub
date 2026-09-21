<?php

/*
|--------------------------------------------------------------------------
| DONOR SERVICES - USER MODULE
|--------------------------------------------------------------------------
| MOCK DATA ONLY
|
| This page follows the structure of donor.html.
|
| Later these donor options can be connected to the
| Health Hub database / backend.
|--------------------------------------------------------------------------
*/


/* ==========================================================
                    DONOR TYPES
========================================================== */

$donorTypes = [

    [
        'id' => 1,

        'type' => 'Blood Donor',

        'icon' => '🩸',

        'description' =>
            'Donate blood and help save lives during emergencies and surgeries.'
    ],


    [
        'id' => 2,

        'type' => 'Organ Donor',

        'icon' => '❤️',

        'description' =>
            'Give the gift of life through organ donation and transplantation.'
    ],


    [
        'id' => 3,

        'type' => 'Plasma Donor',

        'icon' => '💉',

        'description' =>
            'Plasma donation supports patients with immune disorders and burns.'
    ],


    [
        'id' => 4,

        'type' => 'Bone Marrow Donor',

        'icon' => '🦴',

        'description' =>
            'Help patients fighting blood cancers and genetic diseases.'
    ],


    [
        'id' => 5,

        'type' => 'Eye Donor',

        'icon' => '👁️',

        'description' =>
            'Restore sight and transform lives through eye donation.'
    ],


    [
        'id' => 6,

        'type' => 'Tissue Donor',

        'icon' => '🧬',

        'description' =>
            'Donate tissues to help reconstruct and heal injured patients.'
    ]

];

?>

<!DOCTYPE html>

<html lang="en">

<head>


    <!-- ======================================================
                            META
    ======================================================= -->

    <meta charset="UTF-8">


    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >


    <title>
        Donor Services - Health Hub
    </title>



    <!-- ======================================================
                    MATERIAL SYMBOLS
    ======================================================= -->

    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
    >



    <!-- ======================================================
                        INTER FONT
    ======================================================= -->

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >



    <!-- ======================================================
                        PAGE CSS
    ======================================================= -->

<link
    rel="stylesheet"
    href="../../css/donor.css"
>


</head>


<body>


<!-- ==========================================================
                            NAVBAR
========================================================== -->

<nav class="navbar">


    <div class="navbar-inner">


        <!-- ==================================================
                            LOGO
        =================================================== -->

        <div class="navbar-logo">


            <span
                class="material-symbols-outlined navbar-logo-icon"
            >

                add_box

            </span>


            <h1 class="navbar-logo-text">

                Health Hub

            </h1>


        </div>



        <!-- ==================================================
                        MOBILE DIVIDER
        =================================================== -->

        <div class="mobile-nav-divider"></div>



        <!-- ==================================================
                        NAVIGATION
        =================================================== -->

        <div class="navbar-links">


            <!-- HOME -->

            <a
                href="home.php"
                class="navbar-home"
            >

                Home

            </a>



            <!-- FIND A DOCTOR -->

            <a
                href="#"
                class="navbar-doctor"
            >

                Find A Doctor

            </a>


        </div>


    </div>


</nav>



<!-- ==========================================================
                        HERO SECTION
========================================================== -->

<section class="hero-section">


    <div class="hero-container">


        <h1 class="hero-title">

            Become a Donor

        </h1>


        <p class="hero-description">

            Save lives by contributing to healthcare and humanity.

        </p>


    </div>


</section>



<!-- ==========================================================
                        DONOR SECTION
========================================================== -->

<section class="donor-section">


    <div class="donor-container">


        <div class="donor-grid">


            <!-- ==================================================
                        DONOR TYPES
            =================================================== -->

            <?php foreach ($donorTypes as $donor): ?>


                <div
                    class="donor-card"
                    data-id="<?= htmlspecialchars(
                        $donor['id']
                    ) ?>"
                >


                    <!-- ==========================================
                                DONOR ICON
                    =========================================== -->

                    <div class="donor-icon">

                        <?= htmlspecialchars(
                            $donor['icon']
                        ) ?>

                    </div>



                    <!-- ==========================================
                                DONOR TITLE
                    =========================================== -->

                    <h2 class="donor-title">

                        <?= htmlspecialchars(
                            $donor['type']
                        ) ?>

                    </h2>



                    <!-- ==========================================
                                DIVIDER
                    =========================================== -->

                    <div class="donor-divider"></div>



                    <!-- ==========================================
                                DESCRIPTION
                    =========================================== -->

                    <p class="donor-description">

                        <?= htmlspecialchars(
                            $donor['description']
                        ) ?>

                    </p>



                    <!-- ==========================================
                                REGISTER BUTTON
                    =========================================== -->

                    <button
                        type="button"
                        class="register-button"
                    >

                        Register Now

                    </button>


                </div>


            <?php endforeach; ?>


        </div>


    </div>


</section>



<!-- ==========================================================
                        JAVASCRIPT
========================================================== -->

<script src="../../js/donor.js"></script>

</body>

</html>