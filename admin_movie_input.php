<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>LOGIN | SIGNUP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"> 
    <link href="css/lightbox.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->   
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>  
 body {
		font-family: 'Varela Round', sans-serif;
        background-image: url('images/index.jpg');
        background: rgba(76, 175, 100, 0.3)
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        color: #fff;

	}
    
	.modal-login {
        color: #fff;
		width: 350px;
		margin: 80px auto 0;
	}
	.modal-login .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
	}
	.modal-login .modal-header {
		border-bottom: none;   
        position: relative;
        justify-content: center;
	}
	.modal-login h4 {
		text-align: center;
		font-size: 26px;
		margin: 30px 0 -15px;
	}
	.modal-login .form-control:focus {
		border-color: #70c5c0;
	}
	.modal-login .form-control, .modal-login .btn {
		min-height: 40px;
		border-radius: 3px; 
	}
	.modal-login .close {
        position: absolute;
		top: -5px;
		right: -5px;
	}	
	.modal-login .modal-footer {
		background: #ecf0f1;
		border-color: #dee4e7;
		text-align: center;
        justify-content: center;
		margin: 0 -20px -20px;
		border-radius: 5px;
		font-size: 13px;
	}
	.modal-login .modal-footer a {
		
        color: #fff;
	}		
	.modal-login .avatar {
		position: absolute;
		margin: 0 auto;
		left: 0;
		right: 0;
		top: -70px;
		width: 95px;
		height: 95px;
		border-radius: 50%;
		z-index: 9;
		background: #60c7c1;
		padding: 15px;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
	.modal-login .avatar img {
		width: 100%;
	}
    .modal-login .btn {
        color: #fff;
        border-radius: 4px;
		background: #60c7c1;
		text-decoration: none;
		transition: all 0.4s;
        line-height: normal;
        border: none;
    }
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: #45aba6;
		outline: none;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}

    .title{
        color: #fff;
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
</style>  
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
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
                <li class="active"><a href='http://localhost/302/homee.php'><i class="fa fa-home"></i></i> Home</a></li>
                <li><a href='#'><i class="fa fa-sign-in"></i> Log In</a>
                <div class="sub-menu-1">
                    <ul>
                        <li><a href="https://localhost/302/login_admin.php"><i class="fa fa-check" ></i> Admin</a></li>
                        <li><a href="https://localhost/302/login.php"><i class="fa fa-check" ></i> Customer</a></li>
                    </ul>
                </div>
            </li>
                <li><a href='#'><i class="fa fa-play-circle" ></i> Showtime</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="http://localhost/302/movies.php"><i class="fa fa-check"></i> 2D</a></li>
                            <li><a href="http://localhost/302/movies.php"><i class="fa fa-check"></i> 3D</a></li>
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
                            <li><a href="portfolio.html"><i class="fa fa-apple"></i> Refreshments</a></li>
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
    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>Instructions for Admin</h1>
                        <p>In this page you can enter a new movie to the data base.The format of the movie id will be "MXYZ'year''month''date'" where year month date is the current year month date and xyz is the initials of the movie name.If the 
                        movie is of 2 letters the place 0 on the place of x and fill y and z with the rest. If the movie is of 4 letters enter initials of the first 3 words only.The id must start with M. for example for the movie train to busan "MTTB20211106" will be the movie id.</p>
                        
                    </div>
                    </div>
                </div>                  
                <div class="col-lg-6">
                        <div class="main-slider">
                            <div class="slide-text">
                       <div id=reg>
                       <h2>Input Movie information</h2>
                        <div class="signup-form">
                            <form action="login.php" method="POST">                            
                                <p class="hint-text">Input all the movie information</p>                                  
                                <div class="form-group">
                                            	
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="movie_name" placeholder="movie name" required="required">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="movie_id" placeholder="movie id" required="required">
                                </div>


                                <div class="form-group">
                                    <input type="text" class="form-control" name="rating" placeholder="rating" required="required">
                                </div>

                                <div class="form-group">
                                
                                    <input type="text" class="form-control" name="details" placeholder="details" required="required">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="release_date" placeholder="release date" required="required">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="genre" placeholder="genre" required="required">
                                </div>
                                <!--
                                <div class="form-group">
                                <label for="myfile">Select an image file as movie poster:</label>
                                 <input type="file" id="myfile" name="myfile" required="required"><br><br>
                                </div>

                                <div class="form-group">
                                <label for="homepage">Enter Trailer URL:</label>
                                 <input type="url" id="homepage" name="homepage">
                                </div>
                                -->
                                
                                <div class="form-group">
                                    <button type="submit" name="button1"  value="button1" class="btn btn-success btn-lg btn-block">Enter information</button>

                                 </div> 
                                      
                                
                                
                            </form>

                    

                            <?php
                            session_start();
                       $conn=oci_connect("dbms","dbms","localhost/XE");

                       //when you have to sign up you have to take all posted information.
                     
                       $movie_name=$_POST["movie_name"];
                       $movie_id=$_POST["movie_id"];
                       $rating=$_POST["rating"];
                       $details=$_POST["details"];
                       $release_date=$_POST["release_date"];
                       $genre=$_POST["genre"];

                       


                       if(!$conn)
                       {
                        echo "fail";
                       }
                       else
                       {//echo "<h2 text-align: center> </h2>";
                        

                        
                        $sql="insert into movie_info values ('$movie_name','$movie_id','$rating','$details','$release_date','$genre')";
                       //$sql="delete from Sign_up where Email='Bolodna'";
                        
                        $compile=oci_parse($conn,$sql);
                       
                       
                       /* oci_bind_by_name($compile, 'Email', $mail);
                        oci_bind_by_name($compile, 'Name', $user);
                        oci_bind_by_name($compile, 'Phone', $phone);
                        oci_bind_by_name($compile, 'Password', $pass);*/
                       
                        oci_execute($compile);
                       } 
                       
                       ?>





    
                            <br> <br> <br>
                             </div>
                           </div>
                         </div>
                      </div>
                   </div>
                 </div>
               </div>
             </div>        
            </div>       
        
    </section>

   
   


    <!--/#footer-->

       




 <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>   
</body>
</html>

