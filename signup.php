<?php
require "includes/header.php";
?>

<main class="outer-bg-cover">
    <link rel="stylesheet" href="styles/signup.css">
    <div class="container">
        <div class="row inner-bg-cover">
            <div class="container">
                <div class="center-me">
                    <img class="d-block mx-auto resize" src="images/logo.png" alt="Logo">
                </div>
            </div>
            <div class="h-80 container center-me">
                <div>
                    <div class="signup-form">
                        <form action="includes/signup-helper.php" method="post">
                            <div class="white-text">
                                <h1 class="h3 mb-3 font-weight-normal">Please Sign Up</h1>
                                <p class="hint-text">Create your account!</p>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" name="fname" placeholder="First Name"
                                            required autofocus>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="lname" placeholder="Last Name"
                                            required autofocus>
                                    </div>
                                </div>
                            </div>
                            <input type="text" class="form-control" name="uname" placeholder="Username" required
                                autofocus>
                            <input type="email" id="inputEmail" class="form-control" name="email"
                                placeholder="Email Address" required autofocus>
                                <input type="text" id="inputPhoneNumber" class="form-control" name="phonenum"
                                placeholder="Phone Number" required autofocus>
                            <input type="password" id="inputPassword" class="form-control" name="pwd"
                                placeholder="Password" required>
                            <input type="password" id="inputPassword" class="form-control" name="con-pwd"
                                placeholder="Confirm Password" required>
                            <button class="btn-out btn-lg submit-btn btn-block" name="signup-submit" type="submit">Sign
                                Up</button>
                            <p class="hint-text white-text">Already have an account? <a class="m-hyperlink"
                                    href="login.php">Sign In</a></p>
                            <p class="mt-4 mb-3 text-muted">&copy: 2018-2023</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>