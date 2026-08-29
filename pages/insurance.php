<?php

/*
|--------------------------------------------------------------------------
| HEALTH INSURANCE - USER MODULE
|--------------------------------------------------------------------------
| MOCK DATA ONLY
| No database / API used for now.
|--------------------------------------------------------------------------
*/

/* ==========================================================
   MOCK INSURANCE COMPANIES
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
        'name' => 'Care Health Insurance',
        'website' => 'https://www.careinsurance.com/'
    ],

    [
        'id' => 5,
        'name' => 'Niva Bupa Health Insurance',
        'website' => 'https://www.nivabupa.com/'
    ],

    [
        'id' => 6,
        'name' => 'Aditya Birla Health Insurance',
        'website' => 'https://www.adityabirlacapital.com/healthinsurance'
    ],

    [
        'id' => 7,
        'name' => 'ManipalCigna Health Insurance',
        'website' => 'https://www.manipalcigna.com/'
    ],

    [
        'id' => 8,
        'name' => 'Tata AIG Health Insurance',
        'website' => 'https://www.tataaig.com/'
    ],

    [
        'id' => 9,
        'name' => 'Bajaj Allianz Health Insurance',
        'website' => 'https://www.bajajallianz.com/'
    ],

    [
        'id' => 10,
        'name' => 'Reliance General Insurance',
        'website' => 'https://www.reliancegeneral.co.in/'
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

    <title>Health Insurance</title>


    <!-- Tailwind -->

    <script src="https://cdn.tailwindcss.com"></script>


    <!-- Font Awesome -->

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >


    <!-- Inter Font -->

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >


    <!-- Insurance CSS -->

    <link
        rel="stylesheet"
        href="../css/insurance.css"
    >

</head>


<body>


<div class="insurance-page">


    <!-- ==================================================
                    SELECTION PAGE
    =================================================== -->

    <div
        class="section-card"
        id="insuranceSelectionPage"
    >


        <!-- HEADER -->

        <div class="section-header">

            <h1>

                Health Insurance Company

            </h1>

            <p>

                Select the health insurance companies
                accepted by your medical firm.

            </p>

        </div>


        <!-- ==================================================
                    TOP ACTION
        =================================================== -->

        <div class="insurance-top-actions">

            <button
                type="button"
                id="viewInsuranceCompanies"
                class="secondary-btn"
            >

                <i class="fa-solid fa-building"></i>

                View Insurance Companies

            </button>

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

                0

            </span>

        </div>


        <!-- ==================================================
                    INSURANCE LIST
        =================================================== -->

        <div
            class="insurance-list"
            id="insuranceList"
        >

            <!-- Javascript inserts companies here -->

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
    ================================================== -->

    <div
        class="section-card"
        id="insuranceDirectory"
        style="display:none;"
    >


        <!-- HEADER -->

        <div class="section-header">

            <h1>

                Insurance Company Directory

            </h1>

            <p>

                View all insurance companies registered
                by Project Admin.

                Click the Website button to visit
                the official website.

            </p>

        </div>


        <!-- ==================================================
                    BACK BUTTON
        =================================================== -->

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


        <!-- ==================================================
                    TABLE
        =================================================== -->

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


                <tbody id="insuranceCompanyTableBody">

                    <!-- Javascript -->

                </tbody>

            </table>

        </div>


    </div>


</div>



<!-- ==================================================
                    JAVASCRIPT DATA
================================================== -->

<script>

const mockInsuranceCompanies =
<?= json_encode(
    $insuranceCompanies,
    JSON_UNESCAPED_UNICODE |
    JSON_UNESCAPED_SLASHES
) ?>;

</script>


<!-- ==================================================
                    INSURANCE JS
================================================== -->

<script src="../js/insurance.js"></script>


<script>

/*
|--------------------------------------------------------------------------
| Initialize
|--------------------------------------------------------------------------
*/

document.addEventListener(
    "DOMContentLoaded",
    function(){

        initializeInsurance();

    }
);

</script>


</body>

</html>