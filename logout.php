<?php
    //logout
    session_start();
    session_destroy();
    // arahkan ke halaman login.php 
    header("location: index.php");
?>