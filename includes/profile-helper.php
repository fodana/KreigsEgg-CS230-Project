<?php

require 'dbhandler.php';
session_start();

//defines upper bounds for profile pic file size
define('KB', 1024);
define('MB', 1048576);


if(isset($_POST['submit'])){
    $uname = $_SESSION['uname'];
    //reads new email submitted in profile page
    $newemail = $_POST['email-update'];
        //sets email value in the database to the newly entered email
        $sql = "UPDATE profiles SET email='$newemail' WHERE uname='$uname'";
        mysqli_query($conn, $sql);
        header("Location: ../profile.php?success=Updatedemail");
        exit();
    
}
if(isset($_POST['submitfname'])){
    $uname = $_SESSION['uname'];
    $newfname = $_POST['fname-update'];
        //sets firstname value in the database to the newly entered firstname
        $sql = "UPDATE profiles SET fname='$newfname' WHERE uname='$uname'";
        mysqli_query($conn, $sql);
        header("Location: ../profile.php?success=Updatedfname");
        exit();
    
}
if(isset($_POST['submitlname'])){
    $uname = $_SESSION['uname'];
    $newlname = $_POST['lname-update'];
        //sets the lastname value in the database to the newly entered lastname
        $sql = "UPDATE profiles SET lname='$newlname' WHERE uname='$uname'";
        mysqli_query($conn, $sql);
        header("Location: ../profile.php?success=Updatedlname");
        exit();
    
}
if(isset($_POST['submitphnum'])){
    $uname = $_SESSION['uname'];
    $newphnum = $_POST['phnum-update'];
        //sets the phone number in the database to the newly entered phone number
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
    
    //checks file extension of new profile picture
    $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $allowed = array('jpg','jpeg','png','svg');

    //case where filepath is not valid or cannot be found
    if($file_error !== 0){
        header("Location: ../profile.php?error=UploadError");
        exit();
    }
    //case where file extension of profile picture is not supported
    if(!in_array($ext, $allowed)){
        header("Location: ../profile.php?error=InvalidExtension");
        exit();
    }
    //case where file size of profile picture is too large
    if($file_size > 4*MB){
        header("Location: ../profile.php?error=FileSizeExceeded");
        exit();
    }

    else{
        
        $new_name = uniqid('',true).".".$ext;

        $destination = '../profiles/'.$new_name;
        //updates profile picture in database
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
