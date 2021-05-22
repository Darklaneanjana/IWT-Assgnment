<?php
require_once 'dbh.inc.php';
function getappss($conn,$aID){
    $sql = mysqli_query($conn,"select * from appss where AppID = '" . $aID . "' ");
    $row = mysqli_fetch_array($sql);
    if($row){
        return $row;
    }
    mysqli_close($conn);
    }

function getappinfo($conn,$aID){
    $sql = mysqli_query($conn,"select * from App where AppID = '" . $aID . "' ");
    $row = mysqli_fetch_array($sql);
    if($row){
        return $row;
    }
    mysqli_close($conn);
    }

function getappdev($conn,$aID){
    $sql = mysqli_query($conn,"select * from appdev where AppID = '" . $aID . "' ");
    $row = mysqli_fetch_array($sql);
    $sql1 = mysqli_query($conn,"select * from dev where DevID = '" . $row['devID'] . "' ");
    $row1 = mysqli_fetch_array($sql1);
    if($row1){
        return $row1;
    }
    mysqli_close($conn);
    }
