<?php

if (isset($_POST['post-submit'])) {

    require 'dbhandler.php';
    session_start();

    define('KB', 1024);
    define('MB', 1048576);

    $username = $_SESSION['uname'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    $date = date('Y-m-d H:i:s');

    $file = $_FILES['post-photo'];

    $file_name = $file['name'];
    $file_temp = $file['tmp_name'];
    $file_error = $file['error'];
    $file_size = $file['size'];

    $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $allowed = array('jpg', 'jpeg', 'png', 'svg');

    if($file_error == 0){
        if(in_array($ext, $allowed)){
            if($file_size < 8*MB){
                $new_name = uniqid('',true).".".$ext;
                $destination = 'profiles/'.$new_name;
                move_uploaded_file($file_temp, $destination);

                $sql = "INSERT INTO listings (uname, Title, Description, Date, Price, imagePath) VALUES (?, ?, ?, ?, ?, ?);";
                $stmt = mysqli_stmt_init($conn);
                if(mysqli_stmt_prepare($stmt, $sql)){
                    mysqli_stmt_bind_param($stmt, "ssssss", $username, $title, $desc, $date, $price, $destination);
                    mysqli_stmt_execute($stmt);
                    header('Location: ../listings.php?success');
                }else{
                    header("Location: ../post.php?error=sqlInjection");
                    exit();
                }

            }else{
                header("Location: ../post.php?error=FilesTooPowerful");
                exit();
            }
        }else{
            header("Location: ../post.php?error=InvalidFileType");
            exit();
        }
    }else{
        header("Location: ../post.php?error=UploadError");
        exit();
    }
}