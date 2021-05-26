<link rel="stylesheet" type="text/css" href="css/devaccount.css?v=1" />

<?php
require_once('php/header.php');

if (isset($_SESSION["userID"])) {
    if ($_SESSION["type"] !== "Dev") {
        header("location:index.php?error=notDev");
        exit();
    } else {
        echo "<p>Hello there " . $_SESSION["name"] . "</p>";
    }
} else {
    header("location:signin.php?error=notLoggedIn");
    exit();
}
?>

<body>

    <form name="myForm" id="a" onsubmit="return validateForm()" action="inc/dev.inc.php" method="post" enctype="multipart/form-data">
            <input type="text" name="appName" placeholder="App Name" required><br>
            <input type="text" name="Description" placeholder="App Description" required><br>
            <input type="text" name="appType" placeholder="App Type" required><br>
            <input type="text" name="buildNo" placeholder="BuildNo" required><br>
            <input type="text" name="appCat" placeholder="App Category" required><br>
            <input type="file" name="appSS" required><br>
            <input type="file" name="appFile" required><br>
            <input type="submit" name="submit" value="Upload">
            <a href="devAccount.php">Cancel</a>
    </form>

    <?php
    function getcats($conn,$devID){
    $sql = mysqli_query($conn,"select * from app where devID=" . $devID . ";");
    $crow=array();
    while($row = mysqli_fetch_array($sql)){
        array_push($crow,$row);
    }
    if($crow){
        return $crow;
    }
    mysqli_close($conn);
}
?>

</body>

<?php
require_once('php/footer.php');
?>