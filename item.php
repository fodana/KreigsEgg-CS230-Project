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
    <link rel="stylesheet" href="styles/item.css">
    <script>
    function txtBox(input,sbm) {
        if(document.getElementById(input).className == "hide"){
            document.getElementById(input).className = "show";
            document.getElementById(sbm).className = "sbmshow";
        }else{
            document.getElementById(input).className = "hide";
            document.getElementById(sbm).className = "sbm"; 
        }
    }
    </script>
    <div class="container">
        <div class="inner-bg-cover">
            <img src=<?php echo $img; ?>/>
            <script>
                var input1 = "title-update";
                var input2 = "price-update";
                var input3 = "desc-update";
                var sbm = "submit-updates"
                </script>
            <form action = "includes/item-helper.php" method="POST">
            <input class="show-btn" type="button" name="show-btn" value="Edit" onclick="txtBox(input1,sbm);txtBox(input2, sbm); txtBox(input3, sbm)" />
                <h3><?php echo $title; ?></h3>
                <input class="stayHidden" name="listingID" id="listingID" value=<?php echo $lid?>>
                <input class="hide" type="text" name="title-update" id="title-update" value=<?php echo $title ?>>
                <p><?php echo $price; ?></p>
                <input class="hide" type="text" name="price-update" id="price-update" value=<?php echo $price ?>>
                <p><?php echo $desc; ?></p>
                <input class="hide" type="text" name="desc-update" id="desc-update" value=<?php echo $desc ?>>
                <input class = "sbm" type="submit" name="submit-updates" id="submit-updates"/>
            </form>
            

        </div>
    </div>

</main>