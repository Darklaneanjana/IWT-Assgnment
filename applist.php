<link rel="stylesheet" type="text/css" href="css/applist.css">
<?php
require_once('php/header.php');
require_once('inc/applist.inc.php');
?>

<section class="section">

    <div class="AppRow"> 
        <?php
            if($_GET["type"]=='cat'){
                $crow = getcats($conn,$_GET["catID"]);
            
                foreach ($crow as $value) {
                    echo "<a href=appdet.php?app=" . $value["AppID"] . "><div class='appbox'>   
                        <img src='images/Apps/1.webp'>
                        <p class='apptitle'><b>" . $value["appName"] ."</b></p>
                        <div class='appdet'>
                        <p style='float: left;'>100</p>
                        <p style='float: right;'>" . $value["size"] ."MB</p></div>
                    </div></a>";
            }
            }
            else if($_GET["type"]=='games' ){
                $grow = getlist($conn,'g');
                foreach ($grow as $value) {
                    echo "<a href=appdet.php?app=" . $value["AppID"] . "><div class='appbox'>   
                        <img src='images/Apps/1.webp'>
                        <p class='apptitle'><b>" . $value["appName"] ."</b></p>
                        <div class='appdet'>
                        <p style='float: left;'>100</p>
                        <p style='float: right;'>" . $value["size"] ."MB</p></div>
                    </div></a>";
                }
            }else if($_GET["type"]=='apps' ){
                $arow = getlist($conn,"a");
                foreach ($arow as $value) {
                    echo "<a href=appdet.php?app=" . $value["AppID"] . "><div class='appbox'>   
                        <img src='images/Apps/1.webp'>
                        <p class='apptitle'><b>" . $value["appName"] ."</b></p>
                        <div class='appdet'>
                        <p style='float: left;'>100</p>
                        <p style='float: right;'>" . $value["size"] ."MB</p></div>
                    </div></a>";
                }
            }else if($_GET["type"]=='Bapps' ){
                $Brow = getlist($conn,"B");
                foreach ($Brow as $value) {
                    echo "<a href=appdet.php?app=" . $value["AppID"] . "><div class='appbox'>   
                        <img src='images/Apps/1.webp'>
                        <p class='apptitle'><b>" . $value["appName"] ."</b></p>
                        <div class='appdet'>
                        <p style='float: left;'>100</p>
                        <p style='float: right;'>" . $value["size"] ."MB</p></div>
                    </div></a>";
                }
            }else if($_GET["type"]=='TD' ){
                $TDrow = getcats($conn,"TD");
                foreach ($TDrow as $value) {
                    echo "<a href=appdet.php?app=" . $value["AppID"] . "><div class='appbox'>   
                        <img src='images/Apps/1.webp'>
                        <p class='apptitle'><b>" . $value["appName"] ."</b></p>
                        <div class='appdet'>
                        <p style='float: left;'>100</p>
                        <p style='float: right;'>" . $value["size"] ."MB</p></div>
                    </div></a>";
                }
            }
            
        ?>     
    </div>
</section>


<?php
// include_once('php/footer.php');
?> 
