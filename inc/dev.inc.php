<?php
session_start();
require_once('dbh.inc.php');



if (isset($_POST['submit'])) {
    echo $_SESSION["userID"];
    // exit();
    $userID = $_SESSION["userID"];
    $appName = $_POST['appName'];
    $Description = $_POST['Description'];
    $appPrice = $_POST['appPrice'];
    $appType = $_POST['appType'];
    $buildNo = $_POST['buildNo'];
    $appCat = $_POST['appCat'];
    $catID = $_POST['category'];

    // $result = mysqli_query($conn, "SELECT catID from category where catName='".$appCat."';");
    // $categoryID = mysqli_fetch_array($result);
    // $catID = $categoryID[0];




    $appSS = $_FILES['appSS'];
    $appSSname = $_FILES['appSS']['name'];
    $appSStmpName = $_FILES['appSS']['tmp_name'];
    $appSSsize = $_FILES['appSS']['size'];
    $appSSError = $_FILES['appSS']['error'];
    $appSSType = $_FILES['appSS']['type'];

    $appSSExt = explode('.', $appSSname);
    $appSSActualExt = strtolower(end($appSSExt));

    $allowedSS = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($appSSActualExt, $allowedSS)) {
        if ($appSSError === 0) {
            if ($appSSsize < 50000000) {
                $appSSnewName = uniqid('', true) . '.' . $appSSActualExt;
                $appSSDestination = '../images/Apps/' . $appSSnewName;
                move_uploaded_file($appSStmpName, $appSSDestination);
                // header("Location: ../devAccount.php?uploadsuccessfull");
            } else {
                echo "Your file is too big..!!!";
            }
        } else {
            echo "There was an error uploading your file..!!!";
        }
    } else {
        echo "You cannot upload of files this type..!!!";
    }
 
// echo $appSSnewName;
// exit();


    // while (true) {
    //     $filename = uniqid('MyApp', true) . '.pdf';
    //     if (!file_exists(sys_get_temp_dir() . $filename)) break;
    //    }
    $file = $_FILES['appFile'];

    $fileName = $_FILES['appFile']['name'];
    $fileTmpName = $_FILES['appFile']['tmp_name'];
    $fileSize = $_FILES['appFile']['size'];
    $fileError = $_FILES['appFile']['error'];
    $fileType = $_FILES['appFile']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('apk', 'xapk', 'apks', 'apkm');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 50000000) {
                $fileNewName = uniqid('', true) . '.' . $fileActualExt;
                $fileDestination = '../APP/' . $fileNewName;
                move_uploaded_file($fileTmpName, $fileDestination);
                // 
            } else {
                echo "Your file is too big..!!!";
            }
        } else {
            echo "There was an error uploading your file..!!!";
        }
    } else {
        echo "You cannot upload of files this type..!!!";
    }

    $sql1 = "INSERT INTO app(appName, Description, price, appType, buildNo, devID, catID, size, appCat) VALUES('".$appName."','".$Description. "',".$appPrice. ",'".$appType. "','".$buildNo. "',".$userID. ",".$catID. ",".round($fileSize/(1024*1024)). ",'".$appCat. "');";
    mysqli_query($conn, $sql1);
    

    $sql4 = mysqli_query($conn,"select AppID from app where appName= '".$appName."'; ");
    $row4 = mysqli_fetch_array($sql4);

    $sql3 = "INSERT INTO appdown(AppID, downloads) VALUES (".$row4['AppID'].",0);";
    mysqli_query($conn, $sql3);

    $sql2 = "INSERT INTO appss(AppID, SS) VALUES (".$row4['AppID'].",'".$appSSnewName."');";
    mysqli_query($conn, $sql2);

    $sql5 = "INSERT INTO appdev(AppID, devID) VALUES (".$row4['AppID'].",'".$_SESSION["userID"]."');";
    mysqli_query($conn, $sql5);

    header("Location: ../devAccount.php?uploadsuccessfull");
    // exit();
}

