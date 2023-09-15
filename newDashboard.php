<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('authentication.php');
$userProperties = $_SESSION['userProperties']; 
try{
$fetchEmail = $userProperties['userEmail'];
    if($fetchEmail){

    }else{
        $_SESSION['status']="Account attention needed Contact admin @helpdesk.24hrfxtradingorg@gmail.com!";
        header('Location: 404.php');
        exit();
    }
}catch(Exception $e){

                    $_SESSION['status']="Account attention needed Contact admin @helpdesk.24hrfxtradingorg@gmail.com!";
                     header('Location: 404.php');
                     exit();
}

include('conndb.php');
//get users lastloginTime from auth -> metadata
try{
    $user = $auth->getuserbyemail($fetchEmail);

}catch(Exception $e){

                    $_SESSION['status']="Account attention needed !";
                     header('Location: landingpage.php');
                     exit();
}
//get lastLoginTime from metadata
$metadata = $user->metadata;
$fetchLastLoginTime = $metadata->lastLoginAt;
//convert lastLoginTime to string
$lastLoginTime = $fetchLastLoginTime->format('Y-m-d H:i:s');

//add 3 hours to lastLoginTime
$lastLoginTime = date('Y-m-d H:i:s', strtotime($lastLoginTime . ' +3 hours'));

echo "<script> var lastLoginTime = '$lastLoginTime';</script>";


?>
<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags -->
    
    <meta name="description" content="24hrTradingOrg is an investment company that aggregates funds for investment in bitcoin and forex trading.                                                                                                                                                                                                                                                                                                                                                                                               ">
    <meta name="keywords" content="proinvest, bitcoin trading, forex, investment, trading                                                                                                                                                                                                                                                                                                                                                                                                                                                              ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" type="image/x-icon" href="./svg.png">

    
    <!-- Font Icon Styles -->
    <link rel="stylesheet" href="./newDashboard_files/icons.css">
    <!-- /font icon Styles -->
    <!-- Load Styles -->
    <link rel="stylesheet" href="./newDashboard_files/bootstrap-formhelpers.min.css">
    <link rel="stylesheet" href="./newDashboard_files/flag-icon.min.css">
    <link rel="stylesheet" href="./newDashboard_files/chartist.min.css">
    <link rel="stylesheet" href="./newDashboard_files/style.min.css">
    <!-- /load styles -->
    <!-- include summernote css/js -->
    <link href="./newDashboard_files/summernote-bs4.css" rel="stylesheet">
    <link rel="stylesheet" href="./newDashboard_files/intlTelInput.css">
    <link rel="stylesheet" href="./css/newdash.css">
  
    <script src="loader.js"></script>
    
    <script src="./newDashboard_files/twk-main.js.download" charset="UTF-8" crossorigin="*"></script><script src="./newDashboard_files/twk-vendor.js.download" charset="UTF-8" crossorigin="*"></script><script src="./newDashboard_files/twk-chunk-vendors.js.download" charset="UTF-8" crossorigin="*"></script><script src="./newDashboard_files/twk-chunk-common.js.download" charset="UTF-8" crossorigin="*"></script><script src="./newDashboard_files/twk-runtime.js.download" charset="UTF-8" crossorigin="*"></script><script src="./newDashboard_files/twk-app.js.download" charset="UTF-8" crossorigin="*"></script><script async="" src="./newDashboard_files/default" charset="UTF-8" crossorigin="*"></script><script src="./newDashboard_files/jquery.min.js.download"></script>
    <script src="./notification.js"></script>
   <style type="text/css">/* Chart.js */
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style><style type="text/css">@font-face { font-family: Roboto; src: url("chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf"); }</style><script charset="utf-8" src="./newDashboard_files/twk-chunk-2c78ba82.js.download"></script><script charset="utf-8" src="./newDashboard_files/twk-chunk-696bc286.js.download"></script><script charset="utf-8" src="./newDashboard_files/twk-chunk-f1596d96.js.download"></script><script charset="utf-8" src="./newDashboard_files/twk-chunk-48f46bef.js.download"></script><script charset="utf-8" src="./newDashboard_files/twk-chunk-4fe9d5dd.js.download"></script><script charset="utf-8" src="./newDashboard_files/twk-chunk-2d0b9454.js.download"></script><script charset="utf-8" src="./newDashboard_files/twk-chunk-f163fcd0.js.download"></script><script charset="utf-8" src="./newDashboard_files/twk-chunk-32507910.js.download"></script><style type="text/css">#mulaecv547eg1675262278346 {outline:none !important;
visibility:visible !important;
resize:none !important;
box-shadow:none !important;
overflow:visible !important;
background:none !important;
opacity:1 !important;
filter:alpha(opacity=100) !important;
-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important;
-mz-opacity:1 !important;
-khtml-opacity:1 !important;
top:auto !important;
right:0px !important;
bottom:0px !important;
left:auto !important;
position:fixed !important;
border:0 !important;
min-height:0px  !important;
min-width:0px  !important;
max-height:none  !important;
max-width:none  !important;
padding:0px !important;
margin:0px !important;
-moz-transition-property:none !important;
-webkit-transition-property:none !important;
-o-transition-property:none !important;
transition-property:none !important;
transform:none !important;
-webkit-transform:none !important;
-ms-transform:none !important;
width:auto !important;
height:auto  !important;
display:none !important;
z-index:2000000000 !important;
background-color:transparent !important;
cursor:none !important;
float:none !important;
border-radius:unset !important;
pointer-events:auto !important;
clip:auto !important;
color-scheme:light !important;}#mulaecv547eg1675262278346.widget-hidden {display: none !important;}#mulaecv547eg1675262278346.widget-visible {display: block !important;}
@media print{
 #mulaecv547eg1675262278346.widget-visible { 
display: none !important;
 }
}</style>

