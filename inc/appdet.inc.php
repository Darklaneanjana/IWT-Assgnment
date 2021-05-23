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
    $sql = mysqli_query($conn,"SELECT appdev.AppID, dev.devName FROM appdev INNER JOIN dev ON appdev.DevID = dev.DevID where AppID='" . $aID . "' ");
    $row = mysqli_fetch_array($sql);
 
    if($row){
        return $row;
    }
    mysqli_close($conn);
    }

    
function getappdown($conn,$aID){
    $sql = mysqli_query($conn,"SELECT * FROM appdown where AppID='" . $aID . "' ");
    $row = mysqli_fetch_array($sql);
 
    if($row){
        return $row;
    }
    mysqli_close($conn);
    }