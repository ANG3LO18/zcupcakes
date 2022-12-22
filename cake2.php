<?php
include('security.php');

include('includes/header.php');
include('includes/navbar.php');  
?>


                <!-- Begin Page Content -->
                <div class="modal fade" id="facultyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Cakes</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="cake-code.php" method="POST">

                                <div class="modal-body">
                                    
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="faculty_name" class="form-control" placeholder="Tile" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Designation</label>
                                        <input type="text" name="faculty_designation" class="form-control" placeholder="Description" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="number" name="faculty_description" class="form-control" placeholder="Price" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Upload Image</label>
                                        <input type="file" name="faculty_image" id="faculty_image" class="form-control" required>   
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="save_faculty" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
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
                    $connection = mysqli_connect("localhost","root","","zcupcakes-admin");

                    $query = "SELECT * FROM addcakes";
                    $query_run = mysqli_query($connection, $query);
                ?>

                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-2 font-weight-bold text-primary">Cakes
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#facultyModal">
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
                            $connection = mysqli_connect("localhost","root","","zcupcakes-admin");

                            $query = "SELECT * FROM addcakes";
                            $query_run = mysqli_query($connection, $query);

                            if(mysqli_num_rows($query_run) > 0)

                        ?>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Description</th>
                                    <th>Images</th>
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
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['designation']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo '<img src="upload/'.$row['images'].'" width="100px;" height="100px;" alt="Image">' ?></td>
                            <td>
                                <form action="cake-edit.php" method="post">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="cake-code.php" method="post">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="faculty_delete_btn" class="btn btn-danger">Delete</button>
                                </form>
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

