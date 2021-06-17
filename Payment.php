<title>
        Payment
</title>
<link rel="stylesheet" href="../css/common.css">
<link rel="stylesheet" href="../css/Payment.css">
<script src="../js/Payment.js"></script>
<center>


<?php
require_once('php/header.php');
require_once('inc/dbh.inc.php');

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


$query ="INSERT INTO payment_details(card_number,exp_month,cvv,exp_year)VALUES('$card','$exp','$cvv','$exp')";


$result_set = mysqli_query($conn,$query);


if($result_set){
	echo"add card details successfully";
}
else{
	echo"error";
}
}
?>




    <fieldset>
    <h3> Ammount </h3>
    <h4>
    <?php echo $row['price']."$"; ?></h4>
    <h1>Payment</h1><br>
    <h3>Accepted Cards</h3>




    <form action="" method="post">
	
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

</fieldset>

<?php if(isset($_POST['submit'])) {

}


?>








</center>
<?php
require_once('php/footer.php');
?> 
