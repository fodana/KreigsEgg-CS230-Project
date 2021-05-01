<?php
require 'dbhandler.php';
session_start();

if(isset($_POST['submit-updates'])){
    
    
    
    $newTitle = $_POST['title-update'];
    $newPrice = $_POST['price-update'];
    $newDesc = $_POST['desc-update'];
    $lid = $_POST['listingID'];

    $sql1 = "UPDATE listings SET  Title='$newTitle' WHERE lid='$lid'";
    $sql2 = "UPDATE listings SET  Price='$newPrice' WHERE lid='$lid'";
    $sql3 = "UPDATE listings SET  Description='$newDesc' WHERE lid='$lid'";
    mysqli_query($conn, $sql1);
    mysqli_query($conn, $sql2);
    mysqli_query($conn, $sql3);
    header("Location: ../item.php?lid=$lid&success=UpdateSuccess");
    
} 
if(isset($_POST['infoSubmit'])){
    $lid = $_SESSION['lid']; //listing id in order to preserve the GET functionality
    $requester = $_SESSION['uname']; //person requesting info's username
    $title = $_SESSION['title']; //title of listing
    $receiver = $_SESSION['author']; //person receiving the request's username

    $sql = "SELECT * FROM users WHERE uname='$requester';";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($res);
    //Contact info for requester
    $phnum = $row['phnum'];
    $email = $row['email'];

    
    
    $message = $message = "$requester has expressed interest in your listing \"$title\". Their contact info is as follows\n Email: $email \n Phone Number: $phnum";
    $sql = "INSERT INTO messages (requester, receiver, message) VALUES ('$requester', '$receiver','$message')";
    mysqli_query($conn, $sql);
    
    
    header("Location: ../item.php?lid=$lid&requestSuccess");
}

