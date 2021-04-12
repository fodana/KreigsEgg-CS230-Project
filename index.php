<?php
    require 'includes/header.php';
?>


<head>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="styles/index.css">

</head>



<body>
    <main class="outer-bg-cover">

        <div class="container">
            <div class="inner-bg-cover">

                <div class="row">


                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel"
                        data-interval="4000">
                        <div class="carousel-inner">
                            <a href="post.php">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="images/accessories.jpg" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Trying to get rid of spare parts?</h5>
                                        <p>Create a listing today!</p>
                                    </div>
                            </a>
                        </div>
                        <a href="listings.php">
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/gpu.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Looking for Computer Parts?</h5>
                                    <p>Check out our Listings!</p>
                                </div>
                        </a>
                    </div>
                    <a href="support.php">
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/support.jpg" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Need some help?</h5>
                                <p>Visit our Support Page!</p>
                            </div>
                    </a>
                </div>
            </div>
        </div>


        <div class="intro">
            <h2>What is KreigsEgg?</h2>
            <hr>
            <p>KreigsEgg is a platform that seeks to disrupt the PC parts world by connecting buyers and sellers of used
                and refurbished PC parts. As prices
                grow the need for a stronger secondhand market has arisen and we at KreigsEgg strive to fufill that
                need. Want to build a PC but priced out because of cryptocurrency
                miners? Search our wide selection of preowned GPUs. Looking for something niche or specific? Keep an eye
                out for our requests page coming soon, where you can see if anyone
                has the part you are looking for!
            </p>
            <h2>Get Started!</h2>
            <p>To begin, <a href="signup.php">create an account</a> (or <a href="login.php">login</a> if you already have an account) 
            then create a listing, or contact a seller! Its that simple!</p>
        </div>






        </div>

        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

<?php require 'includes/footer.php'; ?>