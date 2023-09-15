<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/404.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tektur&display=swap" rel="stylesheet">
<style>
@import url('https://fonts.googleapis.com/css2?family=Tektur&display=swap');

.warning{
  color:red;
  font-family: 'Tektur', serif;
}
.body{
  font-family: 'Tektur', serif;
}
</style>
</head>
<?php
if(isset($_SESSION['status']))
{
    echo"<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
    unset($_SESSION['status']);
}

?>
<body class="container">
<section class="page_404">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 ">
        <div class="col-sm-10 col-sm-offset-1  text-center">
          <div class="four_zero_four_bg">
            <h1 class="text-center ">404</h1>

          </div>

          <div class="contant_box_404">
            <h1 class="h2">
              Email entered not registered On Auth Registration Portal
            </h1>

            <h1>If this user appears in the Admin Module List , you may have deleted them in the Claims Module.<span class="warning">Delete their data too</span> Add them again if you have too</h1>

            <a href="logout.php" class="link_404">Redirect</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>