<title>
        Payment
</title>
<link rel="stylesheet" href="../css/common.css">
<link rel="stylesheet" href="../css/Payment.css">
<script src="../js/Payment.js"></script>



<?php
require_once('php/header.php');

if (isset($_SESSION["userID"])) {
    if ($_SESSION["type"] !== "User") {
        header("location:index.php?error=notUser");
        exit();
    } else {
        echo "<p>Hello there " . $_SESSION["name"] . "</p>";
    }
} else {
    header("location:signin.php?error=notLoggedIn");
    exit();
}
?>


<?php
    echo $_GET["app"].'<br>' ; 
    echo $_SESSION["uid"].'<br>';
    echo $_SESSION["userID"].'<br>';
    echo $_SESSION["name"];
?>

<<?php 



echo "hello this is payment";






?>

<?php
require_once('php/footer.php');
?> 