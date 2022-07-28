<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="jquery.js"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Online Vegetable Shop</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="addveg.php">Vegetables</a></li>
<li class="active"><a href="index1.php">Orders</a></li>
<li class="active"><a href="payment.php">Payments</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
  <li><a href="signout.php"><span class="glyphicon glyphicon-log-out"></span> Sign Out</a></li>
     
    </ul>
  </div>
</nav>
<div class="container">
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images\v1.jpg" alt="" style="width:100%;height:400px">
      </div>

      <div class="item">
        <img src="images\v2.jpg" alt="" style="width:100%;height:400px">
      </div>
    
      <div class="item">
        <img src="images\v3.jpg" alt="" style="width:100%;height:400px">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
