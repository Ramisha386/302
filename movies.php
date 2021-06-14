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
           color: #fff;
       }
    </style>
    

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
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
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                
                <img src="images/movies/armyofthedead.jpg" class="img-responsive" alt="" width="300" height="100"  >
                
            </div>
            <div class="person-info col-sm-6">
                <?php
                 
                 //Oracle DB user name
    $username = 'dbms';

    // Oracle DB user password
    $password = 'dbms';

    // Oracle DB connection string
    $connection_string = 'localhost/xe';
 $connection = oci_connect(
        $username,
        $password,
        $connection_string
    );

    if (!$connection)
        echo 'Oops 🙁 connection failed';
    else
    $query = "SELECT movie_name from movie_info where movie_id='MAOT20210614'";
    $result = oci_parse($connection, $query);
    oci_execute($result);
    while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) { 
                            foreach ($row as $item) {
                        print "<h1 class=\"headings\">". ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")."</h1>" ;
                              }
                            }

                           
               ?>
                
                
                
                <div class="description">
                <p>2021 ‧ Horror/Action ‧ 2h 28m</p>
            
                <p>Following a zombie outbreak in Las Vegas, a group of mercenaries take the ultimate gamble, venturing into the quarantine zone to pull off the greatest heist ever attempted.
                    <br>
                    <br>
                    <br>
                    <b>Director:</b>
                    Zack Snyder
                    <br>
                   <b>
                    Writers:
                   </b>
                    Zack Snyder(story by)Shay Hatten(screenplay by)Joby Harold(screenplay by)
                    <br>
                    <b>Stars:</b>
                    Dave Bautista . Ella Purnell . Ana de la Reguera</p>
                </div>
                    <br>
                    <br>
                    <a href="movie-1.php" class="myButton">Buy Ticket</a>
                    <a href="https://www.youtube.com/watch?v=tI1JGPhYBS8" class="myButton">Trailer</a>
            </div>
        </div>
             <br>
        <div class="row">
            <div class="col-sm-5">
                <img src="images/movies/thebox.jpg" class="img-responsive" alt="" width="300" height="100">
            </div>
            <div class="person-info col-sm-6">
            <?php
                 
                 //Oracle DB user name
    $username = 'dbms';

    // Oracle DB user password
    $password = 'dbms';

    // Oracle DB connection string
    $connection_string = 'localhost/xe';
 $connection = oci_connect(
        $username,
        $password,
        $connection_string
    );

    if (!$connection)
        echo 'Oops 🙁 connection failed';
    else
    $query = "SELECT movie_name from movie_info where movie_id='M0TB20210614'";
    $result = oci_parse($connection, $query);
    oci_execute($result);
    while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) { 
                            foreach ($row as $item) {
                        print "<h1 class=\"headings\">". ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")."</h1>" ;
                              }
                            }

                           
               ?>
                <div class="description">
                <p>2021 ‧ Musical/Music ‧ 1h 34m</p>
            
                <p>A music producer fallen from grace finds an artist - Ji Hoon who has everything needed to make it big and discovers the one thing holding him back, paralyzing stage fright.

                    
                    
                    <br>
                    <br>
                    <br>
                    <b>Director:</b>
                    Yang Jeong-Woong
                    <br>
                   
                    
                    <b>Stars:</b>
                    Dal Hwan Cho . Chan-Yeol Park</p>
                </div>
                    <br>
                    <br>
                    <a href="movie-2.php" class="myButton">Buy Ticket</a>
                    <a href="https://www.youtube.com/watch?v=gjSXRO1AcnQ" class="myButton">Trailer</a>
            </div>
        </div>

<br>
        <div class="row">
            <div class="col-sm-5">
                <img src="images/movies/conjuring3.png" class="img-responsive" alt="" width="300" height="100">
            </div>
            <div class="person-info col-sm-6">
            <?php
                 
                 //Oracle DB user name
    $username = 'dbms';

    // Oracle DB user password
    $password = 'dbms';

    // Oracle DB connection string
    $connection_string = 'localhost/xe';
 $connection = oci_connect(
        $username,
        $password,
        $connection_string
    );

    if (!$connection)
        echo 'Oops 🙁 connection failed';
    else
    $query = "SELECT movie_name from movie_info where movie_id='MTCT20210614'";
    $result = oci_parse($connection, $query);
    oci_execute($result);
    while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) { 
                            foreach ($row as $item) {
                        print "<h1 class=\"headings\">". ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")."</h1>" ;
                              }
                            }

                           
               ?>
                <div class="description">
                <p>2021 ‧ Horror/Thriller ‧ 1h 52m</p>
            
                <p>Paranormal investigators Ed and Lorraine Warren try to uncover the truth behind a murderer's claim of demonic possession.

                    
                    
                   <br>
                   <br>
                   <br>
                    <b>Director:</b>
                    Michael Chaves

                    <br>
                    <b>Writers:</b>
                    James Wan . David Leslie . Johnson-McGoldrick
                    <br>
                  
                    
                    <b>Stars:</b>
                    Patrick Wilson . Vera Farmiga . Ruairi O'Connor

                    </p>
                </div>
                    <br>
                    <br>
                    <a href="movie-3.php" class="myButton">Buy Ticket</a>
                    <a href="https://www.youtube.com/watch?v=h9Q4zZS2v1k" class="myButton">Trailer</a>
                
            </div>
        </div>

<br>


