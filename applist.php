<link rel="stylesheet" type="text/css" href="css/applist.css">
<?php
require_once('inc/appdet.inc.php');
require_once('inc/applist.inc.php');
require_once('php/header.php');
?>

<section class="section">

    <div class="AppRow"> 
        <?php
            if($_GET["type"]=='cat'){
                $crow = getcats($conn,$_GET["catID"]);
                if(empty($crow) ){
                    exit();
                }
                foreach ($crow as $value) {
                    $downrow = getappdown($conn,$value["AppID"]);
                    include 'inc/appBox.php';
            }
            }
            else if($_GET["type"]=='games' ){
                $grow = getlist($conn,'g');
                foreach ($grow as $value) {
                    $downrow = getappdown($conn,$value["AppID"]);
                    include 'inc/appBox.php';
                }
            }else if($_GET["type"]=='apps' ){
                $arow = getlist($conn,"a");
                foreach ($arow as $value) {
                    $downrow = getappdown($conn,$value["AppID"]);
                    include 'inc/appBox.php';
                }
            }else if($_GET["type"]=='Bapps' ){
                $Brow = getlist($conn,"B");
                foreach ($Brow as $value) {
                    $downrow = getappdown($conn,$value["AppID"]);
                    include 'inc/appBox.php';
                }
            }else if($_GET["type"]=='TD' ){
                $TDrow = getcats($conn,"TD");
                foreach ($TDrow as $value) {
                    $downrow = getappdown($conn,$value["AppID"]);
                    include 'inc/appBox.php';
                }
            }
            
        ?>     
    </div>
</section>


<?php
// include_once('php/footer.php');
?> 
