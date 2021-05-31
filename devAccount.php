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
    <?php
    require_once('inc/dbh.inc.php');


    $currentDeveloper=$_SESSION["userID"];
    $sql="SELECT * FROM dev WHERE devUID='$currentDeveloper' ";

    $gotResult=mysqli_query($conn,$sql);

    if ($gotResult) {
        if (mysqli_num_rows($gotResult)> 0); {
            while ($row = mysqli_fetch_array($gotResult)) {
                ?>
                 <input type="text" name="devName" value="<?php echo $row['devName']; ?>" >
                <input type="text" name="email" value="<?php echo $row['email']; ?>">
                <input type="submit" name="edit" value="Edit" >
                <a href="devAccount.php">Cancel</a>
                <?php
            }
        }
    }
    if (isset($_POST['edit'])){

        $devName = $_POST['devName'];
        $email = $_POST['email'];

        $sql = "UPDATE 'dev' SET dev(devName, email) WHERE devUID='$currentDeveloper'
        VALUES('$devName','$email');";
    }
    ?>
    
       
    </form>
   

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