<?php 
session_start(); 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Lights Camera Action</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://www.youtube.com/redirect?event=video_description&redir_token=QUFFLUhqbnZ0dUhHSWtwNmhCOWwtb0luQ0ltSWVBdTdvd3xBQ3Jtc0tucDNNNENoV2tuLWV5V0lJV21Zcm5EdEpFQmxMb3ZiZjNva2RjczA3R3VCVHp0dTd4OGpuZ3FvOWJmb1JwUEQ4dGp3dnptVUFFMXg0d2VPWnk4SGo5d3M5LVBzTGVIYW1hUGJlUmJkZlZKcGZCM1ItQQ&q=https%3A%2F%2Fstackpath.bootstrapcdn.com%2Ffont-awesome%2F4.7.0%2Fcss%2Ffont-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
   <link rel="shortcut icon" type="imagge/png" href="images/favicon/camera.png">
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
  <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url("images/back.jpg");
            background-size: cover;
            background-position: center;
            font-family: 'Oswald', sans-serif;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        .menu-bar {
            background: darkred;
            text-align: center;
            font-size: 15px;
        }

        .menu-bar ul {
            display: inline-flex;
            list-style: none;
            color: #fff;
        }

        .menu-bar ul li {
            width: 120px;
            margin: 15px;
            padding: 15px;
        }

        .menu-bar ul li a {
            text-decoration: none;
            color: #fff;
        }

        .active,
        .menu-ar ul li:hover {
            background: #000;
            border-radius: 2px;

        }

        .menu-bar fa {
            margin-left: 20px;
            float: left;
            padding-right: 5px;
        }

        .sub-menu-1 {
            display: none;

        }

        .menu-bar ul li:hover .sub-menu-1 {
            display: block;
            position: absolute;
            background-color: darkred;
            margin-top: 15px;
            margin-left: -15px;
            z-index: 1000;

        }

        .menu-bar ul li:hover .sub-menu-1 ul {
            display: block;
            margin: 10px;

        }

        .menu-bar ul li:hover .sub-menu-1 ul li {
            width: 150px;
            padding: 10px;
            border-bottom: 1px dotted #fff;
            background: transparent;
            border-radius: 0;
            text-align: left;
            color: white;
        }

        .menu-bar ul li:hover .sub-menu-1 ul li:last-child {
            border-bottom: none;
        }

        .menu-bar ul li:hover .sub-menu-1 ul a:hover {
            color: white;
        }

        .sub-menu-2 {
            display: none;
        }

        .hover-me:hover .sub-menu-2 {
            position: absolute;
            display: block;
            margin-top: -40px;
            margin-left: 140px;
            background: darkred;
        }

        #header {
            padding: 2px;
            padding-top: 5px;
        }

        
        .own
        {
            font-weight: bolder;
            font-size:xx-large;
            font-family: 'Lobster', cursive;
            font-family: 'Merriweather', serif;
            color: whitesmoke;
        }

        .ownn
        {
            
            
          
            font-size:small;
            color: whitesmoke;
        }

        
        .container
        {
            margin-top: 110px;
        }

        .card
        {
            border:none;
            outline:none;
            background-color:rgba(139, 0, 0, 0.123);
            border-radius: 20px;
            
            transition:transform .3s;
        }
        .card:hover
        {
            transform: translateY(-15px);
            transition:transform .3s;
        }

        .text1
        {
            font-size: 13px;
            color:floralwhite;
        }
        .info
        {
            line-height: 17px;
        }
        .star
        {
            color:#fbc02d;

        }
        /*card 1*/
        .cost span
        {
            color:honeydew;
            font-weight: bold;
            font-size: 20px;
        }
        .shoe
        {
            background:darkred;
        }
        /* card 1 ends here*/
        .shoe:hover
        {
            opacity: 0.8;
        }
        .cursor
        {
            cursor:pointer;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        .footer 
        {
            color: white;
        }

     

   
    </style>
</head>
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
    <!-----------hhhhhhhhhhhhhhhhhhhhhhhhhhhhhh------------------->

    <body>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/merchandise/m1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/merchandise/m2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/merchandise/m3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br>
        <br>
        <br>
        <br>



      <div style="text-align:center; "><h1 style="font-size: 50px;font-weight:bold; font-family: 'Oswald', sans-serif;">Upcoming Movies</h1></div>
        
        <br>
        <br>
        <br>
        <br>
        <!-----slider-->
    <div class="container">
        
        
       
        <div class="row">       

          <div class="col-md-12">
            <div class="carousel slide multi-item-carousel" id="theCarousel">
              <div class="carousel-inner">
                <div class="item active">
                    
                  <div class="col-xs-4"><a href="#1"><img src="images/1n.jpg" class="img-responsive" width="400" height="200"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-4"><a href="#1"><img src="images/2n.jpg" class="img-responsive" width="400" height="200"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-4"><a href="#1"><img src="images/3n.jpg" class="img-responsive" width="400" height="200"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-4"><a href="#1"><img src="images/4n.jpg" class="img-responsive" width="400" height="200"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-4"><a href="#1"><img src="images/5n.jpg" class="img-responsive" width="400" height="200"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-4"><a href="#1"><img src="images/6n.jpg" class="img-responsive" width="400" height="200"></a></div>
                </div>





                <!-- add  more items here -->
                <!-- Example item start:  -->
                
                <div class="item">
                  <div class="col-xs-4"><a href="#1"><img src="images/3n.jpg" class="img-responsive" width="400" height="200"></a></div>
                </div>
                
                <!--  Example item end -->
              </div>
              <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
              <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
            </div>
        </div>
          </div>
        </div>
        <br>
<br>
<br>
<br>
<br>
        
        <div style="text-align:center; "><h1 style="font-size: 50px;font-weight:bold; font-family: 'Oswald', sans-serif;">Checkout or new Products</h1></div>

<br>
<br>
<br>
<br>
<br>


            <!-----slider-->
    <div class="container">
        
        
       
        <div class="row">       

          <div class="col-md-12">
            <div class="carousel slide multi-item-carousel" id="theCarousel">
              <div class="carousel-inner">
                  <div class="item active">
                    
                   <div class="col-xs-4"><a href="#1"><img src="images/mm1.jpg" class="img-responsive" width="400" height="200"></a></div>
                   </div>
                   <div class="item">
                     <div class="col-xs-4"><a href="#1"><img src="images/mm2.jpg" class="img-responsive" width="400" height="200"></a></div>
                    </div>
                    <div class="item">
                     <div class="col-xs-4"><a href="#1"><img src="images/mm7.jpg" class="img-responsive" width="400" height="200"></a></div>
                    </div>
                    <div class="item">
                     <div class="col-xs-4"><a href="#1"><img src="images/mm4.jpg" class="img-responsive" width="400" height="200"></a></div>
                    </div>
                    <div class="item">
                     <div class="col-xs-4"><a href="#1"><img src="images/mm5.png" class="img-responsive" width="400" height="200"></a></div>
                    </div>
                    <div class="item">
                      <div class="col-xs-4"><a href="#1"><img src="images/mm6.jpg" class="img-responsive" width="400" height="200"></a></div>
                    </div>





                <!-- add  more items here -->
                <!-- Example item start:  -->
                
                    <div class="item">
                      <div class="col-xs-4"><a href="#1"><img src="images/mm4.jpg" class="img-responsive" width="400" height="200"></a></div>
                    </div>
                
                <!--  Example item end -->
                </div>
              <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
              <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
           </div>
         </div>
       </div>
     </div>
       <br>
       <br>
       <br>
       <br>



       <div style="text-align:center; "><h1 style="font-size: 50px;font-weight:bold; font-family: 'Oswald', sans-serif;">Checkout our foods</h1></div>
         <!-----slider-->
    <div class="container">
        
        
       
        <div class="row">       

          <div class="col-md-12">
            <div class="carousel slide multi-item-carousel" id="theCarousel">
              <div class="carousel-inner">
                <div class="item active">
                    
                  <div class="col-xs-4"><a href="#1"><img src="images/portfolio/1.jpg" class="img-responsive" width="400" height="200"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-4"><a href="#1"><img src="images/portfolio/2.jpg" class="img-responsive" width="400" height="200"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-4"><a href="#1"><img src="images/portfolio/3.jpg" class="img-responsive" width="400" height="200"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-4"><a href="#1"><img src="images/portfolio/4.jpg" class="img-responsive" width="400" height="200"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-4"><a href="#1"><img src="images/portfolio/5.jpg" class="img-responsive" width="400" height="200"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-4"><a href="#1"><img src="images/portfolio/6.jpg" class="img-responsive" width="400" height="200"></a></div>
                </div>





                <!-- add  more items here -->
                <!-- Example item start:  -->
                
                <div class="item">
                  <div class="col-xs-4"><a href="#1"><img src="images/portfolio/3.jpg" class="img-responsive" width="400" height="200"></a></div>
                </div>
                
                <!--  Example item end -->
              </div>
              <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
              <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
              </div>
            </div>
        </div>
    </div>




<!--Footer Starts-->

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
                                <a href="#"><img src="images/kung_fu_panda.jpg" alt="" height="81" width ="81"></a>
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
        
    </body>
</body>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
    integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/booking.js"></script> 
    <script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/lightbox.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>