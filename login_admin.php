<!DOCTYPE html>
<?php
$conn=oci_connect("dbms","dbms","localhost/XE");
	$query = 'SELECT *from membership';
	$stid = oci_parse($conn, $query);
	oci_execute($stid);
  if (!$conn){
  echo "no connection";}
  else{
    echo " connection";
  }

if(isset($_POST['submit']))
{
 $u=$_POST['username'];
 $p=$_POST['password'];
 /*if($u=="nihon"&&$p=="12345")
  {
    header("Location: http://www.youtube.com");
   //echo "TUi bolod na"; 
   exit();
  }
 else
  { 
   echo "<h2 class="errors">Tui ghbolod</h2>";
  }*/
 
 while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC))
  {   
    if(($row["EMAIL_ID"]==$u)&&($row["PASSWORD"]==$p) && ($row["STATUS"]=='admin'))
      {
        header("Location: admin_view.php");
		  //print "<a href='admin_view.php'></a>";
      //require 'partials/_nav.php'
      echo "hello";
       exit();
      }
  }
  echo "<p style='color:red' align-self:center>Tui bolod</p>";
   
}
?>
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
.myButton {
	box-shadow:inset 3px 2px 3px 0px #bd2121;
	background:linear-gradient(to bottom, #c12700 5%, #a72100 100%);
	background-color:#c1001a;
	border-radius:11px;
	border:1px solid #771212;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:16px;
	padding:15px 24px;
	text-decoration:none;
	text-shadow:0px -1px 0px #154682;
}
.myButton:hover {
	background:linear-gradient(to bottom, #a71300 5%, #c12700f1 100%);
	background-color:#a72700;
}
.myButton:active {
	position:relative;
	top:1px;
}




    *
       {
           padding: 0;
           margin: 0;
           box-sizing: border-box;
       }
       body
       {
           background-image: url("images/index.jpg");
           background-size: cover;
           background-position: center;
           font-family: 'Oswald', sans-serif;
           background-repeat: no-repeat;
           background-attachment: fixed;
           background-size: 100% 100%;
           color: white;
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
           display:none;

       }
       .menu-bar ul li:hover  .sub-menu-1
       {
           display: block;
           position: absolute;
           background-color:darkred;
           margin-top: 15px;
           margin-left:-15px;
           z-index: 1000;
           
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
       .header
       {
           padding-top: 0%;
       }
       .headings
       {
           font-size: xx-large;
           color: #fff;
       }
       .description
       {
           font-size: large;
           color: white;
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
            <li class="active"><a href='#'><i class="fa fa-home" ></i></i>    Home</a></li>
            <li><a href='#'><i class="fa fa-film" ></i>    All Movies</a></li>
            <li><a href='#'><i class="fa fa-youtube-play"></i>    Showtime</a>
                <div class="sub-menu-1">
                    <ul>
                        <li><a href="Ticket2d.html"><i class="fa fa-check" ></i>    2D</a></li>
                        <li><a href="Ticket3d.html"><i class="fa fa-check" ></i>    3D</a></li>
                    </ul>
                </div>
            </li>
            <li><a href='#'><i class="fa fa-shopping-cart"></i>     Concession</a>
             <div class="sub-menu-1">
                 <ul>
                     <li class="hover-me"><a href="Ticket.html"><i class="fa fa-ticket" ></i>   Purchase Ticket</a>
                    <div class="sub-menu-2">
                        <ul>
                            <li><a href="Food.html"><i class="fa fa-mobile"></i>   Mobile-Banking</a></li>
                            <li><a href="merchandise.html"><i class="fa fa-address-card"></i>   Internet-Banking</a></li>
                            <li><a href="merchandise.html"><i class="fa fa-credit-card"></i>   Card</a></li>
                        </ul>
                    </div>                   
                    </li>
                     <li><a href="Food.html"><i class="fa fa-cutlery"></i>   Refreshments</a></li>
                     <li><a href="merchandise.html"><i class="fa fa-coffee"></i>   Merchandise</a></li>
                 </ul>
             </div>
            
            </li>
            <li><a href="#myModal"  data-toggle="modal"><i class="fa fa-sign-in"></i> <br>  Sign up</a></li> 
            <li><a href='#'><i class="fa fa-phone"></i>   Contact Us</a></li>
          </ul>
        </div>               

   



    </header>


    


    <!--/#header-->
    <body>
  <div class="container">
    <div class="row">
    <div class="col-lg-4">
    </div>
    
      <div class="col-lg-4">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h3 class="card-title text-center">ADMIN</h3>
            <form action="login_admin.php" method="POST" >
            <form class="form-signin">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" name ="username" placeholder="Email address" required autofocus>
                <label for="inputEmail"></label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control"  name ="password" placeholder="Password" required>
                <label for="inputPassword"></label>
              </div>

              
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit">Sign in</button>
              <hr class="my-4">
              
            </form>
          </div>
        </div>
      </div><div class="col-lg-4">
    </div>
    </div>
  </div>
</body>



    <footer id="footer">
        <div class="container">
            <div class="row">
              
                    <div class="copyright-text text-center">
                        <p>&copy; Your Company 2014. All Rights Reserved.</p>
                        <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
                    
                </div>
            </div>
        </div>
    </div>
       
    </footer>
    <!--/#footer-->
    <script>
function myFunction() {
  document.getElementById("demo").style.color = "red";
}
</script>
<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>   
</body>
</html>