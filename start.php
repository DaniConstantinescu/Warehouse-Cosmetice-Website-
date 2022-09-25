<?php

    session_start();
    $_SESSION['error'] = '-1';

    header("location:Files/loader.php"); 
    exit();

?>