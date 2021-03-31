<?php
session_start();
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KreigsEgg</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
        <link rel="stylesheet" href="styles/header.css">

</head>
<header>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #326273;">
            <div class="container-fluid">
                <a class="navbar-brand nav-piece" style="color: #FFFFFF" href="index.php">
                <img class="logo-sze" src="images/logoSym.png" alt="Logo">
                KreigsEgg</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link nav-piece" style="color: #EEEEEE" href="listings.php">Listings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-piece" style="color: #EEEEEE" href="post.php">Sell</a>
                        </li>
                       <li class="nav-item">
                            <a class="nav-link nav-piece" style="color: #EEEEEE" href="about.php">About</a>
                        </li>   
                        <li class="nav-item">
                            <a class="nav-link nav-piece" style="color: #EEEEEE" href="support_page_faq.php">Support</a>
                        </li>

                        <?php if(isset($_SESSION['uid'])){
                            echo'
                            <li class="nav-item">
                                <a class="nav-link nav-piece" style="color: #EEEEEE" href="../profile.php">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-piece" style="color: #EEEEEE" href="includes/logout.php">Logout</a>
                            </li>
                            ';
                        }else{
                            echo'
                            <li class="nav-item">
                                <a class="nav-link nav-piece" style="color: #EEEEEE" href="../login.php">Login</a>
                            </li>
                            ';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
        </script>
    </body>
    