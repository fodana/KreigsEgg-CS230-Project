<?php

$servename = "localhost";
$DBuname = "phpmyadmin";
$DBPass = "cherryCokeisgr8";
$DBname = "kreigeggDB";

$conn = mysqli_connect($servename, $DBuname, $DBPass, $DBname);

if (!$conn) {
    die("Connection failed...".mysqli_connect_error());
    # code...
}
