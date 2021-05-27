<link rel="stylesheet" href="css/Sign-in.css">
<link rel="stylesheet" href="css/common.css">
<?php
require_once('php/header.php');
?>

<section>
<div class="forms fff">
<h1>Log In</h1>
    <p>Please fill in this form to Log In.</p>
    <hr>
<form action="inc/signin.inc.php" method="POST">
    <input type="text" name="uid" placeholder="email/username..">
    <input type="password" name="pwd" placeholder="password..">
    <button type="submit" name="submit" >Log In</button>
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"]=="emptylogin"){
            echo "<p>fill in fields</p>";
        }

        if($_GET["error"]=="wronglogin"){
            echo "<p>use proper username</p>";
        }

        if($_GET["error"]=="emptyEmail"){
            echo "<p>use proper email</p>";
        }

        if($_GET["error"]=="wrongPassword"){
            echo "<p>password is wrong</p>";
        }
    }
?>
</div>
</form>

<div class="forms signin">
    <p>Create an account? <a href="signup.php">sign up</a></p>
</div>


</section>


<?php
include_once('php/footer.php');
?> 
