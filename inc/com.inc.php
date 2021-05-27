<?php

    require_once('dbh.inc.php');
    if(isset($_POST["submitCom"])){
        $uid = $_POST['uid'];
        $AppID = $_POST['AppID'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        
        $sql = mysqli_query($conn,"select * from users where uid='$uid'  ");
        $row = mysqli_fetch_array($sql);

        echo $AppID;
        echo $date;
        echo $message;
        echo $uid;
        
        echo $row['UserID'];
        $sql = "insert into comment (AppID,date,message,UserID) values(". $AppID. ",'". $date. "','". $message. "',".$row['UserID'].");";

        mysqli_query($conn, $sql);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }


    function editCom($conn){
        if(isset($_POST["editCom"])){
        $cid = $_POST['cid'];
        $message = $_POST['message'];
        $sql = "update comment set message='$message' where cid='$cid';";
        mysqli_query($conn, $sql);
        // header("Location: ../index.php" );
        exit;
        }
    }


    function delCom($conn){
        if(isset($_POST["delCom"])){
        $cid = $_POST['cid'];
        $sql = "delete from comment where cid='$cid';";
        mysqli_query($conn, $sql);
        // getCom($conn,$_SESSION['app']);
        exit;
        }
    }


    function getCom($conn,$AppID){

        $sql = mysqli_query($conn,"select * from comment where AppID='$AppID'      ");
        while($row = mysqli_fetch_array($sql)){
            echo "<hr><div class='comment'><p class='msg'>".$row['message']."</p><p class='date'>";
            echo $row['date']."</p><p class='name'>";
            $sql1 = mysqli_query($conn,"  SELECT users.uid,comment.cid FROM users INNER JOIN comment ON users.UserID = comment.UserID where cid=".$row['cid']." ;");
            $row1 = mysqli_fetch_array($sql1);
            echo $row1['uid']."</p><br>";
            
            if (isset($_SESSION["userID"])){
                if($_SESSION["userID"]==$row['UserID']){



                    echo "<form class='' method='POST' action='".delCom($conn)."'>
                    <input type='hidden' name='cid' value='".$row1['cid']."'>
                    <button class='delete' type='submit' name='delCom'>delete</button></form>

                    <form class='' method='POST' action='inc/editcomment.php'>
                    <input type='hidden' name='id' value='".$row1['cid']."'>
                    <input type='hidden' name='uid' value='".$row['UserID']."'>
                    <input type='hidden' name='AppID' value='".$row['AppID']."'>
                    <input type='hidden' name='date' value='".$row['date']."'>
                    <input type='hidden'  name='message' value='".$row['message']."'>
                    <button class='edit'>edit</button>
                    </form></div>";

                    exit();
                }
            }
        }
    }

?>

