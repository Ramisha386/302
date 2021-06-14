<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Movies</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet"> 
    <link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">    
  
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pattaya&disp">
    
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
           background-image: url("images/back.jpg");
           background-size: cover;
           background-position: center;
           font-family: 'Oswald', sans-serif;
           background-repeat: no-repeat;
           background-attachment: fixed;
           background-size: 100% 100%;
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

       @import url(https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400italic,700,700italic);
@import url(https://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css);
*{
	margin: 0; 
	padding: 0;
	font-family: 'Roboto Condensed', sans-serif;
}
html{
	background: #2C3A43;
}
body{}
img{
	width: 100%;
}
#page{
	width: 70%;
	margin: 30px auto;
}
.content{
	text-align: center;
}
h2, small{
	color: white,
	text-transform: uppercase;
}
small{
	color: #468089;
}

a{
	color: white;
	text-decoration: none;
	transition: .3s;
	-webkit-transition: .3s;
}
a:hover{
	color: #white;
}
.design{
	position: absolute;
	right: 20px;
	bottom: 20px;
	font-size: 12px;
	opacity: .1;
}

/* Style product */
.product-items{
	width: 100%;	
}
.product-items .product-item{
	display: inline-block;
	vertical-align: top;
	text-align: center;
	color: #45616C;
	margin-top: 30px;
	margin-right: 50px;
	transition: .5s;
	-webkit-transition: .5s;
}
.product-items .product-item:last-child{
	margin-right: 0;
}
.product-items .product-item:hover{
	color: white;
}
.product-items .product-item  .item-wrap{
	width: 130px;
	padding: 6px;
	border: 2px solid; 
	position: relative;
} 
.product-items .product-item  > .item-wrap,
.product-items .product-item  > .item-wrap img,
.product-items .product-item  .item-wrap .wrap-qtt{
	border-radius: 50%;
	line-height: 0;
}
.product-items .product-item  > .item-wrap img{
	opacity: .8;
	transition: .5s;
	-webkit-transition: .5s;
}
.product-items .product-item:hover img{
	transform: scale(.85) rotate(30deg);
	-webkit-transform: scale(.85) rotate(30deg);
	opacity: 1;
}
.product-items .product-item  .item-wrap .wrap-qtt .wrap-qtt-field-qtt,
.product-items .product-item  .item-wrap .wrap-qtt .wrap-qtt-minus-plus{
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	opacity: 0;
	transform: rotate(90deg);
	-webkit-transform: rotate(90deg);
}
.product-items .product-item  .item-wrap .wrap-qtt .wrap-qtt-field-qtt{
	transition: .4s;
	-webkit-transition: .4s;
}
.product-items .product-item  .item-wrap .wrap-qtt .wrap-qtt-minus-plus{
	transition: .5s;
	-webkit-transition: .5s;
}
.btn-cart-qtt{
	width: 20px;
	height: 20px;
	border-radius: 50%;
	text-align: center;
	border: none;
	background: none;
	background: white;
	color: white;
}
.btn-cart-qtt.btn-plus,
.wrap-qtt-field-qtt input,
.btn-cart-qtt.btn-minus{
	position: absolute;
	right: -10px;
    top: 50%;
	cursor: pointer;
	transform: translateY(-50%);
	-webkit-transform: translateY(-50%);
	z-index: 10;
}
.wrap-qtt-field-qtt input{
	right: -15px;
}
/*-----*/
.wrap-qtt-field-qtt input{
	background: #2c3a43;
    border: 2px solid red;
    border-radius: 50%;
    color: #fff;
    font-weight: bold;
    height: 30px;
    text-align: center;
    width: 30px;
}
.product-items .product-item:hover .wrap-qtt .wrap-qtt-field-qtt{
	opacity: 1;
	transform: rotate(-1deg);
	-webkit-transform: rotate(-1deg);
}
/*-----*/
.btn-cart-qtt.btn-plus{
	right: 13px;
    top: 6px;
    transform: rotate(69deg);
    -webkit-transform: rotate(69deg);
}
.btn-cart-qtt.btn-minus{
	transform: rotate(-20deg);
	-webkit-transform: rotate(-20deg);
}
.product-items .product-item:hover .wrap-qtt .wrap-qtt-minus-plus{
	opacity: 1;
	transform: rotate(20deg);
	-webkit-transform: rotate(20deg);
}

