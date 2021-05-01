<?php
session_start();

// NULL case means empty search
if($_SESSION['pop'] == NULL){
    Echo '<h5 class="results center-me">No Results, Please try ajusting your search parameters</h5>';
    Echo $_SESSION['uname'];
    $_SESSION['pop'] = "Default";
// Default search case is all listings new -> old
}else if($_SESSION['pop'] == "Default"){
    include_once 'includes/dbhandler.php';
    $sql = "SELECT * FROM listings ORDER BY Date DESC";
    //echo $sql;
    $counter = 3;
    $query = mysqli_query($conn, $sql);
    // print results with specific organization, logic makes rows of 3 cards
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
            <form action="includes/favorites-helper.php" method="post">
                 <a href=item.php?lid='.$row['lid'].'>
                    <img class="card-img-top format-img-size" src="'.$row['imagePath'].'" alt="'.$row['Title'].' picture">
                    <div class="card-body">
                        <h5 class="card-title">'.$row['Title'].'</h5>
                        <h5 class="card-title">$'.$row['Price'].'</h5>
                        <p class="card-text">'.$row['Description'].'</p>
                       
                        
                        <a href="review.php?lid='.$row['lid'].'" class="btn btn-sm def-btn btn-sm position-relative">Seller Reivews</a>
                        
                        <input type="hidden" name="lid" value="'.$row['lid'].'">
                        <button name="fav-submit" type="submit"><img src="images/heart.png" width="24" height="24"></button>

                    </div>
                </a>
            </form> 
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
// Final Case means exisitng search
}else{
    include_once 'includes/dbhandler.php';
    $sql = $_SESSION['pop'];
    //echo $sql;
    $counter = 3;
    $query = mysqli_query($conn, $sql);
    // print results with specific organization, logic makes rows of 3 cards
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
                <p class="card-text">'.$row['Description'].'</p
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
