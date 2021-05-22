<?php 
require_once 'dbh.inc.php';

function getcats($conn){
    $sql = mysqli_query($conn,"select * from app");
    $crow=array();
    while($row = mysqli_fetch_array($sql)){
        array_push($crow,$row);
    }
    if($crow){
        return $crow;
    }
    mysqli_close($conn);
}

