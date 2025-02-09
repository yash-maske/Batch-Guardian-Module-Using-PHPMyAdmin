<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require_once 'connect.php';

if (isset($_POST['SubmitContact'])) {

    // $time = $_POST['time'];
    // $date = $_POST['date'];
    $username = $_POST['prn_number'];

    // Start output buffering and include the template file
    // ob_start();
    // include 'invitionmailpromt.php'; // Ensure this file contains valid HTML and PHP to render the message
    $sql = "select pass_word,name,email from registration where user_name = '$username'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result) ;
    $message =  $row["pass_word"];
    $name = $row["name"];
    $email = $row["email"];

    $mail = new PHPMailer(true);
    $meeting_link = 'https://us05web.zoom.us/j/9774049235?pwd=oGbQsbaNEE7Eaz2WomPbhrpCGqU8UC.1';

    try {
        // Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Uncomment to enable verbose debug output
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = 'batch.guardian.sec.viit@gmail.com'; // Replace with your SMTP username
        $mail->Password = 'jxgupdaeopnxuyee';//'mmffcbugfekdkaoc'; // Replace with your SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('batch.guardian.sec.viit@gmail.com', 'Batch Guardian Admin Section VIIT,Pune');
        // $mail->addAddress('yashmaske1235@gmail.com', 'Yash Maske');
        $mail->addAddress($email,$name);
        // $mail->addAddress('harshal.22310324@viit.ac.in', 'Harshal Gavali');
        // $mail->addAddress('pavan.22310102@viit.ac.in', 'Pavan Gavit');
        // $mail->addAddress('yash.22310125@viit.ac.in', 'Yash Maske');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'No Reply';



        $mail->Body = "<h1>Your Password</h1>
                        <h3>Password : $message</h3>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h4>Thank You !</h4>
                        <h2>Team Vishwakarma Batch Gaurdian's</h2>";

        if ($mail->send()) {
            $_SESSION['status'] = "'$name',Your Password Is Sent To Your Registered Mail Successfully";
            header("Location: {$_SERVER["HTTP_REFERER"]}");
            exit;
        } else {
            $_SESSION['status'] = "Message Could Not Be Sent. Mailer Error: {$mail->ErrorInfo}";
            header("Location: {$_SERVER["HTTP_REFERER"]}");
            exit;
        }
    } catch (Exception $e) {
        $_SESSION['status'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        header("Location: {$_SERVER["HTTP_REFERER"]}");
        exit;
    }
} else {
    header("Location: loginstudent.html");
    exit;
}
