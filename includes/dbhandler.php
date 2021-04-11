<?php

$servename = "localhost";
$DBuname = "phpmyadmin";
$DBPass = "password27";
$DBname = "kreigeggDB";

$conn = mysqli_connect($servename, $DBuname, $DBPass, $DBname);

if (!$conn) {
    die("Connection failed...".mysqli_connect_error());
    # code...
}
