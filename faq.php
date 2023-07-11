<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="mystyle.css">
    <title>MainPage</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Swiper Css -->
    <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap-blue.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- App Css-->
    <link href="assets/css/app-blue.min.css" id="app-style" rel="stylesheet" type="text/css" />
     <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4540928949006036"
    crossorigin="anonymous"></script>
</head>


<body>


    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <a class="navbar-brand tm" href="index.php">24hrfx trading org</a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="faq.php">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="packages.php">PACKAGES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="paid2.php">PAID</a>
                        </li>
                        
                        <?php
                          if(!isset($_SESSION['verifiedUserId'])){

                          
                          ?>
                           <li class="nav-item">
                           <a class="nav-link active" aria-current="page" href="landingpage.php">LOGIN</a>
                        </li>
                           
                        <li class="nav-item">
                           <a  class="nav-link active" aria-current="page" href="signinform.php" >Sign Up</a>
                        </li>
                          <?php
                          }else{
                          ?>
                                                              
                        <li class="nav-item">
                          <a class="nav-link active btn btn- btn-sm btn-hover "id="btnlog"ccc aria-current="page" href="logout.php">RefreshSession</a>
                        </li>
                        <?php
                        
                       }
                          
                          ?>

                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>





    <!-- Begin page -->
    <div>

        <marquee class="top-bar" direction="left">
            <ul class="list-inline mb-0 fs-13 fw-semibold">
                <li class="list-inline-item px-2 mb-0">BTC $ 55.88 <span class="text-success fw-bold">+$ 4.62 ( +9.01% )</span></li>
                <li class="list-inline-item px-2 mb-0">LTC $ 120.03 <span class="text-danger fw-bold">-$ 14.07 ( -10.49% )</span></li>
                <li class="list-inline-item px-2 mb-0">ETH $ 63.58 <span class="text-success fw-bold">+$ 5.17 ( +8.84% )</span></li>
                <li class="list-inline-item px-2 mb-0">CORAVE $ 14.75 <span class="text-success fw-bold">+$ 1.05 ( +7.66% )</span></li>
                <li class="list-inline-item px-2 mb-0">AUR $ 139.72 <span class="text-danger fw-bold">-$ 11.41 ( -7.55% )</span></li>
                <li class="list-inline-item px-2 mb-0">XMR $ 326.23 <span class="text-danger fw-bold">-$ 21.61 ( -6.21% )</span></li>
                <li class="list-inline-item px-2 mb-0">DCN $ 37,471.47 <span class="text-danger fw-bold">+$ 492.60 ( +1.33% )</span></li>
                <li class="list-inline-item px-2 mb-0">XRP <span> $ 0.39</span><span class="text-success"> +$ 5.62 ( +9.01% )</span></li>
                <li class="list-inline-item px-2 mb-0">JET <span> $ 148.67</span><span class="text-danger fw-bold">-$ 5.58 ( -3.62% )</span></li>
                <li class="list-inline-item px-2 mb-0">AVT <span> $ 427.37</span><span class="text-danger fw-bold">-$ 15.98 ( -3.60% )</span></li>
                <li class="list-inline-item px-2 mb-0">BCN $ 1,647.87 <span class="text-danger fw-bold">+$ 14.51 ( +0.89% )</span></li>
            </ul>
        </marquee>


            <section class="section bg-gradient-light">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-title text-center mb-5">
                                <h4 class="title">Frequently Asked Questions</h4>
                                <p class="desc-content text-muted">Explore and learn more about everything from forex and digital coins to scaling your team  in 24hrfx trading org.</p>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="accordion faqs rounded-3 shadow" id="faqsAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqheadingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqcollapseOne" aria-expanded="true" aria-controls="faqcollapseOne">
                                                            What is forex 24hrfx trading org ?
                                                        </button>
                                    </h2>
                                    <div id="faqcollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqheadingOne" data-bs-parent="#faqsAccordion">
                                        <div class="accordion-body">
                                            <p class="text-muted mb-2">The 24hrfx trading org is modern investment program who owned by 24hrfx trading org based in the United Kingdom. You can I check the company Companies House The 24hrfx trading org offers high-return investing in the Forex, digital currency known as Bitcoin, stock market and Fintech start-ups. Our company is constantly evolving, it improves its marketing components and creates new investment proposals. All this makes the 24hrfx trading org an industry leader and to be able to adapt to the constantly changing market conditions.</p>
                                            <a href="javascript:void(0)" class="text-primary fw-semibold form-text">View More <i class="ri-arrow-right-line ms-1 align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--end accordion-item-->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqsheadingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqscollapseTwo" aria-expanded="false" aria-controls="faqscollapseTwo">
                                                            How does 24hrfx trading org earn profits for its menbers ?
                                                        </button>
                                    </h2>
                                    <div id="faqscollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqsheadingTwo" data-bs-parent="#faqsAccordion">
                                        <div class="accordion-body">
                                            <p class="text-muted mb-2">24hrfx trading org is involved in cloud mining, which enables our company to earn Bitcoins without mining hardware, software, electricity, or bandwidth. </p>
                                            <a href="javascript:void(0)" class="text-primary fw-semibold form-text">View More <i class="ri-arrow-right-line ms-1 align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--end accordion-item-->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqsheadingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqscollapseThree" aria-expanded="false" aria-controls="faqscollapseThree">
                                                            can i meet with someoene from investors just to check the work of 24hrfx trading org ltd company ?
                                                        </button>
                                    </h2>
                                    <div id="faqscollapseThree" class="accordion-collapse collapse" aria-labelledby="faqsheadingThree" data-bs-parent="#faqsAccordion">
                                        <div class="accordion-body">
                                            <p class="text-muted mb-2">Yes, you can visit our office to make sure that we're real!  </p>
                                            <a href="javascript:void(0)" class="text-primary fw-semibold form-text">View More <i class="ri-arrow-right-line ms-1 align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--end accordion-item-->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqsheadingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqscollapseFour" aria-expanded="false" aria-controls="faqscollapseFour">
                                                            Who can be a client of 24hrfx trading org?
                                                        </button>
                                    </h2>
                                    <div id="faqscollapseFour" class="accordion-collapse collapse" aria-labelledby="faqsheadingFour" data-bs-parent="#faqsAccordion">
                                        <div class="accordion-body">
                                            <p class="text-muted mb-2">Everyone may be client of 24hrfx trading org, regardless of nationality or residence. The only condition is, you must be of mature age (at least 18 years old) to become our client.</p>
                                            <a href="javascript:void(0)" class="text-primary fw-semibold form-text">View More <i class="ri-arrow-right-line ms-1 align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--end accordion-item-->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqsheadingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqscollapseFive" aria-expanded="false" aria-controls="faqscollapseFive">
                                                            Where can i read about your investment proposal and calculate my profit?
                                                        </button>
                                    </h2>
                                    <div id="faqscollapseFive" class="accordion-collapse collapse" aria-labelledby="faqsheadingFive" data-bs-parent="#faqsAccordion">
                                        <div class="accordion-body">
                                            <p class="text-muted mb-2">You can check all our investment plans and calculate your profit on Home page & in your account on "Make Deposit" page.</p>
                                            <a href="javascript:void(0)" class="text-primary fw-semibold form-text">View More <i class="ri-arrow-right-line ms-1 align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                
                                <!--end accordion-item-->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqsheadingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqscollapseFive" aria-expanded="false" aria-controls="faqscollapseFive">
                                                            where i can check your current exchange rate of bitcoin?
                                                       </button>
                                    </h2>
                                    <div id="faqscollapseFive" class="accordion-collapse collapse" aria-labelledby="faqsheadingFive" data-bs-parent="#faqsAccordion">
                                        <div class="accordion-body">
                                            <p class="text-muted mb-2">We use the exchange rate on https://markets.blockchain.info</p>
                                            <a href="javascript:void(0)" class="text-primary fw-semibold form-text">View More <i class="ri-arrow-right-line ms-1 align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--end accordion-item-->
