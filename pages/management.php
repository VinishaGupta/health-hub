<?php

/*
|--------------------------------------------------------------------------
| MANAGEMENT BODY - USER MODULE
|--------------------------------------------------------------------------
| MOCK DATA ONLY
|
| This page contains:
|
| 1. Management Body
| 2. Consulting Body
|
| Later these members can be loaded from the
| Hospital Admin / Health Hub Admin database.
|--------------------------------------------------------------------------
*/


/* ==========================================================
                    MANAGEMENT BODY
========================================================== */

$managementMembers = [

    [
        'id' => 1,

        'name' => 'Vishanuprasad Tapdiya',

        'role' => 'Chairperson / Owner',

        'status' => 'Active'
    ]

];


/* ==========================================================
                    CONSULTING BODY
========================================================== */

$consultingMembers = [

    [
        'id' => 1,

        'name' => 'Karan Agrawal',

        'role' => 'Owner',

        'phone' => '+91 98765 43210',

        'status' => 'Active'
    ]

];


/* ==========================================================
                    EMPTY SLOTS
========================================================== */

$managementEmptySlots = 2;

$consultingEmptySlots = 2;

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
        Management Body
    </title>



    <!-- ======================================================
                        MATERIAL SYMBOLS
    ======================================================= -->

    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
    >



    <!-- ======================================================
                            INTER
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
        href="../css/management.css"
    >


</head>


<body>


<!-- ==========================================================
                        MAIN PAGE
========================================================== -->

<main class="management-page">


    <div class="management-grid">


        <!-- ==================================================
                    MANAGEMENT BODY
        =================================================== -->

        <section
            class="management-section management"
        >


            <!-- ==============================================
                        MANAGEMENT HEADER
            =============================================== -->

            <div class="section-header">


                <span
                    class="material-symbols-outlined section-icon"
                >

                    groups

                </span>


                <div>

                    <h2>

                        Management Body

                    </h2>


                    <p>

                        Executive Leadership

                    </p>

                </div>


            </div>



            <!-- ==============================================
                        MANAGEMENT CONTENT
            =============================================== -->

            <div class="section-content">


                <?php foreach (
                    $managementMembers
                    as $member
                ): ?>


                    <div class="member-card">


                        <!-- MEMBER NUMBER -->

                        <div class="member-number">

                            <?= htmlspecialchars(
                                $member['id']
                            ) ?>

                        </div>



                        <!-- MEMBER DETAILS -->

                        <div class="member-details">


                            <h3>

                                <?= htmlspecialchars(
                                    $member['name']
                                ) ?>

                            </h3>


                            <p class="member-role">

                                <?= htmlspecialchars(
                                    $member['role']
                                ) ?>

                            </p>


                        </div>



                        <!-- STATUS -->

                        <span class="member-status">

                            <?= htmlspecialchars(
                                $member['status']
                            ) ?>

                        </span>


                    </div>


                <?php endforeach; ?>



                <!-- ==========================================
                            EMPTY SLOTS
                =========================================== -->

                <?php for (
                    $i = 0;
                    $i < $managementEmptySlots;
                    $i++
                ): ?>


                    <div
                        class="empty-member"
                        data-type="Management Member"
                    >


                        <span
                            class="material-symbols-outlined empty-member-icon"
                        >

                            person_add

                        </span>


                        <p>

                            Add Management Member

                        </p>


                    </div>


                <?php endfor; ?>


            </div>


        </section>



        <!-- ==================================================
                    CONSULTING BODY
        =================================================== -->

        <section
            class="management-section consulting"
        >


            <!-- ==============================================
                        CONSULTING HEADER
            =============================================== -->

            <div class="section-header">


                <span
                    class="material-symbols-outlined section-icon"
                >

                    support_agent

                </span>


                <div>

                    <h2>

                        Consulting Body

                    </h2>


                    <p>

                        Advisory Panel

                    </p>

                </div>


            </div>



            <!-- ==============================================
                        CONSULTING CONTENT
            =============================================== -->

            <div class="section-content">


                <?php foreach (
                    $consultingMembers
                    as $member
                ): ?>


                    <div class="member-card">


                        <!-- MEMBER NUMBER -->

                        <div class="member-number">

                            <?= htmlspecialchars(
                                $member['id']
                            ) ?>

                        </div>



                        <!-- MEMBER DETAILS -->

                        <div class="member-details">


                            <h3>

                                <?= htmlspecialchars(
                                    $member['name']
                                ) ?>

                            </h3>


                            <p class="member-role">

                                <?= htmlspecialchars(
                                    $member['role']
                                ) ?>

                            </p>



                            <!-- CONTACT -->

                            <?php if (
                                !empty($member['phone'])
                            ): ?>

                                <button
                                    type="button"
                                    class="contact-button"
                                    data-phone="<?= htmlspecialchars(
                                        $member['phone']
                                    ) ?>"
                                    data-visible="false"
                                >

                                    View Contact

                                </button>

                            <?php endif; ?>


                        </div>



                        <!-- STATUS -->

                        <span class="member-status">

                            <?= htmlspecialchars(
                                $member['status']
                            ) ?>

                        </span>


                    </div>


                <?php endforeach; ?>



                <!-- ==========================================
                            EMPTY SLOTS
                =========================================== -->

                <?php for (
                    $i = 0;
                    $i < $consultingEmptySlots;
                    $i++
                ): ?>


                    <div
                        class="empty-member"
                        data-type="Consultant"
                    >


                        <span
                            class="material-symbols-outlined empty-member-icon"
                        >

                            person_add

                        </span>


                        <p>

                            Add Consultant

                        </p>


                    </div>


                <?php endfor; ?>


            </div>


        </section>


    </div>


</main>



<!-- ==========================================================
                        JAVASCRIPT
========================================================== -->

<script src="../js/management.js"></script>


</body>

</html>