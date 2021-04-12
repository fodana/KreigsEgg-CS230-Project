<?php

if (isset($_POST['question-submit'])) {
    require 'dbhandler.php';

    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $question = $_POST['question'];

    $sql = "INSERT INTO SupportQuestions (`fname`, `lname`, `email`, `question`) VALUES ('$firstName', '$lastName', '$email','$question');";
    mysqli_query($conn, $sql);
    header("Location: ../support_page_faq.php?support=success");
    exit();
} 