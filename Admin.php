<link rel="stylesheet" type="text/css" href="css/admin.css?v=1" />
<?php
require_once('inc/admin.inc.php');
require_once('php/header.php');

if (isset($_SESSION["userID"])){
    if ($_SESSION["type"]!=="Admin"){
        header("location:index.php?error=notAdmin");
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
require_once('php/footer.php');
?> 
