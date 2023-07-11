<?php
include('authentication.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tradingView</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="./CSS/stylepaid.css"> -->
    <link rel="stylesheet" href="./CSS/popup.css">
    <link rel="stylesheet" href="./CSS/loader.css">
    <link rel="shortcut icon" type="image/x-icon" href="./svg.png">

    <style>
#setViewPort{
    margin:0;
    width: 100%;
    /* padding-left: 20px; */
}

    </style>
	
</head>

<header class="head container">
       
 </header>


<body class=" bg-dark container2">

<!-- TradingView Widget BEGIN -->
         <div class="tradingview-widget-container container" id="setViewPort">
                 <div id="tradingview_ac9b0"></div>
                 <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BTCUSD/?exchange=BITSTAMP" rel="noopener" target="_blank"><span class="blue-text">Bitcoin chart</span></a> by TradingView</div>
                 <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                 <script type="text/javascript">
    

                    new TradingView.widget(
                 {
                 "width":1000,
                 "height":700,
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

                            </form>
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