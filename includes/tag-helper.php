<?php

if (isset($_POST['tagSearch-submit'])) {
    require 'dbhandler.php';
    session_start();

    $tags = array("new", "used", "rig", "gpu", "cpu", "motherboard", "cooler", "psu", "accessory");
    $sql = "SELECT * FROM listings WHERE";
    $cond = 0;
    
    
    for($i=0; $i<sizeof($tags); $i++){
        if(isset($_POST[$tags[$i]])){
            if($cond != 0){
                $sql = $sql." AND tags LIKE '%".$tags[$i]."%'";
            }else{
                $sql = $sql." tags LIKE '%".$tags[$i]."%'";
                $cond = 1;
            }
        }
    }

    $sql = $sql." ORDER BY Date DESC";

    if($cond != 0){
            $_SESSION['pop'] = $sql;
            header("Location: ../results.php?Success=SearchExecuted");
            exit();
    }else{
        $_SESSION['pop'] = NULL;
        header("Location: ../results.php?EmptySearch");
        exit();
    }

    echo $sql;

}