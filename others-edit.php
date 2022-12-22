<?php
//include('security.php');

require 'dbcon.php';

include('includes/header1.php');
include('includes/navbar.php');  
?>

            <div class="container-fluid">

                <!-- Database Others (Order) Table  -->

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h4 class="m-2 font-weight-bold text-primary">Edit Other (Orders)</h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $row = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM addothers";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $row = mysqli_fetch_array($query_run);
                                ?>

                        <form action="others-code.php" method="POST" class="row g-3 needs-validation" novalidate>

                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" class="form-control" required>
                    

                            <hr class="horizontal dark">
                            <div class="col-md-4">
                                <label for="validationDefault01" class="form-label">First name</label>
                                <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>" class="form-control" id="validationDefault01" required>
                            </div>
                            <div class="col-md-4">
                                <label for="validationDefault02" class="form-label">Last name</label>
                                <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>" class="form-control" id="validationDefault02" required>
                            </div>
                            <div class="col-md-4">
                                <label for="validationDefaultEmail" class="form-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="inputGroupPrepend2"><ion-icon name="mail"></ion-icon></span>
                                    <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control" id="validationDefaultEmail"  aria-describedby="inputGroupPrepend2" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationDefault04" class="form-label">Delivery Date / Pick-Up Date</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="inputGroupPrepend2"><ion-icon name="today"></ion-icon></span>
                                    <input type="date" name="deldate" value="<?php echo $row['deldate']; ?>" class="form-control" id="validationDefault04"  aria-describedby="inputGroupPrepend2" required>
                                </div>
                            </div>
                            <hr class="horizontal dark">
                            <div class="col-md-4">
                                <label for="validationDefault05" class="form-label">Delivery Time / Pick-Up Time</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="inputGroupPrepend2"><ion-icon name="stopwatch"></ion-icon></span>
                                    <input type="time" name="deltime" value="<?php echo $row['deltime']; ?>" class="form-control" id="validationDefault05"  aria-describedby="inputGroupPrepend2" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationDefaultNumber" class="form-label">Number</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="inputGroupPrepend2"><ion-icon name="call"></ion-icon></span>
                                    <input type="text" name="number" value="<?php echo $row['number']; ?>" class="form-control" id="validationDefaultNumber"  aria-describedby="inputGroupPrepend2" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationDefault09" class="form-label">Delivery Address (if applicable)</label>
                                <input type="text" name="address" value="<?php echo $row['address']; ?>" class="form-control" id="validationDefault09" required>
                            </div>
                            <div class="form-group col-md-12">
                            <label for="validationDefault09" class="form-label">Your Order:</label>
                            <select name="addons" class="form-control" id="inputGroupSelect01" value="<?php echo $row['orders']; ?>" >
                                <option selected>Choose...</option>
                                <option value="1">Balloon Bouquet - Customized</option>
                                <option value="2">Smash It With Love</option>
                                <option value="3">Promo Package</option>
                            </select>
                            </div>
                            <div class="form-group col-md-12">
                            <label for="validationDefault09" class="form-label">Add Ons:</label>
                            <select name="addons" class="form-control" id="inputGroupSelect01" value="<?php echo $row['addons']; ?>">
                                <option selected>Choose...</option>
                                <option value="1">Additional Letter (5 Letter/₱10)</option>
                                <option value="2">With Photo (₱50)</option>
                                <option value="3">5pcs Fererro (₱125)</option>
                                <option value="4">3pcs Fererro (₱85)</option>
                                <option value="5">50g Toblerone (₱50)</option>
                                <option value="6">None</option>
                            </select>
                            </div>
                            <a href="others.php" class="btn btn-danger"> Cancel </a>
                            <button type="submit" name="updateothers" class="btn btn-primary"> Update Orders </button>
                        </form>

                        
                            
                    </div>
                </div>
                
                        


            </div>
            <!-- /.container-fluid -->
            
                        <?php
                    }
                    else
                    {
                        echo "<h4>No Such ID Found</h4>";
                    }
                }
                ?>


            


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>

