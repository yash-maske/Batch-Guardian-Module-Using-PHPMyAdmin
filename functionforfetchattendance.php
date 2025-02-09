<?php
require_once 'connect.php';

function display_data() {
    global $con; // Use global to access the connection variable

    // Check if the connection to the database is successful
    if (!$con) {
        return '<div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Connection Error!</h4>
                    <p>Failed to connect to the database: ' . htmlspecialchars(mysqli_connect_error()) . '</p>
                    <hr>
                    <p class="mb-0">Please check your database connection settings.</p>
                </div>';
    }

    // Check if the cookie 'varrr' is set
    if (isset($_COOKIE['varrr'])) {
        // Retrieve and sanitize the cookie value
        $receivedVar = $_COOKIE['varrr'];
        $receivedVar = mysqli_real_escape_string($con, $receivedVar);

        // Prepare the query
        $query = "SELECT roll_no, name, `$receivedVar` FROM ATTENDANCE";

        // Execute the query
        $result = mysqli_query($con, $query);

        // Check for query execution errors
        if (!$result) {
            // Check if the error is related to table existence
            if (strpos(mysqli_error($con), 'Table') !== false) {
                return '<div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">Table Not Found!</h4>
                            <p>The table ' . htmlspecialchars($receivedVar) . ' does not exist.</p>
                            <hr>
                            <p class="mb-0">Please verify the table name or contact the administrator.</p>
                        </div>';
            } else {
                return '<div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">Query Error!</h4>
                            <p>Error executing the query: ' . htmlspecialchars(mysqli_error($con)) . '</p>
                            <hr>
                            <p class="mb-0">Please try again later.</p>
                        </div>';
            }
        }

        return $result;
    } else {
        // Handle the case where the cookie is not set
        return '<div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">Cookie Missing!</h4>
                    <p>Cookie \'varrr\' is not set.</p>
                    <hr>
                    <p class="mb-0">Please check your browser settings.</p>
                </div>';
    }
}
?>