<style>
    /* Hamburger menu styles */
    
    .hamburger-menu {
        display: block;
        cursor: pointer;
    }
    
    .bar {
        z-index: inherit; 
        width: 25px;
        height: 3px;
        background-color: #ededed;
        margin: 5px 0;
    }
    /* Sidebar menu styles */
    
    .sidebar-menu {
        position: fixed;
        top: 0;
        left: -250px;
        width: 250px;
        height: 100%;
        background-color: #fff;
        z-index: 1000;
        transition: all 0.3s ease;
    }
    
    .sidebar-menu.show {
        left: 0;
    }
    
    .spacer {
        /*flex: 1;*/
        padding-right: 25%;
    }
</style>

<script src="./newDashboard_files/emojione.min.js.download" type="text/javascript" async="" defer=""></script><script src="./newDashboard_files/emojione.min.js.download" type="text/javascript" async="" defer=""></script><style type="text/css">@keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-moz-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-webkit-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}#cseqjjnubdng1675262278662.open{animation : tawkMaxOpen .25s ease!important;}@keyframes tawkMaxClose{from{opacity: 1;transform:translate(0, 0px);;}to{opacity: 0;transform:translate(0, 30px);;}}@-moz-keyframes tawkMaxClose{from{opacity: 1;transform:translate(0, 0px);;}to{opacity: 0;transform:translate(0, 30px);;}}@-webkit-keyframes tawkMaxClose{from{opacity: 1;transform:translate(0, 0px);;}to{opacity: 0;transform:translate(0, 30px);;}}#cseqjjnubdng1675262278662.closed{animation: tawkMaxClose .25s ease!important}</style></head>
    <body class="dt-header--fixed theme-dark dt-layout--full-width dt-sidebar--fixed o-auto"><style></style>
        <!-- Root -->
        
        <div class="dt-root op-1">
            <div class="dt-root__inner">
                                <!-- Header -->
                <header class="dt-header">
                    <!-- Header container -->
                    <div class="dt-header__container">
                        <!-- Brand -->
                        <div class="dt-brand">
                            <!-- Brand tool -->
                          <div class="dt-brand__tool" data-toggle="main-sidebar">
                                <div class="hamburger-inner"></div>
                            </div> 
                            <!-- /brand tool -->

                          
                        </div>
                        <!--/brand -->

                        <!-- Header toolbar-->
                        <div class="dt-header__toolbar">
                        

                            <div class="search-box d-none d-lg-block">
                                                            <h1 class="dt-page__title mt-4" style="margin-left: -1.5em;">Home <span class="breadcrumb-arrow-right"></span> Dashboard</h1>
                                                        </div>

                            <!-- Header Menu Wrapper -->
                            <div class="dt-nav-wrapper">
                                <!-- Header Menu -->
                                <ul class="dt-nav d-lg-none">
                                    <li class="dt-nav__item dt-notification-search dropdown">

                                        <!-- Dropdown Link -->
                                        <a href="" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon icon-search icon-fw icon-lg"></i> </a>
                                        <!-- /dropdown link -->

                                        <!-- Dropdown Option -->
                                        <div class="dropdown-menu">

                                            <!-- Search Box -->
                                            <form class="search-box right-side-icon">
                                                <input class="form-control form-control-lg" type="search" placeholder="Search in app...">
                                                <button type="submit" class="search-icon"><i class="icon icon-search icon-lg"></i></button>
                                            </form>
                                            <!-- /search box -->

                                        </div>
                                        <!-- /dropdown option -->

                                    </li>
                                </ul>
                                <!-- /header menu -->
                                <!-- Header Menu -->
                                <ul class="dt-nav">
                                    <li class="dt-nav__item dropdown">
      
                                        <!-- Dropdown Link -->
                                        <a href="" class="dt-nav__link dropdown-toggle" id="currentLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img class="flag-icon flag-icon-rounded flag-icon-lg mr-1m" src="./newDashboard_files/gb-eng.png">
                                        <span>EN</span> </a>
                                        <!-- /dropdown link -->

                                        <!-- Dropdown Option -->
                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(8px, 72px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                                        <button class="dropdown-item sitelangChange" type="button" data-id="">
                                            <img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="./newDashboard_files/gb-eng.png"><span>English</span> </button>
                                                                                        <button class="dropdown-item sitelangChange" type="button" data-id="">
                                            <img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="./newDashboard_files/russia.png"><span>Russian</span> </button>
                                                                                        <button class="dropdown-item sitelangChange" type="button" data-id="">
                                            <img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="./newDashboard_files/portuguese.png"><span>Português</span> </button>
                                                                                        <button class="dropdown-item sitelangChange" type="button" data-id="">
                                            <img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="./newDashboard_files/spain.png"><span>Español</span> </button>
                                                                                        <button class="dropdown-item sitelangChange" type="button" data-id="">
                                            <img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="./newDashboard_files/germany.png"><span>German</span> </button>
                                                                                    </div>
                                        <!-- /dropdown option -->

                                    </li>
                                </ul>
                                <!-- /header menu -->

                                <!-- Header Menu -->
                                <ul class="dt-nav">
                                    <li class="dt-nav__item dropdown">

                                        <!-- Dropdown Link -->
                                        <a href="" class="dt-nav__link dropdown-toggle no-arrow dt-avatar-wrapper" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img class="dt-avatar size-30" src="./newDashboard_files/avatar.png" alt="">
                                            <span class="dt-avatar-info d-none d-sm-block">
                                                <span class="dt-avatar-name"><?=$userProperties['name']?></span>
                                                                                                        <span>Verified</span>
                                                                                                </span> </a>
                                        <!-- /dropdown link -->

                                        <!-- Dropdown Option -->
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="profile.php"> <i class="icon icon-user icon-fw mr-2 mr-sm-1"></i>Account                                            </a>
                                            <a class="dropdown-item" href="logout.php"> <i class="icon icon-editors icon-fw mr-2 mr-sm-1"></i>Logout                                            </a>
                                        </div>
                                        <!-- /dropdown option -->

                                    </li>
                                </ul>
                                <!-- /header menu -->
                            </div>
                            <!-- Header Menu Wrapper -->

                        </div>
                        <!-- /header toolbar -->

                    </div>
                    <!-- /header container -->

                </header>
                <!-- /header -->
               
                


                <!-- Site Main -->
                <main class="dt-main">
                    <!-- Sidebar -->
                    <aside id="main-sidebar" class="dt-sidebar ps">
                                                <div class="dt-sidebar__container mt-10">

                            <!-- Sidebar Navigation -->
                            <ul class="dt-side-nav">
                                                                <li class="dt-side-nav__item selected">
                                    <a href="newDashboard.php" class="dt-side-nav__link dt-active" title="Dashboard">
                                    <i><img src="dashboard.png" width="20" height="20" alt=""></i>
                                        <span class="dt-side-nav__text">Dashboard</span>
                                    </a>
                                </li>
                                <li class="dt-side-nav__item ">
                                    <a href="index.php" class="dt-side-nav__link" title="Home">
                                    <i ><img src="home.png" width="20" height="20" alt=""></i>
                                        <span class="dt-side-nav__text">HOME</span>
                                    </a>
                                </li>
                                <li class="dt-side-nav__item ">
                                    <a href="depositPackages.php" class="dt-side-nav__link" title="Deposits">
                                    <i ><img src="deposit.png" width="20" height="20" alt=""></i>
                                        <span class="dt-side-nav__text">Deposits</span>
                                    </a>
                                </li>
                                <li class="dt-side-nav__item ">
                                    <a href="newWithdrawals.php" class="dt-side-nav__link" title="withdrawable Requests">
                                    <i ><img src="withdraw.png" width="20" height="20" alt=""></i>
                                        <span class="dt-side-nav__text">Withdrawable Funds</span>
                                    </a>
                                </li>

                                <li class="dt-side-nav__item ">
                                    <a href="Usage.php" class="dt-side-nav__link" title="withdrawable Requests">
                                    <i ><img src="expenditure.png" width="20" height="20" alt=""></i>
                                        <span class="dt-side-nav__text">MyExpenditure</span>
                                    </a>
                                </li>

                                <li class="dt-side-nav__item ">
                                    <a href="transactionsDep.php" class="dt-side-nav__link" title="withdrawable Requests">
                                    <i ><img src="transactions.png" width="20" height="20" alt=""></i>
                                        <span class="dt-side-nav__text">Transactions</span>
                                    </a>
                                </li>

                                <li class="dt-side-nav__item ">
                                    <a href="tradingChart.php" class="dt-side-nav__link" title="withdrawable Requests">
                                    <i ><img src="chart.png" width="20" height="20" alt=""></i>
                                        <span class="dt-side-nav__text">TradingChart</span>
                                    </a>
                                </li>
                                
                                <?php
                                
                                if(isset($_SESSION['verifiedSuperAdmin'])){


                                    ?>
                                    <li class="dt-side-nav__item ">
                                    <a href="claims.php" class="dt-side-nav__link" title="Revoke claims">
                                    <i ><img src="claims.png" width="20" height="20" alt=""></i>
                                        <span class="dt-side-nav__text">Claims</span>
                                    </a>
                                </li>
                                <li class="dt-side-nav__item ">
                                    <a href="paid.php" class="dt-side-nav__link" title="Admin Operations">
                                    <i ><img src="admin.png" width="20" height="20" alt=""></i>
                                        <span class="dt-side-nav__text">Admin</span>
                                    </a>
                                </li>

                                <li class="dt-side-nav__item ">
                                    <a href="adminpaidReview.php" class="dt-side-nav__link" title="Paid users list">
                                    <i ><img src="paidlist.png" width="20" height="20" alt=""></i>
                                        <span class="dt-side-nav__text">PaidUsersList</span>
                                    </a>
                                </li>

                                <li class="dt-side-nav__item ">
                                    <a href="userPayinfo.php" class="dt-side-nav__link" title="userPay Information">
                                    <i><img src="payinfo.png" width="20" height="20" alt=""></i>
                                        <span class="dt-side-nav__text">UserPayInfo</span>
                                    </a>
                                </li>
                               
                                <?php
                                }
                                elseif(isset($_SESSION['verifiedAdmin'])){


                                    ?>
                                <li class="dt-side-nav__item ">
                                    <a href="paid.php" class="dt-side-nav__link" title="Admin">
                                    <i ><img src="admin.png" width="20" height="20" alt=""></i>
                                        <span class="dt-side-nav__text">Admin</span>
                                    </a>
                                </li>

                                <li class="dt-side-nav__item ">
                                    <a href="adminpaidReview.php" class="dt-side-nav__link" title="PaidUsersList">
                                    <i><img src="paidlist.png" width="20" height="20" alt=""></i>
                                        <span class="dt-side-nav__text">PaidUsersList</span>
                                    </a>
                                </li>

                                <li class="dt-side-nav__item ">
                                    <a href="userPayinfo.php" class="dt-side-nav__link" title="user payment Information">
                                    <i ><img src="payinfo.png" width="20" height="20" alt=""></i>
                                        <span class="dt-side-nav__text">UserPayInfo</span>
                                    </a>
                                </li>
                                   
                              <?php

                                }else{

                                    ?>
                                    <li class="dt-side-nav__item ">
                                    <a href="profile.php" class="dt-side-nav__link" title="UserProfile">
                                    <i ><img src="user.png" width="20" height="20" alt=""></i>
                                        <span class="dt-side-nav__text">User</span>
                                    </a>
                                </li>

                                    <?php
                                }


                                 ?>
                             
                                

                               
                                <li class="dt-side-nav__item ">
                                    <a href="changepassword.php" class="dt-side-nav__link " title="Security">
                                    <i ><img src="security.png" width="20" height="20" alt=""></i>
                                        <span class="dt-side-nav__text">Security</span>
                                    </a>
                                </li>

                                <li class="dt-side-nav__item ">
                                    <a href="helpDesk.php" class="dt-side-nav__link" title="help desk">
                                    <i ><img src="helpdesk.png" width="20" height="20" alt=""></i>
                                        <span class="dt-side-nav__text">Help Desk</span>
                                    </a>
                                </li>
                                <li class="dt-side-nav__item ">
                                    <a href="logout.php" class="dt-side-nav__link" title="Logout">
                                    <i><img src="logout.png" width="20" height="20" alt=""></i>
                                        <span class="dt-side-nav__text">Logout</span>
                                    </a>
                                </li>
                                <!-- Menu Header -->
                                
                                <!-- /menu item -->

                            </ul>
                            <!-- /sidebar navigation -->

                        </div>
                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></aside>
                    <!-- /sidebar -->



                    <!-- Site Content Wrapper -->
<div class="dt-content-wrapper">
    <!-- Site Content -->
    <div class="dt-content">
        <!-- Page Header -->
        <div class="dt-page__header">
            <h1 class="dt-page__title text-capitalize">Dashboard ->status:{<?=$userProperties['status']?>}</h1>
            <div class="dt-page__header-tool">
                <a href="javascript:void(0)" class="btn btn-primary btn-shadow text-uppercase">
                    <i class="icon icon-upload-cloud icon-xl"></i> LastLoginTime : :</a>
                <a href="javascript:void(0)" class="btn btn-secondary btn-shadow text-uppercase">
                    <i class="icon icon-download-cloud icon-xl"></i>: <?= $lastLoginTime ?></a>
            </div>
            

            
        </div>
        <!-- /page header -->

        <!-- Grid -->
        <div class="row mt-3-2m">
            <!-- Grid Item -->
            <div class="col-xl-12 col-12 col-md-12">
                                <!-- Grid Item -->
                                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container mb-1-5m" style="width: 100%; height: 46px;">
                    <iframe scrolling="no" allowtransparency="true" frameborder="0" src="./newDashboard_files/saved_resource.html" style="box-sizing: border-box; height: 46px; width: 100%;"></iframe>
                    
                <style>
	.tradingview-widget-copyright {
		font-size: 13px !important;
		line-height: 32px !important;
		text-align: center !important;
		vertical-align: middle !important;
		/* @mixin sf-pro-display-font; */
		font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
		color: #9db2bd !important;
	}

	.tradingview-widget-copyright .blue-text {
		color: #2962FF !important;
	}

	.tradingview-widget-copyright a {
		text-decoration: none !important;
		color: #9db2bd !important;
	}

	.tradingview-widget-copyright a:visited {
		color: #9db2bd !important;
	}

	.tradingview-widget-copyright a:hover .blue-text {
		color: #1E53E5 !important;
	}

	.tradingview-widget-copyright a:active .blue-text {
		color: #1848CC !important;
	}

	.tradingview-widget-copyright a:visited .blue-text {
		color: #2962FF !important;
	}
	</style></div>
                <!-- TradingView Widget END -->
                            </div>

                            <?php

                                if (isset($_SESSION['status']))
                                echo"<h5 class='alert alert-success bg-red'>".$_SESSION['status']."</h5>";
                                unset($_SESSION['status']);


                                ?>          

            <div class="col-md-6 col-sm-12 col-12">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Card -->
                        <div class="dt-card">
                            <!-- Card Body -->
                            <div style="border-radius: 30px;" class="dt-card__body p-xl-8 py-sm-8 py-6 px-4 dt-card bg-dark text-white">
                                <span class="badge badge-secondary badge-top-right">Account Balance</span>
                                <!-- Media -->
                                <div class="media iso" id="medbod">
                                    
                                    <i ><img src="totalearned.png" width="40" height="50" alt=""></i>
                                    <!-- Media Body -->
                                    <div class="media-body">
                                        <h4 class="mb-1 h1 text-white">
                                            <p></p>
                                            USD <?=$userProperties['earnedTotal']?>                                        </h4>
                                            
                                            <?php
                                            //Tanzanian/Rwanda currency conversion
                                            $rateTz = $userProperties['earnedTotal'] * 2365;
                                            $rateRwf = $userProperties['earnedTotal'] * 1157;
                                            $formatRateTz = number_format($rateTz, 0);
                                            $formatRateRwf = number_format($rateRwf, 0);
                                            ?>
                                            <div style ="display:flex;" style="gap:20;">
                                        
                                        <div><h3>Tsh. <?=$formatRateTz?></h3></div>
                                              <div class="spacer"></div>      
                                        <div><h3>Rwf. <?=$formatRateRwf?></h3></div>
                                           </div>
                                           
                                    </div>
                                    
                                    
                                    <!-- /media body -->
                                </div>
                                
                                <!-- /media -->
                            </div>
                            
                            <!-- /card body -->
                        </div>
                        <!-- /card -->
                        
                    </div>

                    <div class="col-md-6">
                        <!-- Card -->
                        <div class="dt-card">
                            <!-- Card Body -->
                            <div style="border-radius: 30px;" class="dt-card__body p-xl-8 py-sm-8 py-6 px-4 dt-card bg-dark text-white">
                                <span class="badge badge-secondary badge-top-right">Active deposits</span>
                                <!-- Media -->
                                <div class="media iso" id="medbod">
                                <i ><img src="accountbalance.png" width="40" height="50" alt=""></i>
                                    <!-- Media Body -->
                                    <div class="media-body">
                                        <h4 class="mb-1 h1 text-white">
                                            <p></p>
                                            USD <?=$userProperties['accBal']?>                                        </h4>
                                            
                                            <?php
                                            //Tanzanian/Rwanda currency conversion
                                            $rateTz = $userProperties['accBal'] * 2365;
                                            $rateRwf = $userProperties['accBal'] * 1157;
                                            $formatRateTz = number_format($rateTz, 0);
                                            $formatRateRwf = number_format($rateRwf, 0);
                                            ?>
                                         <div style ="display:flex;" style="gap:20;">
                                        
                                        <div><h3>Tsh. <?=$formatRateTz?></h3></div>
                                              <div class="spacer"></div>      
                                        <div><h3>Rwf. <?=$formatRateRwf?></h3></div>
                                           </div>
                                    </div>
                                    <!-- /media body -->
                                </div>
                                <!-- /media -->
                            </div>
                            <!-- /card body -->
                        </div>
                        <!-- /card -->
                    </div>

                    <div class="col-md-6">
                        <!-- Card -->
                        <div class="dt-card">
                            <!-- Card Body -->
                            <div style="border-radius: 30px;" class="dt-card__body p-xl-8 py-sm-8 py-6 px-4 dt-card bg-dark text-white">
                                <span class="badge badge-secondary badge-top-right">Active Bonus</span>
                                <!-- Media -->
                                <div class="media iso" id="medbod">
                                <i ><img src="bonus.png" width="30" height="35" alt=""></i>
                                    <!-- Media Body -->
                                    <div class="media-body">
                                        <h4 class="mb-1 h1 text-white">
                                            <p></p>
                                            USD <?=$userProperties['bonus']?>                                        </h4>
                                            
                                            <?php
                                            //Tanzanian/Rwanda currency conversion
                                            $rateTz = $userProperties['bonus'] * 2365;
                                            $rateRwf = $userProperties['bonus'] * 1157;
                                            $formatRateTz = number_format($rateTz, 0);
                                            $formatRateRwf = number_format($rateRwf, 0);
                                            ?>
                                         <div style ="display:flex;" style="gap:20;">
                                        
                                        <div><h3>Tsh. <?=$formatRateTz?></h3></div>
                                              <div class="spacer"></div>      
                                        <div><h3>Rwf. <?=$formatRateRwf?></h3></div>
                                           </div>
                                    </div>
                                    <!-- /media body -->
                                </div>
                                <!-- /media -->
                            </div>
                            <!-- /card body -->
                        </div>
                        <!-- /card -->
                    </div>

                    <div class="col-md-6">
                        <!-- Card -->
                        <div class="dt-card">
                            <!-- Card Body -->
                            <div style="border-radius: 30px;" class="dt-card__body p-xl-8 py-sm-8 py-6 px-4 dt-card bg-dark text-white">
                                <span class="badge badge-secondary badge-top-right">Active Withdrawal</span>
                                <!-- Media -->
                                <div class="media iso" id="medbod">
                                <i ><img src="totalearned.png" width="40" height="50" alt=""></i>
                                    <!-- Media Body -->
                                    <div class="media-body" >
                                        <h4 class="mb-1 h1 text-white">
                                            <p></p>
                                            USD <?=$userProperties['withdrawal']?>                                        </h4>
                                            
                                            <?php
                                            //Tanzanian/Rwanda currency conversion
                                            $rateTz = $userProperties['withdrawal'] * 2365;
                                            $rateRwf = $userProperties['withdrawal'] * 1157;
                                            $formatRateTz = number_format($rateTz, 0);
                                            $formatRateRwf = number_format($rateRwf, 0);
                                            ?>
                                        <div style ="display:flex;" style="gap:20;">
                                        
                                        <div><h3>Tsh. <?=$formatRateTz?></h3></div>
                                              <div class="spacer"></div>      
                                        <div><h3>Rwf. <?=$formatRateRwf?></h3></div>
                                           </div>
                                    </div>
                                    <!-- /media body -->
                                </div>
                                <!-- /media -->
                            </div>
                            <!-- /card body -->
                        </div>
                        <!-- /card -->
                    </div>



            </div>
            <div class="col-md-5 col-sm-6 col-12">
                <div class="row">
                    <div class="col-md-12">
                                                                        
                        
                        <div class="dt-card dt-card bg-image-v6 bg-overlay overlay-opacity-0_8 bg-gradient-blue--after text-white">

                            <!-- Overlay Content -->
                            <div class="bg-overlay__inner mt-auto">

                                <!-- Card Body -->
                                <div class="dt-card__body ">


                                   <!-- TradingView Widget BEGIN -->
                                            <div class="tradingview-widget-container" id="chart2">
                                                    <div id="tradingview_ac9b0"></div>
                                                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BTCUSD/?exchange=BITSTAMP" rel="noopener" target="_blank"><span class="blue-text">Bitcoin chart</span></a> by TradingView</div>
                                                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                                    <script type="text/javascript">
                                                        
                                                    new TradingView.widget(
                                                    {
                                                    "width":400,
                                                    "height": 600,
                                                    "symbol": "BITSTAMP:BTCUSD",
                                                    "interval": "D",
                                                    "timezone": "Africa/Nairobi",
                                                    "theme": "Dark",
                                                    "style": "1",
                                                    "locale": "en",
                                                    "toolbar_bg": "#f1f3f6",
                                                    "enable_publishing": false,
                                                    "withdateranges": true,
                                                    "hide_side_toolbar": false,
                                                    "allow_symbol_change": true,
                                                    "calendar": true,
                                                    "studies": [
                                                        "LinearRegression@tv-basicstudies",
                                                        "RSI@tv-basicstudies",
                                                        "Stochastic@tv-basicstudies"
                                                    ],
                                                    "container_id": "tradingview_ac9b0"
                                                    }
                                                    );
                                                    </script>
                                            </div>
                                    <!-- TradingView Widget END -->



                                </div>
                                <!-- /card body -->

                            </div>
                            <!-- /overlay content -->

                        </div>
                        <!-- /card -->
                    </div>
                   
                </div>

                
            </div>
            <!-- /grid item -->

        </div>
        <!-- /grid -->
    </div>
    <!-- /site content -->
    <script src="./newDashboard_files/functions.js.download"></script><!-- Footer -->
<footer class="dt-footer">
    Copyright 24hrfx Trading Org © 2023  Version :3.7
</footer>
<!-- /footer -->
 
                                        </body>

</div>
<!-- /site content wrapper -->
</main>
</div>
</div>
    <script src="./newDashboard_files/summernote-bs4.js.download"></script>
<script src="./newDashboard_files/lang.js.download"></script>
<script src="./newDashboard_files/editor-summernote.js.download"></script>
<script src="./newDashboard_files/moment.js.download"></script>
<script src="./newDashboard_files/bootstrap.bundle.min.js.download"></script>
<script src="./newDashboard_files/contact.js.download"></script>
<script src="./newDashboard_files/perfect-scrollbar.min.js.download"></script>
<script src="./newDashboard_files/masonry.pkgd.min.js.download"></script>
<script src="./newDashboard_files/sweetalert2.js.download"></script>
<script src="./newDashboard_files/customizer.js.download"></script>
<script src="./newDashboard_files/Chart.min.js.download"></script>
<script src="./newDashboard_files/chartist.min.js.download"></script>
<script src="./newDashboard_files/script.js.download"></script>

</p><div class="card user-bg-card position-absolute bg-primary" style="display: none;"></div><script>
		function returnCommentSymbol(language = "javascript") {
			const languageObject = {
				bat: "@REM",
				c: "//",
				csharp: "//",
				cpp: "//",
				closure: ";;",
				coffeescript: "#",
				dockercompose: "#",
				css: "/*DELIMITER*/",
				"cuda-cpp": "//",
				dart: "//",
				diff: "#",
				dockerfile: "#",
				fsharp: "//",
				"git-commit": "//",
				"git-rebase": "#",
				go: "//",
				groovy: "//",
				handlebars: "{{!--DELIMITER--}}",
				hlsl: "//",
				html: "<!--DELIMITER-->",
				ignore: "#",
				ini: ";",
				java: "//",
				javascript: "//",
				javascriptreact: "//",
				json: "//",
				jsonc: "//",
				julia: "#",
				latex: "%",
				less: "//",
				lua: "--",
				makefile: "#",
				markdown: "<!--DELIMITER-->",
				"objective-c": "//",
				"objective-cpp": "//",
				perl: "#",
				perl6: "#",
				php: "<!--DELIMITER-->",
				powershell: "#",
				properties: ";",
				jade: "//-",
				python: "#",
				r: "#",
				razor: "<!--DELIMITER-->",
				restructuredtext: "..",
				ruby: "#",
				rust: "//",
				scss: "//",
				shaderlab: "//",
				shellscript: "#",
				sql: "--",
				svg: "<!--DELIMITER-->",
				swift: "//",
				tex: "%",
				typescript: "//",
				typescriptreact: "//",
				vb: "'",
				xml: "<!--DELIMITER-->",
				xsl: "<!--DELIMITER-->",
				yaml: "#"
			}
			return languageObject[language].split("DELIMITER")
		}
		var savedChPos = 0
		var returnedSuggestion = ''
		let editor, doc, cursor, line, pos
		pos = {line: 0, ch: 0}
		var suggestionsStatus = false
		var docLang = "python"
		var suggestionDisplayed = false
		var isReturningSuggestion = false
		document.addEventListener("keydown", (event) => {
		setTimeout(()=>{
			editor = event.target.closest('.CodeMirror');
			if (editor){
				const codeEditor = editor.CodeMirror
				if(!editor.classList.contains("added-tab-function")){
					editor.classList.add("added-tab-function")
					codeEditor.removeKeyMap("Tab")
					codeEditor.setOption("extraKeys", {Tab: (cm)=>{

						if(returnedSuggestion){
							acceptTab(returnedSuggestion)
						}
						else{
							cm.execCommand("defaultTab")
						}
					}})
				}
				doc = editor.CodeMirror.getDoc()
				cursor = doc.getCursor()
				line = doc.getLine(cursor.line)
				pos = {line: cursor.line, ch: line.length}

				if(cursor.ch > 0){
					savedChPos = cursor.ch
				}

				const fileLang = doc.getMode().name
				docLang = fileLang
				const commentSymbol = returnCommentSymbol(fileLang)
				if (event.key == "?"){
					var lastLine = line
					lastLine = lastLine.slice(0, savedChPos - 1)

					if(lastLine.trim().startsWith(commentSymbol[0])){
						lastLine += " "+fileLang
						lastLine = lastLine.split(commentSymbol[0])[1]
						window.postMessage({source: 'getQuery', payload: { data: lastLine } } )
						isReturningSuggestion = true
						displayGrey("\nBlackbox loading...")
					}
				}else if(event.key === "Enter" && suggestionsStatus && !isReturningSuggestion){
					var query = doc.getRange({ line: Math.max(0,cursor.line-10), ch: 0 }, { line: cursor.line, ch: line.length })
					window.postMessage({source: 'getSuggestion', payload: { data: query, language: docLang } } )
					displayGrey("Blackbox loading...")
				}else if(event.key === "ArrowRight" && returnedSuggestion){
					acceptTab(returnedSuggestion)
				}else if(event.key === "Enter" && isReturningSuggestion){
					displayGrey("\nBlackbox loading...")
				}else if(event.key === "Escape"){
					displayGrey("")
				}
			}
		}, 0)
		})

		function acceptTab(text){
		if (suggestionDisplayed){
			displayGrey("")
			doc.replaceRange(text, pos)
			returnedSuggestion = ""
			updateSuggestionStatus(false)
		}
		}
		function acceptSuggestion(text){
			displayGrey("")
			doc.replaceRange(text, pos)
			returnedSuggestion = ""
			updateSuggestionStatus(false)
		}
		function displayGrey(text){
			if(!text){
				document.querySelector(".blackbox-suggestion").remove()
				return
			}
			var el = document.querySelector(".blackbox-suggestion")
			if(!el){
				el = document.createElement('span')
				el.classList.add("blackbox-suggestion")
				el.style = 'color:grey'
				el.innerText = text
			}
			else{
				el.innerText = text
			}
			
			var lineIndex = pos.line;
			editor.getElementsByClassName('CodeMirror-line')[lineIndex].appendChild(el)
		}
		function updateSuggestionStatus(s){
			suggestionDisplayed = s
			window.postMessage({source: 'updateSuggestionStatus', status: suggestionDisplayed, suggestion: returnedSuggestion})
		}
		window.addEventListener('message', (event)=>{
		if (event.source !== window ) return
		if (event.data.source == 'return'){
			isReturningSuggestion = false
			const formattedCode = formatCode(event.data.payload.data)
			returnedSuggestion = formattedCode
			displayGrey(formattedCode)
			updateSuggestionStatus(true)
		}
		if(event.data.source == 'suggestReturn'){
			returnedSuggestion = event.data.payload.data
			displayGrey(event.data.payload.data)
			updateSuggestionStatus(true)
		}
		if(event.data.source == 'suggestionsStatus'){
			suggestionsStatus = event.data.payload.enabled
		}
		if(event.data.source == 'acceptSuggestion'){
			
			acceptSuggestion(event.data.suggestion)
		}
		})
		document.addEventListener("keyup", function(){
			returnedSuggestion = ""
			updateSuggestionStatus(false)
		})
		function formatCode(data) {
			if (Array.isArray(data)) {
				var finalCode = ""
				var pairs = []
		
				const commentSymbol = returnCommentSymbol(docLang)
				data.forEach((codeArr, idx) => {
					const code = codeArr[0]
					var desc = codeArr[1]
					const descArr = desc.split("\n")
					var finalDesc = ""
					descArr.forEach((descLine, idx) => {
						const whiteSpace = descLine.search(/\S/)
						if (commentSymbol.length < 2 || idx === 0) {
							finalDesc += insert(descLine, whiteSpace, commentSymbol[0])
						}
						if (commentSymbol.length > 1 && idx === descArr.length - 1) {
							finalDesc = finalDesc + commentSymbol[1] + "\n"
						}
					})
		
					finalCode += finalDesc + "\n\n" + code
					pairs.push(finalCode)
				})
				return "\n"+pairs.join("\n")
			}
		
			return "\n"+data
		}
		
		function insert(str, index, value) {
			return str.substr(0, index) + value + str.substr(index)
		}
	</script>
    
    <script async="" charset="UTF-8" src="./newDashboard_files/en.js.download"></script><div id="mulaecv547eg1675262278346" class="widget-visible"><iframe src="./newDashboard_files/saved_resource(1).html" frameborder="0" scrolling="no" width="64px" height="60px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:20px !important; bottom:20px !important; left:auto !important; position:fixed !important; border:0 !important; min-height:60px !important; min-width:64px !important; max-height:60px !important; max-width:64px !important; padding:0 !important; margin:0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:none !important; -webkit-transform:none !important; -ms-transform:none !important; width:64px !important; height:60px !important; display:block !important; z-index:1000001 !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:unset !important; pointer-events:auto !important; clip:auto !important; color-scheme:light !important;" id="binr8i8kvtk1675262278425" class="" title="chat widget"></iframe><iframe src="./newDashboard_files/saved_resource(2).html" frameborder="0" scrolling="no" width="350px" height="520px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:10px !important; bottom:90px !important; left:auto !important; position:fixed !important; border:0 !important; min-height:520px !important; min-width:350px !important; max-height:520px !important; max-width:350px !important; padding:0 !important; margin:0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:none !important; -webkit-transform:none !important; -ms-transform:none !important; width:350px !important; height:520px !important; display:none !important; z-index:auto !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:5px !important; pointer-events:auto !important; clip:auto !important; color-scheme:light !important;" id="cseqjjnubdng1675262278662" class="" title="chat widget"></iframe><iframe src="./newDashboard_files/saved_resource(3).html" frameborder="0" scrolling="no" width="360px" height="145px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:20px !important; bottom:100px; left:auto !important; position:fixed !important; border:0 !important; min-height:145px !important; min-width:360px !important; max-height:145px !important; max-width:360px !important; padding:0 !important; margin:0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:none !important; -webkit-transform:none !important; -ms-transform:none !important; width:360px !important; height:145px !important; display:none !important; z-index:auto !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:unset !important; pointer-events:auto !important; clip:auto !important; color-scheme:light !important;" id="h38bpj263n181675262278455" class="" title="chat widget"></iframe><iframe src="./newDashboard_files/saved_resource(4).html" frameborder="0" scrolling="no" width="124px" height="95px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:0px !important; bottom:30px !important; left:auto !important; position:fixed !important; border:0 !important; min-height:95px !important; min-width:124px !important; max-height:95px !important; max-width:124px !important; padding:0 !important; margin:0px 0 0 0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:rotate(0deg) translateZ(0); -webkit-transform:rotate(0deg) translateZ(0); -ms-transform:rotate(0deg) translateZ(0); width:124px !important; height:95px !important; display:block !important; z-index:1000002 !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:unset !important; pointer-events:auto !important; clip:auto !important; color-scheme:light !important; -moz-transform:rotate(0deg) translateZ(0); -o-transform:rotate(0deg) translateZ(0); transform-origin:0; -moz-transform-origin:0; -webkit-transform-origin:0; -o-transform-origin:0; -ms-transform-origin:0;" id="s1o4ct6mlq81675262278396" class="" title="chat widget"></iframe></div><div id="loader">
  <div class="spinner"></div>
</div> </body></html>