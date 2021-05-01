<?php 

include 'dbhandler.php';

$lid = $_GET['lid'];

$sqlAvg = "SELECT AVG(ratingnum) AS AVGRATE FROM reviews WHERE listingID='$lid'";

$sqlCount = "SELECT count(ratingnum) AS Total FROM reviews WHERE listingID='$lid';";

$query = mysqli_query($conn, $sqlAvg);

$query2 = mysqli_query($conn, $sqlCount);

$row = mysqli_fetch_array($query);

$row2 = mysqli_fetch_array($query);


$avg = round($row['AVGRATE'],1);



echo '<div class="container" style = "text-align: center;">
    <div class="container" style="margin-bottom: 10px;">'.stars($avg).'</div>
    <h1>Rating: '.$avg.'</h1>
    </div>';





function stars($av){

    $s = "";

    if ($av == 0) {

        for ($i=0; $i < 5; $i++) { 

            $s .= '<i class="fa fa-star fa-2x" style="color:grey"></i>';

        }  

    }

    for ($i=0; $i < floor($av); $i++) { 

        $s .= '<i class="fa fa-star fa-2x" style="color:goldenrod"></i>';

    }

    if (($av - floor($av)) > 0.4) {

        $s .= '<i class="fas fa-star-half fa-2x" style="color:goldenrod"></i>';

    }

    return $s;

}