<?php session_start(); 

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
    <link href="css/lightbox.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->
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
                <li class="active"><a href='#'><i class="fa fa-home"></i></i> Home</a></li>
                <li><a href='#'><i class="fa fa-film"></i> All Movies</a></li>
                <li><a href='#'><i class="fa fa-play-circle" ></i> Showtime</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="Ticket2d.html"><i class="fa fa-check"></i> 2D</a></li>
                            <li><a href="Ticket3d.html"><i class="fa fa-check"></i> 3D</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href='#'><i class="fa fa-shopping-cart"></i> Concession</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li class="hover-me"><a href="Ticket.html"><i class="fa fa-credit-card"></i> Purchase Ticket</a>
                                <div class="sub-menu-2">
                                    <ul>
                                        <li><a href="Food.html"><i class="fa fa-mobile"></i> Mobile-Banking</a></li>
                                        <li><a href="merchandise.html"><i class="fa fa-address-card"></i> Internet-Banking</a></li>
                                        <li><a href="merchandise.html"><i class="fa fa-credit-card"></i> Card</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="Food.html"><i class="fa fa-apple"></i> Refreshments</a></li>
                            <li><a href="merchandise.html"><i class="fa fa-coffee"></i> Merchandise</a></li>
                        </ul>
                    </div>

                </li>
                <li><a href='#'><i class="fa fa-user-plus"></i> Sign Up</a></li>
                <li><a href='#'><i class="fa fa-phone"></i> Contact Us</a></li>
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
        <!--Container for all products-->
        <div class="container mb-5 mt-5">
            <!--1st Row Cards-->
            <div class="row">
               <!--Card 1-->
                <div class="col-md-4">
                    <div class="card mt-3">
                    <form action="manage_cart.php" method="POST">
                        <div class="product-1 align-items-center p-2 text-center">
                            <img src="images/merchandise/mm4.jpg" alt="" class="rounded" width="160">
                            <h5>Key Chain Set</h5>
                            <div class="mt-3 info">
                                <span class="text1 d-block">Lorem ipsum dolor sit amet consectetur adip</span>
                                <span class="text1">Lorem, ipsum dolor.</span>
                            </div>
                            <div class="cost mt-3 text-dark">
                                <span>650 BDT</span>
                                <div class="star mt-3 align-items-center">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <!--Button for Cards-->
                        <div class="p-3 shoe text-center text-white mt-3 cursor">
                            <button type="submit" name="add_to_cart" class="btn btn-outline-light"><span class="text-uppercase">Add To Cart</span></button>
                        </div>
                        <input type="hidden" name="Item_Name" value="Key Chain Set">
                        <input type="hidden" name="Price" value="650">
                        <input type="hidden" name="Type" value="Merchandise Product">
                        </form>
                    </div>
                </div>
   
            <!--Card 1 Ends Here-->
            <!--Card 2 Starts-->
            <div class="col-md-4">
                <div class="card mt-3">
                <form action="manage_cart.php" method="POST">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="images/merchandise/mm5.png" alt="" class="rounded" width="160">
                        <h5>Phone Cover</h5>
                        <div class="mt-3 info">
                            <span class="text1 d-block">Lorem ipsum dolor sit amet consectetur adip</span>
                            <span class="text1">Lorem, ipsum dolor.</span>
                        </div>
                        <div class="cost mt-3 text-dark">
                            <span>900 BDT</span>
                            <div class="star mt-3 align-items-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!--Button for Cards-->
                    <div class="p-3 shoe text-center text-white mt-3 cursor">
                    <button type="submit" name="add_to_cart" class="btn btn-outline-light"><span class="text-uppercase">Add To Cart</span></button>
                    </div>
                    <input type="hidden" name="Item_Name" value="Phone Cover">
                    <input type="hidden" name="Price" value="900">
                    <input type="hidden" name="Type" value="Merchandise Product">
                    </form>
                </div>
            </div>
            <!--Card 2 ends Here-->
               <!--Card 3 Starts-->
               <div class="col-md-4">
                <div class="card mt-3">
                <form action="manage_cart.php" method="POST">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="images/merchandise/mm6.jpg" alt="" class="rounded" width="160">
                        <h5>Compass</h5>
                        <div class="mt-3 info">
                            <span class="text1 d-block">Lorem ipsum dolor sit amet consectetur adip</span>
                            <span class="text1">Lorem, ipsum dolor.</span>
                        </div>
                        <div class="cost mt-3 text-dark">
                            <span>500 BDT</span>
                            <div class="star mt-3 align-items-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!--Button for Cards-->
                    <div class="p-3 shoe text-center text-white mt-3 cursor">
                    <button type="submit" name="add_to_cart" class="btn btn-outline-light"><span class="text-uppercase">Add To Cart</span></button>
                    </div>
                    <input type="hidden" name="Item_Name" value="Compass">
                    <input type="hidden" name="Price" value="500">
                    <input type="hidden" name="Type" value="Merchandise Product">
                    </form>
                </div>
            </div>
            <!--Card 3 ends Here-->
            </div>
            <!--3rd Row Card ends Here-->
                      <!--2nd Row Cards-->
                      <div class="row">
                        <!--Card 1-->
                         <div class="col-md-4">
                             <div class="card mt-3">
                                 <form action="manage_cart.php" method="POST">
                                 <div class="product-1 align-items-center p-2 text-center">
                                     <img src="images/merchandise/mm1.jpg" alt="" class="rounded" width="160">
                                     <h5>Mug</h5>
                                     <div class="mt-3 info">
                                         <span class="text1 d-block">Lorem ipsum dolor sit amet consectetur adip</span>
                                         <span class="text1">Lorem, ipsum dolor.</span>
                                     </div>
                                     <div class="cost mt-3 text-dark">
                                         <span>150 BDT</span>
                                         <div class="star mt-3 align-items-center">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                         </div>
                                     </div>
                                 </div>
                                 <!--Button for Cards-->
                                 <div class="p-3 shoe text-center text-white mt-3 cursor">
                                 <button type="submit" name="add_to_cart" class="btn btn-outline-light"><span class="text-uppercase">Add To Cart</span></button>
                                 </div>
                                 <input type="hidden" name="Item_Name" value="Mug">
                    <input type="hidden" name="Price" value="150">
                    <input type="hidden" name="Type" value="Merchandise Product">
                    </form>
                             </div>
                         </div>
                     <!--Card 1 Ends Here-->
                     <!--Card 2 Starts-->
                     <div class="col-md-4">
                         <div class="card mt-3">
                             <form action="manage_cart.php" method="POST">
                             <div class="product-1 align-items-center p-2 text-center">
                                 <img src="images/merchandise/mm2.jpg" alt="" class="rounded" width="160">
                                 <h5>T-Shirt</h5>
                                 <div class="mt-3 info">
                                     <span class="text1 d-block">Lorem ipsum dolor sit amet consectetur adip</span>
                                     <span class="text1">Lorem, ipsum dolor.</span>
                                 </div>
                                 <div class="cost mt-3 text-dark">
                                     <span>300 BDT</span>
                                     <div class="star mt-3 align-items-center">
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                     </div>
                                 </div>
                             </div>
                             <!--Button for Cards-->
                             <div class="p-3 shoe text-center text-white mt-3 cursor">
                             <button type="submit" name="add_to_cart" class="btn btn-outline-light"><span class="text-uppercase">Add To Cart</span></button>
                             </div>
                             <input type="hidden" name="Item_Name" value="T-Shirt">
                    <input type="hidden" name="Price" value="300">
                    <input type="hidden" name="Type" value="Merchandise Product">
                    </form>
                         </div>
                     </div>
                     <!--Card 2 ends Here-->
                        <!--Card 3 Starts-->
                        <div class="col-md-4">
                         <div class="card mt-3">
                             <form action="manage_cart.php" method="POST">
                             <div class="product-1 align-items-center p-2 text-center">
                                 <img src="images/merchandise/mm3.webp" alt="" class="rounded" width="160">
                                 <h5>Double Mugs</h5>
                                 <div class="mt-3 info">
                                     <span class="text1 d-block">Lorem ipsum dolor sit amet consectetur adip</span>
                                     <span class="text1">Lorem, ipsum dolor.</span>
                                 </div>
                                 <div class="cost mt-3 text-dark">
                                     <span>450 BDT</span>
                                     <div class="star mt-3 align-items-center">
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                     </div>
                                 </div>
                             </div>
                             <!--Button for Cards-->
                             <div class="p-3 shoe text-center text-white mt-3 cursor">
                             <button type="submit" name="add_to_cart" class="btn btn-outline-light"><span class="text-uppercase">Add To Cart</span></button>
                             </div>
                             <input type="hidden" name="Item_Name" value="Double Mugs">
                    <input type="hidden" name="Price" value="450">
                    <input type="hidden" name="Type" value="Merchandise Product">
                    </form>
                         </div>
                     </div>
                     <!--Card 3 ends Here-->
                     </div>
                     <!--2nd Row Card ends Here-->
                               <!--1st Row Cards-->
            <div class="row">
                <!--Card 1-->
                 <div class="col-md-4">
                     <div class="card mt-3">
                         <form action="manage_cart.php" method="POST">
                         <div class="product-1 align-items-center p-2 text-center">
                             <img src="images/merchandise/mm7.jpg" alt="" class="rounded" width="160">
                             <h5>Iron Man Fist</h5>
                             <div class="mt-3 info">
                                 <span class="text1 d-block">Lorem ipsum dolor sit amet consectetur adip</span>
                                 <span class="text1">Lorem, ipsum dolor.</span>
                             </div>
                             <div class="cost mt-3 text-dark">
                                 <span>1500 BDT</span>
                                 <div class="star mt-3 align-items-center">
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                 </div>
                             </div>
                         </div>
                         <!--Button for Cards-->
                         <div class="p-3 shoe text-center text-white mt-3 cursor">
                         <button type="submit" name="add_to_cart" class="btn btn-outline-light"><span class="text-uppercase">Add To Cart</span></button>
                         </div>
                         <input type="hidden" name="Item_Name" value="Iron Man Fist">
                    <input type="hidden" name="Price" value="1500">
                    <input type="hidden" name="Type" value="Merchandise Product">
                    </form>
                     </div>
                 </div>
             <!--Card 1 Ends Here-->
             <!--Card 2 Starts-->
             <div class="col-md-4">
                 <div class="card mt-3">
                     <form action="manage_cart.php" method="POST">
                     <div class="product-1 align-items-center p-2 text-center">
                         <img src="images/merchandise/mm8.png" alt="" class="rounded" width="160">
                         <h5>Avengers Case</h5>
                         <div class="mt-3 info">
                             <span class="text1 d-block">Lorem ipsum dolor sit amet consectetur adip</span>
                             <span class="text1">Lorem, ipsum dolor.</span>
                         </div>
                         <div class="cost mt-3 text-dark">
                             <span>800 BDT</span>
                             <div class="star mt-3 align-items-center">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                             </div>
                         </div>
                     </div>
                     <!--Button for Cards-->
                     <div class="p-3 shoe text-center text-white mt-3 cursor">
                     <button type="submit" name="add_to_cart" class="btn btn-outline-light"><span class="text-uppercase">Add To Cart</span></button>
                     </div>
                     <input type="hidden" name="Item_Name" value="Avengers Case">
                    <input type="hidden" name="Price" value="800">
                    <input type="hidden" name="Type" value="Merchandise Product">
                    </form>
                 </div>
             </div>
             <!--Card 2 ends Here-->
                <!--Card 3 Starts-->
                <div class="col-md-4">
                 <div class="card mt-3">
                     <form action="manage_cart.php" method="POST">
                     <div class="product-1 align-items-center p-2 text-center">
                         <img src="images/merchandise/mm9.jpg" alt="" class="rounded" width="160">
                         <h5>Hoodie</h5>
                         <div class="mt-3 info">
                             <span class="text1 d-block">Lorem ipsum dolor sit amet consectetur adip</span>
                             <span class="text1">Lorem, ipsum dolor.</span>
                         </div>
                         <div class="cost mt-3 text-dark">
                             <span>1200 BDT</span>
                             <div class="star mt-3 align-items-center">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                             </div>
                         </div>
                     </div>
                     <!--Button for Cards-->
                     <div class="p-3 shoe text-center text-white mt-3 cursor">
                     <button type="submit" name="add_to_cart" class="btn btn-outline-light"><span class="text-uppercase">Add To Cart</span></button>
                     </div>
                     <input type="hidden" name="Item_Name" value="Hoodie">
                    <input type="hidden" name="Price" value="1200">
                    <input type="hidden" name="Type" value="Merchandise Product">
                    </form>
                 </div>
             </div>
             <!--Card 3 ends Here-->
             </div>
             <!--3rd Row Card ends Here-->
        </div>
       <!--Product Card Ends Here-->

       <!--Footer Starts-->

       <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="images/home/under.png" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="testimonial bottom">
                        <h2>Testimonial</h2>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="images/home/profile1.png" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore tail.</blockquote>
                                <h3><a href="#">- Jhon Kalis</a></h3>
                            </div>
                         </div>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="images/home/profile2.png" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Capicola nisi flank sed minim sunt aliqua rump pancetta leberkas venison eiusmod.</blockquote>
                                <h3><a href="">- Abraham Josef</a></h3>
                            </div>
                        </div>   
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br> 
                        Phone: +1 (123) 456 7890 <br> 
                        Fax: +1 (123) 456 7891 <br> 
                        </address>

                        <h2>Address</h2>
                        <address>
                        Unit C2, St.Vincent's Trading Est., <br> 
                        Feeder Road, <br> 
                        Bristol, BS2 0UY <br> 
                        United Kingdom <br> 
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Send a message</h2>
                        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
                            </div>                        
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                            </div>
                        </form>
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
<script type="text/javascript" src="js/lightbox.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>