<link rel="stylesheet" type="text/css" href="css/devaccount.css?v=1" />
<center>
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
?>

  
<div class="forms fff">
    <h3>Edit Profile</h3>
    <hr>
    <form name="editProfile" method="post">

            <?php
                $currentDeveloper = $_SESSION["userUID"];
                $sql = "SELECT * FROM dev WHERE devUID='$currentDeveloper'; ";

                $gotResult = mysqli_query($conn, $sql);

                if ($gotResult) {
                    if (mysqli_num_rows($gotResult) > 0); {
                        while ($row = mysqli_fetch_array($gotResult)) {
                ?>
                            <input type="text" name="devName" value="<?php echo $row['devName']; ?>"><br>
                            <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
                            <input type="submit" name="edit" value="Edit">
                            <button><a href="devAccount.php">Cancel</a></button>
                <?php
                        }
                    }
                }
                if (isset($_POST['edit'])) {

                    $devName = $_POST['devName'];
                    $email = $_POST['email'];

                    $sql = "UPDATE 'dev' SET devName='" . $devName . "', email='" . $email . "' WHERE devUID='" . $currentDeveloper . "';";
                    mysqli_query($conn, $sql);
                }
                ?>
    </form>
</div>
        






<div class='upl'>
    <h3>Upload App</h3>
    <hr>

    <form name="myForm" id="a" onsubmit="return validateForm()" action="inc/dev.inc.php?tp=upl" method="post" enctype="multipart/form-data">
                <input type="text" name="appName" placeholder="App Name" required><br>
                <input type="text" name="Description" placeholder="App Description" required><br>
                <input type="text" name="appPrice" placeholder="App Price" required><br>
                <input type="text" name="buildNo" placeholder="BuildNo" required><br>
                <label for="appType">Paid or Free:</label>
                <select name="appType" id="appType">
                    <option value="p">Paid</option>
                    <option value="f">Free</option>
                </select><br>
                <label for="appCat">App or Game:</label>
                <select name="appCat" id="appCat">
                    <option value="A">App</option>
                    <option value="G">Game</option>
                </select>
                <br><label for="category">categorye</label>
                <select name="category" id="category">
                    <?php
                    $sqlc = mysqli_query($conn, "SELECT catID,catName from category;");;
                    while ($rowc = mysqli_fetch_array($sqlc)) {
                        echo "<option value='" . $rowc['catID'] . "'>  
                                " . $rowc['catName'] . "
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



<div class='upd'>

            <h3>Update App</h3>
            <hr>
            <form method="post" action="">
  
            <select name="selectAP" id="selectAP">
                    <?php
                    $sqla = mysqli_query($conn, "SELECT app.* from app INNER JOIN appdev on app.AppID = appdev.AppID where devID =".$_SESSION["userID"].";");
                    while ($rowa = mysqli_fetch_array($sqla)) {
                        echo "<option value='" . $rowa['AppID'] . "'>  
                                " . $rowa['appName'] . "
                            </option>";
                    }
                    ?>
                </select>
            <button type='submit'  name='submit'>Select App</button>
            </form>

            <?php 
                if(isset($_POST["selectAP"])){
                    $sqla = mysqli_query($conn, "SELECT * from app where AppID = ".$_POST["selectAP"].";");
                    $rowa = mysqli_fetch_array($sqla);

                    $appName=$rowa['appName'];$Description=$rowa['Description'];$appPrice=$rowa['price'];$appType=$rowa['appType'];$buildNo=$rowa['buildNo'];$catID=$rowa['catID'];$appCat=$rowa['appCat'];;

                }else{
                    $appName="";$Description="";$appPrice="";$appTyp="";$buildNo="";$catID="";$appCat="";
                }
            ?>

<form name="myForm" id="a" onsubmit="return validateForm()" action="inc/dev.inc.php?tp=upd" method="post" enctype="multipart/form-data">
                <?php
                echo
                "<input type='text' name='appName' value='".$appName."' placeholder='App Name' required><br>
                <input type='text' name='Description' value='".$Description."' placeholder='App Description' required><br>
                <input type='text' name='appPrice' value='".$appPrice."' placeholder='App_Price' required><br>
                <input type='text' name='buildNo' value='".$buildNo."' placeholder='BuildNo' required><br>"
                ?>
                <label for="appType">Paid or Free:</label>
                <select name="appType" id="appType">
                    <option value="p">Paid</option>
                    <option value="f">Free</option>
                </select><br>
                <label for="appCat">App or Game:</label>
                <select name="appCat" id="appCat">
                    <option value="A">App</option>
                    <option value="G">Game</option>
                </select>
                <br><label for="category">categorye</label>
                <select name="category" id="category">
                    <?php
                    $sqlc = mysqli_query($conn, "SELECT catID,catName from category;");;
                    while ($rowc = mysqli_fetch_array($sqlc)) {
                        echo "<option value='" . $rowc['catID'] . "'>  
                                " . $rowc['catName'] . "
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




<div class='del'>
    <h3>Remove App</h3>
    <hr>
    <form  action="inc/dev.inc.php" method="post">
    <select name="selectAP" id="selectAP">
                    <?php
                    $sqla = mysqli_query($conn, "SELECT app.appName,appdev.AppID from app INNER JOIN appdev on app.AppID = appdev.AppID where devID =".$_SESSION["userID"].";");
                    while ($rowa = mysqli_fetch_array($sqla)) {
                        echo "<option value='" . $rowa['AppID'] . "'>  
                                " . $rowa['appName'] . "
                            </option>";
                    }
                    ?>
                </select>
        <button type='submit' name='remove'>Delete APP</button>
    </form>
</div>

    
</center>

<?php
require_once('php/footer.php');
?>


