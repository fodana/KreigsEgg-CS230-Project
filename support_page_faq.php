<?php
require 'includes/header.php';
?>

<main class="outer-bg-cover">
    <link rel="stylesheet" href="styles/support_page_faq.css">
    <div class="container">
        <div class="inner-bg-cover">
            <div class="row">
                <!-- Page Contents Goes in here. This row can be split to organize content -->
                <div class="" id="accordion">
                    <div class="titleHeader">Support Page</div>
                    <div class="card ">
                        <div class="titleCard">FAQ Buyer</div>
                        <div class="card-header">
                            <h4 class="card-header">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseOne">Buyer Question 1</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="card-block">
                                Buyer Answer 1
                            </div>
                        </div>
                        <div class="card-header">
                            <h4 class="card-header">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseTwo">Buyer Question 2</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in">
                            <div class="card-block">
                                Buyer Answer 2
                            </div>
                        </div>
                        <div class="card ">
                            <div class="titleCard">FAQ Seller</div>
                            <div class="card-header">
                                <h4 class="card-header">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseThree">Seller Question 1</a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse in">
                                <div class="card-block">
                                    Seller Answer 1
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-header">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseFour">Seller Question 2</a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse in">
                                <div class="card-block">
                                    Seller Answer 2
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact">
            <div class="buffer">
            </div>
                <h1 style="font-size: 25px;color: black;"> Question not answered? </h1>
                <h1 style="font-size: 25px;color: black;"> Contact Us </h1>
                <p>Benjamin M. Statler College of Engineering and Mineral Resources
                    <br>1374 Evansdale Drive
                    <br>Morgantown, West Virginia 26506
                    <br>
                    <br>Phone: (123) 456-7890
                    <br>Email: KreigsEgg@gmail.com
                </p>
                <div class="buffer">
                </div>
            </div>
        </div>
    </div>
</main>