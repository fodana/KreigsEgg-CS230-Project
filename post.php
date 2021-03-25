<?php
require 'includes/header.php';
?>

<main class="outer-bg-cover">
    <link rel="stylesheet" href="styles/layout.css">
    <link rel="stylesheet" href="styles/post.css">

    <div class="container"> 
        <div class="inner-bg-cover">
            <div class="row">
                <div class="my-auto container center-me" style="width:100%;">
                    <div>
                        <div class="post-form">
                            <form action="includes/post-helper.php" method="post">
                                <div class="row">
                                    <div class="form-group form-item" style="width:50%">
                                        <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Product Name">
                                    </div>
                                    <div class="form-group form-item" style="width:50%"> 
                                        <input type="int" class="form-control" name="price" id="exampleFormControlInput1" placeholder="Price">
                                    </div>
                                </div>
                                <div class="form-group form-item">
                                    <textarea class="form-control" id="desc" name="desc" cols="18" rows="6" placeholder="Description...&#10;Age...&#10;Condition..."></textarea>
                                </div>
                                <div class="custom-file was-validated">
                                    <input type="file" class="custom-file-input" name="photo" id="imgUpload" required>
                                    <label class="custom-file-label" for="imgUpload"></label>
                                    <div class="invalid-feedback">Upload image of what you're listing</div>
                                </div>

                                

                                <div style="padding-top: 10px;">
                                    <button class="btn-out btn-lg submit-btn btn-block" name="signup-submit" type="submit">Submit Listing</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</main>