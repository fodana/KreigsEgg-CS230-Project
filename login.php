<?php
require "includes/header.php";
?>

<main class="outer-bg-cover">
    <link rel="stylesheet" href="styles/login.css">
    <div class="container">
        <div class="row inner-bg-cover">
            <div class="center-me">
                <img class="d-block mx-auto" src="images/logo.png" alt="Logo">
            </div>
            <div class="center-me">
                <div>
                    <div class="signin-form">
                        <form action="includes/login-helper.php" method="post">
                            <div class="white-text">
                                <h1 class="h3 mb-3 font-weight-normal">Sign In</h1>
                            </div>
                            <input type="text" class="form-control" name="uname-email" placeholder="Username/Email"
                                required autofocus>

                            <input type="password" id="inputPassword" class="form-control" name="pwd"
                                placeholder="Password" required>
                            <button class="btn-out btn-lg submit-btn btn-block" name="login-submit" type="submit">Sign
                                In</button>
                            <p class="hint-text white-text">Need an account? <a class="m-hyperlink"
                                    href="signup.php">Sign
                                    Up</a></p>
                            <p class="mt-2 mb-3 text-muted">&copy: 2018-2023</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>