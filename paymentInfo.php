<?php
include('authentication.php');
$userProperties = $_SESSION['userProperties'];

?>
<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags -->
    
    <meta name="description" content="Fortunate Forex investors is an investment company that aggregates funds for investment in bitcoin and forex trading.                                                                                                                                                                                                                                                                                                                                                                                               ">
    <meta name="keywords" content="proinvest, bitcoin trading, forex, investment, trading                                                                                                                                                                                                                                                                                                                                                                                                                                                              ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <base href=".">
    <title>My profile</title>
    <!-- Bootstrap CSS -->
    
    <link rel="shortcut icon" type="image/x-icon" href="./svg.png">
    
    <!-- Font Icon Styles -->
    <link rel="stylesheet" href="./profile_files/icons.css">
    <!-- /font icon Styles -->
    <!-- Load Styles -->
    <link rel="stylesheet" href="./profile_files/bootstrap-formhelpers.min.css">
    <link rel="stylesheet" href="./profile_files/flag-icon.min.css">
    <link rel="stylesheet" href="./profile_files/chartist.min.css">
    <link rel="stylesheet" href="./profile_files/style.min.css">
    <!-- /load styles -->
    <!-- include summernote css/js -->
    <link href="./profile_files/summernote-bs4.css" rel="stylesheet">
    <link rel="stylesheet" href="./profile_files/intlTelInput.css">

    <script src="./profile_files/twk-main.js.download" charset="UTF-8" crossorigin="*"></script><script src="./profile_files/twk-vendor.js.download" charset="UTF-8" crossorigin="*"></script><script src="./profile_files/twk-chunk-vendors.js.download" charset="UTF-8" crossorigin="*"></script><script src="./profile_files/twk-chunk-common.js.download" charset="UTF-8" crossorigin="*"></script><script src="./profile_files/twk-runtime.js.download" charset="UTF-8" crossorigin="*"></script><script src="./profile_files/twk-app.js.download" charset="UTF-8" crossorigin="*"></script><script async="" src="./profile_files/default" charset="UTF-8" crossorigin="*"></script><script src="./profile_files/jquery.min.js.download"></script>
    <style type="text/css">@font-face { font-family: Roboto; src: url("chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf"); }</style><script charset="utf-8" src="./profile_files/twk-chunk-2c78ba82.js.download"></script><script charset="utf-8" src="./profile_files/twk-chunk-696bc286.js.download"></script><script charset="utf-8" src="./profile_files/twk-chunk-f1596d96.js.download"></script><script charset="utf-8" src="./profile_files/twk-chunk-48f46bef.js.download"></script><script charset="utf-8" src="./profile_files/twk-chunk-4fe9d5dd.js.download"></script><script charset="utf-8" src="./profile_files/twk-chunk-2d0b9454.js.download"></script><script charset="utf-8" src="./profile_files/twk-chunk-f163fcd0.js.download"></script><script charset="utf-8" src="./profile_files/twk-chunk-32507910.js.download"></script><style type="text/css">#aaa0tngkd0qg1675261496840 {outline:none !important;
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
color-scheme:light !important;}#aaa0tngkd0qg1675261496840.widget-hidden {display: none !important;}#aaa0tngkd0qg1675261496840.widget-visible {display: block !important;}
@media print{
 #aaa0tngkd0qg1675261496840.widget-visible { 
display: none !important;
 }
}</style><style type="text/css">@keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-moz-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-webkit-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}#wfa1rmb453p81675261496968.open{animation : tawkMaxOpen .25s ease!important;}@keyframes tawkMaxClose{from{opacity: 1;transform:translate(0, 0px);;}to{opacity: 0;transform:translate(0, 30px);;}}@-moz-keyframes tawkMaxClose{from{opacity: 1;transform:translate(0, 0px);;}to{opacity: 0;transform:translate(0, 30px);;}}@-webkit-keyframes tawkMaxClose{from{opacity: 1;transform:translate(0, 0px);;}to{opacity: 0;transform:translate(0, 30px);;}}#wfa1rmb453p81675261496968.closed{animation: tawkMaxClose .25s ease!important}</style><script src="./profile_files/emojione.min.js.download" type="text/javascript" async="" defer=""></script><script src="./profile_files/emojione.min.js.download" type="text/javascript" async="" defer=""></script></head>
    <body class="bg-dark dt-header--fixed theme-dark dt-layout--full-width o-auto"><style></style>
        <!-- Root -->
        <div class="dt-root op-1">
            <div class="dt-root__inner">
                                <!-- Header -->
                <header class="dt-header bg-dark">
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
                        <!-- /brand -->

                        <!-- Header toolbar-->
                        <div class="dt-header__toolbar">
                        

                            <div class="search-box d-none d-lg-block">
                                                            <h1 class="dt-page__title mt-4" style="margin-left: -1.5em;">Settings <span class="breadcrumb-arrow-right"></span> My Profile</h1>
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
                                    <li class="dt-nav__item dropdow" class="dt-nav__link dropdown-toggle" id="currentLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img  width="20" height="20" src="./profile_files/gb-eng.png">
                                        <span class="text-white">EN</span> </a>
                                        <!-- /dropdown link -->

                                        <!-- Dropdown Option -->
                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(8px, 72px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                                        <button class="dropdown-item sitelangChange" type="button" data-id="">
                                            <img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="./profile_files/gb-eng.png"><span>English</span> </button>
                                                                                        <button class="dropdown-item sitelangChange" type="button" data-id="">
                                            <img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="./profile_files/russia.png"><span>Russian</span> </button>
                                                                                        <button class="dropdown-item sitelangChange" type="button" data-id="">
                                            <img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="./profile_files/portuguese.png"><span>Português</span> </button>
                                                                                        <button class="dropdown-item sitelangChange" type="button" data-id="">
                                            <img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="./profile_files/spain.png"><span>Español</span> </button>
                                                                                        <button class="dropdown-item sitelangChange" type="button" data-id=">
                                            <img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="./profile_files/germany.png"><span>German</span> </button>
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
                                            <img class="dt-avatar size-30" src="./profile_files/avatar.png" alt="fadhili rubia">
                                            <span class="dt-avatar-info d-none d-sm-block">
                                                <span class="dt-avatar-name  text-white"><?=$userProperties['name']?></span>
                                                                                                        <span class="text-white">Verified</span>
                                                                                                </span> </a>
                                        <!-- /dropdown link -->

                                        <!-- Dropdown Option -->
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href=""> <i class="icon icon-user icon-fw mr-2 mr-sm-1"></i>Account                                            </a>
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
                    <aside id="main-sidebar" class="dt-sidebar ps dt-drawer position-left">
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
                            <i><img src="home.png" width="20" height="20" alt=""></i>
                            <span class="dt-side-nav__text">HOME</span>
                        </a>
                    </li>
                    <li class="dt-side-nav__item ">
                        <a href="depositPackages.php" class="dt-side-nav__link" title="Deposits">
                            <i><img src="deposit.png" width="20" height="20" alt=""></i>
                            <span class="dt-side-nav__text">Deposits</span>
                        </a>
                    </li>
                    <li class="dt-side-nav__item ">
                        <a href="newWithdrawals.php" class="dt-side-nav__link" title="withdrawable Requests">
                            <i><img src="withdraw.png" width="20" height="20" alt=""></i>
                            <span class="dt-side-nav__text">Withdrawable Funds</span>
                        </a>
                    </li>

                    <li class="dt-side-nav__item ">
                        <a href="Usage.php" class="dt-side-nav__link" title="withdrawable Requests">
                            <i><img src="expenditure.png" width="20" height="20" alt=""></i>
                            <span class="dt-side-nav__text">MyExpenditure</span>
                        </a>
                    </li>
                    <li class="dt-side-nav__item ">
                        <a href="tradingChart.php" class="dt-side-nav__link" title="withdrawable Requests">
                            <i><img src="chart.png" width="20" height="20" alt=""></i>
                            <span class="dt-side-nav__text">TradingChart</span>
                        </a>
                    </li>

                    <?php
                
                if(isset($_SESSION['verifiedSuperAdmin'])){


                    ?>
                        <li class="dt-side-nav__item ">
                            <a href="claims.php" class="dt-side-nav__link" title="Revoke claims">
                                <i><img src="claims.png" width="20" height="20" alt=""></i>
                                <span class="dt-side-nav__text">Claims</span>
                            </a>
                        </li>
                        <li class="dt-side-nav__item ">
                            <a href="paid.php" class="dt-side-nav__link" title="Admin Operations">
                                <i><img src="admin.png" width="20" height="20" alt=""></i>
                                <span class="dt-side-nav__text">Admin</span>
                            </a>
                        </li>

                        <li class="dt-side-nav__item ">
                            <a href="adminpaidReview.php" class="dt-side-nav__link" title="Paid users list">
                                <i><img src="paidlist.png" width="20" height="20" alt=""></i>
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
                                    <i><img src="admin.png" width="20" height="20" alt=""></i>
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
                                    <i><img src="payinfo.png" width="20" height="20" alt=""></i>
                                    <span class="dt-side-nav__text">UserPayInfo</span>
                                </a>
                            </li>

                            <?php

                }else{

                    ?>
                                <li class="dt-side-nav__item ">
                                    <a href="profile.php" class="dt-side-nav__link" title="UserProfile">
                                        <i><img src="user.png" width="20" height="20" alt=""></i>
                                        <span class="dt-side-nav__text">User</span>
                                    </a>
                                </li>

                                <?php
                }


                 ?>




                                    <li class="dt-side-nav__item ">
                                        <a href="changepassword.php" class="dt-side-nav__link " title="Security">
                                            <i><img src="security.png" width="20" height="20" alt=""></i>
                                            <span class="dt-side-nav__text">Security</span>
                                        </a>
                                    </li>

                                    <li class="dt-side-nav__item ">
                                        <a href="helpDesk.php" class="dt-side-nav__link" title="help desk">
                                            <i><img src="helpdesk.png" width="20" height="20" alt=""></i>
                                            <span class="dt-side-nav__text">Help Desk</span>
                                        </a>
                                    </li>
                                    <li class="dt-side-nav__item ">
                                        <a href="logout.php" class="dt-side-nav__link" title="Logout">
                                            <i><img src="logout.png" width="20" height="20" alt=""></i>
                                            <span class="dt-side-nav__text">Logout</span>
                                        </a>
                                    </li>
                </ul>
            </nav>

            <!-- Page Content  -->
            <div id="content">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    
                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></aside>
                    <!-- /sidebar -->
                    <!-- Site Content Wrapper -->
<div class="dt-content-wrapper">
    <div class="hide" id="active-tab" data-id="#tab-pane1"></div>
    <!-- Site Content -->
    <div class="dt-content">
        <!-- Profile -->
        <div class="profile">

            <!-- Profile Banner -->
            <div class="profile__banner">

                <!-- Profile Banner Top -->
                <div class="profile__banner-detail">
                    <!-- Avatar Wrapper -->
                    <div class="dt-avatar-wrapper">
                        <!-- Avatar -->
                        <img class="dt-avatar dt-avatar__shadow size-90 mr-sm-4" src="./profile_files/avatar.png" id="ppic" alt="Logo">
                        <!-- /avatar -->

                        <!-- Info -->
                        <div class="dt-avatar-info">
                            <span class="dt-avatar-name display-4 mb-2 font-weight-light"><?=$userProperties['name']?></span>
                            <span class="f-16"><?=$userProperties['userEmail']?></span>
                            <div class="dropdown mt-2">

                                <!-- Profile Pic Uploader -->
                                <form action="" id="upload_form" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                                                                                                         
                                    <div class="upload-btn-wrapper">
                                    <button class="dropdown-toggle no-arrow text-white bg-transparent border-n">
                                        <i class="icon icon-settings icon-xl mr-2"></i>
                                        <span class="d-sm-inline-block">Change profile pic</span>
                                    </button>
                                    <input type="file" name="profile-pic" id="imgInp">
                                    </div>
                                    <button id="ppic-save" type="submit" class="btn btn-info display-n bg-transparent border-n">
                                        <i class="icon icon-circle-add-o icon-xl mr-2"></i>
                                        <span class="d-sm-inline-block">Save</span>
                                    </button>
                                </form>                            </div>
                        </div>
                        <!-- /info -->
                    </div>
                    <!-- /avatar wrapper -->

                    <div class="ml-sm-auto">
                        <!-- List -->
                        <div class="col-sm-12">
                                                        <!--
                            <div class="d-flex align-items-baseline mb-1">
                                <span
                                    class="display-2 font-weight-500 text-light mr-2"></span>
                            </div>
                            <p class="mb-0">Overall balance</p>
                            -->
                                                    </div>
                        <!-- /list -->
                    </div>
                </div>
                <!-- /profile banner top -->

            </div>
            <!-- /profile banner -->

            <!-- Profile Content -->
            <div class="profile-content">

                <!-- Grid -->
                <div class="row">

                    <!-- Grid Item -->
                    <div class="col-xl-12 order-xl-1">

                        <!-- Card -->
                        <div class="card bg-dark">

                            <!-- Card Header -->
                            <div class="card-header card-nav bg-transparent border-bottom d-sm-flex justify-content-sm-between">
                                <h3 class="mb-2 mb-sm-n5 text-white">Account Details</h3>

                                <ul class="card-header-links nav nav-underline" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active text-white" href="profile.php">My Profile</a>
                                    </li>
                                                                        <li class="nav-item">
                                        <a class="nav-link text-white" href="paymentInfo.php">Payment Account</a>
                                    </li>
                                                                        <li class="nav-item">
                                        <a class="nav-link text-white" href="changepassword.php">Security</a>
                                    </li>
                                </ul>

                            </div>
                            <!-- /card header -->

                            <!-- Card Body -->
                            <div class="card-body pb-2">

                                <!-- Tab Content-->
                                <div class="tab-content">

                                    <!-- Tab panel -->
                                    <div id="tab-pane1" class="tab-pane active">
                                        <!-- Grid -->
                                        <div class="row">
                                            <!-- Grid Item -->
                                            <div class="col-xl-12">
                                                                                                                                                                                                    <div class="alert alert-success alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                        Visit help Desk for any Issues                                                   </div>
                                                
                                                        <?php
                                                $key = $_SESSION['verifiedUserId'];
                            
                                                         ?>
                                                                                                <!-- Form -->
                                                <form action="userUpdateInfo.php" method="post" accept-charset="utf-8">
                                                        
                                                <input type="hidden" name="key" value="<?=$key?>">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <!-- Form Group -->
                                                                    <div class="form-group">
                                                                        <label for="paymentType">Deposit/Withdrawal E-wallet</label>
                                                                        <select class="form-control" name="accountType" id="simple-select" >
                                                                            <option value="" selected="" disabled="" hidden="">Choose Here</option>
                                                                                                                                                            <option name="AIRTEL-MONEY" value="AIRTEL MONEY ">AIRTEL MONEY </option>
                                                                                                                                                            <option name="Bank-Transfer" value="Bank Transfer">Bank Transfer</option>
                                                                                                                                                            <option name="BITCOIN" value="BITCOIN ">BITCOIN </option>
                                                                                                                                                            <option name="CARD" value="CARD">CARD </option>
                                                                                                                                                            <option name="M-PESA-KENYA " value="M-PESA KENYA ">M-PESA KENYA </option>
                                                                                                                                                            <option name="M-PESA-TZ" value="M-PESA TZ" selected="">M-PESA TZ</option>
                                                                                                                                                            <option name="MTN-MOBILE-MONEY" value="MTN MOBILE MONEY ">MTN MOBILE MONEY </option>
                                                                                                                                                            <option name="TIGO-PESA" value="TIGO-PESA">TIGO-PESA</option>
                                                                                                                                                    </select>
                                                                                                                                                    <p></p>
                                                                       
                                                                    </div>
                                                                    <!-- /form group -->
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <!-- Form Group -->
                                                                    <div class="form-group">
                                                                        <label for="bitcoinAd">E-wallet AccountNumber</label>
                                                                        <input type="text" value="<?=$userProperties['accountNumber']?>" class="form-control" name="accountNumber" aria-describedby="bitcoinAd" placeholder="Payment Account">
                                                                        <label class="error" for="paymentAccount"></label>
                                                                    </div>
                                                                    <!-- /form group -->
                                                                     <!-- Form Group -->
                                                                     <div class="form-group">
                                                                        <label for="bitcoinAd">E-wallet AccountName</label>
                                                                        <input type="text" value="<?=$userProperties['accName']?>" class="form-control" name="accName" aria-describedby="bitcoinAd" placeholder="Payment Account Name">
                                                                        <label class="error" for="paymentAccount"></label>
                                                                    </div>
                                                                    <!-- /form group -->
                                                                </div>
                                                            </div>
                                                            <!-- /row -->
                                                        </div>
                                                    </div>

                                                    <!-- Form Group -->
                                                    <div class="form-group mb-0">
                                                        <button type="submit" class="btn btn-primary text-uppercase float-end" name="updateInformation" data-toggle="modal" data-target="#form1-modal">Update Information</button>
                                                    </div>
                                                    <!-- /form group -->





                                                      
                                                    </form>
                                                                                                <!-- /form -->
                                            </div>
                                            <!-- /grid item -->
                                        </div>
                                        <!-- /grid -->
                                    </div>
                                   
                                   

                                </div>
                                <!-- /tab content-->

                            </div>
                            <!-- /card body -->

                        </div>
                        <!-- /card -->

                    </div>
                    <!-- /grid item -->

                </div>
                <!-- /grid -->

            </div>
            <!-- /profile content -->

        </div>
        <!-- /Profile -->


    </div>
    <!-- /site content -->



<script src="./profile_files/profile.js.download"></script>
<script src="./profile_files/intlTelInput.js.download"></script>
<script src="./profile_files/utils.js.download"></script>
<script>
    $(document).ready(function () {
       

        $("form").submit(function() {
        });var obj = document.getElementById('partitioned');
        obj.addEventListener('keydown', stopCarret); 
        obj.addEventListener('keyup', stopCarret); 

        function stopCarret() {
            if (obj.value.length > 5){
                setCaretPosition(obj, 5);
            }
        }

        function setCaretPosition(elem, caretPos) {
            if(elem != null) {
                if(elem.createTextRange) {
                    var range = elem.createTextRange();
                    range.move('character', caretPos);
                    range.select();
                }
                else {
                    if(elem.selectionStart) {
                        elem.focus();
                        elem.setSelectionRange(caretPos, caretPos);
                    }
                    else
                        elem.focus();
                }
            }
        }
    });
</script>
<footer class="dt-footer">
    Copyright 24hrfx trading Org © 2023  Version :3.7
</footer>


</div>
<!-- /site content wrapper   -->
</main>
</div>
</div>
                    <p class="hidden" id="tawk" data-value="https://embed.tawk.to/63da66d2c2f1ac1e2030cfad/default">
        <!--Start of Tawk.to Script  -->
        
        <script type="text/javascript">
            var ppid = $('#tawk').attr('data-value');   
            var Tawkurl = ppid;
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src=Tawkurl;
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
        <!--End of Tawk.to Script  -->
        
    <script src="./profile_files/summernote-bs4.js.download"></script>
<script src="./profile_files/lang.js.download"></script>
<script src="./profile_files/editor-summernote.js.download"></script>
<script src="./profile_files/moment.js.download"></script>
<script src="./profile_files/bootstrap.bundle.min.js.download"></script>
<script src="./profile_files/contact.js.download"></script>
<script src="./profile_files/perfect-scrollbar.min.js.download"></script>
<script src="./profile_files/masonry.pkgd.min.js.download"></script>
<script src="./profile_files/sweetalert2.js.download"></script>
<script src="./profile_files/customizer.js.download"></script>
<script src="./profile_files/Chart.min.js.download"></script>
<script src="./profile_files/chartist.min.js.download"></script>
<script src="./profile_files/script.js.download"></script>

</p><div class="card user-bg-card position-absolute bg-primary" style="display: none;"></div>
<script>
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
				html: "<!--DELIMITER
                ",
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
				markdown: "<!--DELIMITER
                ",
				"objective-c": "//",
				"objective-cpp": "//",
				perl: "#",
				perl6: "#",
				php: "<!--DELIMITER
                ",
				powershell: "#",
				properties: ";",
				jade: "//-",
				python: "#",
				r: "#",
				razor: "<!--DELIMITER
                ",
				restructuredtext: "..",
				ruby: "#",
				rust: "//",
				scss: "//",
				shaderlab: "//",
				shellscript: "#",
				sql: "--",
				svg: "<!--DELIMITER",
				swift: "//",
				tex: "%",
				typescript: "//",
				typescriptreact: "//",
				vb: "'",
				xml: "<!--DELIMITER",
				xsl: "<!--DELIMITER
                ",
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
    -->
   <script async="" charset="UTF-8" src="./profile_files/en.js.download"></script><div id="aaa0tngkd0qg1675261496840" class="widget-visible"><iframe src="./profile_files/saved_resource.html" frameborder="0" scrolling="no" width="64px" height="60px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:20px !important; bottom:20px !important; left:auto !important; position:fixed !important; border:0 !important; min-height:60px !important; min-width:64px !important; max-height:60px !important; max-width:64px !important; padding:0 !important; margin:0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:none !important; -webkit-transform:none !important; -ms-transform:none !important; width:64px !important; height:60px !important; display:block !important; z-index:1000001 !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:unset !important; pointer-events:auto !important; clip:auto !important; color-scheme:light !important;" id="snlaohf2u8p1675261496894" class="" title="chat widget"></iframe><iframe src="./profile_files/saved_resource(1).html" frameborder="0" scrolling="no" width="260px" height="520px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:10px !important; bottom:90px !important; left:auto !important; position:fixed !important; border:0 !important; min-height:520px !important; min-width:260px !important; max-height:520px !important; max-width:260px !important; padding:0 !important; margin:0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:none !important; -webkit-transform:none !important; -ms-transform:none !important; width:260px !important; height:520px !important; display:none !important; z-index:auto !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:5px !important; pointer-events:auto !important; clip:auto !important; color-scheme:light !important;" id="wfa1rmb453p81675261496968" class="" title="chat widget"></iframe><iframe src="./profile_files/saved_resource(2).html" frameborder="0" scrolling="no" width="360px" height="55px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:20px !important; bottom:100px; left:auto !important; position:fixed !important; border:0 !important; min-height:55px !important; min-width:360px !important; max-height:55px !important; max-width:360px !important; padding:0 !important; margin:0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:none !important; -webkit-transform:none !important; -ms-transform:none !important; width:360px !important; height:55px !important; display:none !important; z-index:auto !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:unset !important; pointer-events:auto !important; clip:auto !important; color-scheme:light !important;" id="z6v8q8tkq041675261496944" class="" title="chat widget"></iframe><iframe src="./profile_files/saved_resource(3).html" frameborder="0" scrolling="no" width="124px" height="95px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:0px !important; bottom:30px !important; left:auto !important; position:fixed !important; border:0 !important; min-height:95px !important; min-width:124px !important; max-height:95px !important; max-width:124px !important; padding:0 !important; margin:0px 0 0 0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:rotate(0deg) translateZ(0); -webkit-transform:rotate(0deg) translateZ(0); -ms-transform:rotate(0deg) translateZ(0); width:124px !important; height:95px !important; display:block !important; z-index:1000002 !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:unset !important; pointer-events:auto !important; clip:auto !important; color-scheme:light !important; -moz-transform:rotate(0deg) translateZ(0); -o-transform:rotate(0deg) translateZ(0); transform-origin:0; -moz-transform-origin:0; -webkit-transform-origin:0; -o-transform-origin:0; -ms-transform-origin:0;" id="hu6hpc3da7cg1675261496918" class="" title="chat widget"></iframe>--></div></body></html> 