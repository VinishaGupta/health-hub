<?php

/*
|--------------------------------------------------------------------------
| AVAILABLE FACILITIES - USER MODULE
|--------------------------------------------------------------------------
| MOCK DATA ONLY
|
| In the final version, these facilities will come from the Hospital Admin
| database based on the facilities selected by that hospital.
|--------------------------------------------------------------------------
*/


$facilities = [

    [
        'id' => 1,
        'name' => 'Ambulance Service',
        'description' => '24/7 emergency ambulance service available for patients.',
        'image' => '../images/ambulance.jpg',
        'selected' => true
    ],

    [
        'id' => 2,
        'name' => 'Blood Bank',
        'description' => 'Blood storage and blood availability services.',
        'image' => '../images/blood-bank.jpg',
        'selected' => true
    ],

    [
        'id' => 3,
        'name' => 'Emergency Department',
        'description' => 'Emergency medical care for urgent and critical conditions.',
        'image' => '../images/emergency.jpg',
        'selected' => true
    ],

    [
        'id' => 4,
        'name' => 'Pharmacy',
        'description' => 'Medicines and pharmaceutical services available within the hospital.',
        'image' => '../images/pharmacy.jpg',
        'selected' => true
    ],

    [
        'id' => 5,
        'name' => 'Diagnostic Laboratory',
        'description' => 'Laboratory testing and diagnostic services for patients.',
        'image' => '../images/laboratory.jpg',
        'selected' => true
    ],

    [
        'id' => 6,
        'name' => 'Radiology',
        'description' => 'Imaging and radiology services including diagnostic scans.',
        'image' => '../images/radiology.jpg',
        'selected' => true
    ],

    [
        'id' => 7,
        'name' => 'ICU',
        'description' => 'Intensive care facilities for critically ill patients.',
        'image' => '../images/icu.jpg',
        'selected' => true
    ],

    [
        'id' => 8,
        'name' => 'Operation Theatre',
        'description' => 'Fully equipped operation theatres for surgical procedures.',
        'image' => '../images/operation-theatre.jpg',
        'selected' => true
    ],

    [
        'id' => 9,
        'name' => 'Cafeteria',
        'description' => 'Food and refreshment facilities available within the hospital.',
        'image' => '../images/cafeteria.jpg',
        'selected' => false
    ],

    [
        'id' => 10,
        'name' => 'Parking',
        'description' => 'Parking facilities available for patients and visitors.',
        'image' => '../images/parking.jpg',
        'selected' => true
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

    <title>Available Facilities</title>


    <!-- Tailwind -->

    <script src="https://cdn.tailwindcss.com"></script>


    <!-- Inter -->

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >


    <!-- Font Awesome -->

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >


    <!-- Page CSS -->

    <link
        rel="stylesheet"
        href="../css/facilities.css"
    >

</head>


<body>


<!-- ==========================================================
                    HOSPITAL HEADER
========================================================== -->

<section class="hospital-header">

    <div class="hospital-header-inner">

        <!-- Logo -->

        <div class="hospital-logo">

            Logo

        </div>


        <!-- Hospital Details -->

        <div class="hospital-details">

            <p class="hospital-short-name">
                Short Name
            </p>

            <h1>
                City Care Hospital
            </h1>

            <p class="hospital-location">
                Nagpur, Maharashtra
            </p>

        </div>

    </div>

</section>



<!-- ==========================================================
                    PAGE
========================================================== -->

<main class="facilities-page">


    <!-- Back -->

    <div class="back-container">

        <a href="home.php" class="back-btn">

            <i class="fa-solid fa-arrow-left"></i>

            Back

        </a>

    </div>



    <!-- Heading -->

    <div class="page-heading">

        <h2>
            Available Facilities
        </h2>

        <p>
            Explore the healthcare facilities available at this hospital.
        </p>

    </div>



    <!-- ======================================================
                    FACILITY GRID
    ======================================================= -->

    <div class="facility-grid">


        <?php foreach ($facilities as $facility): ?>


            <div
                class="facility-card"
                data-id="<?= $facility['id'] ?>"
            >


                <!-- Image -->

                <div class="facility-image-wrapper">

                    <img
                        src="<?= htmlspecialchars($facility['image']) ?>"
                        alt="<?= htmlspecialchars($facility['name']) ?>"
                        onerror="this.src='https://via.placeholder.com/600x350?text=Facility'"
                    >

                </div>



                <!-- Content -->

                <div class="facility-content">

                    <h3>

                        <?= htmlspecialchars($facility['name']) ?>

                    </h3>


                    <p>

                        <?= htmlspecialchars($facility['description']) ?>

                    </p>


                    <!-- Available -->

                    <?php if ($facility['selected']): ?>

                        <div class="facility-status">

                            <i class="fa-solid fa-circle-check"></i>

                            Available

                        </div>

                    <?php endif; ?>


                </div>


            </div>


        <?php endforeach; ?>


    </div>


</main>



<!-- JS -->

<script src="../js/facilities.js"></script>


</body>

</html>