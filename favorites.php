<?php 
require 'includes/dbhandler.php';
require 'includes/header.php'; 
?>


<main class="outer-bg-cover">
    <link rel="stylesheet" href="styles/listing.css">
    <div class="container">
        <div class="inner-bg-cover">
            <div class="row">
                <?php
                    echo'<h5 class="results center-me">Favorites</h5>';

                    $uname = $_SESSION['uname'];
                    $sql = "SELECT * FROM favorites WHERE uname='$uname'";
                    $query = mysqli_query($conn, $sql);
                    

                    if(mysqli_num_rows($query) == 0){
                        echo'<h5 class="results center-me">No items favorited</h5>';
                    }
                    else{

                        while($lid = mysqli_fetch_assoc($query)){

                            $sql2 = "SELECT * FROM listings WHERE lid=".$lid['lid'];
                            $query2 = mysqli_query($conn, $sql2);

                            while($row = mysqli_fetch_assoc($query2)){

                                echo'
                                <div class="card custom-card" style="width: 22rem;">
                                    <form action="includes/favorites-helper.php" method="post">
                                        <a href=item.php?lid='.$row['lid'].'>
                                            <img class="card-img-top format-img-size" src="'.$row['imagePath'].'" alt="'.$row['Title'].' picture">
                                            <div class="card-body">
                                                <h5 class="card-title">'.$row['Title'].'</h5>
                                                <h5 class="card-title">$'.$row['Price'].'</h5>
                                                <p class="card-text">'.$row['Description'].'</p>
                                            
                                                <input type="hidden" name="lid" value="'.$row['lid'].'">
                                                <button name="fav-delete" type="submit"><img src="images/heart.png" width="24" height="24"></button>

                                            </div>
                                        </a>
                                    </form> 
                                </div>
                                ';
                            }
                        }    
                    }
                
                ?>
            </div>
        </div>
    </div>
</main>
