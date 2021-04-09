<?php
session_start();


if($_SESSION['pop'] == NULL){
    Echo '<h5 class="results center-me">No Results, Please try ajusting your search parameters</h5>';
    Echo $_SESSION['uname'];
    $_SESSION['pop'] = "Default";
}else if($_SESSION['pop'] == "Default"){
    include_once 'includes/dbhandler.php';
    $sql = "SELECT * FROM listings ORDER BY Date DESC";
    //echo $sql;
    $counter = 3;
    $query = mysqli_query($conn, $sql);

    echo'<h5 class="results center-me">Search Results</h5>';
    while($row = mysqli_fetch_assoc($query)){
        if($counter == 3){
            echo '
            <div class="row center-me">
            ';
            $counter = 0;
        }
        echo'
        <div class="card custom-card" style="width: 22rem;">
            <a href=item.php?lid='.$row['lid'].'">
                <img class="card-img-top format-img-size" src="'.$row['imagePath'].'" alt="'.$row['Title'].' picture">
                <div class="card-body">
                    <h5 class="card-title">'.$row['Title'].'</h5>
                    <h5 class="card-title">$'.$row['Price'].'</h5>
                    <p class="card-text">'.$row['Description'].'</p>
                    <a href="#" class="btn btn-lg def-btn btn-lg position-relative">Request Seller Info</a>

                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                        <i onclick="this.style.color = \'#FF0000\'" id="heart" href="Favorited" class="fa fa-heart" style="font-size:30px"></i>

                </div>
            </a>
        </div>
        ';
        if($counter == 3){
            echo '
            </div>
            ';
        }else
            $counter++;
    }
    if($counter != 3)
        echo'
        </div>
        ';

}else{
    include_once 'includes/dbhandler.php';
    $sql = $_SESSION['pop'];
    //echo $sql;
    $counter = 3;
    $query = mysqli_query($conn, $sql);

    echo'<h5 class="results center-me">Search Results</h5>';
    while($row = mysqli_fetch_assoc($query)){
        if($counter == 3){
            echo '
            <div class="row center-me">
            ';
            $counter = 0;
        }
        echo'
        <div class="card custom-card" style="width: 22rem;">
            <img class="card-img-top format-img-size" src="'.$row['imagePath'].'" alt="'.$row['Title'].' picture">
            <div class="card-body">
                <h5 class="card-title">'.$row['Title'].'</h5>
                <h5 class="card-title">$'.$row['Price'].'</h5>
                <p class="card-text">'.$row['Description'].'</p>
                <div>
                    <a href="#" class="btn btn-lg def-btn btn-lg position-relative">Request Seller Info</a>
                </div>
            </div>
        </div>
        ';
        if($counter == 3){
            echo '
            </div>
            ';
        }else
            $counter++;
    }
    if($counter != 3)
        echo'
        </div>
        ';
}

