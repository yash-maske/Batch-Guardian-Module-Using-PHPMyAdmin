<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- <title>Hello, world!</title> -->
</head>

<body>
    <!-- <h1>Hello, world!</h1> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
<?php



$login = 0;
$invalid = 0;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include 'connect.php';
    // include 'bootstrap.cdn';

    $username = $_POST['user_name'];
    $password = $_POST['pass_word'];
    
    setcookie("users", $username, time() + 3600);

    $sql = "select * from registration where user_name = '$username' and pass_word = '$password'";
    $result = mysqli_query($con, $sql);


    if (($result)) {

        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $login = 1;

            echo '<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Log In Sucessfull !</h4>
  <hr>

</div>';
            session_start();
            $_SESSION['user_name'] = $username;
            // $_SESSION['pass_word'] = $password;
            header('location:homepageforstudent.php');
           
        } 
        else {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Invalid Creditentials !</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
$invalid = 1;


        }
    }
}
?>