<?php
/*
|--------------------------------------------------------------------------
| PURE HEALTH
|--------------------------------------------------------------------------
| Location:
| pages/health-insights/pure-health.php
|
| CSS:
| ../../css/health-insights/pure-health.css
|
| JS:
| ../../js/health-insights/pure-health.js
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

    <title>Pure Health | Health Hub</title>


    <!-- =====================================================
         GOOGLE FONT
    ====================================================== -->

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
         BOOTSTRAP ICONS
    ====================================================== -->

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >


    <!-- =====================================================
         PURE HEALTH CSS
    ====================================================== -->

    <link
        rel="stylesheet"
        href="../../css/pure-health.css"
    >

</head>


<body>


<div class="section-card animate-pop-in">


    <!-- =====================================================
         HEALTH MENU
    ====================================================== -->

    <div
        id="healthMenuSection"
        class="health-menu-grid"
    >


        <!-- BASIC HEALTH -->

        <div
            class="health-card-option"
            onclick="openHealthSection('basic')"
        >

            <div class="health-card-icon">

                <i class="bi bi-heart-pulse-fill"></i>

            </div>


            <div class="health-card-content">

                <h3>
                    Basic Health Details
                </h3>

                <p>
                    Manage blood group, vitals, BP, and medical history
                </p>

            </div>

        </div>



        <!-- HANDICAP -->

        <div
            class="health-card-option"
            onclick="openHealthSection('handicap')"
        >

            <div class="health-card-icon">

                <i class="bi bi-person-wheelchair"></i>

            </div>


            <div class="health-card-content">

                <h3>
                    Handicap Details
                </h3>

                <p>
                    Disability types, certifications, and documents
                </p>

            </div>

        </div>

    </div>



    <!-- =====================================================
         BASIC HEALTH SECTION
    ====================================================== -->

    <div
        id="basicHealthSection"
        style="display:none;"
    >


        <!-- BACK -->

        <button
            type="button"
            class="back-btn"
            onclick="goBackHealthMenu()"
        >

            <i class="bi bi-arrow-left"></i>

            Back

        </button>



        <!-- HEADER -->

        <div class="section-header-row">

            <h2 class="section-main-title">
                Medical &amp; Health Details
            </h2>


            <button
                type="button"
                id="editHealthBtn"
                class="edit-toggle-btn"
                onclick="toggleHealthEdit()"
            >

                <i class="bi bi-pencil-square"></i>

                Edit Details

            </button>

        </div>



        <!-- MAIN CARD -->

        <div
            class="address-card locked"
            id="healthCard"
        >


            <!-- =================================================
                 BLOOD GROUP
            ================================================== -->

            <div class="row">


                <!-- BLOOD GROUP -->

                <div class="col-md-6">

                    <div class="field-group">

                        <label class="field-label">
                            Permanent Blood Group
                        </label>


                        <div class="select-left-wrapper">

                            <i
                                class="bi bi-chevron-down select-left-icon"
                            ></i>


                            <select
                                class="form-select left-arrow-select"
                                id="bloodGroup"
                                disabled
                            >

                                <option
                                    value=""
                                    selected
                                    disabled
                                >
                                    Select Blood Group
                                </option>

                                <option value="A+">
                                    A+
                                </option>

                                <option value="A-">
                                    A-
                                </option>

                                <option value="B+">
                                    B+
                                </option>

                                <option value="B-">
                                    B-
                                </option>

                                <option value="O+">
                                    O+
                                </option>

                                <option value="O-">
                                    O-
                                </option>

                                <option value="AB+">
                                    AB+
                                </option>

                                <option value="AB-">
                                    AB-
                                </option>

                            </select>

                        </div>

                    </div>

                </div>



                <!-- CERTIFICATE -->

                <div class="col-md-6">

                    <div class="field-group">

                        <label class="field-label">
                            Blood Group Certificate (Optional)
                        </label>


                        <input
                            type="file"
                            id="bloodCert"
                            class="form-control"
                            accept="image/*,.pdf"
                            disabled
                        />

                    </div>

                </div>

            </div>



            <!-- BLOOD GROUP SAVE -->

            <div
                class="form-footer"
                id="bloodGroupSaveFooter"
                style="display:none;"
            >

                <button
                    type="button"
                    class="save-btn"
                    onclick="saveBloodGroupData()"
                >

                    <i class="bi bi-check2-circle"></i>

                    Save Blood Group Details

                </button>

            </div>



            <hr>



            <!-- =================================================
                 VITALS
            ================================================== -->

            <h4
                class="section-main-title"
                style="font-size:18px;"
            >
                Log Current Vitals
            </h4>



            <div
                class="input-row"
                style="align-items:end;"
            >


                <!-- DATE -->

                <div
                    class="field-group"
                    style="flex:1;"
                >

                    <label class="field-label">
                        Measurement Date
                    </label>


                    <input
                        type="date"
                        class="form-control"
                        id="currentDate"
                        readonly
                    />

                </div>



                <!-- WEIGHT -->

                <div
                    class="field-group"
                    style="flex:1;"
                >

                    <label class="field-label">
                        Weight (kg)
                    </label>


                    <input
                        type="number"
                        class="form-control"
                        id="weightInput"
                        placeholder="kg"
                        disabled
                    />

                </div>



                <!-- HEIGHT -->

                <div
                    class="field-group"
                    style="flex:1;"
                >

                    <label class="field-label">
                        Height (cm)
                    </label>


                    <input
                        type="number"
                        class="form-control"
                        id="heightInput"
                        placeholder="cm"
                        disabled
                    />

                </div>



                <!-- TEMPERATURE -->

                <div
                    class="field-group"
                    style="flex:1;"
                >

                    <label class="field-label">

                        Body Temperature

                        <span
                            style="
                                font-size:12px;
                                color:#6b7280;
                            "
                        >
                            (°F)
                        </span>

                    </label>


                    <input
                        type="number"
                        class="form-control"
                        id="temperatureInput"
                        placeholder="97 - 99"
                        step="0.1"
                        disabled
                    />

                </div>



                <!-- BLOOD PRESSURE -->

                <div
                    class="field-group"
                    style="flex:1;"
                >

                    <label class="field-label">

                        Blood Pressure

                        <span
                            style="
                                font-size:12px;
                                color:#6b7280;
                            "
                        >
                            (Systolic / Diastolic)
                        </span>

                    </label>


                    <div class="bp-wrapper">


                        <input
                            type="number"
                            id="systolicInput"
                            class="bp-box"
                            placeholder="120"
                            disabled
                        >


                        <span class="bp-separator">
                            /
                        </span>


                        <input
                            type="number"
                            id="diastolicInput"
                            class="bp-box"
                            placeholder="80"
                            disabled
                        >

                    </div>

                </div>



                <!-- BLOOD SUGAR -->

                <div
                    class="field-group"
                    style="flex:1;"
                >

                    <label class="field-label">

                        Blood Sugar

                        <span
                            style="
                                font-size:12px;
                                color:#6b7280;
                            "
                        >
                            (mg/dL)
                        </span>

                    </label>


                    <input
                        type="number"
                        class="form-control"
                        id="bloodSugarInput"
                        placeholder="mg/dL"
                        disabled
                    />

                </div>



                <!-- ADD -->

                <button
                    type="button"
                    class="action-btn"
                    onclick="addVitals()"
                    id="addVitalsBtn"
                    disabled
                >

                    + Add

                </button>

            </div>



            <!-- =================================================
                 VITALS HISTORY
            ================================================== -->

            <h4
                class="section-main-title"
                style="
                    font-size:18px;
                    margin-top:20px;
                "
            >

                Vitals History

            </h4>


            <div class="table-responsive">

                <table class="vitals-table">

                    <thead>

                        <tr>

                            <th>
                                Date
                            </th>

                            <th>
                                Weight
                            </th>

                            <th>
                                Height
                            </th>

                            <th>
                                Body Temperature
                            </th>

                            <th>
                                Blood Pressure
                            </th>

                            <th>
                                Blood Sugar
                            </th>

                            <th>
                                Status
                            </th>

                            <th>
                                Action
                            </th>

                        </tr>

                    </thead>


                    <tbody
                        id="vitalsTableBody"
                    ></tbody>

                </table>

            </div>

        </div>

    </div>



    <!-- =====================================================
         HANDICAP SECTION
    ====================================================== -->

    <div
        id="handicapSection"
        style="display:none;"
    >


        <!-- BACK -->

        <button
            type="button"
            class="back-btn"
            onclick="goBackHealthMenu()"
        >

            <i class="bi bi-arrow-left"></i>

            Back

        </button>



        <!-- HANDICAP STATUS -->

        <div
            class="field-group"
            style="max-width:220px;"
        >

            <label class="field-label">
                Handicap Status
            </label>


            <input
                type="text"
                value="YES"
                readonly
                class="form-control"
                style="
                    width:75px;
                    background:#f3f4f6;
                    font-weight:400;
                    text-align:center;
                    cursor:not-allowed;
                "
            />

        </div>



        <!-- HEADER -->

        <div class="section-header-row">

            <h2 class="section-main-title">
                Handicap Details
            </h2>

        </div>



        <div class="address-card">


            <!-- =================================================
                 HANDICAP TYPE
            ================================================== -->

            <div class="field-group">

                <label class="field-label">
                    Select Handicap Type
                </label>


                <select
                    id="handicapTypeSelect"
                    class="form-control"
                    onchange="addHandicapType()"
                >

                    <option value="">
                        Select Type
                    </option>

                    <option value="Visual Impairment">
                        Visual Impairment
                    </option>

                    <option value="Hearing Impairment">
                        Hearing Impairment
                    </option>

                    <option value="Locomotor Disability">
                        Locomotor Disability
                    </option>

                    <option value="Speech Impairment">
                        Speech Impairment
                    </option>

                </select>

            </div>



            <!-- =================================================
                 SELECTED TAGS
            ================================================== -->

            <div
                id="selectedHandicapTags"
            ></div>



            <hr>



            <!-- =================================================
                 GOVERNMENT CERTIFICATION
            ================================================== -->

            <div
                class="certificate-check-header"
                style="
                    display:flex;
                    justify-content:space-between;
                    align-items:center;
                "
            >

                <label>

                    <input
                        type="checkbox"
                        id="stateGovCheck"
                        onchange="renderCertificateFields()"
                    >

                    State Govt Certified

                </label>


                <div
                    style="
                        width:10px;
                        height:50px;
                        background:white;
                    "
                ></div>


                <label>

                    <input
                        type="checkbox"
                        id="centralGovCheck"
                        onchange="renderCertificateFields()"
                    >

                    Central Govt Certified

                </label>

            </div>



            <!-- =================================================
                 CERTIFICATE COLUMNS
            ================================================== -->

            <div class="certificate-columns">


                <!-- STATE -->

                <div class="certificate-panel">

                    <h4>
                        State Certificates
                    </h4>


                    <div
                        id="stateCertSection"
                    ></div>

                </div>



                <!-- DIVIDER -->

                <div
                    class="certificate-divider"
                ></div>



                <!-- CENTRAL -->

                <div class="certificate-panel">

                    <h4>
                        Central Certificates
                    </h4>


                    <div
                        id="centralCertSection"
                    ></div>

                </div>

            </div>



            <!-- =================================================
                 SAVE HANDICAP
            ================================================== -->

            <div
                style="
                    margin-top:20px;
                    text-align:right;
                "
            >

                <button
                    type="button"
                    class="save-btn"
                    onclick="saveHandicapData()"
                >

                    <i class="bi bi-check2-circle"></i>

                    Save Handicap Details

                </button>

            </div>



            <hr
                style="margin:20px 0;"
            >



            <!-- =================================================
                 UPLOADED CERTIFICATES
            ================================================== -->

            <h4
                style="
                    font-weight:700;
                    color:#10233e;
                "
            >
                Uploaded Certificates
            </h4>


            <div class="table-responsive">

                <table
                    class="custom-registry-table"
                >

                    <thead>

                        <tr>

                            <th>
                                Sr No
                            </th>

                            <th>
                                Handicap Type
                            </th>

                            <th>
                                Certificate Type
                            </th>

                            <th>
                                Action
                            </th>

                        </tr>

                    </thead>


                    <tbody
                        id="handicapCertificateTableBody"
                    ></tbody>

                </table>

            </div>

        </div>

    </div>

</div>



<!-- =========================================================
     CERTIFICATE PREVIEW MODAL
========================================================= -->

<div
    id="certificatePreviewModal"
    style="
        display:none;
        position:fixed;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background:rgba(0,0,0,0.7);
        z-index:9999;
        justify-content:center;
        align-items:center;
        padding:20px;
    "
>

    <div
        style="
            background:white;
            padding:20px;
            border-radius:10px;
            max-width:800px;
            max-height:90vh;
            position:relative;
        "
    >


        <button
            type="button"
            onclick="closeCertificateModal()"
            style="
                position:absolute;
                top:10px;
                right:10px;
                border:none;
                background:red;
                color:white;
                border-radius:5px;
                padding:5px 10px;
                cursor:pointer;
            "
        >
            ✕
        </button>


        <img
            id="certificatePreviewImage"
            src=""
            alt="Certificate Preview"
            style="
                max-width:100%;
                max-height:80vh;
                display:block;
            "
        >

    </div>

</div>



<!-- =========================================================
     PURE HEALTH JS
========================================================= -->

<script
    src="../../js/pure-health.js"
></script>


</body>

</html>