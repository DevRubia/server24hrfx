<?php
include('authentication.php');
$userProperties = $_SESSION['userProperties'];

?>
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
    <div class="package-wrapper container d-flex">
    
        <form action="deposit.php" method="post">
            <div class="flip-card ">
                <div class="">
                    <div class="flip-card-front">
                        <p class="title">Package</p>
                        <div class="front">
                            <p>Deposit: $30</p>
                            <p>Income: $120</p>
                            <p class=""><button type="submit" value="30" name="Amount" class="btn btn-warning btn-sm">Deposit</button></p>
                        </div> 

                    </div>
                    
                 </div>

            </div>
        </form>

        <form action="deposit.php" method="post">
            <div class="flip-card ">
                <div class="">
                    <div class="flip-card-front">
                        <p class="title">Package</p>
                        <div class="front">
                            <p>Deposit: $50</p>
                            <p>Income: $200</p>
                            <p class=""><button type="submit" value="50" name="Amount" class="btn btn-warning btn-sm">Deposit</button></p>
                        </div> 

                    </div>
                    
                 </div>

            </div>
        </form>

        <form action="deposit.php" method="post">
            <div class="flip-card ">
                <div class="">
                    <div class="flip-card-front">
                        <p class="title">Package</p>
                        <div class="front">
                            <p>Deposit: $70</p>
                            <p>Income: $280</p>
                            <p class=""><button type="submit" value="70" name="Amount" class="btn btn-warning btn-sm">Deposit</button></p>
                        </div> 

                    </div>
                    
                 </div>

            </div>
        </form>

        <form action="deposit.php" method="post">
            <div class="flip-card ">
                <div class="">
                    <div class="flip-card-front">
                        <p class="title">Package</p>
                        <div class="front">
                            <p>Deposit: $100</p>
                            <p>Income: $400</p>
                            <p class=""><button type="submit" value="100" name="Amount" class="btn btn-warning btn-sm">Deposit</button></p>
                        </div> 

                    </div>
                    
                 </div>

            </div>
        </form>

        <form action="deposit.php" method="post">
            <div class="flip-card ">
                <div class="">
                    <div class="flip-card-front">
                        <p class="title">Package</p>
                        <div class="front">
                            <p>Deposit: $200</p>
                            <p>Income: $800</p>
                            <p class=""><button type="submit" value="200" name="Amount" class="btn btn-warning btn-sm">Deposit</button></p>
                        </div> 

                    </div>
                    
                 </div>

            </div>
        </form>

        <form action="deposit.php" method="post">
            <div class="flip-card ">
                <div class="">
                    <div class="flip-card-front">
                        <p class="title">Package</p>
                        <div class="front">
                            <p>Deposit: $300</p>
                            <p>Income: $1200</p>
                            <p class=""><button type="submit" value="300" name="Amount" class="btn btn-warning btn-sm">Deposit</button></p>
                        </div> 

                    </div>
                    
                 </div>

            </div>
        </form>

        <form action="deposit.php" method="post">
            <div class="flip-card ">
                <div class="">
                    <div class="flip-card-front">
                        <p class="title">Package</p>
                        <div class="front">
                            <p>Deposit: $500</p>
                            <p>Income: $2000</p>
                            <p class=""><button type="submit" value="500" name="Amount" class="btn btn-warning btn-sm">Deposit</button></p>
                        </div> 

                    </div>
                    
                 </div>

            </div>
        </form>

        <form action="deposit.php" method="post">
            <div class="flip-card ">
                <div class="">
                    <div class="flip-card-front">
                        <p class="title">Package</p>
                        <div class="front">
                            <p>Deposit: $700</p>
                            <p>Income: $2800</p>
                            <p class=""><button type="submit" value="700" name="Amount" class="btn btn-warning btn-sm">Deposit</button></p>
                        </div> 

                    </div>
                    
                 </div>

            </div>
        </form>

        <form action="deposit.php" method="post">
            <div class="flip-card ">
                <div class="">
                    <div class="flip-card-front">
                        <p class="title">Package</p>
                        <div class="front">
                            <p>Deposit: $1000</p>
                            <p>Income: $4000</p>
                            <p class=""><button type="submit" value="1000" name="Amount" class="btn btn-warning btn-sm">Deposit</button></p>
                        </div> 

                    </div>
                    
                 </div>

            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>