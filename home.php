<?php
session_start();
if (!isset($_SESSION["user_name"]) && $_SESSION["pass_word"]){
  header("location:loginstudent.html");
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Welcome </title>
  </head>
  <body>
 <h1 class="text-center text-warning mt-5">Welcome
  <?php
  echo $_SESSION["user_name"];
  ?>
 </h1>

 <div class="container">
  <a href="loginstudent.html"  class="btn btn-primary mt-5" >Log Out</a>
 </div>
  </body>
</html>