<link rel="stylesheet" href="css/appdet.css">
<link rel="stylesheet" href="css/common.css">
<script src="js/App-Details.js"></script>
<?php
require_once('php/header.php');
require_once('inc/appdet.inc.php');
require_once('inc/dbh.inc.php');
require_once('inc/com.inc.php');
$arow = getappinfo($conn,$_GET["app"]);
$srow = getappss($conn,$_GET["app"]);
$downrow = getappdown($conn,$_GET["app"]);
$drow = getappdev($conn,$_GET["app"]);
$_SESSION['app']=$_GET["app"]
?>
<section class="section">

    <div class="det">

        <div class="dettop">

            <div style="float: left;position: relative;">
                <?php echo "<img class='logo' src='images/Apps/" . $srow['SS'] . "'>"?>
            </div>

            <div class="name">
                <p class="AppName"><?php echo  $arow['appName']; ?></p>
                <p class="AppDev"><p><?php echo $drow['devName']; ?></p>
            </div>
            
            <button class="detbut">
                <?php 
                if($arow['appType']=='p'){
                    echo " <a href='Payment.php?app=".$_GET['app']." Buy<br>" . $arow['price'] . "$</a>";
                }
                else{
                    echo "Download";
                }
                ?>
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
    <div><h2>Rating</h2></div>
        <div>

                <!-- <?php
                if (isset($_SESSION["userID"])){

                }
                ?> -->

        </div>
    </div>


<!--                        Comment                                    -->

<!-- <script>
    function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }

</script>
    hello how are you
    <button onclick="myFunction()">Try it</button>
                    <div id='myDIV'>
                    This is my DIV element.
                    </div>

<div id="myItems">
</div>
<p id="demo">Click the button to clone the above items</p>
<button onclick="myFunction()">Try it</button>


<button onclick="myFunction()">Try it</button> -->


<!-- <div class="form-group">
        <textarea class="form-control status-box" rows="3" placeholder="Enter your comment here..."></textarea>
      </div> -->


    <div class="comm">
        <div><h1>Comments</h1></div>
        <div class="comment-area">

            <?php  
            if (isset($_SESSION["uid"])){
                echo "<form method='POST' action=  'inc/com.inc.php'>
                    <input type='hidden' name='uid' value='".$_SESSION["uid"]."'>
                    <input type='hidden' name='AppID' value='".$_GET["app"]."'>
                    <input type='hidden' name='date' value='". date('Y-m-d H:i:s')."'>
                    <div class='form-group'><textarea name='message' class='form-control status-box' rows='3' placeholder='Enter your comment here...'></textarea></div>
                    <button type='submit' class='combt' name='submitCom'>Comment</button>
                </form>";
            }else{echo "you need to log in to comment";}
            
            ?>
        </div>

        <div class='comBox'>
            <?php
                getCom($conn,$_GET["app"]);
                

            ?>
            
        </div>
        
        
    </div>


</section>
<?php
include_once('php/footer.php');
?> 
