<?php
session_start();
require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Box</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            overflow-x: hidden;
        }
        
        .navbar {
            background-color: #a3a7b3;
            color: white;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            position: relative;
        }
        
        .hamburger-menu {
            display: none;
            position: absolute;
            top: 50px;
            left: 0;
            background-color: #235ecb;
            width: 200px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            padding: 10px;
            z-index: 1000;
            transition: opacity 0.3s ease, transform 0.3s ease;
            opacity: 0; /* Start hidden */
            transform: translateY(-10px); /* Slightly above initial position */
        }

        .hamburger-menu.show {
            display: block;
            opacity: 1;
            transform: translateY(0); /* Move to original position */
        }

        .hamburger-menu a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 5px;
            transition: background-color 0.3s ease; /* Smooth color transition */
        }

        .hamburger-menu a:hover {
            background-color: #007bff;
        }

        .navbar .icons {
            display: flex;
            align-items: center;
            margin-right: 10px;
        }

        .navbar .icons a {
            color: white;
            text-decoration: none;
            font-size: 20px;
            margin-right: 15px;
        }

        .navbar .icons a:hover {
            color: #007bff;
        }

        .navbar img {
            height: 40px;
            margin-right: 10px;
        }

        .navbar p {
            margin: 0;
            font-size: 20px;
            display: flex;
            align-items: center;
        }

        .container {
            flex: 1;
            padding: 20px;
        }

        .complaint-form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 50px auto;
        }

        .complaint-form .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .complaint-form .card-header .btn {
            margin-left: auto;
        }

        .complaint-form h4 {
            margin: 0;
            color: #333;
        }

        .complaint-form .form-group {
            margin-bottom: 15px;
        }

        .complaint-form label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .complaint-form input, .complaint-form textarea, .complaint-form select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .complaint-form textarea {
            resize: vertical;
        }

        .complaint-form button {
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .complaint-form button:hover {
            background-color: #0056b3;
        }

        footer {
            background-color: #a3a7b3;
            text-align: center;
            padding: 10px 0;
            margin-top: auto; /* Push the footer to the bottom */
        }

        @media (max-width: 768px) {
            .navbar p {
                font-size: 16px;
            }

            .navbar img {
                height: 30px;
            }

            .navbar .icons a {
                font-size: 18px;
                margin-right: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="icons">
            <a href="#" id="hamburger-icon"><i class="fas fa-bars"></i></a>
            <a href="homepageforstudent.php"><i class="fas fa-home"></i></a>
        </div>

        <img src="https://www.viit.ac.in/images/logo.png" alt="VIIT Logo">
        <p>Vishwakarma Institute of Information Technology</p>
    </div>

    <?php 
    if(isset($_GET['email'])){
        $email = mysqli_real_escape_string($con, $_GET['email']); 
    } else {
        $email = 'emailnotfound';
    }
    ?>

    <div class="hamburger-menu" id="hamburger-menu">
        <a href="http://localhost/DBMS/DEMO/complaint.php?email=<?=$email?>">Complaint Box</a>
        <a href="#">Show Student Profile</a>
        <a href="http://localhost/DBMS/DEMO/DateSelctorforFetchAttendance.php">Fetch Attendance</a>
        <a href="#">Option 4</a>
    </div>

    <!-- Complaint Form Section -->
    <div class="container">
        <?php include 'message.php' ?>
        <div class="complaint-form">
            <div class="card-header">
                <h4>Complaint Box</h4>
                <a href="homepageforstudent.php" class="btn btn-primary">Back</a>
            </div>
            <form action="complaintback.php" method="POST">
                <div class="form-group">
                    <label for="complaint-date">Date</label>
                    <input type="date" id="complaint-date" name="complaint_date" required>
                </div>
                <div class="form-group">
                    <label for="complaint-type">Type of Complaint</label>
                    <select id="complaint-type" name="complaint_type" required>
                        <option value="">Select a type</option>
                        <option value="academic">Academic</option>
                        <option value="facility">Facility</option>
                        <option value="administration">Administration</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="complaint-details">Complaint Details</label>
                    <textarea id="complaint-details" name="complaint_details" rows="5" required></textarea>
                </div>
               
                <button type="submit" name="save_complaint" value="<?=$email?>">Submit Complaint</button>
            </form>
        </div>
    </div>

    <footer>Powered By</footer>

    <!-- JavaScript to handle hamburger menu toggle and set default date -->
    <script>
        document.getElementById('hamburger-icon').addEventListener('click', function() {
            const menu = document.getElementById('hamburger-menu');
            if (menu.classList.contains('show')) {
                menu.classList.remove('show');
            } else {
                menu.classList.add('show');
            }
        });

        // Set the default date to the current date
        document.getElementById('complaint-date').value = new Date().toISOString().split('T')[0];
    </script>
</body>
</html>
