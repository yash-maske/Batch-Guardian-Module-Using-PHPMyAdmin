<?php
require 'connect.php';
require 'studentnamefetchfunction.php';

$result = display_data();
?>
<?php
require 'connect.php';
require_once 'message.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Home Page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            overflow-x: hidden;
            /* Prevent horizontal scrolling */
        }

        .navbar {
            background-color: #E8EAF6;
            color: white;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            position: sticky;
        }

        .navbar .icons {
            display: flex;
            align-items: center;
            margin-right: 10px;
            /* Space between icons and logo */
        }

        .navbar .icons a {
            color: rgb(79, 105, 183);
            text-decoration: none;
            font-size: 20px;
            margin-right: 15px;
            /* Space between icons */
        }

        .navbar .icons a:hover {
            color: #005ce7;
        }

        .navbar img {
            height: 40px;
            /* Adjusted height */
            margin-right: 10px;
        }

        .navbar p {
            margin: 0;
            font-size: 20px;
            /* Adjusted font size */
            display: flex;
            align-items: center;
            color: black;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: auto;
            /* Align button to the right */
        }

        .button:hover {
            background-color: #0056b3;
        }

        .container {
            padding: 20px;
        }

        .student-profile {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }

        .student-profile img {
            border-radius: 50%;
            width: 80px;
            height: 80px;
            margin-right: 20px;
        }

        .student-profile p {
            font-size: 18px;
            margin: 0;
        }

        .logout-container {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }

        .box-container {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }

        .box {
            width: 200px;
            height: 200px;
            background-color: #4a90e2;
            /* Professional blue */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 18px;
            border-radius: 10px;
            /* Slightly curved corners */
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
            /* Updated transition for box */
            cursor: pointer;
        }

        .box img {
            width: 80px;
            /* Regular image size */
            height: 80px;
            margin-bottom: 10px;
            transition: transform 0.3s ease;
            /* Transition for image scaling */
        }

        .box:hover {
            background-color: #357abd;
            /* Darker blue on hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Shadow effect */
            transform: scale(1.3);
            /* Enlarge the box slightly */
        }

        .box:hover img {
            transform: scale(1.3);
            /* Enlarge the image inside the box */
        }

        footer {
            background-color: #a3a7b3;
            text-align: center;
            margin-top: 40%;
            margin-bottom: 0;
            padding: 10px 0;
        }

        .hamburger-menu {
            display: none;
            position: absolute;
            top: 50px;
            left: 0;
            background-color: #235ecb;
            width: 200px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            padding: 10px;
            z-index: 1000;
            transition: opacity 0.3s ease, transform 0.3s ease;
            opacity: 0;
            /* Start hidden */
            transform: translateY(-10px);
            /* Slightly above initial position */
        }

        .hamburger-menu.show {
            display: block;
            opacity: 1;
            transform: translateY(0);
            /* Move to original position */
        }

        .hamburger-menu a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 5px;
            transition: background-color 0.3s ease;
            /* Smooth color transition */
        }

        .hamburger-menu a:hover {
            background-color: #007bff;
        }

        .complaint-submenu {
            display: none;
            padding-left: 20px;
            /* Indent submenu items */
            background-color: #235ecb;
        }

        .complaint-submenu.show {
            display: block;
        }

        .a {
            text-decoration: none;
            color: white;
        }

        .a:hover {
            text-transform: none;
            /* color: white; */
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .navbar p {
                font-size: 16px;
                /* Adjusted font size for smaller screens */
            }

            .navbar img {
                height: 30px;
                /* Adjusted image size for smaller screens */
            }

            .navbar .icons a {
                font-size: 18px;
                /* Adjusted icon size for smaller screens */
                margin-right: 10px;
                /* Reduced space between icons */
            }

            .button {
                margin-left: 20px;
                /* Adjusted space for smaller screens */
            }

            .student-profile img {
                width: 60px;
                height: 60px;
                margin-bottom: 200px;
            }

            .student-profile p {
                font-size: 16px;
            }

            .box-container {
                flex-direction: column;
                align-items: center;
            }

            .box {
                width: 100%;
                margin-bottom: 20px;
            }

            .a {
                text-decoration: none;
                color: white;
            }

            .a:hover {
                text-transform: none;
                /* color: white; */
            }
        }
    </style>
