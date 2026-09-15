<?php

// ==========================================================
// MOCK HOSPITAL DATA
// ==========================================================

$hospitalName = "City Care Hospital";

$hospitalLocation = "Nagpur, Maharashtra";

$hospitalLogo = "Logo";


// ==========================================================
// MOCK PHOTO BANK DATA
// Later this array will come from the database.
// ==========================================================

$hospitalPhotos = [

    [
        "image_path" => "../images/emmy_180711_0097.jpg",
        "image_label" => "Patient Care"
    ],

    [
        "image_path" => "../images/hospital-emergency-room-stockcake.jpg",
        "image_label" => "Emergency Room"
    ],

    [
        "image_path" => "../images/images (9).jpg",
        "image_label" => "Hospital Ward"
    ],

    [
        "image_path" => "../images/images (10).jpg",
        "image_label" => "Patient Room"
    ],

    [
        "image_path" => "../images/images (11).jpg",
        "image_label" => "ICU"
    ],

    [
        "image_path" => "../images/images (12).jpg",
        "image_label" => "Operation Theatre"
    ]

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

    <title>
        <?= htmlspecialchars($hospitalName) ?> - Photo Bank
    </title>


    <!-- Tailwind -->

    <script src="https://cdn.tailwindcss.com"></script>


    <!-- Custom CSS -->

    <link
        rel="stylesheet"
        href="../css/photo-bank.css"
    >


    <!-- ======================================================
         RESPONSIVE CSS
    ======================================================= -->

    <style>

        /* ======================================================
           GLOBAL
        ======================================================= */

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
            background: #f8f9ff;
            font-family: Arial, Helvetica, sans-serif;
        }


        /* ======================================================
           HEADER
        ======================================================= */

        .hospital-header {
            position: relative;
            width: 100%;
            background: white;
        }


        .header-container {
            width: 100%;
            max-width: 1280px;
            margin: 0 auto;

            padding: 32px 40px;

            display: flex;
            justify-content: center;
            align-items: center;
        }


        .hospital-info {
            display: flex;
            align-items: center;
            gap: 32px;

            min-width: 0;
        }


        /* ======================================================
           BACK BUTTON
        ======================================================= */

        .back-button {
            position: absolute;

            top: 24px;
            left: 24px;

            display: inline-flex;
            align-items: center;
            gap: 8px;

            color: #0B4DA2;

            text-decoration: none;

            font-size: 20px;
            font-weight: 700;

            z-index: 10;

            transition: all .3s ease;
        }


        .back-button:hover {
            color: #2563eb;
            transform: translateX(-2px);
        }


        .back-arrow {
            font-size: 32px;
            line-height: 1;
        }


        /* ======================================================
           LOGO
        ======================================================= */

        .hospital-logo {
            width: 112px;
            height: 112px;

            min-width: 112px;

            border-radius: 50%;

            border: 4px solid #0ea5e9;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 20px;
            font-weight: 700;

            color: #0B4DA2;

            background: white;
        }


        /* ======================================================
           HOSPITAL DETAILS
        ======================================================= */

        .hospital-details {
            min-width: 0;
        }


        .hospital-name {
            margin: 0;

            font-size: 36px;

            line-height: 1.2;

            font-weight: 700;

            color: #0B4DA2;

            overflow-wrap: anywhere;
        }


        .hospital-location {
            margin: 8px 0 0;

            font-size: 20px;

            line-height: 1.4;

            font-weight: 700;

            color: #006878;

            overflow-wrap: anywhere;
        }


        /* ======================================================
           PHOTO SECTION
        ======================================================= */

        .photo-section {
            width: 100%;
            max-width: 1280px;

            margin: 0 auto;

            padding: 64px 32px;
        }


        .photo-heading {
            margin: 0 0 32px;

            font-size: 32px;

            line-height: 1.2;

            font-weight: 700;

            color: #0B4DA2;
        }


        /* ======================================================
           PHOTO GRID
        ======================================================= */

        .photo-grid {
            display: grid;

            grid-template-columns: repeat(3, minmax(0, 1fr));

            gap: 48px;
        }


        .photo-card {
            width: 100%;
            min-width: 0;

            text-align: center;
        }


        .photo-card img {
            display: block;

            width: 100%;
            height: 260px;

            object-fit: cover;

            border-radius: 12px;

            cursor: pointer;

            box-shadow: 0 5px 15px rgba(0, 0, 0, .12);

            transition: transform .3s ease;
        }


        .photo-card img:hover {
            transform: scale(1.04);
        }


        .photo-label {
            margin-top: 20px;

            font-size: 20px;

            line-height: 1.4;

            font-weight: 600;

            color: #111827;

            overflow-wrap: anywhere;
        }


        /* ======================================================
           IMAGE POPUP
        ======================================================= */

        #imagePopup {
            position: fixed;

            inset: 0;

            width: 100%;
            height: 100%;

            background: rgba(0, 0, 0, .88);

            display: none;

            justify-content: center;
            align-items: center;

            padding: 20px;

            z-index: 9999;
        }


        #popupImage {
            max-width: 92%;
            max-height: 90%;

            object-fit: contain;

            border-radius: 12px;

            box-shadow: 0 0 30px rgba(0, 0, 0, .5);
        }


        #closeBtn {
            position: absolute;

            top: 18px;
            right: 28px;

            color: white;

            font-size: 52px;

            font-weight: bold;

            line-height: 1;

            cursor: pointer;

            user-select: none;

            z-index: 10000;

            transition: .3s;
        }


        #closeBtn:hover {
            color: #ff4d4d;
        }


        /* ======================================================
           TABLET
        ======================================================= */

        @media (max-width: 1024px) {

            .header-container {
                padding: 30px 30px 30px 110px;
            }


            .hospital-logo {
                width: 95px;
                height: 95px;
                min-width: 95px;
            }


            .hospital-name {
                font-size: 32px;
            }


            .hospital-location {
                font-size: 18px;
            }


            .photo-section {
                padding: 50px 24px;
            }


            .photo-grid {
                gap: 28px;
            }


            .photo-card img {
                height: 230px;
            }

        }


        /* ======================================================
           MOBILE
        ======================================================= */

        @media (max-width: 768px) {


            /* --------------------------------------------------
               HEADER
            -------------------------------------------------- */

            .hospital-header {
                width: 100%;
            }


            .header-container {
                display: block;

                width: 100%;

                padding: 18px 16px 22px;
            }


            /* --------------------------------------------------
               BACK BUTTON
            -------------------------------------------------- */

            .back-button {
                position: static;

                display: inline-flex;

                margin-bottom: 18px;

                font-size: 19px;
            }


            .back-arrow {
                font-size: 29px;
            }


            /* --------------------------------------------------
               HOSPITAL INFO
            -------------------------------------------------- */

            .hospital-info {
                width: 100%;

                display: flex;

                align-items: flex-start;

                gap: 14px;
            }


            /* --------------------------------------------------
               LOGO
            -------------------------------------------------- */

            .hospital-logo {
                width: 72px;
                height: 72px;

                min-width: 72px;

                border-width: 3px;

                font-size: 16px;
            }


            /* --------------------------------------------------
               HOSPITAL DETAILS
            -------------------------------------------------- */

            .hospital-details {
                flex: 1;

                min-width: 0;
            }


            .hospital-name {
                font-size: 26px;

                line-height: 1.15;
            }


            .hospital-location {
                margin-top: 6px;

                font-size: 16px;

                line-height: 1.4;
            }


            /* --------------------------------------------------
               PHOTO SECTION
            -------------------------------------------------- */

            .photo-section {
                width: 100%;

                padding: 32px 16px 45px;
            }


            .photo-heading {
                font-size: 28px;

                margin-bottom: 24px;
            }


            /* --------------------------------------------------
               PHOTO GRID
            -------------------------------------------------- */

            .photo-grid {
                display: grid;

                grid-template-columns: 1fr;

                gap: 30px;
            }


            .photo-card {
                width: 100%;
            }


            .photo-card img {
                width: 100%;

                height: 220px;

                border-radius: 12px;
            }


            .photo-label {
                margin-top: 12px;

                font-size: 18px;
            }


            /* --------------------------------------------------
               POPUP
            -------------------------------------------------- */

            #imagePopup {
                padding: 15px;
            }


            #popupImage {
                max-width: 96%;

                max-height: 82%;
            }


            #closeBtn {
                top: 12px;

                right: 16px;

                font-size: 42px;
            }

        }


        /* ======================================================
           SMALL PHONES
        ======================================================= */

        @media (max-width: 400px) {


            .header-container {
                padding: 15px 12px 20px;
            }


            .back-button {
                font-size: 18px;

                margin-bottom: 15px;
            }


            .back-arrow {
                font-size: 27px;
            }


            .hospital-info {
                gap: 11px;
            }


            .hospital-logo {
                width: 62px;
                height: 62px;

                min-width: 62px;

                font-size: 14px;
            }


            .hospital-name {
                font-size: 22px;
            }


            .hospital-location {
                font-size: 14px;
            }


            .photo-section {
                padding: 28px 12px 40px;
            }


            .photo-heading {
                font-size: 25px;

                margin-bottom: 20px;
            }


            .photo-grid {
                gap: 25px;
            }


            .photo-card img {
                height: 200px;
            }


            .photo-label {
                font-size: 16px;

                margin-top: 10px;
            }


            #closeBtn {
                top: 10px;

                right: 12px;

                font-size: 38px;
            }

        }

    </style>

