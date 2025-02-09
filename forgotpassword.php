<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            overflow-x: hidden; /* Prevent horizontal scrolling */
        }
        .navbar {
            background-color: #a3a7b3;
            color: white;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between; /* Align items to spread out across the navbar */
        }
        .navbar .icons {
            display: flex;
            align-items: center;
        }
        .navbar .icons a {
            color: white;
            text-decoration: none;
            font-size: 20px;
            margin-right: 15px; /* Space between icons */
        }
        .navbar .icons a:hover {
            color: #007bff;
        }
        .navbar img {
            height: 40px; /* Adjusted height */
            margin-right: 10px;
        }
        .navbar .brand {
            display: flex;
            align-items: center;
        }
        .navbar p {
            margin: 0;
            font-size: 20px; /* Adjusted font size */
        }
        .container {
            flex: 1; /* Allow container to take available space */
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 600px;
        }
        .form-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }
        .form-group {
            width: 100%;
            margin-bottom: 15px;
        }
        .form-group label {
            font-size: 16px;
            margin-bottom: 5px;
            display: block;
        }
        .form-group input {
            font-size: 16px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }
        .btn-submit {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
        footer {
            background-color: #a3a7b3;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="icons">
            <a href="loginstudent.html"><i class="fas fa-home"></i></a>
        </div>
        <div class="brand">
            <img src="https://www.viit.ac.in/images/logo.png" alt="VIIT Logo">
            <p>Vishwakarma Institute of Information Technology</p>
        </div>
    </div>

    <!-- Form Container -->
    <div class="container">
        <div class="form-container">
            <h2>Forgot Password</h2>
            <form action="forgotpass.php" method="post">
                <div class="form-group">
                    <label for="prn-number">Enter PRN:</label>
                    <input type="text" id="prn-number" name="prn_number" required>
                </div>
                <div class="form-group">
                    <label for="name">Enter Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <button type="submit" class="btn-submit" name="SubmitContact">Submit</button>
            </form>
        </div>
    </div>

    <footer>Powered By</footer>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/min/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        var messageText = "<?= $_SESSION["status"] ?? ''; ?>";
        if(messageText != ''){
            Swal.fire({
                title: "Success !",
                text: messageText,
                icon: "success"
            });
            <?php unset($_SESSION["status"]); ?>
        }
    </script>
</body>
</html>
