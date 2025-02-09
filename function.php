<?php
require_once 'connect.php';
function display_data(){
    global $con;
    $query = "SELECT * FROM registration";
    $result = mysqli_query($con, $query);

    return $result;
}
?>