</head>


<body>


<!-- ==========================================================
                    HOSPITAL HEADER
========================================================== -->

<section class="hospital-header shadow-sm border-b bg-white">


    <!-- ======================================================
                         BACK BUTTON
    ======================================================= -->

    <a
        href="home.php"
        class="back-button"
    >

        <span class="back-arrow">
            &larr;
        </span>

        <span>
            Back
        </span>

    </a>


    <!-- ======================================================
                     HOSPITAL INFORMATION
    ======================================================= -->

    <div class="header-container">


        <div class="hospital-info">


            <!-- ==================================================
                             HOSPITAL LOGO
            =================================================== -->

            <div class="hospital-logo">

                <?= htmlspecialchars($hospitalLogo) ?>

            </div>


            <!-- ==================================================
                         HOSPITAL DETAILS
            =================================================== -->

            <div class="hospital-details">


                <h1 class="hospital-name">

                    <?= htmlspecialchars($hospitalName) ?>

                </h1>


                <p class="hospital-location">

                    <?= htmlspecialchars($hospitalLocation) ?>

                </p>


            </div>


        </div>


    </div>


</section>



<!-- ==========================================================
                         PHOTO BANK
========================================================== -->

<section class="photo-section">


    <h1 class="photo-heading">

        Photo Bank

    </h1>


    <!-- ======================================================
                         PHOTO GRID
    ======================================================= -->

    <div class="photo-grid">


        <?php if (!empty($hospitalPhotos)): ?>


            <?php foreach ($hospitalPhotos as $photo): ?>


                <div class="photo-card">


                    <!-- IMAGE -->

                    <img
                        src="<?= htmlspecialchars($photo['image_path']) ?>"
                        alt="<?= htmlspecialchars($photo['image_label']) ?>"
                        onclick="openImage(this.src)"
                    >


                    <!-- LABEL -->

                    <?php if (!empty($photo['image_label'])): ?>

                        <p class="photo-label">

                            <?= htmlspecialchars($photo['image_label']) ?>

                        </p>

                    <?php endif; ?>


                </div>


            <?php endforeach; ?>


        <?php else: ?>


            <!-- ==================================================
                         NO PHOTOS
            =================================================== -->

            <div
                style="
                    grid-column: 1 / -1;
                    text-align: center;
                    padding: 60px 20px;
                "
            >

                <p
                    style="
                        font-size: 20px;
                        color: #6b7280;
                    "
                >

                    No hospital photos available.

                </p>

            </div>


        <?php endif; ?>


    </div>


</section>



<!-- ==========================================================
                         IMAGE POPUP
========================================================== -->

<div id="imagePopup">


    <!-- CLOSE BUTTON -->

    <span
        id="closeBtn"
        onclick="closeImage()"
    >

        &times;

    </span>


    <!-- LARGE IMAGE -->

    <img
        id="popupImage"
        src=""
        alt="Hospital Photo"
    >


</div>



<!-- ==========================================================
                         JAVASCRIPT
========================================================== -->

<script src="../js/photo-bank.js"></script>


</body>

</html>