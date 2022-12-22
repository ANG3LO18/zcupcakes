<?php
//include('security.php');

include('includes/header3.php');
include('includes/navbar.php');  
?>


                <!-- Database Staff Table  -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h4 class="m-2 font-weight-bold text-primary"> Edit Store Profile</h4>
                    </div>
                    <div class="card-body">

                    <?php

                    $connection = mysqli_connect('localhost','root','','zcupcakes-admin1');

                    if(isset($_POST['edit_btn']))
                    {
                        $id = $_POST['edit_id'];
                        
                        $query = "SELECT * FROM addstore WHERE id='$id' ";
                        $query_run = mysqli_query($connection, $query);

                        foreach($query_run as $row)
                        {
                    ?>
                    <form action="store-code.php" method="POST">

                        <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >
                        
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="edit_password" value="<?php echo $row['password'] ?>" class="form-control" placeholder="Password" required>
                        </div>

                            <a href="store.php" class="btn btn-danger"> Cancel </a>
                            <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

                    </form>
                        <?php
                        }
                    }  
                        ?>

                    </div>
                </div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>