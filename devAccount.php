<link rel="stylesheet" type="text/css" href="css/devaccount.css?v=1" />

<?php
require_once('php/header.php');
require_once('inc/dbh.inc.php');

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
echo $_SESSION["userID"];
echo $_SESSION["type"];
?>

<body>
    <center>
<div class="forms fff">
    <h3>Edit Profile</h3>
    <hr>
    <form name="editProfile" method="post">
   
   
   <?php
    require_once('inc/dbh.inc.php');

    $currentDeveloper=$_SESSION["userUID"];
    $sql="SELECT * FROM dev WHERE devUID='$currentDeveloper'; ";

    $gotResult=mysqli_query($conn,$sql);

    if ($gotResult) {
        if (mysqli_num_rows($gotResult)> 0); {
            while ($row = mysqli_fetch_array($gotResult)) {
    ?>
                 <input type="text" name="devName" value="<?php echo $row['devName']; ?>" ><br>
                <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
                <input type="submit" name="edit" value="Edit" >
                <button><a href="devAccount.php">Cancel</a></button>
    <?php
            }
        }
    }
    if (isset($_POST['edit'])){

        $devName = $_POST['devName'];
        $email = $_POST['email'];

        $sql = "UPDATE 'dev' SET devName='$devName', email='$email' WHERE devUID='$currentDeveloper';";
    }
    ?>
   
    </div>  
    </form>
    
   <div class='upl'>
    <h3>Upload App</h3>
    <hr>
    <form name="myForm" id="a" onsubmit="return validateForm()" action="inc/dev.inc.php" method="post" enctype="multipart/form-data">
            <input type="text" name="appName" placeholder="App Name" required><br>
            <input type="text" name="Description" placeholder="App Description" required><br>
            <input type="text" name="appPrice" placeholder="App Price" required><br>
            <input type="text" name="buildNo" placeholder="BuildNo" required><br>
            <label for="appType">Paid or Free:</label>
            <select name="appType" id="appType">
                <option value="p" >Paid</option>
                <option value="f" >Free</option>
            </select><br>
            <label for="appCat">App or Game:</label>
            <select name="appCat" id="appCat">
                <option value="A" >App</option>
                <option value="G" >Game</option>
            </select>
            <br><label for="category">categorye</label>
            <select name="category" id="category">
                <?php
                    $sqlc = mysqli_query($conn, "SELECT catID,catName from category;");;

                    while($rowc=mysqli_fetch_array($sqlc)){  
                        // <option value="p" >Paid</option>
                            echo "<option value='".$rowc['catID']."'>  
                                ".$rowc['catName']."
                            </option>";
                        }  
                ?>
            </select><br>
            <label for="appSS">Image</label>
            <input type="file" name="appSS" required><br>
            <label for="appFile">Apk File</label>
            <input type="file" name="appFile" required><br>
            <input type="submit" name="submit" value="Upload">
            <button><a href="devAccount.php">Cancel</a></button>
    </form>

</div>
<div class='upl'>
    <h3>Update App</h3>
    <hr>
    <form name="myForm" id="a" onsubmit="return validateForm()" action="inc/dev.inc.php" method="post" enctype="multipart/form-data">
            <input type="text" name="appName" placeholder="App Name" required><br>
            <input type="text" name="Description" placeholder="App Description" required><br>

            <input type="text" name="appType" placeholder="App Type" required><br>
            <input type="text" name="buildNo" placeholder="BuildNo" required><br>
            <input type="text" name="appCat" placeholder="App Category" required><br>
            <input type="file" name="appSS" required><br>
            <input type="file" name="appFile" required><br>
            <input type="submit" name="submit" value="Upload">
            <button><a href="devAccount.php">Cancel</a></button>
    </form>
</div>
<div class='upl'>
    <h3>Remove App</h3>
    <hr>
    <form name="myForm" id="a" onsubmit="return validateForm()" action="inc/dev.inc.php" method="post" enctype="multipart/form-data">
            <input type="text" name="appName" placeholder="App Name" required><br>
            <input type="text" name="Description" placeholder="App Description" required><br>
           
            <input type="text" name="appType" placeholder="App Type" required><br>
            <input type="text" name="buildNo" placeholder="BuildNo" required><br>
            <input type="text" name="appCat" placeholder="App Category" required><br>
            <input type="file" name="appSS" required><br>
            <input type="file" name="appFile" required><br>
            <input type="submit" name="submit" value="Upload">
            <button><a href="devAccount.php">Cancel</a></button>
    </form>
</div>
    
</center>
</body>

<?php
require_once('php/footer.php');
?>