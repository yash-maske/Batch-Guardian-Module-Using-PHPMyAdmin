<?php
require_once 'connect.php';
function display_data(){
    global $con;
    $query = "SELECT * FROM studentinfo";
    $result = mysqli_query($con, $query);

    return $result;
}
?>
