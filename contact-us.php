<?php
//include('security.php');

include('includes/header3.php');
include('includes/navbar.php');  
?>


                <!-- Begin Page Content -->

                <div class="container-fluid">

                <!-- Database Staff Table  -->

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h4 class="m-2 font-weight-bold text-primary">Conctact Us (Message) </h4>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                        
                        <?php
                            $connection = mysqli_connect("localhost","root","","zcupcakes-admin1");

                            $query = "SELECT * FROM contact";
                            $query_run = mysqli_query($connection, $query);
                        ?>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>View</th>
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
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td>
                            <button type="button" class="btn btn-primary btn-icon-split" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <span class="icon text-white-100">
                                    <i class="fas fa-search"></i>
                                </span>
                                <span class="text">View</span></button>

                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl rounded">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Full Details of Message</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-2 row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>ID:</strong></label>
                                                <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row['id']; ?>">
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Name:</strong></label>
                                                <div class="col-sm-4">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row['name']; ?>">
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Email:</strong></label>
                                                <div class="col-sm-9">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row['email']; ?>">
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Subject:</strong></label>
                                                <div class="col-sm-4">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row['subject']; ?>">
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Message:</strong></label>
                                                <div class="col-sm-4">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row['message']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <form action="contact-us-code.php" method="post">
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

