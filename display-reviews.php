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



$item = $_GET['lid'];



$sql = "SELECT * FROM reviews WHERE listingID ='$item'";



$result = mysqli_query($conn, $sql);



if(mysqli_num_rows($result)>0){

    while($row = mysqli_fetch_assoc($result)){

        $uname = $row['uname'];

        $propic = "SELECT profpic FROM profiles WHERE uname = '$uname';";

        $res = mysqli_query($conn, $propic);

        $picpath = mysqli_fetch_assoc($res);



        echo '<div class="card mx-auto" style="width: 30%; padding: 5px; margin-bottom: 10px;">

        <div class="media">

            <img class="mr-3" src="'.$picpath.['profpic'].'" style="max-width: 75px; max-height: 75px; border-raduis: 50%">

        <div class="media-body">

          <h4 class="mt-0">'.$row['uname'].'</h4>

          <h5>Rating: '.$row['ratingnum'].'</h5>

          <p>'.$row['revdate'].'</p>

          <p>'.$row['reviewtext'].'</p>

        </div>

      </div>

        

        

        </div>';

    }

}

else{

    echo '<h5 style="text-align: center;"> Be the first to review!</h5>';

    



}