</head>

<body>
    <?php $row_1 = mysqli_fetch_assoc($result) ?>
    <div class="navbar">
        <div class="icons">
            <a href="homepageforstudent.php"><i class="fas fa-home"></i></a>
            <button id="hamburger-button" class="btn btn-light">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <img src="https://www.viit.ac.in/images/logo.png" alt="VIIT Logo">
        <p>Vishwakarma Institute of Information Technology</p>
    </div>

    <div class="hamburger-menu" id="hamburger-menu">
        <!-- <a href="#" id="complaint-box">Complaint Box</a>
        <div class="complaint-submenu" id="complaint-submenu">
            khalchay don link 
        </div> -->
        <a href="http://localhost/DBMS/DEMO/complaint.php?email=<?= $row_1['email'] ?>">Raise Complaint</a>
        <a href="http://localhost/DBMS/DEMO/complaint-status.php?email=<?= $row_1['email'] ?>">View Complaint</a>
        <!-- <a href="http://localhost/DBMS/DEMO/profilesheet.html">Fill Profile Sheet</a> -->
        <!-- <a href="http://localhost/DBMS/DEMO/DateSelctorforFetchAttendance.php">Fetch Attendance</a> -->
        <!-- <a href="#">Option 4</a> -->
    </div>

    <!-- Student Profile Section -->
    <div class="container student-profile">
        <img src="https://www.pinclipart.com/picdir/middle/95-958614_man-icon-person-logo-png-clipart.png"
            alt="Student Photo">

        <p><i><b><?php echo $row_1['name']; ?></b></i><br><b>CSE(AI) B</b></p>

        <?php
        include 'message.php';
        ?>
    </div>

    <!-- Boxes Section -->
    <div class="container box-container">
        <div class="box">
            <a href="http://localhost/DBMS/DEMO/profilesheet.html" class="box-link">
                <img src="https://cdn-icons-png.freepik.com/256/8483/8483659.png?ga=GA1.1.2111502692.1720763510&semt=ais_hybrid"
                    alt="Fill Profile Sheet">
            </a>
            <span><a class="a" href="http://localhost/DBMS/DEMO/profilesheet.html">Fill Profile Sheet</a></span>
        </div>
        <div class="box">
            <img src="https://cdn-icons-png.freepik.com/256/16495/16495910.png?ga=GA1.1.2111502692.1720763510&semt=ais_hybrid"
                alt="Fill Monthly Attendance">
            Fill Monthly Attendance
        </div>

        <div class="box">
            <a href="http://localhost/DBMS/DEMO/LogBookDivya/logbook.html" class="box-link">
                <img src="https://cdn-icons-png.freepik.com/256/3612/3612636.png?ga=GA1.1.2111502692.1720763510&semt=ais_hybrid"
                    alt="Fill Log Book">
            </a>
            <span><a class="a" href="http://localhost/DBMS/DEMO/logbook.html">Fill-Log-Book </a></span>
        </div>
        <div class="box">
            <a href="http://localhost/DBMS/DEMO/event_certificate.php" class="box-link">
                <img src="certificate_3135807.png"
                    alt="Upload Certificates">
            </a>
            <span><a class="a" href="http://localhost/DBMS/DEMO/event_certificate.php">Upload Certificates</a></span>
        </div>
    </div>
    
    <div class="logout-container">
        <a href="index.html" class="btn btn-primary mt-10">Log Out</a>
    </div>

    <footer>
        <p>Copyright © 2023 Vishwakarma Institute of Information Technology, Pune. All rights reserved.</p>
    </footer>

    <script>
        document.getElementById('hamburger-button').addEventListener('click', function () {
            var menu = document.getElementById('hamburger-menu');
            menu.classList.toggle('show');
        });

        document.getElementById('complaint-box').addEventListener('click', function (e) {
            e.preventDefault(); // Prevent the default action (if it's a link)
            var submenu = document.getElementById('complaint-submenu');
            submenu.classList.toggle('show');
        });
    </script>
</body>

</html>