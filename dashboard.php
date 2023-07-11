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
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/ofcanvas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="./CSS/dash.css">
</head>



<body class="container">
<header >
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
                            <a class="nav-link" href="packages.php">InvestFunds</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="claims.php">CLAIMS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="paid.php">ADMIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active btn btn-dark-" aria-current="page" href="logout.php">LOGOUT</a>
                        </li>
                        <li class="nav-item">
                          <i class=" fa fa-user bg-dark icon"></i> 
                        </li>
                        <li class="nav-item">
                         <a class="nav-link active" aria-current="page" >
                        .   User: <?=$userProperties['name']?></a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
</nav>
    
<div class="col-xl-12 col-12 col-md-12">
                                <!-- Grid Item -->
                                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container mb-1-5m" style="width: 100%; height: 46px;">
                    <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://s.tradingview.com/embed-widget/ticker-tape/?locale=en#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22OANDA%3ASPX500USD%22%2C%22title%22%3A%22S%26P%20500%22%7D%2C%7B%22proName%22%3A%22OANDA%3ANAS100USD%22%2C%22title%22%3A%22Nasdaq%20100%22%7D%2C%7B%22proName%22%3A%22FX_IDC%3AEURUSD%22%2C%22title%22%3A%22EUR%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3ABTCUSD%22%2C%22title%22%3A%22BTC%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3AETHUSD%22%2C%22title%22%3A%22ETH%2FUSD%22%7D%5D%2C%22colorTheme%22%3A%22light%22%2C%22isTransparent%22%3Afalse%2C%22displayMode%22%3A%22regular%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A46%2C%22utm_source%22%3A%22forex-tradinginvestors.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22ticker-tape%22%2C%22page-uri%22%3A%22forex-tradinginvestors.com%2Fdashboard%22%7D" style="box-sizing: border-box; height: 46px; width: 100%;"></iframe>
                    
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
</header>
    
<?php

if (isset($_SESSION['status']))
echo"<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
unset($_SESSION['status']);


?> 
<p>

</p>
<div class="container dashboard1">

    <div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="h-100vh">
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            Dashboard
            </button>
            <p>
             
            </p>
        </div>
        </div>
    </div>
    </div>

    <div class="offcanvas offcanvas-start bg-dark" data-bs-scroll="true" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header bg-primary shadow-sm align-items-center dropdown  bg-dark">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">
        <a class="text-white text-decoration-none fw-medium" href="#" role="button" id="exampleDropdownMenu" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,0">
            <span><i class="bi bi-lightning"></i></span>
            <span class="text-capitalize"><h3>24hrfx Wallet</h3>UserId: <?=$userProperties['name']?></span>
        </a>

        </h5>

        <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        

  <div class="row row-cols-1 row-cols-md-2 g-4">
									<!-- Card -->
									<div class="dt-card mt-4">
										<!-- Card Body -->
										<div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4 dt-card bg-secondary text-white badge badge-secondary">
											<span class="badge badge-secondary badge-top-right">Account Balance</span>
											<!-- Media -->
											<div class="media">
												<i class="icon icon-revenue-new icon-5x mr-xl-5 mr-3 align-self-center"></i>
												<!-- Media Body -->
												<div class="media-body">
													<p class="mb-1 h1 text-white">
                                                    <?=$userProperties['accBal']?> .USD</p>
													<span class="d-block">Balance Amount</span>
                                                    <p></p>
                                                    <div class="btn-group">
                                                            <button class="btn btn-secondary dropdown-toggle  badge-secondary" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Deposit A/C
                                                            </button>
                                                            <div class="dropdown-menu text-white bg-dark container info" aria-labelledby="dropdownMenuButton">
                                                                <p>Account Paybill:247247</P>
                                                                <p>   Account Number:5353636</P>
                                                                <p>  A/C Name:24hrfxTradingOrg</P>
                                                                
                                                                
                                                                
                                                            </div>

                                                    
                                                    </div>
												</div>
												<!-- /media body -->
											</div>
											<!-- /media -->
										</div>
										<!-- /card body -->
									</div>
									<!-- /card -->

                                    <!-- Card -->
									<div class="dt-card">
										<!-- Card Body -->
										<div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4 dt-card bg-secondary text-white badge badge-secondary">
											<span class="badge badge-secondary badge-top-right">Total Earned</span>
											<!-- Media -->
											<div class="media">
												<i class="icon icon-revenue-new icon-5x mr-xl-5 mr-3 align-self-center"></i>
												<!-- Media Body -->
												<div class="media-body">
													<p class="mb-1 h1 text-white">
                                                    <?=$userProperties['earnedTotal']?> .USD</p>
													<span class="d-block">Total amount</span>
                                                       

												</div>
												<!-- /media body -->
											</div>
											<!-- /media -->
										</div>
										<!-- /card body -->
									</div>
									<!-- /card -->


                                    <!-- Card -->
									<div class="dt-card">
										<!-- Card Body -->
										<div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4 dt-card bg-secondary text-white badge badge-secondary">
											<span class="badge badge-secondary badge-top-right">Bonus</span>
											<!-- Media -->
											<div class="media">
												<i class="icon icon-revenue-new icon-5x mr-xl-5 mr-3 align-self-center"></i>
												<!-- Media Body -->
												<div class="media-body">
													<p class="mb-1 h1 text-white">
                                                    <?=$userProperties['bonus']?> .USD                                        </p>
													<span class="d-block">Bonus Reward</span>
												</div>
												<!-- /media body -->
											</div>
											<!-- /media -->
										</div>
										<!-- /card body -->
									</div>
									<!-- /card -->


                                    <!-- Card -->
									<div class="dt-card">
										<!-- Card Body -->
										<div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4 dt-card bg-secondary text-white badge badge-secondary">
											<span class="badge badge-secondary badge-top-right">Withdrawals</span>
											<!-- Media -->
											<div class="media">
												<i class="icon icon-revenue-new icon-5x mr-xl-5 mr-3 align-self-center"></i>
												<!-- Media Body -->
												<div class="media-body">
													<p class="mb-1 h1 text-white">
                                                    <?=$userProperties['withdrawal']?> .USD                                        </p>
													<span class="d-block">Withdrawable Amount</span>
                                            

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
</div>


