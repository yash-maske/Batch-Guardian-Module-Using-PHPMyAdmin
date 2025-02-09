<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Update</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding-top: 60px; /* Adjust based on navbar height */
        }

        .navbar {
            background-color: #a3a7b3;
            color: white;
            padding: 5px 20px; /* Reduced padding */
            display: flex;
            align-items: center;
            justify-content: center; /* Center-align items */
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Optional shadow */
        }

        .navbar .icons {
            display: flex;
            align-items: center;
            margin-right: auto; /* Push icons to the left */
        }

        .navbar .icons a {
            color: white;
            text-decoration: none;
            font-size: 20px;
            margin-right: 10px; /* Reduced margin between icons */
        }

        .navbar .icons a:hover {
            color: #007bff;
        }

        .navbar img {
            height: 30px; /* Reduced size of logo */
            margin-right: 10px;
        }

        .navbar p {
            margin: 0;
            font-size: 18px; /* Adjusted font size */
            display: flex;
            align-items: center;
            gap: 10px; /* Adjusted space between logo and text */
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
            require_once "connect.php";
            $class = $_POST['name']; 
            $academic_year = $_POST['year'];
            $semester = $_POST['Semester'];
            $class_strength = $_POST['number'];
            $students_present = $_POST['yearpresent'];
            $date_of_meeting = $_POST['date'];
            $p1 = $_POST['1'];
            $a1 = $_POST['1a'];
            $p2 = $_POST['2'];
            $a2 = $_POST['2a'];
            $p3 = $_POST['3'];
            $a3 = $_POST['3a'];
            $p4 = $_POST['4'];
            $a4 = $_POST['4a'];
            $p5 = $_POST['5'];
            $a5 = $_POST['5a'];
            
            $sql = "INSERT INTO meet_details(class, academic_year, semester, class_strength, total_present, dateofmeet, point1, action1, point2, action2, point3, action3, point4, action4, point5, action5)
                    VALUES ('$class', $academic_year, $semester, $class_strength, $students_present, '$date_of_meeting', '$p1', '$a1', '$p2', '$a2', '$p3', '$a3', '$p4', '$a4', '$p5', '$a5')";

            // Execute the SQL query
            $result = mysqli_query($con, $sql);

            if ($result) {
                echo '<div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Form Submitted Successfully!</h4>
                    <p>Form Submitted.</p>
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
        ?>
    </div>

    <script>
        document.getElementById('hamburger-icon').addEventListener('click', function() {
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
