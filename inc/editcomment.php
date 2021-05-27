<?php
require_once('dbh.inc.php');
require_once('com.inc.php');
$cid = $_POST['id'];
$uid = $_POST['uid'];
$AppID = $_POST['AppID'];
$date = $_POST['date'];
$message = $_POST['message'];
echo "<form method='POST' action=  '".editCom($conn)."'>
<input type='hidden' name='cid' value='".$_POST['id']."'>
<input type='hidden' name='uid' value='".$_POST['uid']."'>
<input type='hidden' name='AppID' value='".$_POST['AppID']."'>
<input type='hidden' name='date' value='".$_POST['date']."'>
<textarea name='message'>".$message."</textarea>
<button type='submit' name='editCom'>comment</button>
</form>";

?>