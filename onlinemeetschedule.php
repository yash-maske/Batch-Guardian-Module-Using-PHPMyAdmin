<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Time Selector</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
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
            align-items: center;
            justify-content: center;
        }
        .navbar {
            background-color: #ffffff;
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
            color: #000;
            display: flex;
            align-items: center;
        }
        .navbar a {
            color: #000;
            text-decoration: none;
            margin-left: 15px;
            font-size: 18px;
        }
        .navbar a:hover {
            text-decoration: underline;
        }
        .date-time-selector-container {
            text-align: center;
            padding: 40px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            width: 90%;
            max-width: 700px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 80px;
        }
        .date-time-selector-container h1 {
            margin-bottom: 20px;
            color: #007bff;
        }
        .form-group {
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .form-group label {
            font-size: 18px;
            color: #333;
            margin-bottom: 5px;
        }
        .form-control {
            max-width: 250px;
        }
        .btn-success {
            background-color: #007bff;
            border-color: #007bff;
            padding: 10px 20px;
            font-size: 16px;
        }
        .btn-success:hover {
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
    <div class="date-time-selector-container">
        <h1>Schedule a Meeting</h1>
        <form id="date-time-form" method="post" action="scheduleonlinemeetback.php">
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" class="form-control" required />
            </div>

            <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" id="time" name="time" class="form-control" required />
            </div>

            <button type="submit" class="btn btn-success" name="SubmitContact" >Schedule Meeting</button>
        </form>
    </div>

    <!-- Scripts -->
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
