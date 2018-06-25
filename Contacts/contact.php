<!DOCTYPE html>
<html lang="en">

<head>
  
    <title>Buy More</title>

  
    <link rel="stylesheet" href="style.css">

</head>

<body>
 
   
 
 <header  class="header-area">

      
<div class="buymore-main-menu">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
         
            <nav class="classy-navbar justify-content-between" id="buymoreNav">

               
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

              
                <div class="classy-menu">

                  
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>


                    <div class="classynav">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Men</a>
                                <ul class="dropdown">
                                    <li><a href="#">Casual</a></li>
                                    <li><a href="#">Suits</a></li>
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="#">Watches</a></li>
                                  
                                </ul>
                            </li>
                            <li><a href="#">Women</a>
                                <ul class="dropdown">
                                    <li><a href="#">Dresses</a></li>
                                    <li><a href="#">Blouses</a></li>
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="#">Handbags</a></li>
                                   
                                  
                                </ul>
                            </li>
                            <li><a href="#">Children</a>
                                <ul class="dropdown">
                                    <li><a href="#">Boys</a></li>
                                    <li><a href="#">Girls</a></li>
                                    <li><a href="#">Toddlers</a></li>
                                    <li><a href="#">Shoes</a></li>
                                  
                                </ul>
                            </li>
                            
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><div class="search-area">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>  </li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>

              
                <div class="calling-info">
                    <div class="call-center">
                        <a href="#login"><span>Login | Register</span></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
</header>
   <form action="contactus.php" method="POST">
    <section class="contact-area" >
        <div class="container" style="margin-top:22%">
            <div class="row">
                <div class="col-12">
                    <div class="contact-content">
                        <div class="row">
                          
                            <div class="col-12 col-lg-5">
                                <div class="contact-information wow fadeInUp" data-wow-delay="400ms">
                                    <div class="section-heading text-left">
                        
                                        <h3>Contact Us</h3>
                                        <p class="mt-30">Please fill in all the details and we'll get back to you soon</p>
                                    </div>

                                 
                                    <div class="contact-social-info d-flex mb-30">
                                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </div>

                              
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-telephone-1"></i>
                                        </div>
                                        <p>Safaricom: +254701234567<br>Airtel: +254730250120<br>Landline: (+254)202504008</p>
                                    </div>

                                  
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-contract"></i>
                                        </div>
                                        <p>buymore@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-12 col-lg-7">
                                <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                    <form action="#" method="post">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                        <button class="btn buymore-btn mt-30" type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</form>
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
 
    <script src="js/bootstrap/popper.min.js"></script>

    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/javascript.js"></script>
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/google-map/map-active.js"></script>
</body>

</html>