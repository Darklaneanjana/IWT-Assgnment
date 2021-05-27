<link rel="stylesheet" type="text/css" href="css/applist.css">
<link rel="stylesheet" href="../css/Search.css">
<?php
    require_once('php/header.php');
    require_once('inc/search.inc.php');
    require_once('inc/appdet.inc.php');
    require_once('inc/applist.inc.php');

?>




<?php
echo $_GET['search'];



    if($_GET["type"]=='search' ){
                $Srow = getsearch($conn,$_GET['search']);
                foreach ($Srow as $value) {
                    $downrow = getappdown($conn,$value["AppID"]);
                    include 'inc/appBox.php';
                }
            }


?>


<?php
require_once('php/footer.php');
?> 
