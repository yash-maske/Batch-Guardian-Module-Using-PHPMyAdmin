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
    <title>Complaint Management Panel</title>
</head>
<body>
    <div class="container mt-4">
        <?php include 'message.php'; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Complaint Box
                            <a href="homepageforteacher.php" class="btn btn-primary float-end">Back</a>
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = 'SELECT * FROM complaintbox';
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0) {
                                    foreach($query_run as $row) {
                                        // Determine button style and text based on complaint_type
                                        $buttonClass = 'btn btn-warning'; // Default button class
                                        $buttonText = 'TAKE ACTION'; // Default button text

                                        // Change button style and text based on the condition
                                        if ($row['status'] === 'No Update') {
                                            $buttonClass = 'btn btn-danger';
                                            $buttonText = 'TAKE ACTION';
                                        } else if($row['feedback']!='NOT GIVEN'){
                                            $buttonClass = 'btn  btn-success';
                                            $buttonText = 'REVIEW FEEDBACK';
                                        }else{
                                            $buttonClass = 'btn  btn-info';
                                            $buttonText = 'SOLVED';
                                        }

                                        ?>
                                        <tr>
                                            <td><?= $row['date']; ?></td>
                                            <td><?= $row['email']; ?></td>
                                            <td><?= $row['id']; ?></td>
                                            <td><?= $row['complaint_type']; ?></td>
                                            <td><?= $row['complaint']; ?></td>
                                            <td>
                                                <a href="complaint-edit.php?id=<?= $row['id']; ?>" class="<?= $buttonClass ?> btn-sm"><?= $buttonText ?></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    echo '<tr><td colspan="6">No Record Found</td></tr>';
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
