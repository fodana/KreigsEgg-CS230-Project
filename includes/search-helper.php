<?php

if (isset($_POST['search-submit'])) {

    require 'dbhandler.php';
    session_start();

    $param = $_POST['search'];
    $param_list = explode(" ", $param, 5);
    $sql = "SELECT * FROM listings WHERE";
    $cond = 0;
    $totalCond = sizeof($param_list);


    for($i = 0; $i<$totalCond; $i++){
        if($cond == 1){
            $sql = $sql." AND title LIKE '%".$param_list[$i]."%'";
        }
        else{
            $sql = $sql." title LIKE '%".$param_list[$i]."%'";
            $cond = 1;
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
    
}else{
    header("Location: ../#");
    exit();
}