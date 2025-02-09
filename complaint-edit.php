<?php
session_start();
require 'connect.php';
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Student Edit!</title>
</head>

<body>
    <div class="container mt-5">

        <?php include 'message.php'?>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Complaint Details
                            <a href="complaint-notification.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['id']))
                        {
                            $complaint_id =  $_GET['id'];
                            $query = "SELECT * FROM complaintbox WHERE id = '$complaint_id'";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0){
                                $complaint = mysqli_fetch_array($query_run);
                                
                                ?>



                        <form action="complaintback.php" method="post">
                            <input type="hidden" name="id" value="<?=$complaint['id'];?>" >
                            
                            <div class="mb-3">
                                <label for="">EMAIL</label>
                                
                                <p class="form-control"><?=$complaint['email']?></p>
                            </div>

                            <div class="mb-3">
                                <label for="">Complaint Id</label>
                                
                                <p class="form-control"><?=$complaint['id']?></p>
                            </div>

                            <div class="mb-3">
                                <label for="">Complaint Type</label>
                                <p class="form-control"><?=$complaint['complaint_type']?></p>
                            </div>

                            <div class="mb-3">
                                <label for="">Complaint Details</label>
                                <p class="form-control"><?=$complaint['complaint']?></p>
                            </div>

                            <div class="mb-3">
                                <label for="">Student FeedBack</label>
                                <p class="form-control"><?=$complaint['feedback']?></p>
                            </div>
                            <?php
                            if($complaint['status'] == 'No Update'){
                                ?>
                                <div class="mb-3">
                                <label for="">Action</label>
                                <input type="text" class="form-control" value="<?=$complaint['status']?>" name="status">
                            </div>
                                <?php
                            }else{
                                ?>
                                <div class="mb-3">
                                <label for="">Action</label>
                                <p class="form-control" ><?=$complaint['status']?></p>
                            </div>
                                <?php
                            }
                            ?>
                            
                            <?php
                            if($complaint['status']=='No Update'){
                                ?>
                                <div class="mb-3">
                                <button class="btn btn-primary" type="submit" name="update_complaint_status">
                                    Update The Status
                                </button>
                            </div>
                        </form>
                                <?php
                            }?>
                            
                            

                        <?php
                            }else{
                                echo"<h4>Something Went Wrong</h4>";
                            }
                            
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

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