<link rel="stylesheet" href="css/appdet.css">
<link rel="stylesheet" href="css/common.css">
<?php
require_once('php/header.php');
require_once('inc/appdet.inc.php');
require_once('inc/com.inc.php');
$arow = getappinfo($conn,$_GET["app"]);
$srow = getappss($conn,$_GET["app"]);
$downrow = getappdown($conn,$_GET["app"]);
$drow = getappdev($conn,$_GET["app"]);

?>
<section class="section">

    <div class="det">

        <div class="dettop">

            <div style="float: left;position: relative;">
                <?php echo "<img class='logo' src='images/Apps/" . $srow['SS'] . ".webp'>"?>
            </div>

            <div style="">
                <?php echo  $arow['appName']; ?>
                <p><?php echo $drow['devName']; ?></p>
            </div>
            
            <button class="detbut"><a href="#">
                <?php 
                if($arow['appType']=='p'){
                    echo "Buy<br>" . $arow['price'] . "$";
                }
                else{
                    echo "Download";
                }
                ?></a>
            </button>
    
        </div>


        <div class="detbot">
        <div style="display: inline;">
            <p style="margin: 2px;">This is the latest version</p>
            <?php echo $arow['buildNo']; ?>
        </div>
        <div style="float: right;"><img src="#"><p style="margin: 2px;">Downloads: <?php echo $downrow["downloads"]; ?></p></div>
        <div  style="float: right;"><img src="#"><p style="margin: 2px;">Size:<?php echo $arow['size']; ?>MB</p></div>
        </div>

    </div>




<!--                          Bottom HAlF                                       -->



    <div class="des">
        <div><h2>Description</h2></div>
        <?php
            echo $arow['Description'];
        ?> 
    </div>



<!--                          Rate                             -->

    <div class="rate">
    <div><p>Rating</p></div>
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


<!--                        Comment                                    -->

    <div class="comm">
        <div><h2>Comments</h2></div>
        <div>
                <?php
                    // date_default_timezone_get('Asia/India');
                    echo date('Y-m-d H:i:S');
                ?>

                <form method="POST" action="inc/com.inc.php">
                    <input type="hidden" name="uid" value="Anonymoys">
                    <input type="hidden" name="date" value=date('Y-m-d H:i:S')>
                    <textarea name="message"></textarea>
                    <button type="submit" name=" submit">comment</button>
                </form>




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
