<?php
require 'includes/header.php';
require 'includes/dbhandler.php';

$lid = $_GET['lid'];
$sql = "SELECT * FROM listings WHERE lid='$lid'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);

echo $lid;

$title = $row['Title'];
$img = $row['imagePath'];
$desc = $row['Description'];
$price = $row['Price'];



?>

<main class="outer-bg-cover">
    <link rel="stylesheet" href="styles/login.css">
    <div class="container">
        <div class="inner-bg-cover">
            <img src=<?php echo $img; ?>/>
            <h3><?php echo $title; ?></h3>
            <p><?php echo $price; ?></p>
            <p><?php echo $desc; ?></p>

        </div>
    </div>

</main>