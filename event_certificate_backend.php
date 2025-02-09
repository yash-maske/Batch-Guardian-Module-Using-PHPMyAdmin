<?php
session_start();
require 'connect.php';

// Enable exception mode for mysqli
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    try {
        // Check if all fields are filled
        if (empty($_POST['prn_main']) || empty($_POST['event_name']) || empty($_POST['event_date']) || empty($_POST['organization_name'])) {
            $_SESSION['message'] = 'Please fill all required fields';
            header("Location: event_certificate.php");
            exit(0);
        }

        // Clean and validate input data
        $prn = mysqli_real_escape_string($con, $_POST['prn_main']);
        $name = mysqli_real_escape_string($con, $_POST['event_name']);
        $date = mysqli_real_escape_string($con, $_POST['event_date']);
        $organizer = mysqli_real_escape_string($con, $_POST['organization_name']);

        // Use prepared statement for better security
        $stmt = $con->prepare("INSERT INTO event_details (prn, name, date, organizer) VALUES (?, ?, ?, ?)");
        
        // Bind parameters and execute the query
        $stmt->bind_param("ssss", $prn, $name, $date, $organizer);
        $stmt->execute();

        // Success message and redirect
        $_SESSION['message'] = 'Details Saved Successfully';
        header("Location: https://drive.google.com/drive/folders/1ZCJsoShY8dwi0JtLUufucsn5-kuRLSJT?usp=sharing");
        exit(0);

    } catch (mysqli_sql_exception $e) {
        // Check for duplicate entry error (error code 1062)
        if ($e->getCode() == 1062) {
            $_SESSION['message'] = 'Certificate Already Exists In Database';
            header("Location: event_certificate.php");
        } else {
            // Handle other types of database errors
            $_SESSION['message'] = 'Error: Could not save details. ' . $e->getMessage();
        }
        header("Location: event_certificate.php");
        exit(0);
    }
}
?>
