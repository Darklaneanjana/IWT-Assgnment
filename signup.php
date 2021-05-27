<link rel="stylesheet" href="css/Sign-up.css">
<link rel="stylesheet" href="css/common.css">
<?php
require_once('php/header.php');
?>


<section>

<div class="forms fff">
<h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
<form action="inc/signup.inc.php" method="POST"><br>
    <input type="text" name="name" placeholder="name.."><br>
    <input type="text" name="email" placeholder="email"><br>
    <input type="text" name="uid" placeholder="u name"><br>
    <input type="password" name="pwd" placeholder="password"><br>
    <input type="password" name="pwdrep" placeholder="password"><br>
    <button type="submit" name="submit" >signup</button>
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
</div>


<div class="forms signin">
    <p>Already have an account? <a href="signin.php">Sign in</a>.</p>
</div>







</section>









<?php
include_once('php/footer.php');
?> 
