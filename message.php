<!-- Order Submit Message -->

<?php
    if(isset($_SESSION['message'])) :
?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey! </strong> <?= $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php
    unset($_SESSION['message']);
    endif;
?>






<!-- Invoice Number Message -->

<?php
    if(isset($_SESSION['message2'])) :
?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Hi! </strong> <?= $_SESSION['message2']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php
    unset($_SESSION['message2']);
    endif;
?>







<!-- Contact Us Submit Message -->

<?php
    if(isset($_SESSION['message3'])) :
?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey! </strong> <?= $_SESSION['message3']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php
    unset($_SESSION['message3']);
    endif;
?>