<?php
require_once 'connect.php';
require_once 'funatten.php';
$result = display_data();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Page For Teachers</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .select-box {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            transition: background-color 0.3s, color 0.3s;
        }
        .present {
            background-color: #d4edda; /* Light green for Present */
            color: #155724; /* Dark green text for Present */
        }
        .absent {
            background-color: #f8d7da; /* Light red for Absent */
            color: #721c24; /* Dark red text for Absent */
        }
        a {
            text-decoration: none;
            color: inherit;
            font-weight: normal;
            font-style: normal;
        }
        /* Navbar Styles */
        .navbar {
            background-color: #a3a7b3;
            color: white;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            position: relative;
        }
        .navbar .icons {
            display: flex;
            align-items: center;
            margin-right: 10px; /* Space between icons and logo */
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
        .navbar p {
            margin: 0;
            font-size: 20px; /* Adjusted font size */
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
            margin-left: auto; /* Align button to the right */
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body class="bg-dark">
    <!-- Navbar -->
    <div class="navbar">
        <div class="icons">
            <a href="#" id="hamburger-icon"><i class="fas fa-bars"></i></a>
            <a href="homepageforteacher.php"><i class="fas fa-home"></i></a>
        </div>
        <img src="https://www.viit.ac.in/images/logo.png" alt="VIIT Logo">
        <p>Vishwakarma Institute of Information Technology</p>
    </div>

    <form action="attendancebackendprocess.php" method="POST">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h2 class="display-6 text-center">Attendance Page</h2>
                            <div class="card-body">
                                <table class="table table-bordered text-center">
                                    <tr class="bg-dark text-white">
                                        <td>Roll No</td>
                                        <td>Name</td>
                                        <td>Attendance</td>
                                    </tr>
                                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <td><?php echo $row['roll_no']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td>
                                                <select name="status[]" class="form-control custom-select select-box present">
                                                    <option value="P">Present</option>
                                                    <option value="A">Absent</option>
                                                </select>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container vh-90 d-flex align-items-center mt-3">
                <div class="row w-100">
                    <div class="col text-center mx-auto">
                        <button type="submit" class="btn btn-success">Mark Attendance</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.querySelectorAll('.select-box').forEach(select => {
                select.addEventListener('change', function() {
                    const value = this.value;
                    this.classList.remove('present', 'absent');
                    if (value === 'P') {
                        this.classList.add('present');
                    } else if (value === 'A') {
                        this.classList.add('absent');
                    }
                });
            });
        </script>
    </form>
</body>
</html>
