<?php

require 'includes/dbhandler.php';

$uname = $_SESSION['uname'];
$sql = "SELECT * FROM messages WHERE receiver='$uname' ORDER BY time DESC";
$query = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($query)){
    $message = $row['message'];
    echo "$message";

}