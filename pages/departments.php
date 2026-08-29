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


$departments = [

    [
        'id' => 1,
        'name' => 'Cardiology',
        'icon' => '❤️',
        'description' => 'Cardiology specializes in the diagnosis and treatment of heart and blood vessel diseases.',
        'services' => [
            '2D Echo',
            'Angiography',
            'Pacemaker Implantation',
            'Holter Monitoring'
        ],
        'selected' => true
    ],

    [
        'id' => 2,
        'name' => 'Orthopaedics',
        'icon' => '🦴',
        'description' => 'Comprehensive orthopaedic care for bones, joints, muscles and sports-related injuries.',
        'services' => [
            'Joint Replacement',
            'Arthroscopy',
            'Spine Surgery',
            'Sports Injury Care'
        ],
        'selected' => true
    ],

    [
        'id' => 3,
        'name' => 'Neurology & Neurosurgery',
        'icon' => '🧠',
        'description' => 'Specialized care for neurological conditions affecting the brain, spine and nervous system.',
        'services' => [
            'Stroke Management',
            'Brain Surgery',
            'Head Injury Care',
            'Neuro Rehabilitation'
        ],
        'selected' => true
    ],

    [
        'id' => 4,
        'name' => 'Dentistry & Oral Surgery',
        'icon' => '🦷',
        'description' => 'Dental and oral surgical services covering preventive, restorative and surgical care.',
        'services' => [
            'Root Canal Treatment',
            'Dental Implants',
            'Teeth Whitening',
            'Oral Cancer Screening'
        ],
        'selected' => true
    ],

    [
        'id' => 5,
        'name' => 'Gastroenterology',
        'icon' => '🍽️',
        'description' => 'Diagnosis and treatment of digestive system, liver and gastrointestinal conditions.',
        'services' => [
            'Endoscopy',
            'Colonoscopy',
            'Liver Care',
            'Digestive Disease Treatment'
        ],
        'selected' => true
    ],

    [
        'id' => 6,
        'name' => 'Paediatrics & NICU',
        'icon' => '👶',
        'description' => 'Specialized healthcare for infants, children and newborns requiring intensive care.',
        'services' => [
            'Neonatal Care',
            'Vaccination',
            'Child Development Clinic',
            'Pediatric Emergency'
        ],
        'selected' => true
    ],

    [
        'id' => 7,
        'name' => 'Obstetrics & Gynaecology',
        'icon' => '🤰',
        'description' => 'Comprehensive maternity, pregnancy and women\'s healthcare services.',
        'services' => [
            'Normal Delivery',
            'High Risk Pregnancy',
            'Laparoscopy',
            'Menopause Clinic'
        ],
        'selected' => true
    ],

    [
        'id' => 8,
        'name' => 'Critical Care Unit',
        'icon' => '🏥',
        'description' => 'Advanced critical care facilities for patients requiring continuous monitoring and intensive treatment.',
        'services' => [
            'ICU Care',
            'Ventilator Support',
            'Cardiac Monitoring',
            'Isolation Rooms'
        ],
        'selected' => true
    ],

    [
        'id' => 9,
        'name' => 'Dermatology',
        'icon' => '🧴',
        'description' => 'Medical and surgical treatment for skin, hair and nail conditions.',
        'services' => [
            'Skin Consultation',
            'Acne Treatment',
            'Hair Loss Treatment',
            'Skin Allergy Care'
        ],
        'selected' => false
    ]

];


/*
|--------------------------------------------------------------------------
| SHOW ONLY SELECTED DEPARTMENTS
|--------------------------------------------------------------------------
*/

$selectedDepartments = array_values(
    array_filter(
        $departments,
        function ($department) {
            return $department['selected'] === true;
        }
    )
);

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

                        <?= $department['icon'] ?>

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