<?php

/*
|--------------------------------------------------------------------------
| HOSPITAL SERVICES - SAVE API
|--------------------------------------------------------------------------
|
| File:
| health-hub-admin/api/services/save.php
|
| Database:
| health-hub-admin/api/db.php
|
| Table:
| hospital_services
|
| Table structure:
| id
| service_id
| service_name
| is_selected
|
|--------------------------------------------------------------------------
*/


/* ==========================================================
                    RESPONSE HEADER
========================================================== */

header("Content-Type: application/json; charset=UTF-8");

header(
    "Access-Control-Allow-Origin: http://localhost:8000"
);

header(
    "Access-Control-Allow-Methods: POST, OPTIONS"
);

header(
    "Access-Control-Allow-Headers: Content-Type"
);


/* ==========================================================
                    OPTIONS REQUEST
========================================================== */

if ($_SERVER["REQUEST_METHOD"] === "OPTIONS") {

    http_response_code(200);

    exit;
}


/* ==========================================================
                    ONLY POST ALLOWED
========================================================== */

if ($_SERVER["REQUEST_METHOD"] !== "POST") {

    http_response_code(405);

    echo json_encode([
        "success" => false,
        "message" => "Only POST requests are allowed."
    ]);

    exit;
}


/* ==========================================================
                    DATABASE CONNECTION
========================================================== */

/*
Current file:

health-hub-admin/
    api/
        services/
            save.php

db.php:

health-hub-admin/
    api/
        db.php

Therefore:

../db.php
*/

require_once "../db.php";


/* ==========================================================
                    GET FORM DATA
========================================================== */

$service_id = isset($_POST["service_id"])
    ? (int) $_POST["service_id"]
    : 0;

$service_name = trim(
    $_POST["service_name"] ?? ""
);


/*
is_selected can come as:

1
0
true
false

We normalize it to 1 or 0.
*/

$is_selected = isset($_POST["is_selected"])
    ? $_POST["is_selected"]
    : 1;


/* ==========================================================
                    NORMALIZE is_selected
========================================================== */

if (
    $is_selected === "1" ||
    $is_selected === 1 ||
    $is_selected === true ||
    $is_selected === "true"
) {

    $is_selected = 1;

} else {

    $is_selected = 0;

}


/* ==========================================================
                    VALIDATION
========================================================== */

if ($service_id <= 0) {

    echo json_encode([
        "success" => false,
        "message" => "Please provide a valid Service ID."
    ]);

    exit;
}


if ($service_name === "") {

    echo json_encode([
        "success" => false,
        "message" => "Please enter Service Name."
    ]);

    exit;
}


if (mb_strlen($service_name) > 150) {

    echo json_encode([
        "success" => false,
        "message" => "Service Name cannot exceed 150 characters."
    ]);

    exit;
}


/* ==========================================================
                    CHECK DUPLICATE SERVICE ID
========================================================== */

$checkStmt = $conn->prepare(
    "SELECT id
     FROM hospital_services
     WHERE service_id = ?
     LIMIT 1"
);


if (!$checkStmt) {

    echo json_encode([
        "success" => false,
        "message" => "Failed to prepare duplicate check: " .
                     $conn->error
    ]);

    exit;
}


$checkStmt->bind_param(
    "i",
    $service_id
);


$checkStmt->execute();


$checkStmt->store_result();


if ($checkStmt->num_rows > 0) {

    $checkStmt->close();

    echo json_encode([
        "success" => false,
        "message" => "This Service ID already exists."
    ]);

    exit;
}


$checkStmt->close();


/* ==========================================================
                    INSERT SERVICE
========================================================== */

$stmt = $conn->prepare(
    "INSERT INTO hospital_services
    (
        service_id,
        service_name,
        is_selected
    )
    VALUES
    (
        ?,
        ?,
        ?
    )"
);


/* ==========================================================
                    CHECK QUERY
========================================================== */

if (!$stmt) {

    echo json_encode([
        "success" => false,
        "message" => "Failed to prepare insert query: " .
                     $conn->error
    ]);

    exit;
}


/* ==========================================================
                    BIND VALUES
========================================================== */

$stmt->bind_param(
    "isi",
    $service_id,
    $service_name,
    $is_selected
);


/* ==========================================================
                    EXECUTE
========================================================== */

if ($stmt->execute()) {

    $insertedId = $stmt->insert_id;


    echo json_encode([

        "success" => true,

        "message" => "Service added successfully.",

        "id" => $insertedId,

        "service_id" => $service_id,

        "service_name" => $service_name,

        "is_selected" => $is_selected

    ]);

} else {

    echo json_encode([

        "success" => false,

        "message" =>
            "Failed to save Service: " .
            $stmt->error

    ]);

}


/* ==========================================================
                    CLOSE
========================================================== */

$stmt->close();

$conn->close();

?>