<?php session_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Portfolio Details | Triangle</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet"> 
    <link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <style>
        .own
        {
            font-weight: bolder;
            font-size: large;
            font-family: 'Lobster', cursive;
            font-family: 'Merriweather', serif;
            color: darkred;
        }
        .display
        {
            font-style: oblique;
            font-size: medium;
        }
        *
       {
           padding: 0;
           margin: 0;
           box-sizing: border-box;
       }
       body
       {
           background-image: url("images/back.jpg");
           background-size: cover;
           background-position: center;
          
           font-family: 'Oswald', sans-serif;
       }
       .menu-bar
       {
           background:darkred;
           text-align: center;
           font-size: 15px;
       }
       .menu-bar ul
       {
           display: inline-flex;
           list-style: none;
           color: #fff;
       }
       .menu-bar ul li
       {
           width:120px;
           margin:15px;
           padding: 15px;
       }
       .menu-bar ul li a
       {
           text-decoration: none;
           color: #fff;
       }
       .active , .menu-ar ul li:hover
       {
           background: #000;
           border-radius: 2px;

       }
       .menu-bar fa
       {
           margin-left: 20px;
           float: left;
           padding-right: 5px;
       }
       .sub-menu-1
       {
           display:none;+

       }
       .menu-bar ul li:hover  .sub-menu-1
       {
           display: block;
           position: absolute;
           background-color:darkred;
           margin-top: 15px;
           margin-left:-15px;
           
       }
       .menu-bar ul li:hover  .sub-menu-1 ul
       {
           display: block;
           margin:10px;
           
       }
       .menu-bar ul li:hover  .sub-menu-1 ul li
       {
           width:150px;
           padding:10px;
           border-bottom: 1px dotted #fff;
           background:transparent;
           border-radius: 0;
           text-align: left;
           color: white;
       }
       
       .menu-bar ul li:hover  .sub-menu-1 ul li:last-child
       {
           border-bottom: none;
       }
       .menu-bar ul li:hover  .sub-menu-1 ul a:hover
       {
           color: white;
       }
       .sub-menu-2
       {
           display: none;
       }
       .hover-me:hover .sub-menu-2
       {
           position: absolute;
           display: block;
           margin-top: -40px;
           margin-left:140px;
           background: darkred;
       }
       .btn
       {
           color: #fff;
           border-color:darkred;
       }
       .btn:hover
       {
           color: white;
           font-weight: bold;
           border-color: whitesmoke;

       }
      
    </style>
</head><!--/head-->

<body>
	<!--/head-->

