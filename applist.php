<link rel="stylesheet" type="text/css" href="css/applist.css">
<link rel="stylesheet" type="text/css" href="css/common.css?v=1" />

<?php
require_once('php/header.php');
require_once('inc/applist.inc.php');

?>


<?php
if($_GET["type"]=='cat'){
    $arow = getcats($conn,$_GET["catID"]);
}

?>


<section class="section">

    <div class="AppRow"> 
        <?php
            foreach ($arow as $value) {
                // if($value["size"] >1000){
                //     $size = $value["size"]/10
                // }
                echo "<div class='appbox'>   
                    <img src='images/Apps/1.webp'>
                    <p class='apptitle'><b>" . $value["appName"] ."</b></p>
                    <div class='appdet'>
                    <p style='float: left;'>100</p>
                    <p style='float: right;'>" . $value["size"] ."MB</p></div>
                </div>";
            }
        ?>     
    </div>
</section>


<?php
// include_once('php/footer.php');
?> 
