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
    header("location:signin.php?error=notLoggedIn&tp=dev");
    exit();
}
?>

<body>
    <h1>Edit Profile</h1>
    <form name="editProfile" method="post">
        <input type="text" name="userName" placeholder="User Name" >
        <input type="text" name="email" placeholder="Email" >
        <input type="text" name="password" placeholder="Password" >
        <input type="submit" name="edit" value="Edit" >
        <a href="devAccount.php">Cancel</a>



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

    

</body>

<?php
require_once('php/footer.php');
?>