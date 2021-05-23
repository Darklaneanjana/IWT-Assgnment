<link rel="stylesheet" type="text/css" href="css/common.css?v=1" />
<link rel="stylesheet" type="text/css" href="css/devaccount.css?v=1" />
<?php
require_once('php/header.php');
require_once('inc/dev.inc.php');
if (isset($_SESSION["userID"])){
    if ($_SESSION["userID"]!=="Dev"){
        header("location:index.php?error=notDev");
        exit();
    }else{
        echo "<p>Hello there ".$_SESSION["name"]."</p>";
    }
}else{
    header("location:signin.php?error=notLoggedIn");
        exit();
}
?>
<?php
require_once('html/header.php');
?>









<?php
require_once('html/footer.php');
?> 