<!-- Content here -->
        <div class="dash-info">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col ">
                    <div class="card text-white bg-dark border-light mb-3 h-70">
                        <div class="card-body">
                            <h5 class="card-title">Total Earned</h5>
                            <p class="card-text">total amount;</p> 
                            <button type="button" class="btn btn-primary">USD: <?=$userProperties['earnedTotal']?></button>
                        </div>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="card text-white bg-dark border-primary mb-3 h-70">
                        <div class="card-body">
                            <h5 class="header">Account Balance</h5>
                            <p class="card-text">Balance Amount:</p>
                            <button type="button" class="btn btn-primary">USD: <?=$userProperties['accBal']?></button>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-dark border-danger mb-3 h-70">
                        <div class="card-body">
                            <h5 class="card-header">Bonus</h5>
                            <p class="card-text">Bonus Reward:</p>
                            <button type="button" class="btn btn-primary">USD: <?=$userProperties['bonus']?></button>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-dark border-success mb-3 h-70">
                        <div class="card-body">
                            <h5 class="card-header">Withdrawals</h5>
                            <p class="card-text">Withdrawable balance:</p>
                            <button type="button" class="btn btn-primary">USD: <?=$userProperties['withdrawal']?></button>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    



        



    </div>

    <div class="profile-content">
							<!-- Grid -->
							<div class="row">

								<!-- Grid Item -->
								<div class="col-xl-12 col-12 order-xl-1">
									<!-- Card -->
									<div class="dt-card">
																<div class="dt-card__body">
										<!-- Card Body -->
											<!-- Tables -->
											<div class="table-responsive dataTables_wrapper dt-bootstrap4">
												<div class="table-responsive">
																						<div class="text-center mt-5">
														<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLhS4uEQ2HR1MxJX2fb-3ttR5pLhb3XgA-pQ&usqp=CAU" class="w-20rm">
														<h1>24hrfxTradingOrg</h1>
													</div>
																						</div>
												<!-- /tables -->

											</div>
											<!-- /card body -->
																		</div>
										<!-- /card -->
									</div>
									<!-- /grid item -->
									
																</div>

								</div>
								<!-- /grid -->

							</div>
							<!-- /profile content -->

						</div>
						<!-- /Profile -->
                    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>