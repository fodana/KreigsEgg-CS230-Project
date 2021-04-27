<?php 
require_once 'dbhandler.php';
date_default_timezone_set('UTC');

if(isset($_POST['comment-submit'])) {
    session_start();
    $uname = $_SESSION['uname'];
    $date = date('Y-m-d H:i:s');
    $comment = $_POST['comment'];
    $lid = $_POST['lid'];

    $sql = "INSERT INTO comments (lid, uname, commtext, commdate, status) VALUES ('$lid', '$uname', '$comment', '$date', 1);";
    mysqli_query($conn, $sql);

    header("Location: ../item.php?lid=$lid");
    exit();
}