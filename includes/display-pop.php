<script>
    function txtBox(input,sbm) {
        document.getElementById(input).className = "show";
        document.getElementById(sbm).className = "sbmshow";
    }
</script>

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


    //fetching from users admin info
    $uname = $_SESSION['uname'];
    $sql2 = "SELECT * FROM users WHERE uname='$uname'";
    $adminQuery = mysqli_query($conn, $sql2);
    $adminRow = mysqli_fetch_assoc($adminQuery);
    $admin = $adminRow['admin'];

    echo'<h5 class="results center-me">Search Results</h5>';

    if($admin){ //Check for admin, changes the cards to display 
        while($row = mysqli_fetch_assoc($query)){
            if($counter == 3){
                echo '
                <div class="row center-me">
                ';
                $counter = 0;
            }
            echo'
            <form action="includes/display-pop.php" method="post">
                <div class="card custom-card" style="width: 22rem;">
                    <img class="card-img-top format-img-size" src="'.$row['imagePath'].'" alt="'.$row['Title'].' picture">
                    <div class="card-body admin-Card">
                        <input class="show-btn" type="button" name="show-btn" value="Edit" onClick="txtBox(input,sbm)"/>
                        <h5 class="card-title">'.$row['Title'].'</h5>
                        <input class="hide" type="text" name="title-update" id="title-update" value="'.$row['Title'].'" />
                        <h5 class="card-title">$'.$row['Price'].'</h5>
                        <input class="hide" type="text" name="price-update" id="title-update" value="'.$row['Price'].'" />
                        <p class="card-text">'.$row['Description'].'</p>
                        <input class="hide" type="text" name="title-update" id="title-update" value="'.$row['Description'].'" />
                        <a href="#" class="btn btn-lg def-btn btn-lg position-relative">Request Seller Info</a>
                        <input class = "sbm" type="submit" name="submit" id="submit">
                    </div>
                </div>
            </form>
            ';
            if($counter == 3){
                echo '
                </div>
                ';
            }else
                $counter++;
        }


    }else{
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
                    <a href="#" class="btn btn-lg def-btn btn-lg position-relative">Request Seller Info</a>
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

if(isset($_POST['submit'])){
    $uname = $_SESSION['uname'];
    $newTitle = $_POST['title-update'];
    $newPrice = $_POST['price-update'];
    $newDescription = $_POST['description-update'];

    $sqlForUID = "SELECT * FROM listings WHERE (uname='$uname')";



    $sql = "UPDATE listings SET Title='$newTitle' Price='$newPrice' Description='$newDescription' WHERE lid='$lid'";
}
