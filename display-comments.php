<?php

$servename = "localhost";
$DBuname = "phpmyadmin";
$DBPass = "";
$DBname = "kreigeggDB";

$conn = mysqli_connect($servename, $DBuname, $DBPass, $DBname);

if (!$conn) {
    die("Connection failed...".mysqli_connect_error());
    # code...
}

$lid = $_GET['lid'];
$sql = "SELECT * FROM comments WHERE lid='$lid'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $uname = $row['uname'];
        $propic = "SELECT profpic FROM profiles WHERE uname='$uname';";
        $res = mysqli_query($conn, $propic);
        $picpath = mysqli_fetch_assoc($res);
        echo '<div class="card mx-auto" style="width: 85%; padding: 5px; margin-top: 10px;">
        <div class="media">
            <img class="mr-3" src="'.$picpath['profpic'].'" style="max-width: 75px; max-height: 75px; border-radius: 50%;">
            <div class="media-body">
                <h4 class="mt-0">'.$row['uname'].'</h4>
                <p>'.$row['commdate'].'</p>
                <p>'.$row['commtext'].'</p>
            </div>
        </div>
        </div>';
    }
}
else {
    echo '<h5 style="text-align: center;"> No comments yet! Be the first!</h5>';
}