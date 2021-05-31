<?php
session_start();
require_once('dbh.inc.php');



if (isset($_POST['submit'])) {

    $userID = $_SESSION["userID"];
    $appName = $_POST['appName'];
    $Description = $_POST['Description'];
    $appType = $_POST['appType'];
    $buildNo = $_POST['buildNo'];
    $appCat = $_POST['appCat'];

    $result = mysqli_query($conn, "SELECT 'catID' from 'category' where catName='$appCat';");
    $categoryID = mysqli_fetch_array($result);
    $catID = $categoryID[0];

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
                header("Location: ../devAccount.php?uploadsuccessfull");
            } else {
                echo "Your file is too big..!!!";
            }
        } else {
            echo "There was an error uploading your file..!!!";
        }
    } else {
        echo "You cannot upload of files this type..!!!";
    }
}

$sql = "INSERT INTO app(appID, appName, Description, price, appType, buildNo, devID, catID, size, appCat)
VALUES('','$appName','$Description','$price','$appType','$buildNo','$userID','$catID','$fileSize','$appCat');";


