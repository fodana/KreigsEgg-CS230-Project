<?php
require 'dbhandler.php';
session_start();

if(isset($_POST['submit-updates'])){
    $newTitle = $_POST['title-update'];
    $newPrice = $_POST['price-update'];
    $newDesc = $_POST['desc-update'];
    $lid = $_POST['listingID'];

    $sql = "UPDATE listings SET  Title='$newTitle' WHERE lid='$lid'";
    $sql2 = "UPDATE listings SET  Price='$newPrice' WHERE lid='$lid'";
    $sql3 = "UPDATE listings SET  Description='$newDesc' WHERE lid='$lid'";
    mysqli_query($conn, $sql);
    mysqli_query($conn, $sql2);
    mysqli_query($conn, $sql3);
    header("Location: ../item.php?lid=$lid&success=UpdateSuccess");
    
} 

