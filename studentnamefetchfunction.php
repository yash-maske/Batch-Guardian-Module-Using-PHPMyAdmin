<?php
require_once 'connect.php';
function display_data(){
    if (isset($_COOKIE['users'])) {
        
        global $con;
        $receivedVar = $_COOKIE['users'];
        $receivedVar = mysqli_real_escape_string($con, $receivedVar);
    global $con;
    $query = "SELECT name,user_name,email FROM registration where user_name = '$receivedVar'";
    $result = mysqli_query($con, $query);

    return $result;
    }
}
?>