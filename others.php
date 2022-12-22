<?php
//include('security.php');
session_start();
require 'dbcon.php';

include('includes/header1.php');
include('includes/navbar.php');  
?>


                <!-- Begin Page Content -->
                <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Others</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="contact-quote-code.php" method="POST">

                                <div class="modal-body">
                                    
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="firstname" class="form-control" placeholder="First Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="lastname" class="form-control" placeholder="Last Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Delivery Date / Pick-up Date</label>
                                        <input type="date" name="deldate" class="form-control" placeholder="Select Date" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Delivery Time / Pick-up Time</label>
                                        <input type="time" name="deltime" class="form-control" placeholder="Select Time" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Number</label>
                                        <input type="text" name="number" class="form-control" placeholder="Number" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control" placeholder="Address" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Order</label>
                                        <select name="orders" class="form-control" id="inputGroupSelect01">
                                            <option selected>Choose...</option>
                                            <option value="1">Balloon Bouquet - Customized</option>
                                            <option value="2">Smash It With Love</option>
                                            <option value="3">Promo Package</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Add ons:</label>
                                        <select name="addons" class="form-control" id="inputGroupSelect01">
                                            <option selected>Choose...</option>
                                            <option value="1">Additional Letter (5 Letter/₱10)</option>
                                            <option value="2">With Photo (₱50)</option>
                                            <option value="3">5pcs Fererro (₱125)</option>
                                            <option value="4">3pcs Fererro (₱85)</option>
                                            <option value="5">50g Toblerone (₱50)</option>
                                            <option value="6">None</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="othersbtn" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
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

                    $query = "SELECT * FROM addothers";
                    $query_run = mysqli_query($connection, $query);
                ?>

                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-2 font-weight-bold text-primary">Others
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                                        +
                                    </button>
                            </h4>
                        </div>
                        <div class="card-body">


                        <div class="table-responsive">
                        
                        <?php
                            $connection = mysqli_connect("localhost","root","","zcupcakes-admin1");

                            $query = "SELECT * FROM addothers";
                            $query_run = mysqli_query($connection, $query);
                        ?>
                            <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0"> 
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email Address</th>
                                    <th>View</th>
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
                            <td><?php echo $row['firstname']; ?></td>
                            <td><?php echo $row['lastname']; ?></td>
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
                                            <h5 class="modal-title" id="exampleModalLabel">Full Details of Order</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-2 row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>ID:</strong></label>
                                                <div class="col-sm-4">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $row['id']; ?>">
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Invoice Number:</strong></label>
                                                <div class="col-sm-4">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $no ; ?>">
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>First Name:</strong></label>
                                                <div class="col-sm-4">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row['firstname']; ?>">
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Lastname:</strong></label>
                                                <div class="col-sm-4">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row['lastname']; ?>">
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Email:</strong></label>
                                                <div class="col-sm-9">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row['email']; ?>">
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Delivery Date / Pick-up Date:</strong></label>
                                                <div class="col-sm-4">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row['deldate']; ?>">
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Delivery Time / Pick-up Time:</strong></label>
                                                <div class="col-sm-4">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row['deltime']; ?>">
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Number:</strong></label>
                                                <div class="col-sm-4">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row['number']; ?>">
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Address:</strong></label>
                                                <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row['address']; ?>">
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Order:</strong></label>
                                                <div class="col-sm-4">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row['orders']; ?>">
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Add Ons:</strong></label>
                                                <div class="col-sm-4">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row['addons']; ?>">
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
                                <a href="others-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-icon-split">
                                    <button type="submit" name="edit_btn1" class="btn btn-success btn-icon-split">
                                    <span class="icon text-white-100">
                                        <i class="fas fa-pen-square"></i>
                                    </span>
                                    <span class="text">Edit</span></button>
                                </a>
                            </td>
                            <td>
                                <form action="others-code.php" method="POST" class="">
                                    <input type="hidden" name="delete_others" class="btn btn-danger btn-icon-split">
                                    <button type="submit" name="delete_others" value="<?php echo $row['id']; ?>" class="btn btn-danger btn-icon-split">
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

