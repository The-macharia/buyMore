<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>buyMore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="CSS/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">    
    <!--<link rel="stylesheet" type="text/css" media="screen" href="CSS/style.css" />-->
    <!--<link rel="stylesheet" type="text/css" media="screen" href="CSS/bootstrap.min.css" />-->
    <!--<script src="js/bootstrap/bootstrap.min.js"></script>-->
    <!--<script src="js/bootstrap/popper.min.js"></script>-->
    <!--<script src="js/jquery/jquery-2.2.4.min.js"></script>-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <!-- Brand -->
  <a class="navbar-brand" href="#">buyMORE</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>

    <!-- Dropdown Men -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Men
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Official</a>
        <a class="dropdown-item" href="#">Casual</a>
        <a class="dropdown-item" href="#">Shoes</a>
        <a class="dropdown-item" href="#">Watches</a>
      </div>
    </li>
    <!-- Dropdown Women -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Women
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Dresses</a>
        <a class="dropdown-item" href="#">Blouses</a>
        <a class="dropdown-item" href="#">Shoes</a>
        <a class="dropdown-item" href="#">HandBags</a>
      </div>
    </li>
    <!-- Dropdown Children -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Children
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Boys</a>
        <a class="dropdown-item" href="#">Girls</a>
        <a class="dropdown-item" href="#">Toddlers</a>
        <a class="dropdown-item" href="#">Shoes</a>
      </div>
    </li>
    <li><form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit"><i class="fas fa-search"></i></button>
  </form></li>
  <li class="nav-item navbar-right mr-auto"><a href="#"><i class="fas fa-shopping-cart fa-2x"></i></a></li>
  <li class="nav-item navbar-right mr-auto"><a href="#"><i class="far fa-user fa-2x"></i></a></li>
  </ul>
</nav>

<div class="container">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left pageBelowNav"><h4>This is the Image Slider</h4>
<!-- Image Slider -->
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/fashion1.jpg" alt="Los Angeles" width="1396" height="400">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/fashion2.jpg" alt="Chicago" width="1396" height="400">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/fashion3.jpg" alt="New York" width="1396" height="400">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
</div>
<div class="container">
<h4>Featured in Men</h4>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><img src="images/watch.jpg" alt="" width="220" height="220"></div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><img src="images/official.jpg" alt="" width="220" height="220"></div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><img src="images/shirt.jpg" alt="" width="220" height="220"></div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><img src="images/shoe.jpg" alt="" width="220" height="220"></div>
</div></div>
<div class="container">
<h4>Featured in Women</h4>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><img src="images/women1.jpg" alt="" width="220" height="220"></div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><img src="images/women2.jpg" alt="" width="220" height="220"></div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><img src="images/women1.jpg" alt="" width="220" height="220"></div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><img src="images/watch.jpg" alt="" width="220" height="220"></div>
</div></div>
<div class="container">
<h4>Featured in Children Wear</h4>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><img src="images/watch.jpg" alt="" width="220" height="220"></div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><img src="images/watch.jpg" alt="" width="220" height="220"></div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><img src="images/watch.jpg" alt="" width="220" height="220"></div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><img src="images/watch.jpg" alt="" width="220" height="220"></div>
</div></div>
<div class="myFooter">
<footer class="container-fluid text-center">
    <div class="row">
        <div class="col-sm-4">
        <h3>Created by Team Code</h3><br>
            <h4>Our address and contact info here.</h4>
        </div>
        <div class="col-sm-4">
        <h3>Connect With us</h3>
        <a href="#"><i  class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="col-sm-4">
        <img src="images/genuine.jpg" class="icon" style="width:100px;height:100px">
        </div>
        </div>
    </footer>
    </div>

</body>
</html> 