<?php
session_start();
require 'connect.php';
if (isset($_POST['save_complaint'])) {
    $email = mysqli_real_escape_string($con, $_POST['save_complaint']);
    if ($email == 'emailnotfound') {
        $_SESSION['message'] = 'Please Refresh the page...';
        header("Location: complaint.php");
        exit(0);
    }
    $complaint = mysqli_real_escape_string($con, $_POST['complaint_details']);
    $complaint_type = mysqli_real_escape_string($con, $_POST['complaint_type']);
    $complaint_date = mysqli_real_escape_string($con, $_POST['complaint_date']);

    $query = "INSERT INTO complaintbox (email,complaint_type,complaint,date)VALUES('$email','$complaint_type','$complaint','$complaint_date')";

    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] = 'Complaint Raised Successfully';
        header("Location: complaint.php");
        exit(0);
    }else{
        $_SESSION['message'] = 'Unable to Raise the Complaint';
        header("Location: complaint.php");
        exit(0);
    }
}

if (isset($_POST['update_complaint_status'])) {
    
    $complaint_status = mysqli_real_escape_string($con, $_POST['status']);
    $complaint_id = mysqli_real_escape_string($con, $_POST['id']) ;

    $query = "UPDATE complaintbox SET status = '$complaint_status' WHERE id = '$complaint_id'";

    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] = 'Action Updated Successfully ';
        header("Location: complaint-notification.php");
        exit(0);
    }else{
        $_SESSION['message'] = 'Unable to Take Action';
        header("Location: complaint-notification.php");
        exit(0);
    }
}

if (isset($_POST['save_feedback'])) {
    
    $feedback = mysqli_real_escape_string($con, $_POST['feedback']);
    $complaint_id = mysqli_real_escape_string($con, $_POST['save_feedback']) ;

    $query = "UPDATE complaintbox SET feedback = '$feedback' WHERE id = '$complaint_id'";

    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] = 'FeedBack Saved Successfully ';
        header("Location: homepageforstudent.php");
        exit(0);
    }else{
        $_SESSION['message'] = 'Unable to Take Action';
        header("Location: homepageforstudent.php");
        exit(0);
    }
}




?>