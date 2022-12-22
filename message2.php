<!-- (ADMIN) Delete Admin , Order and Other Order -->

<?php
    if(isset($_SESSION['message'])) :
?>

    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <strong>Hey! </strong> <?= $_SESSION['message']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

<?php
    unset($_SESSION['message']);
    endif;
?>





<!-- (ADMIN) Update Admin , Order and Other Order -->

<?php
    if(isset($_SESSION['message2'])) :
?>

    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> <?= $_SESSION['message2']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

<?php
    unset($_SESSION['message2']);
    endif;
?>




<!-- (ADMIN) Add Admin , Order and Other Order -->

<?php
    if(isset($_SESSION['message3'])) :
?>

    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> <?= $_SESSION['message3']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

<?php
    unset($_SESSION['message3']);
    endif;
?>




<!-- (ADMIN) Save Admin , Order and Other Order -->

<?php
    if(isset($_SESSION['message4'])) :
?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> <?= $_SESSION['message4']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

<?php
    unset($_SESSION['message4']);
    endif;
?>



<!-- (ADMIN) Delete Contact Us (Message)  -->

<?php
    if(isset($_SESSION['message4'])) :
?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> <?= $_SESSION['message5']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

<?php
    unset($_SESSION['message4']);
    endif;
?>