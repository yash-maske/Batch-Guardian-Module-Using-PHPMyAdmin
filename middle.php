<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>
<?php
// Ensure the form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include 'connect.php'; // Ensure this initializes $con correctly

    // Retrieve and sanitize input
    $day = isset($_POST['day']) ? intval($_POST['day']) : ''; 
    $month = isset($_POST['month']) ? $_POST['month'] : '';
    $year = isset($_POST['year']) ? $_POST['year'] : ''; 

    // Month names mapping
    $monthNames = [
        "Jan" => "January", "Feb" => "February", "Mar" => "March",
        "Apr" => "April", "May" => "May", "Jun" => "June",
        "Jul" => "July", "Aug" => "August", "Sep" => "September",
        "Oct" => "October", "Nov" => "November", "Dec" => "December"
    ];

    // Validate and get the full month name
    if (!array_key_exists($month, $monthNames)) {
        echo '<div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Attendance Marked!</h4>
                <p>Attendance marked successfully.</p>
                <hr>
                <p class="mb-0">.</p>
            </div>';
    }
    
    $monthName = $monthNames[$month];

    // Construct table name
    // Ensure valid table name (avoid spaces and special characters)
    $table_name = $day . '_' . $monthName .'_' . $year;

    // Optional: Output table name for debugging
    // echo "Table Name: $table_name<br>";

    // Set a cookie (optional, can be removed if not needed)
    setcookie("var", $table_name, time() + 3600); // Set expiration time to 1 hour

    // Use the global connection object
    global $con;

    // Prepare the SQL query
    $query = "ALTER TABLE ATTENDANCE ADD COLUMN `$table_name` VARCHAR(1) DEFAULT 'P'";

    // Execute the query and check for success
    $result = mysqli_query($con, $query);
    if (!$result) {
        die('Error: ' . mysqli_error($con)); // Output the error if query fails
    }

    // Close the database connection
    mysqli_close($con);

    // Redirect to the desired page
    header("Location: attendancepageforteacher.php");
    exit(); // Ensure no further code is executed
}
?>
