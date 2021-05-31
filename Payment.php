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

<body>
    <h2>Payment</h2>
    <h3>Accepted Cards</h3>
    <form action="process.php" method="POST">
     <lable>credit card number</lable>
    <input type="text" name="cardnum">
    <label>EXP Month</label> 
    <input type="text"name="expDate">


    </form>
</body>
<?php
require_once('php/footer.php');
?> 
