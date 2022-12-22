<?php
include('security.php');

include('includes/header.php');
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
                            <form action="code.php" method="POST">

                                <div class="modal-body">
                                    
                                    <div class="form-group">
                                        <label>Role</label>
                                        <input type="text" name="role" class="form-control" placeholder="Role" required>
                                    </div>
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="first" name="firstname" class="form-control" placeholder="First Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="last" name="lastname" class="form-control" placeholder="Last Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="phone" name="phonenumber" class="form-control" placeholder="Phone Number" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" name="emailaddress" class="form-control" placeholder="Email Address" required>
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

                <!-- Database Staff Table  -->

                <?php
                    $connection = mysqli_connect("localhost","root","","zcupcakes-admin1");

                    $query = "SELECT * FROM addadmin";
                    $query_run = mysqli_query($connection, $query);
                ?>

                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-2 font-weight-bold text-primary">Admin Profile
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                                        +
                                    </button>
                            </h4>
                        </div>
                        <div class="card-body">

                        <?php
                        if(isset($_SESSION['success']) && $_SESSION['success'] !='')
                        {
                            echo '<h2> '.$_SESSION['success']. '</h2>';
                            unset($_SESSION['success']);
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
                                    <th>Role</th>
                                    <th>First Name</th>
                                    <th>last Name</th>
                                    <th>Phone Number</th>
                                    <th>Email Address</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                    <tbody>
                        
                    <?php
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                            ?>
                        <tr>
                            <td><?php  echo $row['id']; ?></td>
                            <td><?php  echo $row['firstname']; ?></td>
                            <td><?php  echo $row['lastname']; ?></td>
                            <td><?php  echo $row['phone']; ?></td>
                            <td><?php  echo $row['email']; ?></td>
                            <td>
                                <form action="admin-edit.php" method="post">
                                    <input type="text" name="edit_id" value="<?php  echo $row['id']; ?>">
                                    <button type="submit" name="edit_btn" class="btn btn-success">Edit</button>
                                </form>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        <?php
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

