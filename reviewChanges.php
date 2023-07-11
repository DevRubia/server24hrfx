<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Changes</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="./CSS/loader.css">
    <link rel="shortcut icon" type="image/x-icon" href="./svg.png">
	
</head>

<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <a class="navbar-brand tm" href="logout.php">24hrfx trading org</a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
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


<body class="container">
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
						</style>
				</div>
							<!-- TradingView Widget END -->
                            <?php
                                if(isset($_SESSION['status']))
                                {
                                    echo"<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
                                    unset($_SESSION['status']);
                                }

                                ?>
			</div>

		<div class="container p-2 bd-highlight">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h2>
                                AdminpaidPageEdit Panel
                                <a href="adminpaidReview.php" class="btn btn-danger float-end">Back</a>
                            </h2>

                            <div class="card-body container">

                            <?php
                            include('conndb.php');

                            if(isset($_GET['id'])){
                                // $keychild= $_GET['id'];

                                $getdata =$database->getReference('paidTable/')->getChild('Table/')->getValue();
                            

                            
                                if($getdata > 0)
                            {
                             ?>
                             
                             
                             <form  action="AccountpaidUpdate.php" method="POST">

                             <!-- <input type="hidden" name="key" value="<?=$keychild?>"> -->
                             <hr/>
                                <div class="form-group mb-3">
                                    <label for="">UserName:</label>
                                    <input type="text" name="username" value="<?=$getdata['username']?>" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Date:</label>
                                    <input type="text" name="date" value="<?=$getdata['date']?>" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Amount:</label>
                                    <input type="text" name="Amount" value="<?=$getdata['Amount']?>" class="form-control">
                                </div>

                                <hr/>

                                <div class="form-group mb-3">
                                    <label for="">UserName1:</label>
                                    <input type="text" name="username1" value="<?=$getdata['username1']?>" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Date1:</label>
                                    <input type="text" name="date1" value="<?=$getdata['date1']?>" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Amount1:</label>
                                    <input type="text" name="Amount1" value="<?=$getdata['Amount1']?>" class="form-control">
                                </div>

                                <hr/>

                                <div class="form-group mb-3">
                                    <label for="">UserName2:</label>
                                    <input type="text" name="username2" value="<?=$getdata['username2']?>" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Date2:</label>
                                    <input type="text" name="date2" value="<?=$getdata['date2']?>" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Amount2:</label>
                                    <input type="text" name="Amount2" value="<?=$getdata['Amount2']?>" class="form-control">
                                </div>

                                <hr/>

                                <div class="form-group mb-3">
                                    <label for="">UserName3:</label>
                                    <input type="text" name="username3" value="<?=$getdata['username3']?>" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Date3:</label>
                                    <input type="text" name="date3" value="<?=$getdata['date3']?>" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Amount3:</label>
                                    <input type="text" name="Amount3" value="<?=$getdata['Amount3']?>" class="form-control">
                                </div>

                                <hr/>

                                <div class="form-group mb-3">
                                    <label for="">UserName4:</label>
                                    <input type="text" name="username4" value="<?=$getdata['username4']?>" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Date4:</label>
                                    <input type="text" name="date4" value="<?=$getdata['date4']?>" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Amount4:</label>
                                    <input type="text" name="Amount4" value="<?=$getdata['Amount4']?>" class="form-control">
                                </div>
      
                                <hr/>
                                <div class="form-group mb-3">
                                    <label for="">24HRFX M-PESA-KE PAYBILL:</label>
                                    <input type="text" name="paybill" value="<?=$getdata['PayBill']?>" class="form-control">
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label for="">24HRFX M-PESA-KE ACCOUNT NAME:</label>
                                    <input type="text" name="paybillname" value="<?=$getdata['PayBillname']?>" class="form-control">
                                </div>
                                <hr/>
                                <div class="form-group mb-3">
                                    <label for="">24HRFX M-PESA-TZ PAYBILL:</label>
                                    <input type="text" name="paybill1" value="<?=$getdata['PayBill1']?>" class="form-control">
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label for="">24HRFX M-PESA-TZ ACCOUNT NAME:</label>
                                    <input type="text" name="paybillname1" value="<?=$getdata['PayBillname1']?>" class="form-control">
                                </div>
                                <hr/>
                                <div class="form-group mb-3">
                                    <label for="">24HRFX AIRTEL PAYBILL:</label>
                                    <input type="text" name="paybill2" value="<?=$getdata['PayBill2']?>" class="form-control">
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label for="">24HRFX AIRTEL ACCOUNT NAME:</label>
                                    <input type="text" name="paybillname2" value="<?=$getdata['PayBillname2']?>" class="form-control">
                                </div>
                                <hr/>
                               

                                <div class="forWithdrawalm-group mb-3">
                                    <button type="submit" name="updateAccount"  class="btn btn-primary">updateInfo</button>
                                </div> 

                                </form>
   
                            <?php    


                            }else{
                                $_SESSION['status']="No Found";
                                header('Location: paid.php');
                                exit();

                            }
                            
                            }else{
                                 $_SESSION['status']="Invalid Id";
                                header('Location: paid.php');
                                exit();  
                            }
                            
                            ?>



                            </div>
                        </div>
                    </div>


                       


                </div>



            </div>
        </div>
        <div id="loader">
  <div class="spinner"></div>
</div>  						
</body>
<script src="loader.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>