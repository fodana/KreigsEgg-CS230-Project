<?php

if (isset($_POST['search-submit'])) {

    require 'dbhandler.php';
    session_start();

    $param = $_POST['search'];
    // Split search parameter into words
    $param_list = explode(" ", $param, 5);
    // Stub Out SQL statement to get rows from Listings
    $sql = "SELECT * FROM listings WHERE";
    // Checker Variable to make sure the search field had content
    $cond = 0;
    // Set for Loop length
    $totalCond = sizeof($param_list);


    for($i = 0; $i<$totalCond; $i++){
        if($cond == 1){
            // Add another item to search query
            $sql = $sql." AND title LIKE '%".$param_list[$i]."%'";
        }
        else{
            // Add first item to search query
            $sql = $sql." title LIKE '%".$param_list[$i]."%'";
            $cond = 1;
        }
    }

    // Sort Results new -> old
    $sql = $sql." ORDER BY Date DESC";
    // Send regular query to session and reload results page
    if($cond != 0){
            $_SESSION['pop'] = $sql;
            header("Location: ../results.php?Success=SearchExecuted");
            exit();
    }else{
        // Empty Search case
        $_SESSION['pop'] = NULL;
        header("Location: ../results.php?EmptySearch");
        exit();
    }
 // No Submit case   
}else{
    header("Location: ../#");
    exit();
}