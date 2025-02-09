<?php
require 'connect.php';
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Complaint Status Pannel!</title>
  </head>
  <body>
    <div class="container mt-4">
        <?php
        include 'message.php';
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Complaint Box
                            <a href="homepageforstudent.php" class="btn btn-primary float-end" >Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>DATE</th>
                                    <th>EMAIL</th>
                                    <th>COMPLAINT ID</th>
                                    <th>COMPLAINT TYPE</th>
                                    <th>COMPLAINT</th>
                                    <th>STATUS</th>
                                    <th>FEEDBACK</th>
                                <?php
                                if(isset($_GET['email'])){
                                    $email = $_GET['email'];
                                    $query = "SELECT * FROM complaintbox WHERE email ='$email'" ;
                                    $query_run = mysqli_query($con, $query);
                                    if(mysqli_num_rows($query_run) > 0) {
                                        $row = mysqli_fetch_array($query_run);
                                        if($row["feedback"] == 'NOT GIVEN') {
                                        ?>
                                        
                                        <th>SAVE</th>
                                        <?php
                                    }
                                }
                                }
                                ?>
                                    <!-- <th>COURSE</th> -->
                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                        if (isset($_GET['email'])) {
                                $email = $_GET['email'];
                                $query = "SELECT * FROM complaintbox WHERE email ='$email'" ;
                                $query_run = mysqli_query($con, $query);
                                
                                if(mysqli_num_rows($query_run) > 0) {
                                
                                    foreach($query_run as $row) {
                                        ?>
                                        <tr>
                                        <td><?= $row['date']; ?></td>
                                        <td><?= $row['email']; ?></td>
                                        <td><?= $row['id']; ?></td>
                                        <td><?= $row['complaint_type']; ?></td>
                                        <td><?= $row['complaint']; ?></td>
                                        <td><?= $row['status']; ?></td>
                                        <td><?php
                                        if($row['feedback'] == 'NOT GIVEN') {
                                            ?>
                                            <form action="complaintback.php" method="post">
                            <div class="mb-3">
                                <label for="">FeedBack</label>
                                <input type="text" class="form-control" name="feedback">
                            </div></td>
                            <td>
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit" name="save_feedback" value="<?=$row['id']?>" >
                                    Save FeedBack
                                </button>
                            </div>
                            </form>
                            </td>

                                        
                                            <?php
                                        }else{
                                            ?>
                            <div class="mb-3">
                                
                                <p><?=$row['feedback']?></p>
                            </div></td>
                            <td>
                            <div class="mb-3">
                                <button class="btn btn-success btn-sm-10 " type="#" name="save_feedback" value="<?=$row['id']?>" >
                                 &#10003;
                                </button>
                            </div>
                        
                            </td>

                                        
                                            <?php
                                        }
                                        ?>


                                        <!-- <td>
                                        
                                            <a href="complaint-edit.php?id=<?= $row['id'];?> " class="btn btn-success btn-sm" >TAKE ACTION</a>
                                            
                                        </td> -->
                                        </tr>

                                        <?php
                                    }
                        
                                }else{
                                    echo 'No Record Found';
                                }
                            }

                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

