<?php

/*
|--------------------------------------------------------------------------
| DEPARTMENTS - USER MODULE
|--------------------------------------------------------------------------
| MOCK DATA ONLY
|
| Later:
| - Project Admin provides department master data
| - Hospital Admin selects departments
| - Hospital Admin adds description
| - User Module fetches selected departments from database
|--------------------------------------------------------------------------
*/

require_once "../../master-admin/health-hub-admin/api/db.php";
$departments = [];

$sql = "SELECT id, department_name, department_image
        FROM departments
        ORDER BY id DESC";

$result = $conn->query($sql);

if ($result) {
    while ($row = $result->fetch_assoc()) {

        $departments[] = [
            'id' => (int) $row['id'],
            'name' => $row['department_name'],
            'image' => $row['department_image'],

            // Existing HTML/JS साठी
            'icon' => '🏥',
            'description' => '',
            'services' => [],
            'selected' => true
        ];
    }
}

$selectedDepartments = $departments;
?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Departments</title>


    <!-- Tailwind -->

    <script src="https://cdn.tailwindcss.com"></script>


    <!-- Inter -->

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >


    <!-- Material Symbols -->

    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
    >


    <!-- Custom CSS -->

    <link
        rel="stylesheet"
        href="../css/departments.css"
    >

</head>


<body>


<!-- ==========================================================
                    NAVBAR
========================================================== -->

<nav class="main-navbar">

    <div class="navbar-logo">

        <span class="material-symbols-outlined">
            add_box
        </span>

        <span>
            Health Hub
        </span>

    </div>


    <div class="navbar-links">

        <a href="home.php" class="active">
            Home
        </a>

        <a href="search-a-doctor.php">
            Find A Doctor
        </a>

    </div>

</nav>



<!-- ==========================================================
                    HOSPITAL HEADER
========================================================== -->

<section class="hospital-identity">


    <div class="hospital-identity-inner">


        <!-- Logo -->

        <div class="hospital-logo-mark">

            Logo

        </div>


        <!-- Hospital Details -->

        <div class="hospital-details">

            <p class="hospital-short-name">
                Short Name
            </p>


            <h1 id="hospitalName">
                City Care Hospital
            </h1>


            <p class="hospital-location">
                Nagpur, Maharashtra
            </p>

        </div>

    </div>

</section>



<!-- ==========================================================
                    PAGE HEADING
========================================================== -->

<header class="page-header">

    <h1>
        Departments
    </h1>


    <p>
        Explore the departments and specialised healthcare
        services available at this hospital.
    </p>

</header>



<!-- ==========================================================
                    DEPARTMENT CARDS
========================================================== -->

<section class="departments-section">

    <div class="department-grid">


        <?php foreach ($selectedDepartments as $index => $department): ?>


            <div
                class="department-card"
                data-department-id="<?= $department['id'] ?>"
            >


                <!-- Card Header -->

                <div class="department-card-header">

                    <div class="department-icon">

    <?php if (!empty($department['image'])): ?>

        <img
            src="/master-admin/health-hub-admin/uploads/departments/<?= htmlspecialchars($department['image']) ?>"
            alt="<?= htmlspecialchars($department['name']) ?>"
        >

    <?php else: ?>

        <?= htmlspecialchars($department['icon']) ?>

    <?php endif; ?>

</div>
                    <h2>

                        <?= htmlspecialchars($department['name']) ?>

                    </h2>


                    <div class="department-divider"></div>

                </div>



                <!-- Services -->

                <ul class="department-services">

                    <?php foreach ($department['services'] as $service): ?>

                        <li>

                            <span class="service-check">
                                ✔
                            </span>

                            <?= htmlspecialchars($service) ?>

                        </li>

                    <?php endforeach; ?>

                </ul>



                <!-- View Details -->

                <div class="department-footer">

                    <button
                        type="button"
                        class="view-details-btn"
                    >

                        View Details

                        <span>
                            →
                        </span>

                    </button>

                </div>


            </div>


        <?php endforeach; ?>


    </div>

</section>



<!-- ==========================================================
                    DEPARTMENT MODAL
========================================================== -->

<div
    id="departmentModal"
    class="department-modal"
>


    <div class="department-modal-box">


        <!-- Close -->

        <button
            type="button"
            id="closeDepartmentModal"
            class="modal-close"
        >

            &times;

        </button>


        <!-- Icon -->

        <div
            id="modalDepartmentIcon"
            class="modal-department-icon"
        >

            ❤️

        </div>


        <!-- Name -->

        <h2 id="modalDepartmentName">

            Cardiology

        </h2>


        <!-- Description -->

        <p id="modalDepartmentDescription">

            Cardiology specializes in the diagnosis and treatment
            of heart and blood vessel diseases.

        </p>


        <!-- Services -->

        <div class="modal-services-box">

            <h3>
                Services
            </h3>


            <ul id="modalDepartmentServices">

            </ul>

        </div>


    </div>

</div>



<!-- ==========================================================
                    MOCK DATA FOR JS
========================================================== -->

<script>

const departmentData =
<?= json_encode(
    $selectedDepartments,
    JSON_UNESCAPED_UNICODE |
    JSON_UNESCAPED_SLASHES
) ?>;

</script>


<!-- JS -->

<script src="../js/departments.js"></script>


</body>

</html>