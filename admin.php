<?php
//include('security.php');

include('includes/header3.php');
include('includes/navbar.php');  
?>


                <!-- Begin Page Content -->
                <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Admin</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="admin-code.php" method="POST">

                                <div class="modal-body">
                                    
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="registerbtn" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
                                    <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>   
                                </div>   
                            </form>  
                        </div>
                    </div>
                </div>

                <div class="container-fluid">

                <?php include('message2.php'); ?>

                <!-- Database Staff Table  -->

                <?php
                    $connection = mysqli_connect("localhost","root","","zcupcakes-admin1");

                    $query = "SELECT * FROM addadmin";
                    $query_run = mysqli_query($connection, $query);
                ?>

                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-2 font-weight-bold text-primary">Admin
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                                        +
                                    </button>
                            </h4>
                        </div>
                        <div class="card-body">

                        <?php
                        if(isset($_SESSION['success']) && $_SESSION['success'] !='')
                        {
                            echo '<h2 class="bg-primary text-white"> '.$_SESSION['success']. '</h2>';
                            unset($_SESSION['success']);
                        }

                        if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                        {
                            echo '<h2 class="bg-danger text-white"> '.$_SESSION['status']. '</h2>';
                            unset($_SESSION['status']);
                        }
                        
                        ?>

                        <div class="table-responsive">
                        
                        <?php
                            $connection = mysqli_connect("localhost","root","","zcupcakes-admin1");

                            $query = "SELECT * FROM addadmin";
                            $query_run = mysqli_query($connection, $query);
                        ?>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                    <tbody>
                        
                        <?php
                        $no = 1;

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                        <tr>
                            <td><?php echo $no ; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td>
                                <form action="admin-edit.php" method="post">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="edit_btn" class="btn btn-success btn-icon-split">
                                    <span class="icon text-white-100">
                                        <i class="fas fa-pen-square"></i>
                                    </span>
                                    <span class="text">Edit</span></button>
                                </form>
                            </td>
                            <td>
                                <form action="admin-code.php" method="post">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="delete_btn" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-100">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span></button>
                                </form>
                            </td>
                        </tr>
                    <?php
                    $no++ ;
                        }

                    }
                    else {
                        echo "No Record Found";
                    }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>

