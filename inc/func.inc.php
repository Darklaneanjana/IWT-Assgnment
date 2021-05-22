<?php
function emptyInputSignup($name,$email,$uid,$pwd,$pwdrep){
    $result;
    if(empty($name)||empty($email)||empty($uid)||empty($pwd)||empty($pwdrep)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function invalidUid($uid){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $uid )){

        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){

        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd,$pwdrep){
    $result;
    if($pwd !== $pwdrep){

        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function uidExists($conn,$uid,$email){
    $sql = mysqli_query($conn,"select * from users where uid = '" . $uid . "' or email = '" . $email . "' ");
    $row = mysqli_fetch_array($sql);
    if($row){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }
    mysqli_close($conn);
}

$Hpwd = password_hash($pwd, PASSWORD_DEFAULT);

function createUser($conn,$name,$email,$uid,$Hpwd){
  
    $sql = "insert into users  (name,email,uid,userPsw) value('hello','anjanadarklane@gmail.com','Darklane','1234');";
    // 'hello','hello@gmail.com','hello,'1234'
    mysqli_query($conn, $sql);
    echo $name;
    // if(!mysqli_query($conn, $sql)){
    //     header("location: ../signup.php?error=none");
    // }else{
    //     header("location: ../signup.php?error=stmtfailed");
    //     exit();
    // }
  
    mysqli_close($conn);
    exit();
}


function emptyInputSignin($name,$pwd){
    $result;
    if(empty($name)||empty($pwd)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn,$name,$pwd){
    $uidExixst = uidExists($conn,$name,$name);
    if ($uidExixst==false){
        header("location:../signin.php?error=wronglogin");
        exit();
    }
    $Hpwd = $uidExixst["userPsw"];
    if($pwd !== $Hpwd){
        header("location:../signin.php?error=wrongPassword");
        exit();
    }
    else{
        session_start();
        $_SESSION["userID"] = $uidExixst["uid"];
        $_SESSION["name"] = $uidExixst["name"];
        header("location:../index.php");
        exit();
    }

}