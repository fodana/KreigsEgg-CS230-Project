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
if(isset($_POST['infoSubmit'])){
    echo'test';
    // no clue how to read data from the item.php class. All we have to do 
    // is get that user name and then reference database for phnum + email.
    $username = $_POST['.$row['.uname.'].'];
    //$sql = get phnum and email from users database using $uname of contact info sender;
    $phnum = $_POST[$row['phnum']];
    $email = $_POST[$row['email']];
    echo'$username';
    $receipt = $_POST[$row2['uname']];
    $message = "User ".$username." has sent you their seller info ";
    $sql = "INSERT INTO messages (uname, message, receiver,phnum,email) VALUES ('$username', '$message', '$receipt','$phnum','$email')";
    mysqli_query($conn, $sql);
    
    
    header("Location: ../item.php?messageSendSuccess");
}

