<?php
//include('security.php');

require 'dbcon.php';

include('includes/header.php');
include('includes/navbar.php');  
?>

                <div class="container-fluid">

                <!-- Database Others (Order) Table  -->

                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-2 font-weight-bold text-primary">Edit Orders</h4>
                        </div>
                        <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $row = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM addorders";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $row = mysqli_fetch_array($query_run);
                                ?>

                    <form action="orders-code.php" method="POST" class="row g-3 needs-validation" novalidate>

                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" class="form-control" required>

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
                        <div class="col-md-6">
                            <label for="validationDefault06" class="form-label">Type of Event</label>
                            <input type="text" name="tevent" value="<?php echo $row['tevent']; ?>" class="form-control" id="validationDefault06" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault07" class="form-label">Number of Guests</label>
                            <input type="text" name="numguest" value="<?php echo $row['numguest']; ?>" class="form-control" id="validationDefault07" required>
                        </div>
                        <div class="col-md-12">
                            <label for="validationDefault09" class="form-label">Incriptions</label>
                            <input type="text" name="incript" value="<?php echo $row['incript']; ?>" class="form-control" id="validationDefault09" required>
                        </div>
                        <div class="col-md-12">
                            <label for="validationDefault09" class="form-label">Delivery Address (if applicable)</label>
                            <input type="text" name="address" value="<?php echo $row['address']; ?>" class="form-control" id="validationDefault09" required>
                        </div>
                        <div class="col-md-12">
                            <label for="validationDefault10" class="form-label">In a few words, please describe what you are looking for (Theme, Color, etc or any special instructions you may have)</label>
                            <input type="text" name="descrip" value="<?php echo $row['descrip']; ?>" class="form-control" id="validationDefault10" required>
                        </div>
                        <div class="form-group col-md-12">
                        <label for="validationDefault09" class="form-label">Select Number of Tiers:</label>
                        <select name="addons" class="form-control" id="inputGroupSelect01" value="<?php echo $row['tiers']; ?>" >
                            <option selected>Choose...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        </div>
                        <div class="col-md-12">
                            <label for="validationDefault10" class="form-label">UPLOAD A PICTURE YOU WOULD LIKE ME TO USE FOR INSPIRATION</label>
                            <input type="file" name="pic" value="<?php echo $row['pic']; ?>" class="form-control" id="validationDefault10" required>
                        </div>
                        <div class="col-md-12">
                            <label for="validationDefault10" class="form-label">Enter the Price for this Order</label>
                            <input type="text" name="descrip" value="" class="form-control" id="validationDefault10" required>
                        </div>
                        
                        <div class="col-md-12">
                            <br>
                            <a href="orders.php" class="btn btn-danger"> Cancel </a>
                            <button type="submit" name="updatebtn1" class="btn btn-primary"> Update </button> 
                        </div>
                        
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

