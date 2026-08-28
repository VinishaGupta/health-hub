<?php

// ==========================================================
// MOCK HOSPITAL DATA
// ==========================================================

$hospitalName = "City Care Hospital";

$hospitalLocation = "Nagpur, Maharashtra";

$hospitalLogo = "Logo";


// ==========================================================
// MOCK PHOTO BANK DATA
//
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
        Photo Bank
    </title>


    <!-- Tailwind -->

    <script src="https://cdn.tailwindcss.com"></script>


    <!-- Custom CSS -->

    <link
        rel="stylesheet"
        href="../css/photo-bank.css"
    >

</head>


<body>


<!-- ==========================================================
                    HOSPITAL HEADER
========================================================== -->

<!-- ==========================================================
                    HOSPITAL HEADER
========================================================== -->

<section class="shadow-sm border-b bg-white">

    <!-- Back Button -->
    <div class="absolute top-6 left-6">

        <a
            href="home.php"
            class="inline-flex items-center gap-2
                   text-[#0B4DA2]
                   text-xl
                   font-bold
                   hover:text-blue-700
                   transition-all duration-300"
        >

            <span class="text-3xl">
                &larr;
            </span>

            <span>
                Back
            </span>

        </a>

    </div>


    <!-- Centered Hospital Header -->

    <div
        class="max-w-7xl
               mx-auto
               px-10
               py-8
               flex
               justify-center
               items-center"
    >

        <div
            class="flex
                   items-center
                   gap-8"
        >

            <!-- Hospital Logo -->

            <div
                class="w-28
                       h-28
                       rounded-full
                       border-4
                       border-sky-500
                       flex
                       items-center
                       justify-center
                       text-xl
                       font-bold
                       text-[#0B4DA2]
                       flex-shrink-0"
            >

                <?= htmlspecialchars($hospitalLogo) ?>

            </div>


            <!-- Hospital Information -->

            <div>

                <h1
                    class="text-4xl
                           font-bold
                           text-[#0B4DA2]"
                >

                    <?= htmlspecialchars($hospitalName) ?>

                </h1>


                <p
                    class="text-xl
                           font-bold
                           text-[#006878]
                           mt-2"
                >

                    <?= htmlspecialchars($hospitalLocation) ?>

                </p>

            </div>

        </div>

    </div>

</section>


<!-- ==========================================================
                    PHOTO BANK
========================================================== -->

<section
    class="max-w-7xl
           mx-auto
           py-16
           px-8"
>


    <h1
        class="text-3xl
               font-bold
               text-[#0B4DA2]
               mb-8"
    >

        Photo Bank

    </h1>


    <!-- ======================================================
                    PHOTO GRID
    ======================================================= -->

    <div
        class="grid
               grid-cols-1
               md:grid-cols-2
               lg:grid-cols-3
               gap-12"
    >


        <?php if (!empty($hospitalPhotos)): ?>


            <?php foreach ($hospitalPhotos as $photo): ?>


                <div
                    class="photo-card
                           text-center"
                >


                    <!-- Image -->

                    <img
                        src="<?= htmlspecialchars($photo['image_path']) ?>"
                        alt="<?= htmlspecialchars($photo['image_label']) ?>"
                        onclick="openImage(this.src)"
                    >


                    <!-- Label -->

                    <?php if (!empty($photo['image_label'])): ?>

                        <p
                            class="mt-5
                                   text-xl
                                   font-semibold"
                        >

                            <?= htmlspecialchars($photo['image_label']) ?>

                        </p>

                    <?php endif; ?>


                </div>


            <?php endforeach; ?>


        <?php else: ?>


            <div
                class="col-span-full
                       text-center
                       py-16"
            >

                <p
                    class="text-xl
                           text-gray-500"
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


    <!-- Close -->

    <span
        id="closeBtn"
        onclick="closeImage()"
    >

        &times;

    </span>


    <!-- Large Image -->

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