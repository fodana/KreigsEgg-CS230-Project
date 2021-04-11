<?php
require 'dbhandler.php';
session_start();

if(isset($_POST['submit-updates'])){
    $newTitle = $_POST['title-update'];
    $newPrice = $_POST['price-update'];
    $newDesc = $_POST['desc-update'];
    $lid = $_POST['listingID'];

    $sql = "UPDATE listings SET  Price='$newPrice' WHERE lid='$lid'";
    mysqli_query($conn, $sql);
    header("Location: ../item.php?lid=$lid&success=UpdateSuccess");
    
} 

//Title='$newTitle', Price='$newPrice', Description='$newDesc'