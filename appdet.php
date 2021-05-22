<link rel="stylesheet" href="css/appdet.css">
<link rel="stylesheet" href="css/common.css">
<?php
require_once('php/header.php');
require_once('inc/appdet.inc.php');
$arow = getappinfo($conn,$_GET["app"]);
$srow = getappss($conn,$_GET["app"]);
$drow = getappdev($conn,$_GET["app"]);
?>
<section class="section">




<div class="det">

    <div class="dettop">

    

    <div>
        <?php echo "<img class='logo' src='images/Apps/" . $srow['ss'] . ".webp'>"   ?>
    </div>

    <div>
        <?php echo  $arow['appName']; ?>
        <p><?php echo $drow['devName']; ?></p>
    </div>
    <button class="detbut">
        <?php 
        if($arow['appType']=='p'){
            echo "Buy<br>" . $arow['price'] . "$";
        }
        else{
            echo "download";
        }
        ?>



    </button>
    

    </div>


    <div class="detbot">
    <div style="display: inline;">
        <p style="margin: 2px;">This is the latest verion</p>
        <?php echo $arow['buildNo']; ?>
    </div>
    <div style="float: right;"><img src="#"><p style="margin: 2px;">Downloads: <?php echo $arow['buildNo']; ?></p></div>
    <div  style="float: right;"><img src="#"><p style="margin: 2px;">Size:<?php echo $arow['buildNo']; ?></p></div>
    </div>

</div>





<div class="des">
    <div><h2>Description</h2></div>
    <?php
        echo $arow['Description'];
    ?> 
</div>


<div class="rat">
<div><p>Rating</p></div>
</div>


<div class="com">
    <div><h2>Comments</h2></div>
    <div>

        <?php
        if (isset($_SESSION["userID"])){
            echo "<form method='POST' action='#'>
                <input type='hidden' name = 'uid' value=" . $_SESSION["userID"] . ">
                <input type='hidden' name = 'date' value='".date('Y-m-d H:i:s')."'>
                <textarea name='message'></textarea>
                <button>Comment</button>
                </form>";
        }
        ?>

    </div>
    
</div>



</section>
<?php
include_once('php/footer.php');
?> 
