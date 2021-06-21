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
                            <form action="registration.php" method="POST">                            
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
                                    <input type="text" class="form-control" name="password" placeholder="Password" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
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
                      if (isset($_POST['button1'])){
                         
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

                       } }?>





    
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

   
    

    