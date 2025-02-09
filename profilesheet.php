<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Update</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding-top: 60px;
            /* Adjust based on navbar height */
        }

        .navbar {
            background-color: #a3a7b3;
            color: white;
            padding: 5px 20px;
            /* Reduced padding */
            display: flex;
            align-items: center;
            justify-content: center;
            /* Center-align items */
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            /* Optional shadow */
        }

        .navbar .icons {
            display: flex;
            align-items: center;
            margin-right: auto;
            /* Push icons to the left */
        }

        .navbar .icons a {
            color: white;
            text-decoration: none;
            font-size: 20px;
            margin-right: 10px;
            /* Reduced margin between icons */
        }

        .navbar .icons a:hover {
            color: #007bff;
        }

        .navbar img {
            height: 30px;
            /* Reduced size of logo */
            margin-right: 10px;
        }

        .navbar p {
            margin: 0;
            font-size: 18px;
            /* Adjusted font size */
            display: flex;
            align-items: center;
            gap: 10px;
            /* Adjusted space between logo and text */
        }

        .container {
            max-width: 800px;
            margin: auto;
        }

        .alert {
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="icons">
            <a href="#" id="hamburger-icon"><i class="fas fa-bars"></i></a>
            <a href="homepageforteacher.php"><i class="fas fa-home"></i></a>
        </div>
        <img src="https://www.viit.ac.in/images/logo.png" alt="VIIT Logo">
        <p>Vishwakarma Institute of Information Technology</p>
    </div>

    <div class="container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            require "connect.php";
            $name = $_POST['name'];
$age = $_POST['age'];
$contact = $_POST['contact'];
$admission_year = $_POST['admission_year'];
$admitted_to = $_POST['admitted_to'];
$roll_no_div = $_POST['roll_no_div'];
$prn = $_POST['prn'];
$department = $_POST['Department'];

// Parent/Guardian Information
$parents_in_pune = $_POST['parents_in_pune'];
$address = $_POST['address'];
$local_guardian = $_POST['local_guardian'];
$mother_name = $_POST['mother_name'];
$mother_occupation = $_POST['mother_occupation'];
$mother_contact = $_POST['mother_contact'];
$mother_education = $_POST['mother_education'];
$father_name = $_POST['father_name'];
$father_occupation = $_POST['father_occupation'];
$father_contact = $_POST['father_contact'];
$father_education = $_POST['father_education'];
$siblings = $_POST['siblings'];

// Academic Record
$tenth_result = $_POST['10th_result'];
$tenth_cleared = $_POST['10th_cleared'];
$tenth_failed = $_POST['10th_failed'];

$twelfth_result = $_POST['12th_result'];
$twelfth_cleared = $_POST['12th_cleared'];
$twelfth_failed = $_POST['12th_failed'];

$fe1_result = $_POST['fe1_result'];
$fe1_cleared = $_POST['fe1_cleared'];
$fe1_failed = $_POST['fe1_failed'];

$fe2_result = $_POST['fe2_result'];
$fe2_cleared = $_POST['fe2_cleared'];
$fe2_failed = $_POST['fe2_failed'];

$se1_result = $_POST['se1_result'];
$se1_cleared = $_POST['se1_cleared'];
$se1_failed = $_POST['se1_failed'];

$se2_result = $_POST['se2_result'];
$se2_cleared = $_POST['se2_cleared'];
$se2_failed = $_POST['se2_failed'];

$te1_result = $_POST['te1_result'];
$te1_cleared = $_POST['te1_cleared'];
$te1_failed = $_POST['te1_failed'];

$te2_result = $_POST['te2_result'];
$te2_cleared = $_POST['te2_cleared'];
$te2_failed = $_POST['te2_failed'];

$be1_result = $_POST['be1_result'];
$be1_cleared = $_POST['be1_cleared'];
$be1_failed = $_POST['be1_failed'];

$be2_result = $_POST['be2_result'];
$be2_cleared = $_POST['be2_cleared'];
$be2_failed = $_POST['be2_failed'];

$sql = "INSERT INTO student_details (
    name, age, verified_contact_no, admission_year, admitted_to, 
    roll_no_se, prn, department, address, local_guardian_name, 
    mother_name, mother_occupation, mother_verified_contact_no, mother_education, 
    father_name, father_occupation, father_verified_contact_no, father_education, 
    no_of_siblings, resultSSC, resultHSC, SEM1C, SEM1F, SEM2C, SEM2F, 
    SEM3C, SEM3F, SEM4C, SEM4F, SEM5C, SEM5F, SEM6C, SEM6F, SEM7C, SEM7F, SEM8C, SEM8F
) VALUES (
    '$name', $age, '$contact', '$admission_year', '$admitted_to', 
    '$roll_no_div', '$prn', '$department', '$address', '$local_guardian', 
    '$mother_name', '$mother_occupation', '$mother_contact', '$mother_education', 
    '$father_name', '$father_occupation', '$father_contact', '$father_education', 
    $siblings, '$tenth_result', '$twelfth_result', '$fe1_cleared', '$fe1_failed', 
    '$fe2_cleared', '$fe2_failed', '$se1_cleared', '$se1_failed', 
    '$se2_cleared', '$se2_failed', '$te1_cleared', '$te1_failed', 
    '$te2_cleared', '$te2_failed', '$be1_cleared', '$be1_failed', '$be2_cleared', '$be2_failed'
)";


            // Execute the SQL query
            $result = mysqli_query($con, $sql);

            if ($result) {
                echo '<div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Form Submitted Successfully!</h4>
                    <p>Form Submitted.</p>
                    <hr>
                    <p class="mb-0">You can now proceed with other actions.</p>
                    <a class="btn btn-primary mt-3" href="homepagestudent.php">Go to Home Page</a>
                </div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Error!</h4>
                    <p>Error marking attendance: ' . mysqli_error($con) . '</p>
                    <hr>
                    <p class="mb-0">Please try again later.</p>
                </div>';
            }

            // Close the database connection
            mysqli_close($con);
        } else {
            echo '<div class="alert alert-warning" role="alert">
                <h4 class="alert-heading">Warning!</h4>
                <p>No status data received.</p>
                <hr>
                <p class="mb-0">Please ensure you have selected the correct status.</p>
            </div>';
        }
        ?>
    </div>

    <script>
        document.getElementById('hamburger-icon').addEventListener('click', function () {
            const menu = document.getElementById('hamburger-menu');
            if (menu.classList.contains('show')) {
                menu.classList.remove('show');
            } else {
                menu.classList.add('show');
            }
        });
    </script>
</body>

</html>