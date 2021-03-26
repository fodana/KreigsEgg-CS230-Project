<?php

if (isset($_POST['signup-submit'])) {

    require 'dbhandler.php';

    $username = $_POST['uname'];
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phonenum'];
    $password = $_POST['pwd'];
    $password_rep = $_POST['con-pwd'];

    if($password !== $password_rep){
        header("Location: ../signup.php?error=mismatchedPasswords");
        exit();
    }
    else{
        $sql = "SELECT uname FROM users WHERE uname=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../signup.php?error=sqlInjection");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $check = mysqli_stmt_num_rows($stmt);

            if($check>0){
                header("Location: ../signup.php?error=UsernameTaken");
                exit();
            }
            else{
                $sql = "INSERT INTO users (fname, lname, email, uname, phnum, password) VALUES(?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                 if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../signup.php?error=sqlInjection");
                    exit();
                }
                else{
                    $hashed = password_hash($password, PASSWORD_BCRYPT);
                    mysqli_stmt_bind_param($stmt, "ssssss", $firstName, $lastName, $email, $username, $phoneNumber, $hashed);
                    echo 
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);

                    $sqlImg = "INSERT INTO profiles (pid, uname, fname, lname, email, phnum, profpic) VALUES (0,'$username', '$firstName', '$lastName', '$email','$phoneNumber','../images/default.png')";
                    mysqli_query($conn, $sqlImg);

                    header("Location: ../login.php?signup=success");
                    exit();
                }
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }  
} 
else{
     header("Location: ../signup.php");
     exit();   
}