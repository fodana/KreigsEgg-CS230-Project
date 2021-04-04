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
        <div class="tag-form-pos tag-form">
            <h5 class="tag-text">Search by Tag</h5>
            <form action="includes/tag-helper.php" method="post">
                <div class="form-group row">
                    <div class="col-sm-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="new" id="newBox">
                            <label class="form-check-label" for="newBox">
                                New
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="used" id="UsedBox">
                            <label class="form-check-label" for="UsedBox">
                                Used
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="rig" id="towerBox">
                            <label class="form-check-label" for="towerBox">
                                Full PC's
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="gpu" id="gpuBox">
                            <label class="form-check-label" for="gpuBox">
                                Graphics Card's
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="cpu" id="cpuBox">
                            <label class="form-check-label" for="cpuBox">
                                CPU's
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="motherboard" id="moboBox">
                            <label class="form-check-label" for="moboBox">
                                Motherboard's
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="cooler" id="coolerBox">
                            <label class="form-check-label" for="coolerBox">
                                CPU Cooler's
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="psu" id="psuBox">
                            <label class="form-check-label" for="psuBox">
                                Power Supply's
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="accessory" id="accBox">
                            <label class="form-check-label" for="accBox">
                                Accessories
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8">
                        <button class="btn btn-lg def-btn btn-lg" style="padding: 2.1%;" name="tagSearch-submit" type="submit">Submit Listing</button>
                    </div>
                </div>
            </form>
        </div>
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