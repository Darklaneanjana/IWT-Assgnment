<?php
session_start();
require_once('dbh.inc.php');

if (isset($_POST["remove"])) {
    echo $_POST["selectAP"];
    // exit();
    $sql1 = "delete  from appdown where AppID = " . $_POST["selectAP"] . ";";
    mysqli_query($conn, $sql1);

    $sql2 = "delete  from appss where AppID = " . $_POST["selectAP"] . ";";
    mysqli_query($conn, $sql2);

    $sql3 = "delete  from appdev where AppID = " . $_POST["selectAP"] . ";";
    mysqli_query($conn, $sql3);

    $sql4 = "delete  from comment where AppID = " . $_POST["selectAP"] . ";";
    mysqli_query($conn, $sql4);

    $sql5 = "delete  from app where AppID = " . $_POST["selectAP"] . ";";
    mysqli_query($conn, $sql5);

    header("Location: ../devAccount.php");

    exit();
}


if ($_GET['tp'] == 'upl') {
    $userID = $_SESSION["userID"];
    $appName = $_POST['appName'];
    $Description = $_POST['Description'];
    $appPrice = $_POST['appPrice'];
    $appType = $_POST['appType'];
    $buildNo = $_POST['buildNo'];
    $appCat = $_POST['appCat'];
    $catID = $_POST['category'];

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
    $sql1 = "INSERT INTO app(appName, Description, price, appType, buildNo, catID, size, appCat,devIDffff) VALUES('" . $appName . "','" . $Description . "'," . $appPrice . ",'" . $appType . "','" . $buildNo . "'," . $userID . "," . round($fileSize / (1024 * 1024)) . ",'" . $appCat . "',1);";
    mysqli_query($conn, $sql1);

    $sql4 = mysqli_query($conn, "select AppID from app where appName= '" . $appName . "'; ");
    $row4 = mysqli_fetch_array($sql4);

    $sql3 = "INSERT INTO appdown(AppID, downloads) VALUES (" . $row4['AppID'] . ",0);";
    mysqli_query($conn, $sql3);

    $sql2 = "INSERT INTO appss(AppID, SS,Path) VALUES (" . $row4['AppID'] . ",'" . $appSSnewName . "','" . $fileNewName . "');";
    mysqli_query($conn, $sql2);

    $sql5 = "INSERT INTO appdev(AppID, devID) VALUES (" . $row4['AppID'] . ",'" . $_SESSION["userID"] . "');";
    mysqli_query($conn, $sql5);

    header("Location: ../devAccount.php?uploadsuccessfull");
}









if ($_GET['tp'] == 'upd') {

    $userID = $_SESSION["userID"];
    $appName = $_POST['appName'];
    $Description = $_POST['Description'];
    $appPrice = $_POST['appPrice'];
    $appType = $_POST['appType'];
    $buildNo = $_POST['buildNo'];
    $appCat = $_POST['appCat'];
    $catID = $_POST['category'];

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

    $sql4 = mysqli_query($conn, "select AppID from app where appName= '" . $appName . "'; ");
    $row4 = mysqli_fetch_array($sql4);

    $sql1 = "UPDATE app set appName='" . $appName . "', Description='" . $Description . "', price=" . $appPrice . ", appType='" . $appType . "', buildNo='" . $buildNo . "', devID=" . $userID . ", catID=" . $catID . ", size=" . round($fileSize / (1024 * 1024)) . ", appCat='" . $appCat . "' where appID=" . $row4['AppID'] . ";";
    mysqli_query($conn, $sql1);

    $sql2 = "UPDATE  appss set SS='" . $appSSnewName . "',Path='" . $fileNewName . "' where AppID=" . $row4['AppID'] . ";";
    mysqli_query($conn, $sql2);

    header("Location: ../devAccount.php?updatesuccessfull");
}
