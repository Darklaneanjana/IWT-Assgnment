<title>
        Payment
</title>
<link rel="stylesheet" href="../css/common.css">
<link rel="stylesheet" href="../css/Payment.css">
<script src="../js/Payment.js"></script>



<?php
require_once('php/header.php');
require_once('inc/dbh.inc.php.php');

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
if(isset($_POST['submit'])){

$card = $_POST['cardnum'];
$exp = $_POST['expDate'];
$cvv = $_POST['cvvNum'];
$exp = $_POST['Exyear'];


$query ="INSERT INTO payment(card_number,exp_month,cvv,exp_year)VALUES('{$card}','{$exp}','{$cvv}','{$exp}')";


$result_set = mysqli_query($connection, $query);


if($result_set){
	echo"add";
}else{
	echo"err";


}
}
?>



 
   <body>
   <center>
    <h1>Payment</h1><br>
    <h3>Accepted Cards</h3>



    <form action="Payment.php" method="post">
	
     <label>Card Number</label>
    <input type="text" name="cardnum">
    <br><br>
    <label>EXP Month</label> 
    <input type="text"name="expDate">
    <br><br>
    <label>CVV</label>
   <input type="text" name="cvvNum">
   <br><br>
    <label>EXP Year</label>
    <input type="text" name="Exyear">
    <br><br>

	<input type = "submit" value ="~-submit-~" name="submit">
    </form>
</center>




<?php

require_once('php/footer.php');
?> 
</body>
</html>