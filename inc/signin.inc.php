<?php

if(isset($_POST["submit"])){

    $name = $_POST['uid'];
    $pwd = $_POST['pwd'];

    require_once 'dbh.inc.php';
    require_once 'func.inc.php';

    if(emptyInputSignin($name,$pwd,) !== false){
        header("location: ../signin.php?error=emptylogin");
        exit();
    }
    
    loginUser($conn,$name,$pwd);
}

else{
    header("location: ../signin.php");
}