<!---<header id="header">      
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
                  
        
                   -- Modal HTML --
                    <div id="myModal" class="modal fade">
                        <div class="modal-dialog modal-login">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="avatar">
                                       -- <img src="images/avatar.jpg" alt="Avatar">--
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
                    </div>     ---/sign up ----
            <li><a href='#'><i class="fa fa-phone"></i>   Contact Us</a></li>
          </ul>
        </div>               
           
    </header>
    --/#header-->
 
   


    



    



    <?php
    //Oracle DB user name
    $username = 'dbms';

    // Oracle DB user password
    $password = 'dbms';

    // Oracle DB connection string
    $connection_string = 'localhost/xe';

    //Connect to an Oracle database
    $connection = oci_connect(
        $username,
        $password,
        $connection_string
    );

    if (!$connection)
        echo 'Oops 🙁 connection failed';
    else
        
    $query = "SELECT * from membership";
    $result = oci_parse($connection, $query);
    oci_execute($result);

    print "<table class = \"table table-responsive-md     table-dark \">\n";
    while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) {
        print "<tr>\n";
        foreach ($row as $item) {
            print "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
        }
        print "</tr>\n";
    }
    print "</table>\n";
    //print '</table>';
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>





    