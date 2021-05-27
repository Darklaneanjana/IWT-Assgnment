<?php 
require_once 'dbh.inc.php';

function getcats($conn,$catID){
    $sql = mysqli_query($conn,"select * from app where catID=" . $catID . ";");
    $crow=array();
    while($row = mysqli_fetch_array($sql)){
        array_push($crow,$row);
    }
    if($crow){
        return $crow;
    }
    mysqli_close($conn);
}

function getsearch($conn,$search){
    $sql = mysqli_query($conn,"select * from app where appName like '%".$search. "%' ;");
    $crow=array();
    while($row = mysqli_fetch_array($sql)){
    array_push($crow,$row);
    }if($crow){
        return $crow;
    }

}



function getlist($conn,$t){
    if($t=="g"){
        $sql = mysqli_query($conn,"select * from app where appCat='G' ;");
        $crow=array();
        while($row = mysqli_fetch_array($sql)){
            array_push($crow,$row);
        }
    }else if($t=="a"){
        $sql = mysqli_query($conn,"select * from app where appCat='A' ;");
        $crow=array();
        while($row = mysqli_fetch_array($sql)){
            array_push($crow,$row);
        }
    }else if($t=="B"){
        $sql = mysqli_query($conn,"select * from app where appCat='G' ;");
        $crow=array();
        while($row = mysqli_fetch_array($sql)){
            array_push($crow,$row);
        }
    }
    else if($t=="TD"){
        $sql = mysqli_query($conn,"select * from appDown ORDER BY downloads DESC ;");
        $crow=array();
        while($row = mysqli_fetch_array($sql)){
            $sql1 = mysqli_query($conn,"select * from app where AppId=". $row["AppID"]. " ;");
            $row1 = mysqli_fetch_array($sql1);
            array_push($crow,$row1);  
        } 
    }

    if($crow){
        return $crow;
    }
    mysqli_close($conn);
}
