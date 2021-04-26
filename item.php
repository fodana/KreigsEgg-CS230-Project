<?php
require 'includes/header.php';
require 'includes/dbhandler.php';

session_start();

$lid = $_GET['lid'];
$sql = "SELECT * FROM listings WHERE lid='$lid'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);



$title = $row['Title'];
$img = $row['imagePath'];
$desc = $row['Description'];
$price = $row['Price'];
$author = $row['uname'];

$sql2 = "SELECT * FROM profiles WHERE uname='$author'";
$query2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($query2);

$message = "User ".$row['uname']." has sent you their seller info ";


$admin = 0;


if(isset($_SESSION['uname'])){
    $uname = $_SESSION['uname'];
    $sqlpro = "SELECT * FROM users WHERE uname='$uname';";
    $res = mysqli_query($conn, $sqlpro);
    $row = mysqli_fetch_array($res);
    $admin = $row['admin'];
    $_SESSION['lid'] = $lid;
    $_SESSION['author'] = $author;
    $_SESSION['title'] = $title;
}



?>

<main class="outer-bg-cover">
    <link rel="stylesheet" href="styles/item.css">
    <script>
    function req(){
        document.getElementById("seller-info").className = "show-info";
    }
    function txtBox(input,sbm) {      //toggles between the edit boxes showing or not
        if(document.getElementById(input).className == "hide"){
            document.getElementById(input).className = "show";
            document.getElementById(sbm).className = "sbmshow";
        }else{
            document.getElementById(input).className = "hide";
            document.getElementById(sbm).className = "sbm"; 
        function req() {
            document.getElementById("seller-info").className = "show-info";

        }

        function txtBox(input, sbm) {
            if (document.getElementById(input).className == "hide") {
                document.getElementById(input).className = "show";
                document.getElementById(sbm).className = "sbmshow";
            } else {
                document.getElementById(input).className = "hide";
                document.getElementById(sbm).className = "sbm";
            }
        }

        var input1 = "title-update";
        var input2 = "price-update";
        var input3 = "desc-update";
        var sbm = "submit-updates";
    </script>


    <?php

    if($admin || strcmp($author, $uname) == 0){ //Checks if the session user is an admin or is the author of the post
        echo'
        <div class="container">
            <div class="inner-bg-cover">
                    
                    <img src='.$img.'>
                
                <form action = "includes/item-helper.php" method="POST">
                <input class="show-btn" type="button" name="show-btn" value="Edit" onclick="txtBox(input1,sbm);txtBox(input2, sbm); txtBox(input3, sbm)" />
                    <div class = "inner-text">    
                        <h3>'.$title.'<h3>
                        <input class="stayHidden" name="listingID" id="listingID" value='.$lid.'>
                        <input class="hide" type="text" name="title-update" id="title-update" value="'.$title.'">
                        <p>Price: '.$price.'</p>
                        <input class="hide" type="text" name="price-update" id="price-update" value="'.$price.'">
                        <p>Description: '.$desc.'</p>
                        <textarea class="hide" type="text" rows="10" cols="25" name="desc-update" id="desc-update">'.$desc.'</textarea>
                        <input class = "sbm" type="submit" name="submit-updates" id="submit-updates">
                    </div>
                </form>
                

            </div>
        </div>';
    }else{ //case that it is just a normal user 
        echo'
        <div class="container">
            <div class="inner-bg-cover">
                <div class = "inner-text">    
                   
                    <img src='.$img.'/>
                
                    <h3  >'.$title.'</h3>

                    <p>Price: '.$price.'</p>

                    <p>Description: '.$desc.'</p>

                    <form action = "includes/item-helper.php" method="POST">
                    <button class="btn btn-lg def-btn btn-lg position-relative"  type = "submit" id="infoSubmit" name = "infoSubmit" onclick = "req();"> Share Contact Info </button>   
                    <div class = "seller-info" id = "seller-info">
                        <h5>Contact Information Sent! </h3> 
                    </div>
                    </div>
                    </form>
            </div>
        </div>';
    }
    ?>
    <div class="container">
        <div class="inner-bg-cover">
            <div class="container" align="center" style="max-width: 800px;">
                <div class="my-auto">
                    <form id="comment-form" action="includes/item-helper.php" method="post">
                        <div class="form-group" style="margin-top: 15px" ;>
                            <h1 style="font-size: 25px; color: black;">Comments</h1>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="question" name="question" cols="18" rows="6"
                                placeholder="Enter comment here . . ."></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-outline-danger" type="submit" name="comment-submit"
                                id="comment-submit" style="width: 100%">Comment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>