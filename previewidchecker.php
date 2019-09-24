<?php
    if (isset($_POST['pid'])){
        $email = $_POST['email'];
        $pid = $_POST['pid'];


    }else{
        header("Location: ../newLandingPage");
    }