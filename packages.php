<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/packagestyle.css">
    <title>packages</title>
    <link rel="shortcut icon" type="image/x-icon" href="./svg.png">
     <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4540928949006036"
    crossorigin="anonymous"></script>
</head>

<body class="container">

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
                            <a class="nav-link" aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.php">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="packages.php">PACKAGES</a>
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
    <div class="package-wrapper row row-cols-2">
        <div class="flip-card ">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p class="title">Package</p>
                    <div class="front">
                        <p>Deposit: $30</p>
                        <p>Income: $120</p>
                       
                    </div>

                </div>
                <div class="flip-card-back "> 
                   
                    <p class="title">Convert</p>
                

                    <div class="deposit">
                        <h3>Deposit</h3>
                        <p>70,000.00 Tzs</p>
                        <p>3,700.00 KES</p>
                        <p>113,560.00 UGX</p>
                        <p>490.00 ZMW</p>
                        
                    </div>
            
                    <div class="income">
                        <h3>Income</h3>
                        <p>280,000.00 Tzs</p>
                        <p>14,562.00 KES</p>
                        <p>454,200.00 UGX</p>
                        <p>1,945.00 ZMW</p>
                       
                        
                    </div>
                  
                </div>

            </div>

        </div>

        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p class="title">Package</p>
                    <div class="front">
                        <p>Deposit: $40</p>
                        <p>Income: $160</p>
                       
                    </div>

                </div>
                <div class="flip-card-back">
                    <p class="title">Convert</p>
                    <div class="deposit">
                        <h3>Deposit</h3>
                        <p href="">94,000.00 Tzs</p>
                        <p href="">4,860.00 KES</p>
                        <p href="">152,410.00 UGX</p>
                        <p href="">590.00 ZMW</p>
                    </div>

                    <div class="income">
                        <h3>Income</h3>
                        <p href="">326,000.00 Tzs</p>
                        <p href="">19,416.00 KES</p>
                        <p href="">605,650.00 UGX</p>
                        <p href="">2,590.00 ZMW</p>


                    </div>
                </div>
            </div>
        </div>

        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p class="title">Package</p>
                    <div class="front">
                        <p>Deposit: $50</p>
                        <p>Income: $200</p>
                       
                    </div>

                </div>
                <div class="flip-card-back">
                    <p class="title">Convert</p>
                    <div class="deposit">
                        <h3>Deposit</h3>
                        <p href="">117,000.00 Tzs</p>
                        <p href="">6,070.00 KES</p>
                        <p href="">189,300.00 UGX</p>
                        <p href="">809.00 ZMW</p>
                    </div>

                    <div class="income">
                        <h3>Income</h3>
                        <p href="">419,000.00 Tzs</p>
                        <p href="">24,270.00 KES</p>
                        <p href="">758,000.00 UGX</p>
                        <p href="">3,235.00 ZMW</p>


                    </div>
                </div>
            </div>
        </div>

        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p class="title">Package</p>
                    <div class="front">
                        <p>Deposit: $60</p>
                        <p>Income: $240</p>
                        
                    </div>

                </div>
                <div class="flip-card-back">
                    <p class="title">Convert</p>
                    <div class="deposit">
                        <h3>Deposit</h3>
                        <p href="">139,920.00 Tzs</p>
                        <p href="">7,293.00 KES</p>
                        <p href="">224,050.00 UGX</p>
                        <p href="">970.00 ZMW</p>
                    </div>

                    <div class="income">
                        <h3>Income</h3>
                        <p href="">559,680.00 Tzs</p>
                        <p href="">29,172.00 KES</p>
                        <p href="">896,210.00 UGX</p>
                        <p href="">3,855.00 ZMW</p>


                    </div>
                </div>
            </div>
        </div>

        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p class="title">Package</p>
                    <div class="front">
                        <p>Deposit: $80</p>
                        <p>Income: $320</p>
                       
                    </div>

                </div>
                <div class="flip-card-back">
                    <p class="title">Convert</p>
                    <div class="deposit">
                        <h3>Deposit</h3>
                        <p href="">186,560.00 Tzs</p>
                        <p href="">9,724.00 KES</p>
                        <p href="">298,740.00 UGX</p>
                        <p href="">1,284.00 ZMW</p>
                    </div>

                    <div class="income">
                        <h3>Income</h3>
                        <p href="">746,240.00 Tzs</p>
                        <p href="">38,896.00 KES</p>
                        <p href="">1,194,935.00UGX</p>
                        <p href="">5,134.00 ZMW</p>


                    </div>
                </div>
            </div>
        </div>

        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p class="title">Package</p>
                    <div class="front">
                        <p>Deposit: $90</p>
                        <p>Income: $360</p>
                       
                    </div>

                </div>
                <div class="flip-card-back">
                    <p class="title">Convert</p>
                    <div class="deposit">
                        <h3>Deposit</h3>
                        <p href="">209,880.00 Tzs</p>
                        <p href="">10,940.00 KES</p>
                        <p href="">336,080.00 UGX</p>
                        <p href="">1,444.00 ZMW</p>
                    </div>

                    <div class="income">
                        <h3>Income</h3>
                        <p href="">839,520.00 Tzs</p>
                        <p href="">43,758.00 KES</p>
                        <p href="">1,344,310.00 UGX</p>
                        <p href="">1,5776.00 ZMW</p>


                    </div>
                </div>
            </div>
        </div>

        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p class="title">Package</p>
                    <div class="front">
                        <p>Deposit: $100</p>
                        <p>Income: $300</p>
                        
                    </div>

                </div>
                <div class="flip-card-back">
                    <p class="title">Convert</p>
                    <div class="deposit">
                        <h3>Deposit</h3>
                        <p href="">233,500.00 Tzs</p>
                        <p href="">12,135.00 KES</p>
                        <p href="">379,000.00 UGX</p>
                        <p href="">1,620.00 ZMW</p>
                    </div>

                    <div class="income">
                        <h3>Income</h3>
                        <p href="">699,600.00 Tzs</p>
                        <p href="">36,405.00 KES</p>
                        <p href="">1,135,520.00 UGX</p>
                        <p href="">4,855.00 ZMW</p>


                    </div>
                </div>
            </div>
        </div>

        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p class="title">Package</p>
                    <div class="front">
                        <p>Deposit: $150</p>
                        <p>Income: $400</p>
                       
                    </div>

                </div>
                <div class="flip-card-back">
                    <p class="title">Convert</p>
                    <div class="deposit">
                        <h3>Deposit</h3>
                        <p href="">350,000.00 Tzs</p>
                        <p href="">18,210.00 KES</p>
                        <p href="">567,760.00 UGX</p>
                        <p href="">2,430.00 ZMW</p>
                    </div>

                    <div class="income">
                        <h3>Income</h3>
                        <p href="">932,800.00 Tzs</p>
                        <p href="">48,540.00 KES</p>
                        <p href="">1,514,016.00 UGX</p>
                        <p href="">6,470.00 ZMW</p>


                    </div>
                </div>
            </div>
        </div>

        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p class="title">Package</p>
                    <div class="front">
                        <p>Deposit: $200</p>
                        <p>Income: $500</p>
                       
                    </div>

                </div>
                <div class="flip-card-back">
                    <p class="title">Convert</p>
                    <div class="deposit">
                        <h3>Deposit</h3>
                        <p href="">467,000.00 Tzs</p>
                        <p href="">24,270.00 KES</p>
                        <p href="">567,760.00 UGX</p>
                        <p href="">3,235.00 ZMW</p>
                    </div>

                    <div class="income">
                        <h3>Income</h3>
                        <p href="">1,050,000.00 Tzs</p>
                        <p href="">60,675.00 KES</p>
                        <p href="">1,514,016.00 UGX</p>
                        <p href="">8,085 ZMW</p>


                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
