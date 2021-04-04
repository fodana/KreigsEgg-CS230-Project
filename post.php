<?php
require 'includes/header.php';
if(!isset($_SESSION['uid'])){
    header('Location: login.php?error=mustBeSignedInToPost');
}
?>

<main class="outer-bg-cover">
    <link rel="stylesheet" href="styles/layout.css">
    <link rel="stylesheet" href="styles/post.css">

    <script>
        function triggered() {
            document.querySelector("#imgUpload").click();
        }

        function preview(e) {
            if (e.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.querySelector('#imgUpload').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(e.files[0]);
            }
        }
    </script>

    <div class="container"> 
        <div class="inner-bg-cover">
            <div class="row">
                <div class="my-auto container center-me" style="width:100%;">
                    <div>
                        <div class="post-form">
                            <form action="includes/post-helper.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group form-item" style="width:50%">
                                        <input type="text" class="form-control" name="title" id="product name" placeholder="Product Name">
                                    </div>
                                    <div class="form-group form-item" style="width:50%"> 
                                        <input type="int" class="form-control" name="price" id="price in" placeholder="Price">
                                    </div>
                                </div>
                                <div class="form-group form-item">
                                    <textarea class="form-control" id="desc" name="desc" cols="18" rows="6" placeholder="Description...&#10;Age...&#10;Condition..."></textarea>
                                </div>
                                <div class="custom-file was-validated">
                                    <input type="file" name="post-photo" id="imgUpload" required class="form-control">
                                    <label class="custom-file-label" for="imgUpload"></label>
                                    <div class="invalid-feedback">Upload image of what you're listing</div>
                                </div>
                                <div class="check-boxes">
                                    <div class="form-group row">
                                        <div class="check-col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="new" id="newBox">
                                                <label class="form-check-label" for="newBox">
                                                    New
                                                </label>
                                            </div>
                                        </div>
                                        <div class="check-col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="used" id="usedBox">
                                                <label class="form-check-label" for="usedBox">
                                                    Used
                                                </label>
                                            </div>
                                        </div>
                                        <div class="check-col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rig" id="rigBox">
                                                <label class="form-check-label" for="rigBox">
                                                    Full PC
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="check-col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="gpu" id="gpuBox">
                                                <label class="form-check-label" for="gpuBox">
                                                    Graphics Card
                                                </label>
                                            </div>
                                        </div>
                                        <div class="check-col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cpu" id="cpuBox">
                                                <label class="form-check-label" for="cpuBox">
                                                    CPU
                                                </label>
                                            </div>
                                        </div>
                                        <div class="check-col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="motherboard" id="moboBox">
                                                <label class="form-check-label" for="moboBox">
                                                    Motherboard
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="check-col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cooler" id="coolerBox">
                                                <label class="form-check-label" for="coolerBox">
                                                    CPU cooler
                                                </label>
                                            </div>
                                        </div>
                                        <div class="check-col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="psu" id="psuBox">
                                                <label class="form-check-label" for="psuBox">
                                                    Power Supply
                                                </label>
                                            </div>
                                        </div>
                                        <div class="check-col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="accessory" id="accBox">
                                                <label class="form-check-label" for="accBox">
                                                    Accessory
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="padding-top: 10px;">
                                    <button class="btn-out btn-lg submit-btn btn-block" name="post-submit" type="submit">Submit Listing</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</main>