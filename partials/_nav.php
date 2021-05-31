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
                  
        
                    <!-- Modal HTML -->
                    <div id="myModal" class="modal fade">
                        <div class="modal-dialog modal-login">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="avatar">
                                       <!-- <img src="images/avatar.jpg" alt="Avatar">-->
                                    </div>				
                                    <h4 class="modal-title">Member Login</h4>	
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form action="/examples/actions/confirmation.php" method="post">
                                    <div class="form-group">
                                    <label class="checkbox-inline"><input type="checkbox" required="required"> USER</label>
                                    </div>
                                    <div class="form-group">
                                    <label class="checkbox-inline"><input type="checkbox" required="required"> ADMIN</label>
                                    </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="username" placeholder="Username" required="required">		
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Password" required="required">	
                                        </div>        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <a href="#">Forgot Password?</a>
                                </div>
                            </div>
                        </div>
                    </div>     <!----/sign up ---->
            <li><a href='#'><i class="fa fa-phone"></i>   Contact Us</a></li>
          </ul>
        </div>               
           
    </header>
    <!--/#header-->
    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>Become a Member Partner of STAR CINEPLEX</h1>
                        <p>STAR CINEPLEX Multi screen Theaters offers Membership schemes to its loyal customers who wish to pre-book their tickets and seats, get discounts for Movies, Free Refreshments, receive advance information of upcoming movies and get free invitations to special events.</p>
                        
                    </div>
                    </div>
                </div>                  
                <div class="col-lg-6">
                        <div class="main-slider">
                            <div class="slide-text">
                       <div id=reg>
                       <h2>Register</h2>
                        <div class="signup-form">
                            <form action="login.php" method="POST">                            
                                <p class="hint-text">Create your account. It's free and only takes a minute.</p>                                  
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-6"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required" values="0"></div>
                                        
                                        <div class="col-xs-6"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
                                </div>        	
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" placeholder="Email" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
                                </div>  
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone_number" placeholder="phone number" required="required">
                                </div>       
                                <div class="form-group">
                                    <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="button1"  value="button1" class="btn btn-success btn-lg btn-block">Register Now</button>

                                 </div>
                            </form>

                      <?php
                       $conn=oci_connect("dbms","dbms","localhost/XE");

                       //when you have to sign up you have to take all posted information.
                     
                       $f_name=$_POST["first_name"];
                       $l_name=$_POST["last_name"];
                       $email=$_POST["email"];
                       $pass=$_POST["password"];
                       $c_pass=$_POST["confirm_password"];
                       $phone=$_POST["phone_number"];


                       if(!$conn)
                       {
                        echo "fail";
                       }
                       else
                       {//echo "<h2 text-align: center> </h2>";
                        

                        
                        $sql="insert into membership values ('$email','$f_name','$l_name','customer','$c_pass','$phone','2')";
                       //$sql="delete from Sign_up where Email='Bolodna'";
                        
                        $compile=oci_parse($conn,$sql);
                       
                       
                       /* oci_bind_by_name($compile, 'Email', $mail);
                        oci_bind_by_name($compile, 'Name', $user);
                        oci_bind_by_name($compile, 'Phone', $phone);
                        oci_bind_by_name($compile, 'Password', $pass);*/
                       
                        oci_execute($compile);
                       } ?>





    
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

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="images/home/icon3.png" alt="">
                         <h4><a href="#log" class="btn btn-common">Purchase Ticket</a></h4>   
                           
                           
                        <p> through debit/credit card</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="images/home/icon2.png" alt="">
                        </div>
                       
                        <h4><a href="#log" class="btn btn-common">Purchase Ticket</a></h4> 
                        <p> through entertainment card</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                         <img src="images/home/icon1.png" alt="">
                        </div>
                       
                        <h4><a href="#log" class="btn btn-common">Purchase Ticket</a></h4>
                        <p> through Bkash.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
   


    <!--/#footer-->

    