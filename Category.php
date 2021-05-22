<link rel="stylesheet" href="css/Category.css">
<link rel="stylesheet" href="css/common.css">
<?php
require_once('php/header.php');
require_once('inc/cat.inc.php');
$crow = getcats($conn);
?>

<section>
<div class="cat">

<?php
    foreach ($crow as $value) {
        echo "<a href=applist.php?type=cat&catID=" . $value["catID"] . " '  ><button class='button'>" . $value["catName"] . "</button></a>";
        
    }
?>
</div>

</section>
<?php
include_once('php/footer.php');
?> 