.product-items .product-item .item-info{
	margin-top: 10px;
}
.product-items .product-item .item-info .item-title,
.product-items .product-item .item-info .item-price{
	text-transform: uppercase;
	font-weight: bold;
	color: white;
}
.product-items .product-item .item-info .item-price{
	font-size: 15px;
	color: white;
}
.link{
  position: absolute;
  bottom: 50px;
  right: 30px;
  font-size: 20px
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
            <li><a href='#'><i class="fa fa-sign-in"></i>   Sign Up</a></li>
            <li><a href='#'><i class="fa fa-phone"></i>   Contact Us</a></li>
          </ul>
        </div>               
           
    </header>


   <section id="company-information" class="padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
  

   
<div id="page">
  <div class="content">
    <h1>Contact Us</h1>
    <small>LightCameraAction@gmail.com</small>
    <p>You can also contact personally </p>
    <div class="product-items">
      <!-- start item -->
      <div class="product-item">
        <div class="item-wrap">
          <img src="riyadil.jpeg">
          <div class="wrap-qtt">
            <div class="wrap-qtt-field-qtt">
              <input class="field-qtt" name="qtt" value="" readonly=""/>
            </div>
            <div class="wrap-qtt-minus-plus">
              <button class="btn-cart-qtt btn-plus"><i class="ion-plus-round"></i></button>
              <button class="btn-cart-qtt btn-minus"><i class="ion-minus-round"></i></button>
            </div>
          </div>
        </div>
        <div class="item-info">
          
          <div class="item-price" data-price="45">Riyadil Zannat</div>
          <div class="item-title">Email </div>
        <div class="item-title">riyadilzannat@gmail.com</div>
          <div class="item-title">facebook</div>
          <div class="item-title"> Riyadil Zannat</div>
        </div>
      </div>
      <!-- end item -->
      <div class="product-item">
        <div class="item-wrap">
          <img src="ramisha.jpeg">
          <div class="wrap-qtt">
            <div class="wrap-qtt-field-qtt">
              <input class="field-qtt" name="qtt" value="" readonly=""/>
            </div>
            <div class="wrap-qtt-minus-plus">
              <button class="btn-cart-qtt btn-plus"><i class="ion-plus-round"></i></button>
              <button class="btn-cart-qtt btn-minus"><i class="ion-minus-round"></i></button>
            </div>
          </div>
        </div>
        <div class="item-info">
           
            <div class="item-price" data-price="45">Ramisha Fariha</div>
          <div class="item-title">Email </div>
        <div class="item-title">ramishabaki@gmail.com</div>
          <div class="item-title">facebook</div>
          <div class="item-title"> Ramisha Fariha Baki</div>
        </div>
      </div>
      <div class="product-item">
        <div class="item-wrap">
          <img src="mounee.jpeg">
          <div class="wrap-qtt">
            <div class="wrap-qtt-field-qtt">
              <input class="field-qtt" name="qtt" value="" readonly=""/>
            </div>
            <div class="wrap-qtt-minus-plus">
              <button class="btn-cart-qtt btn-plus"><i class="ion-plus-round"></i></button>
              <button class="btn-cart-qtt btn-minus"><i class="ion-minus-round"></i></button>
            </div>
          </div>
        </div>
        <div class="item-info">
            
            <div class="item-price" data-price="45">Mouneeta Rahman</div>
          <div class="item-title">Email </div>
        <div class="item-title">mouneetar@gmail.com</div>
          <div class="item-title">facebook</div>
          <div class="item-title"> Mouneeta Rahman</div>
        </div>
      </div>
    </div>
  </div>
  <a class="design" href="https://dribbble.com/shots/1769468-Product-Animation?list=users&offset=0" target="_blank">Kenny Sing <i class="ion-ios-arrow-thin-right"></i></a>
</div>


   </section>
  


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>   
</body>
</html>
