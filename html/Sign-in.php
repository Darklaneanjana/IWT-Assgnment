<link rel="stylesheet" href="css/Sign-in.css">
<link rel="stylesheet" href="css/common.css">
<?php
include_once('header.php');
?>


<section>


<form action="inc/signin.inc.php" method="POST">
    <input type="text" name="mail" placeholder="email">
    <input type="password" name="mail" placeholder="passnord">
    <button type="submit" name="login" >Login</button>
</form>





    <a href="Sign-Up.php">sign up</a>

<form action="inc/signin.inc.php" method="POST">
    <button type="submit" name="logout" >logout</button>
</form>






</section>














<?php
include_once('footer.php');
?> 
