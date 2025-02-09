<?php
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '12345';
$DATABASE = 'SIGNUPSTUDENT';

$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

if($con){
    // echo "Connection Sucessfull....";
}else{
    die(mysqli_error($con));
}


?>