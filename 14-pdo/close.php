<?php
    include 'config/app.php';

    unset($_SESSION['tid'],$_SESSION['tid'],$_SESSION['tid']);

    if(session_destroy()){
        header("location: index.php");
    }