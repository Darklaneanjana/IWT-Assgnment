<?php
function getsearch($conn,$search){
    $sql = mysqli_query($conn,"select * from app where appName like '%".$search. "%' ;");
    $crow=array();
    while($row = mysqli_fetch_array($sql)){
    array_push($crow,$row);
    }if($crow){
        return $crow;
    }

}