<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z Cupcakes - Free Quote (Others)</title>

    <!-- css file -->
    <link rel="stylesheet" href="css/style2.css">

    <!-- checkout css header file -->
    <link rel="stylesheet" href="css/checkout.css">

    <!-- css header file -->
    <link rel="stylesheet" href="css/online-payment.css">

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- boostraph cdn font awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- boostraph file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<!-- preloader starts -->



<!-- preloader ends -->

<!-- header section starts -->

<section class="header5">
    <nav class="navbar navbar-light fixed-top" style="background-color: #fef5ff;">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">Z CupCakes</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header" style="background-color: #fef5ff;">
              <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Z CupCakes</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body" style="background-color: #fef5ff;">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery2.html">Cakes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="order-here.html">Order Here</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="online-payment.html">Pay Here</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faq.html">FAQ</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="gallery2.html" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                    <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                      <li><a class="dropdown-item" href="birthday.html">Birthday Cake</a></li>
                      <li><a class="dropdown-item" href="wedding.html">Wedding Cake</a></li>
                      <li><a class="dropdown-item" href="debut.html">Debut Cake</a></li>
                      <li><a class="dropdown-item" href="money.html">Money Cake</a></li>
                      <li><a class="dropdown-item" href="character.html">Character Cake</a></li>
                      <li><a class="dropdown-item" href="cupcake.html">CupCake</a></li>
                      <li><a class="dropdown-item" href="others.html">Others</a></li>
                    </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </nav>

<div class="text-box5">
    <h1>Order Here for Other Orders</h1>

</div>
</section>

<!-- header section ends -->

<!-- order section starts -->

<div class="form">

    <?php include('message.php'); ?>

    <form action="others2-code.php" method="POST" enctype="multipart/form-data" class="row g-3" action="">

        <div class="col-md-4">
            <label for="validationDefault01" class="form-label">First name</label>
            <input type="text" name="firstname" class="form-control" id="validationDefault01" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Last name</label>
            <input type="text" name="lastname" class="form-control" id="validationDefault02" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefaultEmail" class="form-label">Email</label>
            <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend2"><ion-icon name="mail"></ion-icon></span>
                <input type="text" name="email" class="form-control" id="validationDefaultEmail"  aria-describedby="inputGroupPrepend2" required>
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationDefault04" class="form-label">Delivery Date / Pick-Up Date</label>
            <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend2"><ion-icon name="today"></ion-icon></span>
                <input type="date" name="deldate" class="form-control" id="validationDefault04"  aria-describedby="inputGroupPrepend2" required>
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationDefault05" class="form-label">Delivery Time / Pick-Up Time</label>
            <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend2"><ion-icon name="stopwatch"></ion-icon></span>
                <input type="time" name="deltime" class="form-control" id="validationDefault05"  aria-describedby="inputGroupPrepend2" required>
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationDefaultNumber" class="form-label">Number</label>
            <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend2"><ion-icon name="call"></ion-icon></span>
                <input type="text" name="number" class="form-control" id="validationDefaultNumber"  aria-describedby="inputGroupPrepend2" required>
            </div>
        </div>
        <div class="col-md-13">
            <label for="validationDefault09" class="form-label">Delivery Address (if applicable)</label>
            <input type="text" name="address" class="form-control" id="validationDefault09" required>
        </div>
        <div class="input-group mb-13">
            <label class="input-group-text" for="inputGroupSelect01">Your Order</label>
            <select name="orders" class="form-select" id="inputGroupSelect01">
              <option selected>Choose...</option>
              <option value="1">Balloon Bouquet - Customized</option>
              <option value="2">Smash It With Love</option>
              <option value="3">Promo Package</option>
            </select>
        </div>
        <div class="input-group mb-13">
            <label class="input-group-text" for="inputGroupSelect01">Add ons:</label>
            <select name="addons" class="form-select" id="inputGroupSelect01">
              <option selected>Choose...</option>
              <option value="1">Additional Letter (5 Letter/₱10)</option>
              <option value="2">With Photo (₱50)</option>
              <option value="3">5pcs Fererro (₱125)</option>
              <option value="4">3pcs Fererro (₱85)</option>
              <option value="5">50g Toblerone (₱50)</option>
              <option value="6">None</option>
            </select>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit" name="others_quote">Submit</button>
        </div>

    </form>
</div>

<!-- online payment section ends -->

<!-- footer section starts -->

<section class="footer">
    <h4>About Z Cupcakes</h4>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate,<br>libero. Aliquam ab eveniet debitis tenetur vitae sapiente,</p>
    <div class="social-icon">
        <li><a href="https://www.facebook.com/zcupcakes2013/"><ion-icon name="logo-facebook"></ion-icon></a></li>
        <li><a href="https://www.facebook.com/messages/t/379572479170636"><ion-icon name="chatbubble-ellipses-outline"></ion-icon></a></li>
    </div>
    <div class="nav-links2">
            <li><a href="index.html">Home</a></li>
            <li><a href="gallery2.html">Cakes</a></li>
            <li><a href="contact.php">Contact</a></li>
    </div>
    <p> © Z Cupcakes <i class="fas fa-heart"></i> | All Rights Reserved</p>
</section>


<!-- footer section ends -->















<!-- js file link  -->
<script src="js/script.js"></script>

<!-- preloader js file link  -->
<script src="js/preloader.js"></script>

<!-- bootstrap js file link -->
<script src="boot-js/bootstrap.js"></script>

<!-- icons file link  -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!-- bootstrap file link  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

</body>
</html>