<!--                                 
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqsheadingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqscollapseFive" aria-expanded="false" aria-controls="faqscollapseFive">
                                                            How can i nevest with 24hrfx trading org?
                                                       </button>
                                    </h2>
                                    <div id="faqscollapseFive" class="accordion-collapse collapse" aria-labelledby="faqsheadingFive" data-bs-parent="#faqsAccordion">
                                        <div class="accordion-body">
                                            <p class="text-muted mb-2">To make a investment you must first become a member of 24hrfx trading org. Once you are signed up, you can make your first deposit. All deposits must be made through the Members Area. You can login using the member username and password you receive when signup.</p>
                                            <a href="javascript:void(0)" class="text-primary fw-semibold form-text">View More <i class="ri-arrow-right-line ms-1 align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--end accordion-item-->

                                <!-- <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqsheadingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqscollapseFive" aria-expanded="false" aria-controls="faqscollapseFive">
                                        How can I withdraw funds?
                                                       </button>
                                    </h2>
                                    <div id="faqscollapseFive" class="accordion-collapse collapse" aria-labelledby="faqsheadingFive" data-bs-parent="#faqsAccordion">
                                        <div class="accordion-body">
                                            <p class="text-muted mb-2">Login to your account using your username, User Id and your password, then go to the withdrawals section and make a withdrawal request.</p>
                                            <a href="javascript:void(0)" class="text-primary fw-semibold form-text">View More <i class="ri-arrow-right-line ms-1 align-middle"></i></a>
                                        </div>
                                    </div>
                                </div> -->
                                <!--end accordion-item-->

                                <!-- <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqsheadingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqscollapseFive" aria-expanded="false" aria-controls="faqscollapseFive">
                                                            can i open several accounts in your site
                                                       </button>
                                    </h2>
                                    <div id="faqscollapseFive" class="accordion-collapse collapse" aria-labelledby="faqsheadingFive" data-bs-parent="#faqsAccordion">
                                        <div class="accordion-body">
                                            <p class="text-muted mb-2">No, you can't open several accounts in 24hrfx trading org. Using the same computer and the same IP address. If You will Breaking this rule Your All Accounts Will be Suspend Permanently.</p>
                                            <a href="javascript:void(0)" class="text-primary fw-semibold form-text">View More <i class="ri-arrow-right-line ms-1 align-middle"></i></a>
                                        </div>
                                    </div>
                                </div> -->
                               

                            </div>
                            <!--end accordion-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!-- END FAQ'S -->
                    

        <!-- START FOOTER-ALT -->
        <div class="footer-alt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="text-center fw-medium fs-16 mb-0">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> &copy; 24hrfxtradingOrg - @credits @rubialimited
                        </p>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </div>
        <!-- END FOOTER -->

        <!--start back-to-top-->
        <button onclick="topFunction()" id="back-to-top">
                                <i class="mdi mdi-arrow-up"></i>
                            </button>
        <!--end back-to-top-->


        <!--start page Loader -->
        <div id="preloader">
            <div id="status">
                <div id="bitcoin">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="200px" height="200px" viewBox="100 100 400 400" xml:space="preserve">
                                        <filter id="dropshadow" height="130%">
                                        <feGaussianBlur in="SourceAlpha" stdDeviation="5"/>
                                        <feOffset dx="0" dy="0" result="offsetblur"/>
                                        <feFlood flood-color="red"/>
                                    <feComposite in2="offsetblur" operator="in"/>
                                    <feMerge>
                                    <feMergeNode/>
                                    <feMergeNode in="SourceGraphic"/>
                                    </feMerge>  
                                    </filter>          
                                    <path class="path" style="filter:url(#dropshadow)" fill="#000000" d="M446.089,261.45c6.135-41.001-25.084-63.033-67.769-77.735l13.844-55.532l-33.801-8.424l-13.48,54.068
                                        c-8.896-2.217-18.015-4.304-27.091-6.371l13.568-54.429l-33.776-8.424l-13.861,55.521c-7.354-1.676-14.575-3.328-21.587-5.073
                                        l0.034-0.171l-46.617-11.64l-8.993,36.102c0,0,25.08,5.746,24.549,6.105c13.689,3.42,16.159,12.478,15.75,19.658L208.93,357.23
                                        c-1.675,4.158-5.925,10.401-15.494,8.031c0.338,0.485-24.579-6.134-24.579-6.134l-9.631,40.468l36.843,9.188
                                        c8.178,2.051,16.209,4.19,24.098,6.217l-13.978,56.17l33.764,8.424l13.852-55.571c9.235,2.499,18.186,4.813,26.948,6.995
                                        l-13.802,55.309l33.801,8.424l13.994-56.061c57.648,10.902,100.998,6.502,119.237-45.627c14.705-41.979-0.731-66.193-31.06-81.984
                                        C425.008,305.984,441.655,291.455,446.089,261.45z M368.859,369.754c-10.455,41.983-81.128,19.285-104.052,13.589l18.562-74.404
                                        C306.28,314.65,379.774,325.975,368.859,369.754z M379.302,260.846c-9.527,38.187-68.358,18.781-87.442,14.023l16.828-67.489
                                        C327.767,212.14,389.234,221.02,379.302,260.846z"/>
                            
                                  </svg>
                </div>
            </div>
        </div>
        <!--end page Loader -->

        
    </div>
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->









    <script>
        var loader = document.getElementById("loader-wrapper");
        window.addEventListener("load", function() {
            loader.style.display = "block";
        });
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- JAVASCRIPT -->
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Swiper Js -->
<script src="assets/libs/swiper/swiper-bundle.min.js"></script>

<!-- Apexchart Js -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- Chart Js -->
<script src="assets/js/pages/chart.js"></script>

<!-- Countdown Js -->
<script src="assets/js/pages/countdown.js"></script>

<!-- Table Chart Js -->
<script src="assets/js/pages/table-chart.init.js"></script>

<!-- Index Js -->
<script src="assets/js/pages/indextwo.init.js"></script>

<!-- Switcher Init JS -->
<script src="assets/js/pages/switcher.init.js"></script>

<!-- App Js -->
<script src="assets/js/app.js"></script>

</html>