<body>
  <!--/head-->



  <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                    <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="menu-bar">
            <ul>
                <li class="active"><a href='http://localhost/302/homee.php'><i class="fa fa-home"></i></i> Home</a></li>
                <li><a href="https://localhost/302/login_admin.php"><i class="fa fa-check"></i> Admin Login</a>
            </li>
                <li><a href='#'><i class="fa fa-play-circle" ></i> Showtime</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="http://localhost/302/movies_2D.php"><i class="fa fa-check"></i> 2D</a></li>
                            <li><a href="http://localhost/302/movies_3D.php"><i class="fa fa-check"></i> 3D</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href='#'><i class="fa fa-shopping-cart"></i> Concession</a>
                    <div class="sub-menu-1">
                        <ul>
                           
                            <li><a href="http://localhost/302/portfolio.php"><i class="fa fa-cutlery"></i> Refreshments</a></li>
                            <li><a href="http://localhost/302/merch.php"><i class="fa fa-coffee"></i> Merchandise</a></li>
                        </ul>
                    </div>

                </li>
                <li><a href='http://localhost/302/registration.php'><i class="fa fa-user-plus"></i> Sign Up</a></li>
                <li><a href='http://localhost/302/contact%20us.php'><i class="fa fa-phone"></i> Contact Us</a></li>
                <li>
                <?php
                $count=0;
                if(isset($_SESSION['cart']))
                {
                    $count=count($_SESSION['cart']);

                } 
                ?>
                <a href="myCart.php"><i class="fa fa-shopping-cart"></i> My Cart (<?php echo $count; ?>)</a>
                
                </li>
            </ul>
        </div>

    </header>
    <!-----------hhhhhhhhhhhhhhhhhhhhhhhhhhhhhh------------------->
    <!--/#header-->


   
    <!--/#action-->

    <section id="portfolio-information" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="images/portfolio-details/8.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="project-info overflow">
                        <h3 class="own">Platter-4</h3>
                        <p>The movies just wouldn't be the same without an ice-cold, refreshing pepsi and freshly popped popcorn. Now, classics like Pop Chicken and candy are joined with more menu options than ever. </p>
                        <ul class="elements">
                            <li><i class="fa fa-angle-right"></i> 1 Chicken Wrap</li>
                            <li><i class="fa fa-angle-right"></i> 1 French Fries</li>
                        </ul>
                    </div>
                    <form action="manage_cart.php" method="POST">
                    <div class="skills overflow">
                        <h3 class="own">Total Price:</h3>
                        <ul class="nav navbar-nav navbar-default">
                            <h4 class="display">500 BDT</h4>
                        </ul>
                    </div>
                    <div class="client overflow">
                        <h3 class="own">Platter-Size:</h3>
                        <ul class="nav navbar-nav navbar-default">
                            <li class="display"> Small</li>
                        </ul>
                    </div>
                    <div class="live-preview">
                        <br>
                        <br>
                    <button type="submit" name="add_to_cart"  class="btn btn-outline-danger"><span class="text-uppercase" style="color:darkred; font-weight:bold;">Add To Cart</span></button>
                    </div>
                    <input type="hidden" name="Item_Name" value="Platter-4">
                    <input type="hidden" name="Price" value="500">
                    <input type="hidden" name="Type" value="Food">
    </form>
                </div>
            </div>
        </div>
    </section>
     <!--/#portfolio-information-->

    <section id="related-work" class="padding-top padding-bottom">
        <div class="container">
            <div class="row">
                <h1 class="title text-center">Related Work</h1>
                <div class="col-sm-3">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="images/portfolio/1.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="platter-1.html"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info ">
                            <h2>Platter-1</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="images/portfolio/2.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="SingleColdDrink.html"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info ">
                            <h2>Single Cold Drink</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="images/portfolio/3.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="platter-2.html"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info ">
                            <h2>Platter-2</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="images/portfolio/4.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="platter-3.html"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info ">
                            <h2>Platter-3</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#related-work-->


    <footer id="footer" >
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="images/home/under.png" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="testimonial bottom">
                        <h2>Quotes</h2>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="images/kung-fu-panda.jpg" alt="" ></a>
                            </div>
                            <div class="media-body">
                                <div class="ownn"><blockquote>Your story may not have such a happy beginning but that does not make you who you are, it is the rest of it- who you choose to be</blockquote></div>
                                <h3><a href="#">- Master Oogway</a></h3>
                            </div>
                         </div>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="images/pursuit_of_happiness.jpg" alt=""></a>
                            </div>
                            <div class="media-body">
                            <div class="ownn">   <blockquote>You got a dream... You gotta protect it. People can't do somethin' themselves, they wanna tell you you can't do it. If you want somethin', go get it. Period.</blockquote></div>
                                <h3><a href="">- Christopher Gardner</a></h3>
                            </div>
                        </div>   
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <div class="ownn">
                        <address>
                        E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br> 
                        Phone: +1 (123) 456 7890 <br> 
                        Fax: +1 (123) 456 7891 <br> 
                        </address>
                        </div>
                        <h2>Address</h2>
                        <div class="ownn">
                        <address>
                        Army Officer's Club,Nirjhor Residential area, <br> 
                        Dhaka Cantonment, <br> 
                        Dhaka-1216, <br> 
                        Bangladesh <br> 
                        </address>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Our Location</h2>
                        <div class="mapouter"><div class="gmap_canvas"><iframe width="413" height="372" id="gmap_canvas" src="https://maps.google.com/maps?q=Officer's%20Club,Nirjhar,Dhaka%20Cantonment%20,Dhaka,Bangladesh&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">fmovies se</a><br><style>.mapouter{position:relative;text-align:right;height:372px;width:413px;}</style><a href="https://www.embedgooglemap.net">google map embed generator</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:372px;width:413px;}</style></div></div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Your Company 2014. All Rights Reserved.</p>
                        <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>  
</body>
</html>
