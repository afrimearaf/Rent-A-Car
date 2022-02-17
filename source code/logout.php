<?php session_start(); ?>
<?php
    $_SESSION['user_id'] = null;
    $_SESSION['user_name'] = null;
    $_SESSION['firstname'] = null;
    $_SESSION['lastname'] = null;
    $_SESSION['position'] = null;
    $_SESSION['email'] = null;
    $_SESSION['phone'] = null;
    $_SESSION['mid'] = null;
    $_SESSION['address'] = null;
    $_SESSION['password'] = null;
    $_SESSION['status'] = null;

    header("Location: ./index.php");

?>