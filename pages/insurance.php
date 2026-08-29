<?php

/*
|--------------------------------------------------------------------------
| HEALTH INSURANCE - USER MODULE
|--------------------------------------------------------------------------
| MOCK DATA ONLY
| Database will be connected later.
|--------------------------------------------------------------------------
*/


/* ==========================================================
   MOCK DATA
========================================================== */

$insuranceCompanies = [

    [
        'id' => 1,
        'name' => 'Star Health Insurance',
        'website' => 'https://www.starhealth.in/'
    ],

    [
        'id' => 2,
        'name' => 'HDFC ERGO Health Insurance',
        'website' => 'https://www.hdfcergo.com/'
    ],

    [
        'id' => 3,
        'name' => 'ICICI Lombard Health Insurance',
        'website' => 'https://www.icicilombard.com/'
    ],

    [
        'id' => 4,
        'name' => 'Niva Bupa Health Insurance',
        'website' => 'https://www.nivabupa.com/'
    ],

    [
        'id' => 5,
        'name' => 'Care Health Insurance',
        'website' => 'https://www.careinsurance.com/'
    ],

    [
        'id' => 6,
        'name' => 'Aditya Birla Health Insurance',
        'website' => 'https://www.adityabirlacapital.com/healthinsurance'
    ]

];


/* ==========================================================
   MOCK SELECTED COMPANIES
========================================================== */

$selectedInsurance = [1, 3, 5];

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Health Insurance</title>


    <!-- Tailwind -->

    <script src="https://cdn.tailwindcss.com"></script>


    <!-- Font Awesome -->

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >


    <!-- Google Font -->

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >


    <!-- INSURANCE CSS -->

    <link
        rel="stylesheet"
        href="../css/insurance.css"
    >

</head>


<body>


<div class="insurance-page">


    <!-- ==================================================
                    INSURANCE SELECTION
    =================================================== -->

    <div
        class="section-card"
        id="insuranceSelectionPage"
    >


        <!-- HEADER -->

        <div class="section-header">

            <h1>
                Health Insurance
            </h1>

            <p>
                Select the health insurance companies
                accepted by your hospital.
            </p>

        </div>


        <!-- ==================================================
                        SEARCH
        =================================================== -->

        <div class="insurance-search">

            <i class="fa-solid fa-magnifying-glass"></i>

            <input
                type="text"
                id="insuranceSearch"
                placeholder="Search Insurance Company"
            >

        </div>


        <!-- ==================================================
                    SELECTED COUNT
        =================================================== -->

        <div class="selected-info">

            Selected :

            <span id="insuranceSelectedCount">
                <?= count($selectedInsurance) ?>
            </span>

        </div>


        <!-- ==================================================
                    INSURANCE LIST
        =================================================== -->

        <div
            class="insurance-list"
            id="insuranceList"
        >


            <?php foreach ($insuranceCompanies as $company): ?>

                <?php

                $isSelected =
                    in_array(
                        $company['id'],
                        $selectedInsurance
                    );

                ?>

                <div
                    class="insurance-card <?= $isSelected ? 'selected' : '' ?>"
                    data-id="<?= $company['id'] ?>"
                    data-name="<?= htmlspecialchars($company['name']) ?>"
                >

                    <!-- CHECK -->

                    <div class="insurance-check">

                        <i class="fa-solid fa-check"></i>

                    </div>


                    <!-- COMPANY INFO -->

                    <div class="insurance-company-info">

                        <h3>
                            <?= htmlspecialchars($company['name']) ?>
                        </h3>

                    </div>


                </div>

            <?php endforeach; ?>


        </div>


        <!-- ==================================================
                    BUTTONS
        =================================================== -->

        <div class="button-row">

            <button
                type="button"
                class="secondary-btn insurance-reset"
            >

                Reset

            </button>


            <button
                type="button"
                class="primary-btn insurance-save"
            >

                <i class="fa-solid fa-floppy-disk"></i>

                Save & Continue

            </button>

        </div>


    </div>


    <!-- ==================================================
                INSURANCE COMPANY DIRECTORY
    =================================================== -->

    <div
        class="section-card"
        id="insuranceDirectory"
        style="display:none;"
    >


        <div class="section-header">

            <h1>
                Insurance Company Directory
            </h1>

            <p>
                View all insurance companies available
                in the system.
            </p>

        </div>


        <!-- BACK -->

        <div class="insurance-back-row">

            <button
                type="button"
                id="backToInsurance"
                class="secondary-btn"
            >

                <i class="fa-solid fa-arrow-left"></i>

                Back

            </button>

        </div>


        <!-- TABLE -->

        <div class="table-responsive">

            <table class="insurance-company-table">

                <thead>

                    <tr>

                        <th>
                            Sr. No.
                        </th>

                        <th>
                            Company Name
                        </th>

                        <th>
                            Website
                        </th>

                    </tr>

                </thead>


                <tbody>

                    <?php

                    $sr = 1;

                    foreach ($insuranceCompanies as $company):

                    ?>

                        <tr>

                            <td>
                                <?= $sr++ ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($company['name']) ?>
                            </td>

                            <td>

                                <a
                                    href="<?= htmlspecialchars($company['website']) ?>"
                                    target="_blank"
                                    class="website-btn"
                                >

                                    Visit Website

                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>

                                </a>

                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>


    </div>


</div>


<!-- ==================================================
                    INSURANCE JS
=================================================== -->

<script src="../js/insurance.js"></script>


</body>

</html>