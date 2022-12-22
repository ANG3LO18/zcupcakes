<?php
include('includes/header.php');
include('includes/navbar.php');

?>



                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
                    </div>

                    <!-- Table -->
                    <div class="card shadow mb-4 col-xs-12 col-md-12">
                    <div class="card-body">
            

                    <form role="form" method="post" action="profile-edit.php">
                    <input type="hidden" name="id">

                    <div class="form-group row text-left text-primary">
                        <div class="col-sm-3" style="padding-top: 5px;">
                        First Name:
                        </div>
                        <div class="col-sm-9">
                        <input class="form-control" placeholder="First Name" name="firstname">
                        </div>
                    </div>
                    <div class="form-group row text-left text-primary">
                        <div class="col-sm-3" style="padding-top: 5px;">
                        Last Name:
                        </div>
                        <div class="col-sm-9">
                        <input class="form-control" placeholder="Last Name" name="lastname">
                        </div>
                    </div>
                    <div class="form-group row text-left text-primary">
                        <div class="col-sm-3" style="padding-top: 5px;">
                        Email:
                        </div>
                        <div class="col-sm-9">
                        <input class="form-control" placeholder="Email" name="email">
                        </div>
                    </div>
                    <div class="form-group row text-left text-primary">
                        <div class="col-sm-3" style="padding-top: 5px;">
                        Contact #:
                        </div>
                        <div class="col-sm-9">
                        <input class="form-control" placeholder="Contact #" name="phone">
                        </div>
                    </div>
                    <div class="form-group row text-left text-primary">
                        <div class="col-sm-3" style="padding-top: 5px;">
                        Address:
                        </div>
                        <div class="col-sm-9">
                        <input class="form-control" placeholder="Address" name="city">
                        </div>
                    </div>
                    <hr>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-edit fa-fw"></i>Update</button>    
                    </form>  
                    </div>
                </div>        
                

                </div>


            </div>
            <!-- End of Main Content -->

            


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>

