<?php
require 'dbhandler.php';

//insert into database
if (isset($_POST['fav-submit'])) {
    session_start();

    $uname = $_SESSION['uname'];
    $lid = $_POST['lid'];

    $sql = "INSERT INTO favorites (lid, uname) VALUES ('$lid', '$uname')";
    mysqli_query($conn, $sql);

    header("Location: ../listings.php?success=itemFavorited");
    exit();


}

//delete from database
if(isset($_POST['fav-delete'])){
    session_start();

    $uname = $_SESSION['uname'];
    $lid = $_POST['lid'];

    $sql = "DELETE FROM favorites WHERE lid=$lid";
    mysqli_query($conn, $sql);

    header("Location: ../favorites.php?success=favoriteDeleted");
    exit(); 
}