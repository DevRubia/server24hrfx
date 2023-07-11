<?php
session_start();

if(isset($_SESSION['verifiedUserId'])){
    $_SESSION['status']="you are already logged in..RefreshSession/Logout";
    header('Location: newDashboard.php');
    exit();
}else{
     
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/stylelanding.css">
    <link rel="shortcut icon" type="image/x-icon" href="./svg.png">
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
                           <a  class="nav-link active" aria-current="page" href="signinform.php" id="btnlog">Sign Up</a>
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
    <a href="dashboard.html" class="logo" target="_self">
        <img src="../images/badge.png" alt="">
    </a>
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
<?php
if(isset($_SESSION['status']))
{
    echo"<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
    unset($_SESSION['status']);
}

?>


<form action="login.php" method="POST">
<div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3"><span>Log In </span><span></span></h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                            
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Log In</h4>
                                            <div class="form-group">
                                                <input type="email" name="logemailres" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
                                                <i class="input-icon uil uil-at"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="password" name="logpassres" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <button type="submit" name="loginbtn" class="btn mt-4">SUBMIT</button>

                                            <p class="mb-0 mt-4 text-center"><a href="changepassword.php" class="link">Forgot your password?</a></p>
                                            <h6 class="mb-0 mt-4 text-center"><a href="signinform.php" class="link">Sign-up form</a></h6>
                                        </div>
                                    </div>
                                </div>
                          
                           
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>











</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>