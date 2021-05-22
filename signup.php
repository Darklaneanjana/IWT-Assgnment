<link rel="stylesheet" href="css/Sign-up.css">
<link rel="stylesheet" href="css/common.css">
<?php
require_once('php/header.php');
?>


<section>

<div>
<form action="inc/signup.inc.php" method="POST">
    <input type="text" name="name" placeholder="name..">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="uid" placeholder="u name">
    <input type="password" name="pwd" placeholder="password">
    <input type="password" name="pwdrep" placeholder="password">
    <button type="submit" name="submit" >signup</button>
</form>
</div>




    <a href="signin.php">sign in</a>

<form action="inc/signup.inc.php" method="POST">
    <button type="submit" name="logout" >logout</button>
</form>


<?php
    if(isset($_GET["error"])){
        if($_GET["error"]=="emptyinput"){
            echo "<p>fill in fields</p>";
        }

        if($_GET["error"]=="emptyUid"){
            echo "<p>use proper username</p>";
        }

        if($_GET["error"]=="emptyEmail"){
            echo "<p>use proper email</p>";
        }

        if($_GET["error"]=="passworddnotmatch"){
            echo "<p>password do not match</p>";
        }

        if($_GET["error"]=="stmtfaild"){
            echo "<p>something went wrong</p>";
        }

        if($_GET["error"]=="none"){
            echo "<p>Sign Up Succesfull!</p>";
        }
    }
    



?>


</section>









<?php
include_once('php/footer.php');
?> 
