<?php
if (isset($_POST['login-submit'])) {

    require 'dbhandler.php';

    $uname = $_POST['uname-email'];
    $password = $_POST['pwd'];


    if(empty($uname) || empty($password)){
        header("Location: ../login.php?error=EmptyField");
        exit();
    }

    $sql = "SELECT * FROM users WHERE uname=? OR email=?";
    $stmt = mysqli_stmt_init($conn);
    //sql injection check
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../login.php?error=sqlInjection");
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt, "ss", $uname, $uname);
        mysqli_stmt_execute($stmt);

        $reslut = mysqli_stmt_get_result($stmt);
        $data = mysqli_fetch_assoc($reslut);

        if(empty($data)){
            header("Location: ../login.php?error=userDNE");
            exit();
        }
        else{
            $pcheck = password_verify($password, $data['password']);
            if($pcheck == true){
                session_start();
                $_SESSION['uid'] = $data['uid'];
                $_SESSION['fname'] = $data['fname'];
                $_SESSION['uname'] = $data['uname'];
                $_SESSION['pop'] = "Default";

                header("Location: ../listings.php?success=login");
                exit();
            }
            else{
                header("Location: ../login.php?error=incorrectPassword");
                exit();
            }
        }
    }
}
else{
     header("Location: ../login.php");
     exit();   
}