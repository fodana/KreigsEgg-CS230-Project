<?php

require 'dbhandler.php';
session_start();

define('KB', 1024);
define('MB', 1048576);


if(isset($_POST['submit'])){
    $uname = $_SESSION['uname'];
    $newemail = $_POST['email-update'];
    
        $sql = "UPDATE profiles SET email='$newemail' WHERE uname='$uname'";
        mysqli_query($conn, $sql);
        header("Location: ../profile.php?success=Updatedemail");
        exit();
    
}
if(isset($_POST['submitfname'])){
    $uname = $_SESSION['uname'];
    $newfname = $_POST['fname-update'];
    
        $sql = "UPDATE profiles SET fname='$newfname' WHERE uname='$uname'";
        mysqli_query($conn, $sql);
        header("Location: ../profile.php?success=Updatedfname");
        exit();
    
}
if(isset($_POST['submitlname'])){
    $uname = $_SESSION['uname'];
    $newlname = $_POST['lname-update'];
    
        $sql = "UPDATE profiles SET lname='$newlname' WHERE uname='$uname'";
        mysqli_query($conn, $sql);
        header("Location: ../profile.php?success=Updatedlname");
        exit();
    
}
if(isset($_POST['submitphnum'])){
    $uname = $_SESSION['uname'];
    $newphnum = $_POST['phnum-update'];
    
        $sql = "UPDATE profiles SET phnum='$newphnum' WHERE uname='$uname'";
        mysqli_query($conn, $sql);
        header("Location: ../profile.php?success=Updatedphnum");
        exit();
    
}

if(isset($_POST['prof-submit'])){

    $uname = $_SESSION['uname'];
    $file = $_FILES['prof-image'];
    $file_name = $file['name'];
    $file_tmp_name = $file['tmp_name'];
    $file_error = $file['error'];
    $file_size = $file['size'];

    $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $allowed = array('jpg','jpeg','png','svg');

    if($file_error !== 0){
        header("Location: ../profile.php?error=UploadError");
        exit();
    }

    if(!in_array($ext, $allowed)){
        header("Location: ../profile.php?error=InvalidExtension");
        exit();
    }

    if($file_size > 4*MB){
        header("Location: ../profile.php?error=FileSizeExceeded");
        exit();
    }

    else{
        $new_name = uniqid('',true).".".$ext;

        $destination = 'profiles/'.$new_name;

        $sql = "UPDATE profiles SET profpic='$destination' WHERE uname='$uname'";
    
        mysqli_query($conn, $sql);
        move_uploaded_file($file_tmp_name, $destination);
        header("Location: ../profile.php?success=ProfileUpdated");
        exit();
    
    }



}else{
    header("Location: ../profile.php");
    exit();

}
