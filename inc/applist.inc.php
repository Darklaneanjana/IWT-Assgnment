<?php 
require_once 'dbh.inc.php';

function getcats($conn,$t){
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
    }else if($t=="TD"){
        $sql = mysqli_query($conn,"select * from app where appCat='G' ;");
        $crow=array();
        while($row = mysqli_fetch_array($sql)){
            array_push($crow,$row);
        }
    }
    if($crow){
        return $crow;
    }
    mysqli_close($conn);
}
