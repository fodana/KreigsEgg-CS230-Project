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

if(isset($_SESSION['uid'])){
    $uid = $_SESSION['uid'];
    $sqlpro = "SELECT * FROM profiles WHERE uname='$uid';";
    $res = mysqli_query($conn, $sqlpro);
    $row = mysqli_fetch_array($res);
    $admin = $row['admin'];
    $uname = $row['uname'];
}

?>

<main class="outer-bg-cover">
    <link rel="stylesheet" href="styles/login.css">
    <script>
    function txtBox(input,sbm) {
        document.getElementById(input).className = "show";
        document.getElementById(sbm).className = "sbmshow";
    }
    </script>
    <div class="container">
        <div class="inner-bg-cover">
            <img src=<?php echo $img; ?>/>
            <form action = "includes/item-helper.php" method="POST">
                <h3><?php echo $title; ?></h3>
                <input class="show-btn" type="button" name="show-btn" value="Edit" onclick="txtBox(input,sbm)" />
                <p><?php echo $price; ?></p>
                <p><?php echo $desc; ?></p>
            </form>
            

        </div>
    </div>

</main>