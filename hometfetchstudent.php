
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Data From Student Databases</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Student Database</h2>
                        <div class="card-body">
                            <table  class="table table-bordered text-center">
                                <tr class="bg-dark text-white" >
                                    <td>Username</td>
                                    <td>Password</td>
                                    <td>Edit</td>
                                    <td>Delete</td>
                                </tr>

                                <tr>
                                    <?php
                                    
                                    while( $row = mysqli_fetch_assoc($result) ) {
                                        ?>
                                        <td><?php echo $row['user_name'];?></td>
                                        <td><?php echo $row['pass_word'];?></td>
                                        <td><a href="#" class="btn btn-primary">Edit</a></td>
                                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                                
                                
                                    </tr>    
                                    <?php    
                                    }
                                    ?>

                                  
                                


                            </table>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>