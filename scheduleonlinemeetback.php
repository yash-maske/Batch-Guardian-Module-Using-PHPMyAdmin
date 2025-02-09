<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'teachersdatafetchfunction.php';

$option = display_data();
$options = mysqli_fetch_assoc($option);
$user = $options['user__name'];
if (isset($_POST['SubmitContact'])) {

    $time = $_POST['time'];
    $date = $_POST['date'];

    // Start output buffering and include the template file
    ob_start();
    include 'invitionmailpromt.php'; // Ensure this file contains valid HTML and PHP to render the message
    $message = ob_get_clean(); // Get the buffer content and clean it

    $mail = new PHPMailer(true);
    $meeting_link = 'https://us05web.zoom.us/j/9774049235?pwd=oGbQsbaNEE7Eaz2WomPbhrpCGqU8UC.1';

    try {
        // Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Uncomment to enable verbose debug output
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = ''; // Replace with your SMTP username
        $mail->Password = ''; // Replace with your SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('', 'Batch Guardian Admin Section VIIT,Pune');


        if ($user == 'Pradnya_Mehta') {
            // $mail->addAddress('pranav.22310012@viit.ac.in', 'Pranav');
            // $mail->addAddress('dattaraj.22310028@viit.ac.in', 'Dattaraj');
            // $mail->addAddress('anurag.22310033@viit.ac.in', 'Anurag');
            // $mail->addAddress('pratiksha.22310039@viit.ac.in', 'Pratiksha');
            // $mail->addAddress('anamika.22310070@viit.ac.in', 'Anamika');
            // $mail->addAddress('pavan.22310102@viit.ac.in', 'Pavan');
            // $mail->addAddress('ashutosh.22310120@viit.ac.in', 'Ashutosh');
            $mail->addAddress('yash.22310125@viit.ac.in', 'Yash');
            // $mail->addAddress('divya.22310147@viit.ac.in', 'Divya');
            // $mail->addAddress('ravindra.22310186@viit.ac.in', 'Ravindra');
            // $mail->addAddress('manish.22310220@viit.ac.in', 'Manish');
            // $mail->addAddress('pandharinath.22310246@viit.ac.in', 'Pandharinath');
            // $mail->addAddress('sairaj.22310273@viit.ac.in', 'Sairaj');
            // $mail->addAddress('kedar.22310297@viit.ac.in', 'Kedar');
            // $mail->addAddress('chandrakant.22310303@viit.ac.in', 'Chandrakant');
            // $mail->addAddress('shubham.22310312@viit.ac.in', 'Shubham');
            // $mail->addAddress('aayush.22310316@viit.ac.in', 'Aayush');
            // $mail->addAddress('harshal.22310324@viit.ac.in', 'Harshal');
            // $mail->addAddress('rahul.22310327@viit.ac.in', 'Rahul');
            // $mail->addAddress('shubhankar.22310371@viit.ac.in', 'Shubhankar');
            // $mail->addAddress('rushikesh.22310416@viit.ac.in', 'Rushikesh');
            // $mail->addAddress('sakshi.22310541@viit.ac.in', 'Sakshi');
            // $mail->addAddress('sushant.22310567@viit.ac.in', 'GARJE SUSHANT SANJAY');
            // $mail->addAddress('shreyabedre185@gmail.com', 'Shreya Bedre');
        } elseif ($user == 'Amol_Patil') {
            // $mail->addAddress('aditee.22310631@viit.ac.in', 'ADITEE BIDHU MOHANTY');
            // $mail->addAddress('manaswi.22310637@viit.ac.in', 'SHEKOKAR MANASWI BRIJESH');
            // $mail->addAddress('shashwati.22310704@viit.ac.in', 'KALE SHASHWATI PRITAM');
            // $mail->addAddress('shubham.22310734@viit.ac.in', 'JADHAV SHUBHAM ANNASAHEB');
            // $mail->addAddress('dilkhushkumar.22310736@viit.ac.in', 'DILKHUSH KUMAR');
            // $mail->addAddress('dinesh.22310789@viit.ac.in', 'AVISHKAR DINESH CHOTHWE');
            // $mail->addAddress('onkar.22310877@viit.ac.in', 'HADADARE ONKAR AJIT');
            // $mail->addAddress('darshan.22310901@viit.ac.in', 'PATIL DARSHAN GAJANAN');
            // $mail->addAddress('pranil.22310939@viit.ac.in', 'PRANIL GAWANDE');
            // $mail->addAddress('pranav.22310950@viit.ac.in', 'PATIL PRANAV MAHADEV');
            // $mail->addAddress('yashswi.22311021@viit.ac.in', 'KIRKTE YASHSWI SHIVDAS');
            // $mail->addAddress('sayyam.22311031@viit.ac.in', 'JAIN SAYYAM JAYANTILAL');
            // $mail->addAddress('sahil.22311046@viit.ac.in', 'BHAGWAT SAHIL CHANDRASHEKHAR');
            // $mail->addAddress('yash.22311057@viit.ac.in', 'TAYADE YASH RAJENDRAKUMAR');
            // $mail->addAddress('rakshak.22311129@viit.ac.in', 'DHONE RAKSHAK RAJESH');
            // $mail->addAddress('shivam.22311287@viit.ac.in', 'WANGIKAR SHIVAM SHAILESH');
            // $mail->addAddress('parth.22311293@viit.ac.in', 'KATKAR PARTH ULHAS');
            // $mail->addAddress('mangesh.22311296@viit.ac.in', 'GAURAV MANGESH YADAV');
            // $mail->addAddress('asif.22311412@viit.ac.in', 'ARMAAN ASIF SHAIKH');
            // $mail->addAddress('neel.22311420@viit.ac.in', 'SHAH NEEL UMESH');
            // $mail->addAddress('muskan21nc@gmail.com', 'Muskan');
            $mail->addAddress('yash.22310125@viit.ac.in', 'Yash');
        } else {
            // $mail->addAddress('vyankatesh.22311422@viit.ac.in', 'JADHAV VYANKATESH SHAM');
            // $mail->addAddress('mrunal.22311431@viit.ac.in', 'TALIKOTI MRUNAL AJAY');
            // $mail->addAddress('apurva.22311433@viit.ac.in', 'JANGLE APURVA PRAMOD');
            // $mail->addAddress('shivani.22311443@viit.ac.in', 'KINAGI SHIVANI BHARATRAJ');
            // $mail->addAddress('rishi.22311445@viit.ac.in', 'KHANDELWAL RISHI RAVINDRA');
            // $mail->addAddress('asiya.22311467@viit.ac.in', 'ATTAR ASIYA HASAN');
            // $mail->addAddress('pratik.22311578@viit.ac.in', 'PRATIK DHAGE');
            // $mail->addAddress('shridhar.22311583@viit.ac.in', 'SHRIDHAR GANESH GORE');
            // $mail->addAddress('parth.22311585@viit.ac.in', 'KAIRAMKONDA PARTH SANTOSH');
            // $mail->addAddress('arnav.22311644@viit.ac.in', 'GILANKAR ARNAV ASHISH');
            // $mail->addAddress('ayush.22311649@viit.ac.in', 'MUNOT AYUSH RAJKUMAR');
            // $mail->addAddress('soham.22311652@viit.ac.in', 'SOHAM RAHUL JOSHI');
            // $mail->addAddress('dhananjay.22311655@viit.ac.in', 'JAGTAP DHANANJAY SIDDHANATH');
            // $mail->addAddress('shantanu.22311659@viit.ac.in', 'KULKARNI SHANTANU GOPAL');
            // $mail->addAddress('uzair.22311720@viit.ac.in', 'SAYYED UZAIR SAJID');
            // $mail->addAddress('vedant.22311721@viit.ac.in', 'LEMBHE VEDANT DEEPAK');
            // $mail->addAddress('harsh.22311725@viit.ac.in', 'JAISINGPURE HARSH GANESH');
            // $mail->addAddress('atharva.22311743@viit.ac.in', 'CHINCHOLE ATHARVA AJAY');
            // $mail->addAddress('shlok.22311747@viit.ac.in', 'KHAIRNAR SHLOK PANKAJ');
            // $mail->addAddress('ansh.22311750@viit.ac.in', 'GOYANKA ANSH VINITKUMAR');
            // $mail->addAddress('janhvi.22311825@viit.ac.in', 'SASTE JANHVI PRAMOD');
            // $mail->addAddress('huzaifa.22311872@viit.ac.in', 'HUZAIFA TAHER GHADIYALI');
        }



        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Demo No Reply';

        // Replace placeholders in the template with actual values
        $message = str_replace(['{{meeting_link}}', '{{date}}', '{{time}}'], [$meeting_link, htmlspecialchars($date), htmlspecialchars($time)], $message);

        $mail->Body = $message;

        if ($mail->send()) {
            $_SESSION['status'] = 'Meeting Scheduled Successfully...';
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
    header("Location: homepageforteacher.php");
    exit;
}
