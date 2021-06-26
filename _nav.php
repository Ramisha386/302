<header id="header">      
        

               
        <div class="menu-bar">
            <ul>
                <li class="active"><a href='http://localhost/302/homee.php'><i class="fa fa-home"></i> Home</a></li>
                <li><a href='https://localhost/302/login_admin.php'><i class="fa fa-check" ></i> Admin</a></li>
                <li><a href='#'><i class="fa fa-play-circle" ></i> Showtime</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="http://localhost/302/movies2D.php"><i class="fa fa-check"></i> 2D</a></li>
                            <li><a href="http://localhost/302/movies3D.php"><i class="fa fa-check"></i> 3D</a></li>
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
        </div >
         
           
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
                                    <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
                                </div>  
                                
                                <div class="form-group">
                                    <input type="tel" pattern="[0][1][0-9]{9}"class="form-control" name="phone_number" placeholder="phone number" required="required">
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

                       $temp=true;
                                
                                $binary=strcmp($pass,$c_pass);
                                if($binary!=0){
                                    $temp=false;
                                }
 
                       if(!$conn)
                       {
                        echo "fail";
                       }
                       else
                       {//echo "<h2 text-align: center> </h2>";
                       
                        if($temp==true){
                            echo "true";
                        $message = 'http://localhost/302/inbetween.php?firstname='.$f_name.'&lastname='.$l_name.'&email='.$email.'&phone='.$phone.'&pass='.$pass;
                        $message="<a href='".$message."'>Click here to verify account</a>";
                        $receiver=$email;
                        include 'sendmail.php';
                        
                           
                       }
                       else{
                       echo "<script>alert('Password and Confirm password dont match!');
                           window.location.href='registration.php';
                           </script>";}
                       
                       
                       }}?>





    
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

   
    

    