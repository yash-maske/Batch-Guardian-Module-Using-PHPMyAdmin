<?php
require_once 'connect.php';
require_once 'teachersdatafetchfunction.php';

$result = display_data();
$row = mysqli_fetch_assoc($result)

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>

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
            color: black;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            /* Adjusted to space between items */
            position: sticky;
        }

        .navbar-right-icon {
            height: 40px;
            /* Adjust height as needed */
            margin-left: auto;
            /* Pushes the icon to the right side */
        }

        .navbar .icons {
            display: flex;
            align-items: center;
            margin-right: 10px;
            /* Space between icons and logo */
        }

        .navbar .icons a {
            color: rgb(63, 76, 196);
            text-decoration: none;
            font-size: 20px;
            margin-right: 15px;
            /* Space between icons */
        }

        .navbar .icons a:hover {
            color: #007bff;
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

        /* Hamburger Menu Styles */
        .hamburger-menu {
            display: none;
            position: absolute;
            top: 50px;
            /* Adjust as needed */
            left: 0;
            background-color: #023e8a;
            width: 250px;
            /* Increase width to fit longer names */
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            padding: 10px;
            /* Padding for height */
            z-index: 1000;
            transition: opacity 0.3s ease, transform 0.3s ease;
            opacity: 0;
            /* Start hidden */
            transform: translateY(-10px);
            /* Slightly above initial position */
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
            white-space: nowrap;
            /* Prevent text wrapping */
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
            background-color: #0077c2;
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
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="icons">
            <a href="#" id="hamburger-icon"><i class="fas fa-bars"></i></a>
            <a href="homepageforteacher.php"><i class="fas fa-home"></i></a>
            <img src="https://www.viit.ac.in/images/logo.png" alt="VIIT Logo">
            <p>Vishwakarma Institute of Information Technology</p>
        </div>
        <a href="http://localhost/DBMS/DEMO/complaint-notification.php">
            <img src="https://cdn-icons-png.freepik.com/256/11590/11590299.png?ga=GA1.1.2111502692.1720763510&semt=ais_hybrid"
                alt="New Icon" class="navbar-right-icon">
        </a>


    </div>

    <!-- Hamburger Menu -->
    <div class="hamburger-menu" id="hamburger-menu">
        <a href="#">Show Monthly Defaulter List</a>
        <a href="#">Fetch Student Profile</a>
        <a href="http://localhost/DBMS/DEMO/DateSelctorforFetchAttendance.php">Fetch Meeting Attendance</a>
        <a href="http://localhost/DBMS/DEMO/showstudentdata.php">Fetch Student Data</a>
    </div>

    <!-- Teacher Profile Section -->
    <div class="container student-profile">
        <?php
        if ($row['user__name'] == 'Pradnya_Mehta') {
            ?>
            <img src="1680767454768.jpeg" alt="Student Photo">
            <?php
        } else if ($row['user__name'] == 'Amol_Patil') {
            ?>
                <img src="WhatsApp Image 2024-09-02 at 08.25.23_be076ad7.jpg" alt="Student Photo">
            <?php
        } else {
            ?>
                <img src="#" alt="Student Photo">
            <?php
        }
        ?>


        <p><?php echo $row['name']; ?><br>Computer Department - Second Year</p>

    </div>

    <!-- Box Container -->
    <div class="container box-container">
        <div class="box">
            <!-- "https://calendar.google.com/calendar/u/0/r?pli=1" -->
            <a href="schedulemeetoptions.html" class="box-link">
                <img src="https://cdn-icons-png.freepik.com/256/6543/6543839.png?ga=GA1.1.2111502692.1720763510&semt=ais_hybrid"
                    alt="Schedule Meeting">
            </a>
            <span><a class="a" href="schedulemeetoptions.html">Schedule Meeting</a></span>
        </div>
        <div class="box">
            <a href="http://localhost/DBMS/DEMO/MeetingForm.php" class="box-link">
                <img src="https://cdn-icons-png.freepik.com/256/13433/13433743.png?ga=GA1.1.2111502692.1720763510&semt=ais_hybrid"
                    alt="Submit GFM Report">
            </a>
            <span><a class="a" href="http://localhost/DBMS/DEMO/MeetingForm.php">Submit GFM Report</a></span>
        </div>

        <div class="box">
            <a href="http://localhost/DBMS/DEMO/DateSelctor.php" class="box-link">
                <img src="https://cdn-icons-png.freepik.com/256/3194/3194447.png?ga=GA1.1.2111502692.1720763510&semt=ais_hybrid"
                    alt="Student Attendance">
            </a>
            <span><a class="a" href="http://localhost/DBMS/DEMO/DateSelctor.php ">Student Attendance</a></span>
        </div>

        <div class="box"> <img
                src="https://cdn-icons-png.freepik.com/256/3612/3612636.png?ga=GA1.1.2111502692.1720763510&semt=ais_hybrid"
                alt=" Student Log-Book">

            Student Log-Book </div>
    </div>
    </div>

    <!-- Log Out Button -->
    <div class="logout-container">
        <a href="index.html" class="btn btn-primary mt-10">Log Out</a>
    </div>

    <footer>Powered By</footer>

    <!-- JavaScript to handle hamburger menu toggle and click outside -->
    <script>
        document.getElementById('hamburger-icon').addEventListener('click', function (event) {
            event.stopPropagation(); // Prevents click event from bubbling up to the document
            const menu = document.getElementById('hamburger-menu');
            menu.classList.toggle('show');
        });

        document.addEventListener('click', function (event) {
            const menu = document.getElementById('hamburger-menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            if (menu.classList.contains('show') && !menu.contains(event.target) && !hamburgerIcon.contains(event.target)) {
                menu.classList.remove('show');
            }
        });
    </script>
</body>

</html>