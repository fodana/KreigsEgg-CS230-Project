<?php

if (isset($_POST['tagSearch-submit'])) {
    require 'dbhandler.php';
    session_start();

    // Tags that exist in the DB and on the search form
    $tags = array("new", "used", "rig", "gpu", "cpu", "motherboard", "cooler", "psu", "accessory");
    // Stub out SQL query
    $sql = "SELECT * FROM listings WHERE";
    $cond = 0;
    
    // For Loop checks if each tag has been selected and builds a query based on number of selected tags
    for($i=0; $i<sizeof($tags); $i++){
        if(isset($_POST[$tags[$i]])){
            if($cond != 0){
                // Add another condtion to SQL statement
                $sql = $sql." AND tags LIKE '%".$tags[$i]."%'";
            }else{
                // Add first condition to SQL statement
                $sql = $sql." tags LIKE '%".$tags[$i]."%'";
                $cond = 1;
            }
        }
    }
    // Order results new -> old
    $sql = $sql." ORDER BY Date DESC";
    // (Values Added to SQL stmt != 0) ? (sql pushed to SESSION) : (NULL empty search field pushed to SESSION)
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