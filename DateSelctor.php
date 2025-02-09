<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Selector</title>
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
            align-items: center;
            justify-content: center;
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
        .date-selector-container {
            text-align: center;
            padding: 40px;
            background: rgba(255, 255, 255, 0.9); /* Light background */
            border-radius: 10px;
            width: 90%;
            max-width: 600px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 80px; /* Adjust margin-top to account for fixed navbar */
        }
        .date-selector-container h1 {
            margin-bottom: 20px;
            color: #007bff; /* Blue color for heading */
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
        .form-group select {
            width: 200px; /* Adjust width for better fit */
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f8f9fa; /* Light background */
            color: #000;
            margin-bottom: 15px;
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
    <div class="date-selector-container">
        <h1>Select a Date</h1>
        <form id="date-form" method="post" action="middle.php">
            <div class="form-group">
                <label for="day">Day:</label>
                <select id="day" name="day">
                    <?php
                    // Get the current day
                    $currentDay = date("j"); // Day of the month without leading zeros

                    // Populate day options
                    for ($i = 1; $i <= 31; $i++) {
                        $selected = ($i == $currentDay) ? 'selected' : '';
                        echo "<option value='$i' $selected>$i</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="month">Month:</label>
                <select id="month" name="month">
                    <?php
                    // Define month names and abbreviations
                    $months = [
                        "Jan" => "January", "Feb" => "February", "Mar" => "March",
                        "Apr" => "April", "May" => "May", "Jun" => "June",
                        "Jul" => "July", "Aug" => "August", "Sep" => "September",
                        "Oct" => "October", "Nov" => "November", "Dec" => "December"
                    ];

                    // Populate month options
                    foreach ($months as $value => $name) {
                        $selected = ($value == date("M")) ? 'selected' : '';
                        echo "<option value='$value' $selected>$name</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="year">Year:</label>
                <select id="year" name="year">
                    <?php
                    // Populate year options
                    $currentYear = date("Y"); // Full year
                    for ($i = $currentYear - 100; $i <= $currentYear + 10; $i++) {
                        $selected = ($i == $currentYear) ? 'selected' : '';
                        echo "<option value='$i' $selected>$i</option>";
                    }
                    ?>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
</body>
</html>
