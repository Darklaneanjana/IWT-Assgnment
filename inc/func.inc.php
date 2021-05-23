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


$Hpwd = password_hash($pwd, PASSWORD_DEFAULT);

function createUser($conn,$name,$email,$uid,$pwd){
  
    $sql = "insert into users  (name,email,uid,userPsw) value('" . $name. "','" . $email. "','" . $uid. "','" . $pwd. "');";
    if(mysqli_query($conn, $sql)){
        header("location: ../signup.php?error=none");
    }else{
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
  
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

    if( array_key_exists("uid", $uidExixst) ){
        $Hpwd = $uidExixst["userPsw"];
        if($pwd !== $Hpwd){
            header("location:../signin.php?error=wrongPassword");
            exit();
        }
        else{
            session_start();
            $_SESSION["userID"] = $uidExixst["uid"];
            $_SESSION["name"] = $uidExixst["name"];
            $_SESSION["type"] = "User";
            header("location:../index.php");
            exit();
        }   
    }

    else if( array_key_exists("devID", $uidExixst)){
        $Hpwd = $uidExixst["DevPsw"];
        if($pwd !== $Hpwd){
            header("location:../signin.php?error=wrongPassword");
            exit();
        }
        else{
            session_start();
            $_SESSION["userID"] = $uidExixst["devUID"];
            $_SESSION["name"] = $uidExixst["devName"];
            $_SESSION["type"] = "Dev";
            header("location:../devAccount.php");
            exit();
        }
    }

    elseif(array_key_exists("AdminID", $uidExixst)){
        $Hpwd = $uidExixst["aPsw"];
        if($pwd !== $Hpwd){
            header("location:../signin.php?error=wrongPassword");
            exit();
        }
        else{
            session_start();
            $_SESSION["userID"] = $uidExixst["AdminUID"];
            $_SESSION["name"] = $uidExixst["AdminName"];
            $_SESSION["type"] = "Admin";
            header("location:../Admin.php");
            exit();
        } 
    }

}

function uidExists($conn,$uid,$email){

    $sql1 = mysqli_query($conn,"select * from users where uid = '" . $uid . "' or email = '" . $email . "' ");
    $sql2 = mysqli_query($conn,"select * from dev where devUID = '" . $uid . "' or email = '" . $email . "' ");
    $sql3 = mysqli_query($conn,"select * from admin where AdminUID = '" . $uid . "' or email = '" . $email . "' ");

    if($row1 = mysqli_fetch_array($sql1)){
        return $row1;
        exit();
    }
    else if($row2 = mysqli_fetch_array($sql2)){
        return $row2;
        exit();
    }
    else if($row3 = mysqli_fetch_array($sql3)){
        return $row3;
        exit();
    }
    else{
        $result = false;
        return $result;
        exit();
    }
   
    mysqli_close($conn);
}