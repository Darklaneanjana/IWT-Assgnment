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

    <form action="inc/dev.inc.php" method="post" enctype="multipart/form-data">
        <input type="text" name="appName" placeholder="App Name"><br>
        <input type="text" name="Description" placeholder="App Description"><br>
        <input type="text" name="appType" placeholder="App Type"><br>
        <input type="text" name="buildNo" placeholder="BuildNo"><br>
        <input type="text" name="appCat" placeholder="App Category"><br>
        <input type="file" name="appSS"><br>
        <input type="file" name="appFile"><br>
        <input type="submit" name="submit" value="Upload">
        <a href="devAccount.php">Cancel</a>

    </form>




</body>

<?php
require_once('php/footer.php');
?>