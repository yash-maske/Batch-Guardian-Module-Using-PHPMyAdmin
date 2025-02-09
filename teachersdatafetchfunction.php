<?php
require_once 'connect.php';
function display_data(){
    if (isset($_COOKIE['usert'])) {
        
        global $con;
        $receivedVar = $_COOKIE['usert'];
        $receivedVar = mysqli_real_escape_string($con, $receivedVar);
    global $con;
    $query = "SELECT name,user__name FROM registrationt where user__name = '$receivedVar'";
    $result = mysqli_query($con, $query);

    return $result;
    }
}
?>