<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['SS'];

    $fileName = $_FILES['SS']['name'];
    $fileTmpName = $_FILES['SS']['tmp_name'];
    $fileSize = $_FILES['SS']['size'];
    $fileError = $_FILES['SS']['error'];
    $fileType = $_FILES['SS']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 500000) {
                $fileNewName = uniqid('', true) . '0' . $fileActualExt;
                $fileDestination = '../APP';
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location : dev.inc.php?uploadsuccess");
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
