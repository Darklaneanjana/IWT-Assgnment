<?php
    require_once('dbh.inc.php');
    if(isset($_POST["submitCom"])){
        $uid = $_POST['uid'];
        $AppID = $_POST['AppID'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        echo $date;
        
        // $sql = "insert into comment (AppID,date,message,UserID) values(". $AppID. ",'". $date. "','". $message. "',". $uid. ");";
        $sql = "insert into comment (AppID,date,message,UserID) values(". $AppID. ",'2021-05-24 17:22:17','". $message. "',".$uid.");";

        mysqli_query($conn, $sql);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }

    function getCom($conn){
        $sql = mysqli_query($conn,"select * from comment");
        while($row = mysqli_fetch_array($sql)){
            echo $row['message'];
            echo $row['date'];
            echo $row['UserID'];
            $sql1 = mysqli_query($conn,"  SELECT users.uid,comment.cid FROM users INNER JOIN comment ON users.UserID = comment.UserID where cid=".$row['cid']." ;");
            $row1 = mysqli_fetch_array($sql1);
            echo $row1['uid']."<br>";
        }
        

    //     if($row1 = mysqli_fetch_array($sql)){
    //         return $row1;
    //         exit();
    //     }
    }


