<?php

if(isset($_POST["login"])){
    
    $username= $_POST["uid"];
    $pwd= $_POST["pwd"];

    require_once 'dbcorp.php';
    require_once 'functions.php';

    if(emptyInputLogin($username, $pwd) !== false){
        header("location: ../frontend.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);
}

else{
    header("location: ../frontend.php?error=emptyinput");
    exit(); 
}