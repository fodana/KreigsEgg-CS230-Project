<?php

if (isset($_POST['question-submit'])) {
    require 'dbhandler.php';

    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $question = $_POST['question'];
}