<?php
    require 'includes/header.php';
    require 'includes/dbhandler.php';

    if(isset($_SESSION['uid'])){
    $prof_user = $_SESSION['uname'];
    $sqlpro = "SELECT * FROM profiles WHERE uname='$prof_user';";
    $res = mysqli_query($conn, $sqlpro);
    $row = mysqli_fetch_array($res);
    $admin == FALSE;
    if($row['admin'] == 1){
        $admin = TRUE;
    }
    }
?>

<script>
    function txtBox(input,sbm) {
        document.getElementById(input).className = "show";
        document.getElementById(sbm).className = "sbmshow";
    }
</script>



<main class="outer-bg-cover">
    <link rel="stylesheet" href="styles/listing.css">
    <div class="container">
        <div class="inner-bg-cover">
            <div class="center-me">
                <img class="d-block mx-auto" src="images/logo.png" alt="Logo">
            </div>
            <div class="container">
                <div class="row center-me">
                    <div class="card my-cards" style="width: 22rem;">
                        <img class="card-img-top" src="images/pan.jpeg" alt="Card image cap">
                        <div class="card-body">
                            
                            <h5 class="card-title">Frying Pan</h5>
                            <button type="submit" class="admin-edit">test</button>
                            <p class="card-text">Haha look at this cool frying pan</p>
                            <a href="#" class="btn btn-lg def-btn btn-lg">Request Seller Info</a>
                        </div>
                    </div>
                    <div class="card my-cards" style="width: 22rem;">
                        <img class="card-img-top" src="images/pan.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Frying Pan</h5>
                            <p class="card-text">Haha look at this cool frying pan</p>
                            <a href="#" class="btn btn-lg def-btn btn-lg">Request Seller Info</a>
                        </div>
                    </div>
                    <div class="card my-cards" style="width: 22rem;">
                        <img class="card-img-top" src="images/pan.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Frying Pan</h5>
                            <p class="card-text">Haha look at this cool frying pan</p>
                            <a href="#" class="btn btn-lg def-btn btn-lg">Request Seller Info</a>
                        </div>
                    </div>
                </div>
                <div class="row center-me">
                    <div class="card my-cards" style="width: 22rem;">
                        <img class="card-img-top" src="images/pan.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Frying Pan</h5>
                            <p class="card-text">Haha look at this cool frying pan</p>
                            <a href="#" class="btn btn-lg def-btn btn-lg">Request Seller Info</a>
                        </div>
                    </div>
                    <div class="card my-cards" style="width: 22rem;">
                        <img class="card-img-top" src="images/pan.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Frying Pan</h5>
                            <p class="card-text">Haha look at this cool frying pan</p>
                            <a href="#" class="btn btn-lg def-btn btn-lg">Request Seller Info</a>
                        </div>
                    </div>
                    <div class="card my-cards" style="width: 22rem;">
                        <img class="card-img-top" src="images/pan.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Frying Pan</h5>
                            <p class="card-text">Haha look at this cool frying pan</p>
                            <a href="#" class="btn btn-lg def-btn btn-lg">Request Seller Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>