<?php

if(isset($_POST["submit"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrep = $_POST["pwdrep"];
   
    require_once 'dbh.inc.php';
    require_once 'func.inc.php';

    if(emptyInputSignup($name,$email,$uid,$pwd,$pwdrep) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();

    }
    if(invalidUid($uid) !== false){
        header("location: ../signup.php?error=emptyUid");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location: ../signup.php?error=emptyEmail");
        exit();
    }
    if(pwdMatch($pwd,$pwdrep) !== false){
        header("location: ../signup.php?error=passworddnotmatch");
        exit();
    }
    // if(uidExists($conn,$uid,$email) !== false){
    //     header("location: ../signup.php?error=stmtfaild");
    //     exit();
    // }

    createUser($conn,$name,$email,$uid,$pwd);

     }
    else{
        header("location: ../signup.php");
        echo "hellllllllllllllllllllllll";
        exit();
    }




    ?>