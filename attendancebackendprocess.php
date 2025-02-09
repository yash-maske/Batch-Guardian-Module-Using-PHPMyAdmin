<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('https://img.freepik.com/free-photo/blue-abstract-gradient-wave-wallpaper_53876-108364.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .navbar {
            background-color: #ffffff; /* Light color for navbar */
            color: #333;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        .navbar img {
            height: 40px;
            margin-right: 10px;
        }
        .navbar p {
            margin: 0;
            font-size: 20px;
            color: #000; /* Black color for institute name */
            display: flex;
            align-items: center;
        }
        .navbar a {
            color: #000; /* Black color for link */
            text-decoration: none;
            margin-left: 15px;
            font-size: 18px;
        }
        .navbar a:hover {
            text-decoration: underline;
        }
        .alert-container {
            text-align: center;
            padding: 40px;
            background: rgba(255, 255, 255, 0.9); /* Light background */
            border-radius: 10px;
            width: 90%;
            max-width: 600px;
            margin: 100px auto; /* Centered and with margin to avoid overlap with navbar */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border-color: #c3e6cb;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border-color: #f5c6cb;
        }
        .alert-warning {
            background-color: #fff3cd;
            color: #856404;
            border-color: #ffeeba;
        }
        .alert-info {
            background-color: #d1ecf1;
            color: #0c5460;
            border-color: #bee5eb;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div>
            <img src="https://www.viit.ac.in/images/logo.png" alt="VIIT Logo">
            <p>Vishwakarma Institute of Information Technology</p>
        </div>
        <a href="homepageforteacher.php"><i class="fas fa-home"></i> Home</a>
    </div>

    <!-- Main Content -->
    <div class="alert-container">
        <?php
        // Check if the cookie 'var' is set and handle it
        if (isset($_COOKIE['var'])) {
            include 'connect.php'; // Ensure this initializes $con correctly

            $receivedVar = $_COOKIE['var'];
            $receivedVar = mysqli_real_escape_string($con, $receivedVar); // Sanitize table name

            // Check if the request method is POST
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                // Check if 'status' is set in POST and is an array
                if (isset($_POST['status']) && is_array($_POST['status'])) {
                    $array = array();
                    $roll_nos = $_POST['status'];

                    // Collect roll numbers that have status 'A'
                    foreach ($roll_nos as $index => $status) {
                        if ($status == 'A') {
                            $array[] = intval($index + 1); // Sanitize and store as integer
                        }
                    }

                    // Convert array to comma-separated string for SQL query
                    $roll_no_list = implode(',', $array);

                    // Prepare the SQL query
                    $sql = "UPDATE ATTENDANCE SET `$receivedVar` = 'A' WHERE roll_no IN ($roll_no_list)";

                    // Execute the SQL query
                    $result = mysqli_query($con, $sql);

                    if ($result) {
                        echo '<div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Attendance Marked!</h4>
                            <p>Attendance marked successfully.</p>
                            <hr>
                            <p class="mb-0">You can now proceed with other actions.</p>
                            <a class="btn btn-primary mt-3" href="homepageforteacher.php">Go to Home Page</a>
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
            } else {
                echo '<div class="alert alert-info" role="alert">
                    <h4 class="alert-heading">Info</h4>
                    <p>Form has not been submitted via POST.</p>
                    <hr>
                    <p class="mb-0">Please submit the form to update attendance.</p>
                </div>';
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Error!</h4>
                <p>Cookie "var" is not set.</p>
                <hr>
                <p class="mb-0">Please ensure the correct cookie is set before proceeding.</p>
            </div>';
        }
        ?>
    </div>
</body>
</html>
