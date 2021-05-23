<link rel="stylesheet" type="text/css" href="css/common.css?v=1" />
<link rel="stylesheet" type="text/css" href="css/homepage.css?v=1" />
<?php
require_once('php/header.php');
require_once('inc/applist.inc.php');
if (isset($_SESSION["userID"])){
    echo "<p>Hello there ".$_SESSION["name"]."</p>";

}
?>

				

<div class="cont">
    <div class="AppRow"> 
            <div class="approwTitle">
            <div style="float: left;">
            <img src="images/appIco.png"  style="display: inline-block;width:5%;margin-right:1%">
            <p style="display: inline;">Apps</p>
            </div>

            <p style="text-align: right;position: relative;font-size:13px"> <a href="applist.php?type=apps">See More </a></p>
            </div>
            
            <div class="appBar">
                <?php
                        $TDrow = getlist($conn,"a");
                        $stop =0;
                        foreach ($TDrow as $value) {
                            $stop++;
                            echo "<a href=appdet.php?app=" . $value["AppID"] . "><div class='appbox'>   
                                <img src='images/Apps/1.webp'>
                                <p class='apptitle'><b>" . $value["appName"] ."</b></p>
                                <div class='appdet'>
                                <p style='float: left;'>100</p>
                                <p style='float: right;'>" . $value["size"] ."MB</p></div>
                            </div></a>";
                            if($stop==8){
                                break;
                            }
                        }
                    ?>

            </div>

    </div>
    <div class="AppRow">

            
            <div class="approwTitle">
            <div style="float: left;">
            <img src="images/appIco.png"  style="display: inline-block;width:5%;margin-right:1%">
            <p style="display: inline;">Games</p>
            </div>

            <p style="text-align: right;position: relative;font-size:13px"><a href="applist.php?type=games">See More</a> </p>
            </div>
            
            
            <div class="appBar">
                <?php
                        $TDrow = getlist($conn,"g");
                        $stop =0;
                        foreach ($TDrow as $value) {
                            $stop++;
                            echo "<a href=appdet.php?app=" . $value["AppID"] . "><div class='appbox'>   
                                <img src='images/Apps/1.webp'>
                                <p class='apptitle'><b>" . $value["appName"] ."</b></p>
                                <div class='appdet'>
                                <p style='float: left;'>100</p>
                                <p style='float: right;'>" . $value["size"] ."MB</p></div>
                            </div></a>";
                            if($stop==8){
                                break;
                            }
                        }
                    ?>

            </div>

    </div>
    <div class="AppRow">

            
            <div class="approwTitle">
            <div style="float: left;">
            <img src="images/appIco.png"  style="display: inline-block;width:5%;margin-right:1%">
            <p style="display: inline;">Best Apps</p>
            </div>

            <p style="text-align: right;position: relative;font-size:13px"><a href="applist.php?type=Bapps"> See More </a></p>
            </div>
            
            
            <div class="appBar">
                <?php
                    $TDrow = getlist($conn,"B");
                    $stop =0;
                    foreach ($TDrow as $value) {
                        $stop++;
                        echo "<a href=appdet.php?app=" . $value["AppID"] . "><div class='appbox'>   
                            <img src='images/Apps/1.webp'>
                            <p class='apptitle'><b>" . $value["appName"] ."</b></p>
                            <div class='appdet'>
                            <p style='float: left;'>100</p>
                            <p style='float: right;'>" . $value["size"] ."MB</p></div>
                        </div></a>";
                        if($stop==8){
                            break;
                        }
                    }
                ?>

            </div>
            </div>

    </div>
    <div class="AppRow">
            <div class="approwTitle">
            <div style="float: left;">
            <img src="images/appIco.png"  style="display: inline-block;width:5%;margin-right:1%">
            <p style="display: inline;">Top Downloades</p>
            </div>

            <p style="text-align: right;position: relative;font-size:13px"><a href="applist.php?type=TD"> See More</a> </p>
            </div>

            <div class="appBar">

                <?php
                    $TDrow = getlist($conn,"TD");
                    $stop =0;
                    foreach ($TDrow as $value) {
                        $stop++;
                        echo "<a href=appdet.php?app=" . $value["AppID"] . "><div class='appbox'>   
                            <img src='images/Apps/1.webp'>
                            <p class='apptitle'><b>" . $value["appName"] ."</b></p>
                            <div class='appdet'>
                            <p style='float: left;'>100</p>
                            <p style='float: right;'>" . $value["size"] ."MB</p></div>
                        </div></a>";
                        if($stop==8){
                            break;
                        }
                    }
                ?>
            </div>

    </div>

</div>

<?php
require_once('php/footer.php');
?> 


