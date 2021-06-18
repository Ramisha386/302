<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contact Us 2  | Triangle</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet"> 
    <link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Bootstrap Simple Login Form with Blue Background</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
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
  

.login-box {
  position: absolute;
  top: 10%;
  left: 30%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
  position: relative;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #03e9f4;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box a:hover {
  background: #03e9f4;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
}

.login-box a span {
  position: absolute;
  display: block;
}

.login-box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #03e9f4);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #03e9f4);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #03e9f4);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}

fieldset {
    display: none
}

fieldset.show {
    display: block
}

select:focus,
input:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #2196F3 !important;
    outline-width: 0 !important;
    font-weight: 400
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 1;
}

.tabs {
    margin: 2px 5px 0px 5px;
    padding-bottom: 10px;
    cursor: pointer
}

.tabs:hover,
.tabs.active {
    border-bottom: 1px solid #2196F3
}

a:hover {
    text-decoration: none;
    color: #1565C0
}

.box {
    margin-bottom: 10px;
    border-radius: 5px;
    padding: 10px
}

.modal-backdrop {
    background-color: #64B5F6
}

.line {
    background-color: #CFD8DC;
    height: 1px;
    width: 100%
}

@media screen and (max-width: 768px) {
    .tabs h6 {
        font-size: 12px
    }
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
  width: 50%;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 0px 0px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 50%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
  align:center;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

text{
    align:center;
}


</style>
  

</head><!--/head-->

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


	
    <!-----slider-->
    <div class="container">
        
        
       
        <div class="row">       
          



        <div class="col-md-4">
          <br><br><br><br><br>
          <div class="login-box">
            <h2>Login</h2>
            <form>
              <div class="user-box">
                
                <label>Username</label>
              </div>  <br>
              <div class="user-box">
              
                <label>Password</label>
              </div>
              <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
               
                <div class="row"> <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary py-2 px-4">Proceed to make the purchase</button> 
              </a>
            </form>
          </div>
          </div>









          <div class="col-md-8">
            <div class="carousel slide multi-item-carousel" id="theCarousel">
              <div class="carousel-inner">
                <div class="item active">
                    
                  <div class="col-xs-4"><a href="#1"><img src="images/1.jpg" class="img-responsive"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-4"><a href="#1"><img src="images/2.jpg" class="img-responsive"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-4"><a href="#1"><img src="images/3.jpg" class="img-responsive"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-4"><a href="#1"><img src="images/4.jpg" class="img-responsive"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-4"><a href="#1"><img src="images/5.jpg" class="img-responsive"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-4"><a href="#1"><img src="images/6.jpg" class="img-responsive"></a></div>
                </div>





                <!-- add  more items here -->
                <!-- Example item start:  -->
                
                <div class="item">
                  <div class="col-xs-4"><a href="#1"><img src="images/3.jpg" class="img-responsive"></a></div>
                </div>
                
                <!--  Example item end -->
              </div>
              <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
              <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
            </div>
        </div>
          </div>
        </div>
      <!-- Modal-->
      <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
              <div role="document" class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header row d-flex justify-content-between mx-1 mx-sm-3 mb-0 pb-0 border-0">
                          <div class="tabs" id="tab01">
                              <h6 class="text-muted">Mobile Banking</h6>
                          </div>
                          <div class="tabs active" id="tab02">
                              <h6 class="font-weight-bold">Internet Banking</h6>
                          </div>
                          <div class="tabs" id="tab03">
                              <h6 class="text-muted">Card</h6>
                          </div>
                         
                      </div>
                      <div class="line"></div>
                      <div class="modal-body p-0">
                          <fieldset id="tab011">
                              <div class="bg-light">
                                  <h3 class="text-center mb-4 mt-0 pt-4">Mobile Banking</h3>
                                  <br>
                                  <ol class="pb-4">
                                      <a href='https://payment.bkash.com/redirect/tokenized/?paymentID=TR0011UR1624019924510&hash=qoTzSj4Xf(vh-E6Dl9qpUQ1Ic3SNWn-10mKsV(wQhkm8u*FZaQfS3VwFwXcGDNm7UhIVthFaeDcN_pdLGIJ9a2.l-lIYuu.!!naQ1624019924547&mode=0011&apiVersion=v1.2.0-beta'><img src="images/bkash.jpg" alt="" class="rounded" width="160"></a>
                                      <a href='https://payment.mynagad.com:30000/check-out/MDYxODE4Mzk0MDE4NS42ODkwNzQ4NjI5MzU3MzQuTkcyNzY2MjAyMTA2MTg4MzczOS44MDFiNDBjM2VlYTNhMzczZmZhNg=='><img src="images/nogod.png" alt="" class="rounded" width="160"></a>
                                      <a href='https://ecom1.dutchbanglabank.com/ecomm2/ClientHandler?card_type=6&trans_id=j4y0t%2Fg6qbHUCdXR60kCJB5ZNpc%3D'><img src="images/rocket.png" alt="" class="rounded" width="160"></a>
                                      
                                  </ol>
                                  <div class="modal-footer d-flex flex-column justify-content-center border-0">
                          <p class="text-muted">Can't find what you're looking for?</p><a href='http://localhost/302/contact%20us.php'> <button type="button" class="btn btn-primary">Contact Support Team</button></a>
                      </div>
                              </div>
                             
                          </fieldset>
                          <fieldset class="show" id="tab021">
                              <div class="bg-light">
                                  <h3 class="text-center mb-4 mt-0 pt-4">Internet Banking</h3><br>
                                  <ol class="pb-4">
                                    <a href='https://www.citytouch.com.bd/ibs_payment/billLogin'><img src="images/city touch.png" alt="" class="rounded" width="160"></a>
                                    <a href='https://abdirect.abbl.com/merchant/login#!'><img src="images/ab bank.png" alt="" class="rounded" width="160"></a>
                                    <a href='https://app.ipay.com.bd/checkout/pay/FQDLZ21-524EC49762A340'><img src="images/ipay.png" alt="" class="rounded" width="160"></a>
                                    
                                </ol>
                              </div>
                              <div class="px-3">
                              <div class="modal-footer d-flex flex-column justify-content-center border-0">
                          <p class="text-muted">Can't find what you're looking for?</p><a href='http://localhost/302/contact%20us.php'> <button type="button" class="btn btn-primary">Contact Support Team</button></a>
                      </div>
                              </div>
                          </fieldset>
                          <fieldset id="tab031">
                              <div class="bg-dark">

                                  <div class="row">
                                    <div class="col-75">
                                      <div >
                                        <form action="/action_page.php">
                                            <div class="row">
                                            

                                            
                                                
                                            <div class="col-50">
                                              
                                              <label for="fname">Accepted Cards</label>
                                              <div class="icon-container">
                                                <i class="fab fa-cc-visa" style="color:navy;"></i>
                                                <i class="fab fa-cc-amex" style="color:blue;"></i>
                                                <i class="fab fa-cc-mastercard" style="color:red;"></i>
                                                <i class="fab fa-cc-discover" style="color:orange;"></i>
                                              </div>
                                              <div class="row">
                                                <div class="col-50">
                                                  <label for="cname">Name on Card</label>
                                                  <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                                                </div>
                                                <div class="col-50">
                                                <label for="ccnum">Credit card number</label>
                                                  <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">   
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-50">
                                                  <label for="cvv">Exp Month</label>
                                                  <input type="text" id="expmonth" name="expmonth" placeholder="September">
                                                </div>
                                                <div class="col-50">
                                                <label for="expyear">Exp Year</label>
                                                  <input type="text" id="expyear" name="expyear" placeholder="2018">   
                                                </div>
                                              </div>
                                                <div class="row">
                                                <div class="col-50">
                                                  <label for="cvv">CVV</label>
                                                  <input type="text" id="cvv" name="cvv" placeholder="352">
                                                </div>
                                                <div class="col-50">
                                                <label for="cvv">ZIP code</label>
                                                  <input type="text" id="cvv" name="cvv" placeholder="1206">   
                                                </div>
                                              </div>
                                            </div>
                                            
                                          </div>
                                         
                                          <input type="submit" value="Continue to checkout" class="btn">
                                        </form>
                                      </div>
                                    </div>
                                    
                                  </div>
               
                      </div>
                      <div class="line"></div>
                      <div class="modal-footer d-flex flex-column justify-content-center border-0">
                          <p class="text-muted">Can't find what you're looking for?</p><a href='http://localhost/302/contact%20us.php'> <button type="button" class="btn btn-primary">Contact Support Team</button></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>												                            

    <script>
      $(document).ready(function(){

$(".tabs").click(function(){

$(".tabs").removeClass("active");
$(".tabs h6").removeClass("font-weight-bold");
$(".tabs h6").addClass("text-muted");
$(this).children("h6").removeClass("text-muted");
$(this).children("h6").addClass("font-weight-bold");
$(this).addClass("active");

current_fs = $(".active");

next_fs = $(this).attr('id');
next_fs = "#" + next_fs + "1";

$("fieldset").removeClass("show");
$(next_fs).addClass("show");

current_fs.animate({}, {
step: function() {
current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({
'display': 'block'
});
}
});
});

});
    </script>
    





    <!------------>

    
  
 


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/booking.js"></script> 
    <script type="text/javascript" src="js/main.js"></script>   
</body>
</html>
