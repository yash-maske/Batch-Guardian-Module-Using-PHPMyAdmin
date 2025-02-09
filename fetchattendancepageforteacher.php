<?php
require_once 'connect.php';
require_once 'functionforfetchattendance.php';

// Call the function to get the data or error message
$result = display_data();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data Page</title>
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
        .card {
            margin-top: 80px; /* Adjust margin-top to account for fixed navbar */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: rgba(255, 255, 255, 0.9); /* Light background for card */
        }
        .card-header {
            background-color: #007bff; /* Matching color from previous theme */
            color: #ffffff;
            border-bottom: 1px solid #e0e0e0;
        }
        .table thead th {
            background-color: #007bff; /* Matching color from previous theme */
            color: #ffffff;
        }
        .present {
            background-color: #d4edda; /* Light green for Present */
            color: #155724; /* Dark green text for Present */
        }
        .absent {
            background-color: #f8d7da; /* Light red for Absent */
            color: #721c24; /* Dark red text for Absent */
        }
        .btn-success {
            background-color: #007bff;
            border-color: #007bff;
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
<?php
if (isset($_COOKIE['varrr'])) {
    // Retrieve and sanitize the cookie value
    $receivedVar = $_COOKIE['varrr'];
}
?>
    <!-- Main Content -->
    <form action="homepageforteacher.php" method="POST">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h2 class="display-6 text-center"></h2>
                        </div>
                        <div class="card-body">
                            <?php if (is_string($result)) { // Display error message ?>
                                <div class="alert alert-danger" role="alert">
                                    <h4 class="alert-heading">Error!</h4>
                                    <p><?php echo htmlspecialchars($result); ?></p>
                                </div>
                            <?php } else if (mysqli_num_rows($result) > 0) { // Display data ?>
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>Roll No</th>
                                            <th>Name</th>
                                            <th>Attendance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($row = mysqli_fetch_assoc($result)) { 
                                            // Determine class based on attendance
                                            $attendanceClass = $row[$receivedVar] == 'P' ? 'present' : 'absent';
                                        ?>
                                            <tr>
                                                <td><?php echo htmlspecialchars($row['roll_no']); ?></td>
                                                <td><?php echo htmlspecialchars($row['name']); ?></td>
                                                <td class="<?php echo $attendanceClass; ?>">
                                                    <?php echo htmlspecialchars($row[$receivedVar]); ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            <?php } else { // No records found ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Oops!</strong> Attendance not found.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col text-center">
                    <button type="submit" class="btn btn-success">Close</button>
                </div>
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK3PVwT6b7wX53UjW5h5s2B6M1O4CwDkTSwksK7kC1fVAP5" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UOa5xJ8MlF+zvXzIkdM4PYxFg8zJ3zJ8QpPlFfjfS2zqCq4ih4F7eojPpVVx8XMX" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-fnF6Z1r2H6KRtU0pHaJfN4b5AkC+ftdP2h8A8s6C5Lqa0JZkB4GRfHkjK5r8avfc" crossorigin="anonymous"></script>
</body>
</html>
