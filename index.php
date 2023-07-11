<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/mystyle.css">
    <title>24hrfxtradingorg</title>
    <!-- App favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="./svg.png">

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
    <style>
a{
    text-decoration: none;
    font-weight:300;
    color: black;
}
a:hover{
    color: blue;
    font-weight:600;
}

    </style>



</head>


<body class="container bg-dark text-white">

<?php
if(isset($_SESSION['status']))
{
    echo"<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
    unset($_SESSION['status']);
}

?>
        <div class="main-content container-fluid">

            <div class="page-content container">



            <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <h3 class="Blue">24hrfx</h3> <h3 class="Red">Trading</h3> <h3 class="text-dark">Org</h3>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.php">FAQ</a>
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
                       
                           <li class="nav-item">
                           <a class="nav-link active" aria-current="page" href="landingpage.php">LOGIN</a>
                        </li>
                           
                        <li class="nav-item">
                           <a  class="nav-link active" aria-current="page" href="signinform.php" >Sign Up</a>
                        </li>
                          
                                                  
                        <li class="nav-item">
                          <a class="nav-link active btn btn- btn-sm btn-hover "id="btnlog"ccc aria-current="page" href="logout.php">RefreshSession</a>
                        </li>
                        
                       
                        
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


                <!-- START HOME -->
                <section >
                    <div class="">
                       

                         <div class="clearfix">
                                 

                                    <h1 class="mb-4">Decenteralized <span class="text-primary fw-medium">24hrfx</span> Trading Plartform</h1>
                                    <p class="text-muted lead mb-4 text-black">With 24hrfx Trades, you can be sure their trading skills are matched with excellent service Explore.
                                        Comes with additional nitches and bonuses after investing
                                    </p>
                                    <p>Our website offers a user-friendly interface, real-time market data, and advanced trading tools to help you make informed investment decisions. 
                                    We also employ strict security measures to ensure the safety of your funds.
                                    But don't just take our word for it, try it out for yourself. Sign up for a free account today and start exploring the possibilities of forex and bitcoin trading. 
                                    Together, we can turn your financial goals into reality.
                                    </P>
                                    
                                    <p>click below to get started</p> 
                                    <div>
                                        <a href="landingpage.php" class="btn btn-primary btn-hover">Invest now <i class="uil uil-angle-right-b ms-1"></i></a>
                                    </div>
                                    <p>

                                    </p>

                                      
                        </div>
                            
                        
                        <!--end row-->
                        <!-- START MARKET -->
                                                 
                                    <div >
                                      <img width="400" height="400"  src="https://i.pinimg.com/originals/b0/fc/5e/b0fc5e14d73963c2e21f4ad7443bc3fd.gif">
                                    </div>

                   
                <section class="section">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7">
                                            <div class="section-title text-center">
                                                <h5 class="title">Track The Market</h5>
                                                <p class="desc-content text-muted">Use your credit card, payment app, or bank account to buy Bitcoin,forex, Bitcoin Cash, Ethereum, and other select cryptocurrencies.</p>
                                            </div>
                                        </div>
                                        
                                 

                                        <!--end col-->
                                    </div>
                                    <!--end row-->

                    </div>
                    <!--end row-->
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle">
                                    <thead>
                                        <tr class="text-muted">
                                            <th scope="col">Coin Name</th>
                                            <th scope="col">Symbol</th>
                                            <th scope="col">Price($)</th>
                                            <th scope="col">Rating</th>
                                            <th scope="col">Marketcap</th>
                                            <th scope="col">Trand(%)</th>
                                            <th scope="col">Daynemic</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-item box-shadow-md">
                                            <td>
                                                <h6 class="fw-medium mb-0">Bitcoin <span class="fw-normal text-muted">(BTC)</span></h6>
                                            </td>
                                            <td>
                                                <div class="avatar-xs d-flex bg-soft-warning text-warning justify-content-center rounded-circle align-items-center">
                                                    <i class="cf cf-btc fs-5"></i>
                                                </div>
                                            </td>
                                            <td>$42542.25</td>
                                            <td><i class="mdi mdi-star fs-20 text-warning me-2"></i>5</td>
                                            <td>$725,354M</td>
                                            <td class="text-success">02.25% <i class="mdi mdi-arrow-up"></i></td>
                                            <td style="width:150px">
                                                <div id="chart1"></div>
                                            </td>
                                        </tr>

                                        <tr class="table-item box-shadow-md">
                                            <td>
                                                <h6 class="fw-medium mb-0">Ethereum <span class="fw-normal text-muted">(ETH)</span></h6>
                                            </td>
                                            <td style="width: 150px;">
                                                <div class="avatar-xs d-flex bg-soft-info text-info justify-content-center rounded-circle align-items-center">
                                                    <i class="cf cf-eth fs-5"></i>
                                                </div>
                                            </td>
                                            <td>$1,851.35</td>
                                            <td><i class="mdi mdi-star fs-20 text-warning me-2"></i>2</td>
                                            <td>$425,424M</td>
                                            <td class="text-danger">01.30% <i class="mdi mdi-arrow-down"></i></td>
                                            <td style="width:150px">
                                                <div id="chart2"></div>
                                            </td>
                                        </tr>

                                        <tr class="table-item box-shadow-md">
                                            <td>
                                                <h6 class="fw-medium mb-0">Litecoin <span class="fw-normal text-muted">(LTC)</span></h6>
                                            </td>
                                            <td style="width: 150px;">
                                                <div class="avatar-xs d-flex bg-soft-success text-success justify-content-center rounded-circle align-items-center">
                                                    <i class="cf cf-ltc fs-5"></i>
                                                </div>
                                            </td>
                                            <td>$875.10</td>
                                            <td><i class="mdi mdi-star fs-20 text-warning me-2"></i>3</td>
                                            <td>$80,450</td>
                                            <td class="text-success">01.65% <i class="mdi mdi-arrow-up"></i></td>
                                            <td style="width:150px">
                                                <div id="chart3"></div>
                                            </td>
                                        </tr>

                                        <tr class="table-item box-shadow">
                                            <td>
                                                <h6 class="fw-medium mb-0">Monero <span class="fw-normal text-muted">(XMR)</span></h6>
                                            </td>
                                            <td style="width: 150px;">
                                                <div class="avatar-xs d-flex bg-soft-blue text-blue justify-content-center rounded-circle align-items-center">
                                                    <i class="cf cf-xmr fs-5"></i>
                                                </div>
                                            </td>
                                            <td>$1240.21</td>
                                            <td><i class="mdi mdi-star fs-20 text-warning me-2"></i>3</td>
                                            <td>$120,451</td>
                                            <td class="text-danger">02.15% <i class="mdi mdi-arrow-down"></i></td>
                                            <td style="width:150px">
                                                <div id="chart4"></div>
                                            </td>
                                        </tr>

                                        <tr class="table-item box-shadow">
                                            <td>
                                                <h6 class="fw-medium mb-0">Ripple <span class="fw-normal text-muted">(XRP)</span></h6>
                                            </td>
                                            <td style="width: 150px;">
                                                <div class="avatar-xs d-flex bg-soft-orange text-orange justify-content-center rounded-circle align-items-center">
                                                    <i class="cf cf-xrp fs-5"></i>
                                                </div>
                                            </td>
                                            <td>$1,315.15</td>
                                            <td><i class="mdi mdi-star fs-20 text-warning me-2"></i>4.7</td>
                                            <td>$201,201</td>
                                            <td class="text-danger">01.12% <i class="mdi mdi-arrow-down"></i></td>
                                            <td style="width:150px">
                                                <div id="chart5"></div>
                                            </td>
                                        </tr>

                                        <tr class="table-item box-shadow">
                                            <td>
                                                <h6 class="fw-medium mb-0">Auroracoin <span class="fw-normal text-muted">(AUR)</span></h6>
                                            </td>
                                            <td style="width: 150px;">
                                                <div class="avatar-xs d-flex bg-soft-info text-info justify-content-center rounded-circle align-items-center">
                                                    <i class="cf cf-aur fs-5"></i>
                                                </div>
                                            </td>
                                            <td>$3,659.33</td>
                                            <td><i class="mdi mdi-star fs-20 text-warning me-2"></i>2.9</td>
                                            <td>$2,545M</td>
                                            <td class="text-success">02.02% <i class="mdi mdi-arrow-up"></i></td>
                                            <td style="width:150px">
                                                <div id="chart6"></div>
                                            </td>
                                        </tr>

                                        <tr class="table-item box-shadow">
                                            <td>
                                                <h6 class="fw-medium mb-0">Potcoin <span class="fw-normal text-muted">(PTC)</span></h6>
                                            </td>
                                            <td style="width: 150px;">
                                                <div class="avatar-xs d-flex bg-soft-blue text-blue justify-content-center rounded-circle align-items-center">
                                                    <i class="cf cf-ptc fs-5"></i>
                                                </div>
                                            </td>
                                            <td>$9,124.32</td>
                                            <td><i class="mdi mdi-star fs-20 text-warning me-2"></i>4.9</td>
                                            <td>$97,545M</td>
                                            <td class="text-danger">02.85% <i class="mdi mdi-arrow-down"></i></td>
                                            <td style="width:150px">
                                                <div id="chart7"></div>
                                            </td>
                                        </tr>

                                        <tr class="table-item box-shadow">
                                            <td>
                                                <h6 class="fw-medium mb-0">Aichain <span class="fw-normal text-muted">(AIT)</span></h6>
                                            </td>
                                            <td style="width: 150px;">
                                                <div class="avatar-xs d-flex bg-soft-success text-success justify-content-center rounded-circle align-items-center">
                                                    <i class="cf cf-ait fs-5"></i>
                                                </div>
                                            </td>
                                            <td>$2,336.84</td>
                                            <td><i class="mdi mdi-star fs-20 text-warning me-2"></i>4.3</td>
                                            <td>$140,451</td>
                                            <td class="text-success">01.34% <i class="mdi mdi-arrow-up"></i></td>
                                            <td style="width:150px">
                                                <div id="chart8"></div>
                                            </td>
                                        </tr>

                                        <tr class="table-item box-shadow">
                                            <td>
                                                <h6 class="fw-medium mb-0">Auroracoin <span class="fw-normal text-muted">(ARC)</span></h6>
                                            </td>
                                            <td style="width: 150px;">
                                                <div class="avatar-xs d-flex bg-soft-orange text-orange justify-content-center rounded-circle align-items-center">
                                                    <i class="cf cf-arc fs-5"></i>
                                                </div>
                                            </td>
                                            <td>$2,112.85</td>
                                            <td><i class="mdi mdi-star fs-20 text-warning me-2"></i>1.5</td>
                                            <td>$95,741</td>
                                            <td class="text-success">03.12% <i class="mdi mdi-arrow-up"></i></td>
                                            <td style="width:150px">
                                                <div id="chart9"></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!--end row-->
                 </div>
            <!--end container-->
                </section>
            </div>
            <!-- END MARKET -->



            <div class="row mt-5 pt-5">
                            <div class="col-lg-12">
                                <div class="swiper homeSlider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="p-4">
                                                        <h6 class="fw-medium">BTC/NSE <span class="text-success">4.9% <i class="mdi mdi-arrow-up"></i></span></h6>
                                                        <h4 class="fw-semibold">3540.08</h4>
                                                        <p class="text-muted mb-0">$4512</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="p-4">
                                                        <h6 class="fw-medium">ETH/NSE <span class="text-danger"> -8.9% <i class="mdi mdi-arrow-down"></i></span></h6>
                                                        <h4 class="fw-semibold">675.78</h4>
                                                        <p class="text-muted mb-0">$4512</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="p-4">
                                                        <h6 class="fw-medium">XMR/NSE <span class="text-danger"> -2.4% <i class="mdi mdi-arrow-down"></i></span></h6>
                                                        <h4 class="fw-semibold">1452.87</h4>
                                                        <p class="text-muted mb-0">$4512</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="p-4">
                                                        <h6 class="fw-medium">LTC/NSE <span class="text-success">7.6% <i class="mdi mdi-arrow-up"></i></span></h6>
                                                        <h4 class="fw-semibold">956.45</h4>
                                                        <p class="text-muted mb-0">$4512</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="p-4">
                                                        <h6 class="fw-medium">XRP/NSE <span class="text-danger">-3.3% <i class="mdi mdi-arrow-down"></i></span></h6>
                                                        <h4 class="fw-semibold">1120.4</h4>
                                                        <p class="text-muted mb-0">$1099</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="p-4">
                                                        <h6 class="fw-medium">PTC/NSE <span class="text-success">12.9% <i class="mdi mdi-arrow-up"></i></span></h6>
                                                        <h4 class="fw-semibold">100.2</h4>
                                                        <p class="text-muted mb-0">$90.01</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="p-4">
                                                        <h6 class="fw-medium">BSD/NSE <span class="text-success">4.9% <i class="mdi mdi-arrow-up"></i></span></h6>
                                                        <h4 class="fw-semibold">1584.7</h4>
                                                        <p class="text-muted mb-0">$4512</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="p-4">
                                                        <h6 class="fw-medium">ARC/NSE <span class="text-success">7.0% <i class="mdi mdi-arrow-up"></i></span></h6>
                                                        <h4 class="fw-semibold">998.5</h4>
                                                        <p class="text-muted mb-0">$4512</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="p-4">
                                                        <h6 class="fw-medium">BNK/NSE <span class="text-danger">-4.95% <i class="mdi mdi-arrow-down"></i></span></h6>
                                                        <h4 class="fw-semibold">2520.8</h4>
                                                        <p class="text-muted mb-0">$4512</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="p-4">
                                                        <h6 class="fw-medium">BYC/NSE <span class="text-danger">-7.49% <i class="mdi mdi-arrow-down"></i></span></h6>
                                                        <h4 class="fw-semibold">2520.8</h4>
                                                        <p class="text-muted mb-0">$4512</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="p-4">
                                                        <h6 class="fw-medium">IPT/NSE <span class="text-success">14.9% <i class="mdi mdi-arrow-up"></i></span></h6>
                                                        <h4 class="fw-semibold">2520.8</h4>
                                                        <p class="text-muted mb-0">$4512</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="p-4">
                                                        <h6 class="fw-medium">CPX/NSE <span class="text-success">9.46% <i class="mdi mdi-arrow-up"></i></span></h6>
                                                        <h4 class="fw-semibold">2520.8</h4>
                                                        <p class="text-muted mb-0">$4512</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                   
                </section>
                <!-- END HOME -->


            <!-- START FAQ'S -->
            <section class="section bg-gradient-light">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-title text-center mb-5">
                                <h4 class="title">Frequency Asked Questions</h4>
                                <p class="desc-content text-muted">Explore and learn more about everything from machine learning and global payments to scaling your team.</p>
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
                                                            What is cryptocurrency?
                                                        </button>
                                    </h2>
                                    <div id="faqcollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqheadingOne" data-bs-parent="#faqsAccordion">
                                        <div class="accordion-body">
                                            <p class="text-muted mb-2">Cryptocurrency is a type of virtual currency that uses cryptography to secure transactions that are digitally recorded on a distributed ledger, such as a blockchain. A transaction involving cryptocurrency that
                                                is recorded on a distributed ledger is referred to as an “on-chain” transaction.</p>
                                            <a href="javascript:void(0)" class="text-primary fw-semibold form-text">View More <i class="ri-arrow-right-line ms-1 align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--end accordion-item-->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqsheadingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqscollapseTwo" aria-expanded="false" aria-controls="faqscollapseTwo">
                                                            What is blockchain technology?
                                                        </button>
                                    </h2>
                                    <div id="faqscollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqsheadingTwo" data-bs-parent="#faqsAccordion">
                                        <div class="accordion-body">
                                            <p class="text-muted mb-2">The technology uses decentralized consensus to maintain the network, which means it is not centrally controlled by a bank, corporation, or government. In fact, the larger the network grows and becomes increasingly
                                                decentralized, the more secure it becomes. </p>
                                            <a href="javascript:void(0)" class="text-primary fw-semibold form-text">View More <i class="ri-arrow-right-line ms-1 align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--end accordion-item-->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqsheadingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqscollapseThree" aria-expanded="false" aria-controls="faqscollapseThree">
                                                            What is bitcoin?
                                                        </button>
                                    </h2>
                                    <div id="faqscollapseThree" class="accordion-collapse collapse" aria-labelledby="faqsheadingThree" data-bs-parent="#faqsAccordion">
                                        <div class="accordion-body">
                                            <p class="text-muted mb-2">Bitcoin can often refer to two things. First, the Bitcoin network that keeps track of our transactions and balances, and second, the currency that we use as the unit of value when we transact. We'll cover both
                                                here. </p>
                                            <a href="javascript:void(0)" class="text-primary fw-semibold form-text">View More <i class="ri-arrow-right-line ms-1 align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--end accordion-item-->
                                
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqsheadingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqscollapseFive" aria-expanded="false" aria-controls="faqscollapseFive">
                                                            Who created bitcoin?
                                                        </button>
                                    </h2>
                                    <div id="faqscollapseFive" class="accordion-collapse collapse" aria-labelledby="faqsheadingFive" data-bs-parent="#faqsAccordion">
                                        <div class="accordion-body">
                                            <p class="text-muted mb-2">Bitcoin’s existence began with an academic paper written in 2008 by a developer under the name of Satoshi Nakamoto.The paper described the foundation for what was intended to be a peer-to-peer electronic cash
                                                system that was secure, affordable, and efficient far beyond conventional banking standards.</p>
                                            <a href="javascript:void(0)" class="text-primary fw-semibold form-text">View More <i class="ri-arrow-right-line ms-1 align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--end accordion-item-->
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

            <!-- START CONTACT -->
            <section class="section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-title text-center mb-5">
                                <h4 class="title">We'd love to hear form you</h4>
                                <p class="desc-content text-muted">Explore and learn more about everything from machine learning and global payments to scaling your team.</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13004069.896900944!2d-104.65611544442767!3d37.27565371492453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1632803339194!5m2!1sen!2sin"
                                height="350" class="rounded-3" style="border:0;width: 100%;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-4">
                            <div class="mt-4 text-center">
                                <div class="contact-icon rounded-3 mx-auto">
                                    <i class="ri-map-pin-line"></i>
                                </div>
                                <div class="mt-4 pt-1">
                                    <h5 class="mb-3">Head Office</h5>
                                    <p class="text-muted mb-1">Visit our office</p>
                                    <p class="text-muted fw-medium">Main branches -Arusha, TZ
                  - Nairobi,KE
                 - Kampala, UG
               - Lusaka,ZM
           -Malawi,south Africa</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-4">
                            <div class="mt-4 text-center">
                                <div class="contact-icon rounded-3 mx-auto">
                                    <i class="ri-mail-open-line"></i>
                                </div>
                                <div class="mt-4 pt-1">
                                    <h5 class="mb-3">Support</h5>
                                    <p class="text-muted mb-1">Our friendly team is here to help</p>
                                    <p class="text-muted fw-medium">helpdesk.24hrfxtradingorg@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-4">
                            <div class="mt-4 text-center">
                                <div class="contact-icon rounded-3 mx-auto">
                                    <i class="ri-phone-line"></i>
                                </div>
                                <div class="mt-4 pt-1">
                                    <h5 class="mb-3">Call Us</h5>
                                    <p class="text-muted mb-1">Mon-Fri (working hrs 7a.m-10pm)</p>
                                    <p class="text-muted fw-medium mb-0">+254 748641027/+254 798741595</p>
                                    <p></p>
                                    <div class="form-group text">
                                        <a class="text-white" href="http://www.instagram.com/24hrfx_tradingorg">Instagram</a>
                                        <span><i><img src="./instagram.png" width="40" height="40" alt=""></i></span>
                                        <a class="text-white" href="https://wa.me/+255748641027">Whatsapp</a>
                                        <span><i><img src="./whatsapp.png" width="40" height="40" alt=""></i></span>
                                        <a class="text-white" href="https://t.me/tg24HrFxTradingOrg">Telegram</a>
                                        <span><i><img src="./telegram.png" width="40" height="40" alt=""></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!-- END CONTACT -->

       
        <!-- End Page-content -->



        <!-- START SHAPE -->
        <div class="position-relative" style="z-index: 1">
            <div class="footer-shape">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
                                        <path fill="#2d2d51" fill-opacity="1"
                                            d="M0,192L120,202.7C240,213,480,235,720,234.7C960,235,1200,213,1320,202.7L1440,192L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
                                    </svg>
            </div>
        </div>
        <!-- END SHAPE -->

        <!-- START FOOTER -->
        <section class="bg-footer overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-item mt-4 mt-lg-0 me-lg-5">
                            <div class="mb-2">
                                <img src="assets/images/dark-logo.png" alt="" class="footer-dark-logo" />
                                <img src="assets/images/light-logo.png" alt="" class="footer-light-logo" />
                            </div>
                           <ul class="footer-social-menu list-inline mb-0">
                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="uil uil-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="uil uil-linkedin-alt"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="uil uil-google"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="uil uil-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!-- END FOOTER -->

        <!-- START FOOTER-ALT -->
        <div class="footer-alt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="text-center fw-medium fs-16 mb-0">
                            2022 -
                            <script>
                                document.write(new Date().getFullYear())
                            </script>&copy; 24hrfxtradingOrg.
                        </p>
                        
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4540928949006036"
     crossorigin="anonymous"></script>

                        
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



    </div>
    <!-- end main content-->

    
    </div>
    <!-- END layout-wrapper -->
      
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