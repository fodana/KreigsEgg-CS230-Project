<?php
    require 'includes/header.php';
?>

<main class="outer-bg-cover">
        <link rel="stylesheet" href="styles/listing.css">
        <div class="tag-form-pos tag-form">
            <h5 class="tag-text">Search By Tag</h5>
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
                                Full PCs
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="gpu" id="gpuBox">
                            <label class="form-check-label" for="gpuBox">
                                Graphics Cards
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="cpu" id="cpuBox">
                            <label class="form-check-label" for="cpuBox">
                                CPUs
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="motherboard" id="moboBox">
                            <label class="form-check-label" for="moboBox">
                                Motherboards
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="cooler" id="coolerBox">
                            <label class="form-check-label" for="coolerBox">
                                CPU Coolers
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="psu" id="psuBox">
                            <label class="form-check-label" for="psuBox">
                                Power Supplys
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
                    <div class="col-sm-8" style="margin-left: 20%; margin-top: 5%; margin-bottom: 0%;">
                        <button class="btn btn-lg def-btn btn-lg" style="padding: 5%;" name="tagSearch-submit" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="container">
            <div class="inner-bg-cover">
                <div class="container">
                    <?php
                    require "includes/display-pop.php"
                    ?>
                    </div>
                </div>
            </div>
        </div>

</main>