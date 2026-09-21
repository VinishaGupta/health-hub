<?php

/*
|--------------------------------------------------------------------------
| HOSPITAL SCHEDULE - USER MODULE
|--------------------------------------------------------------------------
| MOCK DATA ONLY
|
| Later this schedule will come from the Hospital Admin database/API.
|
| Expected future information:
| - Doctor
| - Date
| - Start Time
| - End Time
| - OPD availability
| - Hospital blocked timings
|--------------------------------------------------------------------------
*/


/* ==========================================================
                    HOSPITAL STATUS
========================================================== */

$hospitalStatus = [
    'label' => 'Hospital Status',
    'value' => 'Open 24 Hours',
    'open' => true
];


/* ==========================================================
                    DOCTOR SCHEDULE
========================================================== */

$doctorSchedule = [

    [
        'id' => 1,
        'doctor' => 'Dr. Rohan Patil',
        'start_time' => '12:00',
        'end_time' => '14:00',
        'available' => true
    ],

    [
        'id' => 2,
        'doctor' => 'Dr. Madhuri Bele',
        'start_time' => '11:00',
        'end_time' => '14:30',
        'available' => true
    ],

    [
        'id' => 3,
        'doctor' => 'Dr. Madhuri Bele',
        'start_time' => '19:00',
        'end_time' => '22:00',
        'available' => true
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
        City Care Hospital - Schedule
    </title>


    <!-- ======================================================
                        INTER FONT
    ======================================================= -->

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


    <!-- ======================================================
                        FONT AWESOME
    ======================================================= -->

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >


    <!-- ======================================================
                        PAGE CSS
    ======================================================= -->

    <link
        rel="stylesheet"
        href="../css/schedule.css"
    >

</head>


<body>


<!-- ==========================================================
                    HOSPITAL HEADER
========================================================== -->

<header class="hospital-header">

    <div class="header-container">


        <!-- Hospital Logo -->

        <div class="hospital-logo">

            Logo

        </div>


        <!-- Hospital Details -->

        <div class="hospital-details">

            <div class="short-name">

                Short Name

            </div>


            <h1 class="hospital-name">

                City Care Hospital

            </h1>


            <div class="hospital-location">

                <i class="fa-solid fa-location-dot"></i>

                Hospital Location

            </div>

        </div>

    </div>

</header>



<!-- ==========================================================
                    MAIN
========================================================== -->

<main class="main-container">


    <!-- ======================================================
                        BACK
    ======================================================= -->

    <div class="back-container">

        <a
            href="home.php"
            class="back-btn"
        >

            <i class="fa-solid fa-arrow-left"></i>

            Back

        </a>

    </div>



    <!-- ======================================================
                        HOSPITAL STATUS
    ======================================================= -->

    <div class="status-grid">


        <div class="status-card">


            <div class="status-label">

                <?= htmlspecialchars(
                    $hospitalStatus['label']
                ) ?>

            </div>


            <div
                class="status-value <?= $hospitalStatus['open'] ? 'open' : '' ?>"
            >

                <?= htmlspecialchars(
                    $hospitalStatus['value']
                ) ?>

            </div>


        </div>


    </div>



    <!-- ======================================================
                        OPD TIMINGS
    ======================================================= -->

    <section class="section">


        <!-- SECTION HEADER -->

        <div class="section-header">


            <div class="section-icon">

                <i class="fa-solid fa-user-doctor"></i>

            </div>


            <h2>

                OPD Timings

            </h2>


        </div>



        <!-- SECTION CONTENT -->

        <div class="section-content">


            <!-- ==================================================
                            DOCTOR SCHEDULE
            =================================================== -->

            <div class="timing-grid">


                <div class="timing-card">


                    <div class="timing-card-title">

                        Doctor Schedule

                    </div>



                    <?php foreach (
                        $doctorSchedule
                        as $schedule
                    ): ?>


                        <div
                            class="timing-row"
                            data-doctor-id="<?= $schedule['id'] ?>"
                        >


                            <!-- Doctor -->

                            <span class="timing-name">

                                <?= htmlspecialchars(
                                    $schedule['doctor']
                                ) ?>

                            </span>



                            <!-- Timing -->

                            <span class="time-badge">

                                <?= htmlspecialchars(
                                    $schedule['start_time']
                                ) ?>

                                –

                                <?= htmlspecialchars(
                                    $schedule['end_time']
                                ) ?>

                            </span>


                        </div>


                    <?php endforeach; ?>


                </div>


            </div>



            <!-- ==================================================
                                NOTICE
            =================================================== -->

            <div class="notice">


                <strong>
                    Important:
                </strong>


                Please note that your scheduled OPD appointment
                time may be subject to change to facilitate the
                monitoring of critically ill patients.


            </div>


        </div>


    </section>


</main>



<!-- ==========================================================
                        JAVASCRIPT
========================================================== -->

<script src="../js/schedule.js"></script>


</body>

</html>