<div class="row">
    <div class="col-sm-5">
        <img src="images/movies/avengers.jpg" class="img-responsive" alt="" width="300" height="100">
    </div>
    <div class="person-info col-sm-6">
    <?php
                 
                 //Oracle DB user name
    $username = 'dbms';

    // Oracle DB user password
    $password = 'dbms';

    // Oracle DB connection string
    $connection_string = 'localhost/xe';
 $connection = oci_connect(
        $username,
        $password,
        $connection_string
    );

    if (!$connection)
        echo 'Oops 🙁 connection failed';
    else
    $query = "SELECT movie_name from movie_info where movie_id='M0AE20210614'";
    $result = oci_parse($connection, $query);
    oci_execute($result);
    while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) { 
                            foreach ($row as $item) {
                        print "<h1 class=\"headings\">". ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")."</h1>" ;
                              }
                            }

                           
               ?>
        <div class="description">
        <p>2019 ‧ Action/Sci-fi ‧ 3h 2m</p>
    
        <p>After Thanos, an intergalactic warlord, disintegrates half of the universe, the Avengers must reunite and assemble again to reinvigorate their trounced allies and restore balance.

            
            
           <br>
           <br>
           <br>
            <b>Director:</b>
            Joe Russo . Anthony Russo

            <br>
            <b>Writers:</b>
            Christopher Markus(screenplay by) . Stephen McFeely(screenplay by) . Stan Lee(based on the Marvel comics by)


            <br>
          
            
            <b>Stars:</b>
           
               Robert Downey . Jr.Chris Evans . Mark Ruffalo



</p>
        </div>
<br>
                    <br>
                    <a href="movie-4.php" class="myButton">Buy Ticket</a>
                    <a href="https://www.youtube.com/watch?v=lHw-6AZvZ7I" class="myButton">Trailer</a>
        
    </div>
</div>

<br>


<div class="row">
    <div class="col-sm-5">
        <img src="images/movies/blackwidow.jpg" class="img-responsive" alt="" width="300" height="100">
    </div>
    <div class="person-info col-sm-6">
    <?php
                 
                 //Oracle DB user name
    $username = 'dbms';

    // Oracle DB user password
    $password = 'dbms';

    // Oracle DB connection string
    $connection_string = 'localhost/xe';
 $connection = oci_connect(
        $username,
        $password,
        $connection_string
    );

    if (!$connection)
        echo 'Oops 🙁 connection failed';
    else
    $query = "SELECT movie_name from movie_info where movie_id='M0BW20210614'";
    $result = oci_parse($connection, $query);
    oci_execute($result);
    while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) { 
                            foreach ($row as $item) {
                        print "<h1 class=\"headings\">". ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")."</h1>" ;
                              }
                            }

                           
               ?>
        <div class="description">
        <p>2019 ‧ Action/Sci-fi ‧ 3h 2m</p>
    
        <p>At birth the Black Widow (aka Natasha Romanova) is given to the KGB, which grooms her to become its ultimate operative. When the U.S.S.R. breaks up, the government tries to kill her as the action moves to present-day New York, where she is a freelance operative.
            <br>
            <br>
            <br>
            <b>Director:</b>
            Cate Shortland
            <br>
           <b>
            Writers:
           </b>
           Jac Schaeffer .  Ned Benson
            <br>
            <b>Stars:</b>
            
Scarlett Johansson . Florence Pugh . David Harbour

</p>
        </div>
<br>
                    <br>
                    <a href="movie-5.php" class="myButton">Buy Ticket</a>
                    <a href="https://www.youtube.com/watch?v=ybji16u608U" class="myButton">Trailer</a>
        
    </div>
</div>




<br>


<div class="row">
    <div class="col-sm-5">
        <img src="images/movies/godzillavskong.jpg" class="img-responsive" alt="" width="300" height="100">
    </div>
    <div class="person-info col-sm-6">
    <?php
                 
                 //Oracle DB user name
    $username = 'dbms';

    // Oracle DB user password
    $password = 'dbms';

    // Oracle DB connection string
    $connection_string = 'localhost/xe';
 $connection = oci_connect(
        $username,
        $password,
        $connection_string
    );

    if (!$connection)
        echo 'Oops 🙁 connection failed';
    else
    $query = "SELECT movie_name from movie_info where movie_id='MGVK20210614'";
    $result = oci_parse($connection, $query);
    oci_execute($result);
    while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) { 
                            foreach ($row as $item) {
                        print "<h1 class=\"headings\">". ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")."</h1>" ;
                              }
                            }

                           
               ?>
        <div class="description">
        <p>2021 ‧ Sci-fi/Action ‧ 1h 53m</p>
    
        <p>Kong and his protectors undertake a perilous journey to find his true home. Along for the ride is Jia, an orphaned girl who has a unique and powerful bond with the mighty beast. However, they soon find themselves in the path of an enraged Godzilla as he cuts a swath of destruction across the globe. The initial confrontation between the two titans -- instigated by unseen forces -- is only the beginning of the mystery that lies deep within the core of the planet.

            
            
           <br>
           <br>
           <br>
            <b>Director:</b>
            Adam Wingard

            <br>
            <b>Writers:</b>
            Terry Rossio . Michael Dougherty . Zach Shields
            <br>
          
            
            <b>Stars:</b>
            
Alexander Skarsgård . Millie Bobby Brown . Rebecca Hall



</p>
        </div>

<br>
                    <br>
                    <a href="movie-6.php" class="myButton">Buy Ticket</a>
                    <a href="https://www.youtube.com/watch?v=odM92ap8_c0" class="myButton">Trailer</a>
        
    </div>
</div>

    </div>
</section>
  


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>   
</body>
</html>
