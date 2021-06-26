<?php
session_start();

?>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-qpuiv="X-UA-Compatible" content="ID=edge">
	<meta name="viewport" content="width=device-width, inticial-scale=1">
	<title>Pure CSS3 Tab</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<style>
* {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url("download.jpg");
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

        
        .own
        {
            font-weight: bolder;
            font-size:xx-large;
            font-family: 'Lobster', cursive;
            font-family: 'Merriweather', serif;
            color: whitesmoke;
        }

        .ownn
        {
            
            
          
            font-size:small;
            color: whitesmoke;
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
        .banner-area
        {
            background-position:center center;
            -webkit-background-size:cover;
            background-size:cover;
            height:10vh;
           margin-bottom:150px;
           margin-top:100px;

        }
        .banner-text
        {
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            color:#fff;
            text-align:center;
            
        }

        .banner-text h2
        {
            margin:0;
            font-size:55px;
            color:#FAF3F3;
            font-family: 'Yanone Kaffeesatz', sans-serif;
        }
        .banner-text p
        {
            font-size:22px;
            margin:0;
            font-family: 'Lobster', cursive;
        }
        .banner-text a
        {
            text-decoration:none;
            border:1px solid #fff;
            font-size: 17px;
            padding:10px 35px;
            color:#fff;
            display:inline-block;
            margin-top:5%;
            font-family: 'Dancing Script', cursive;
            text-transform:uppercase;
            border-color:darkred;
        }
        .banner-text a:hover
        {
           border-color:white;
           background:#DA0037;
           transition:.9s;
           color:antiquewhite;
        }
        
        .logo h2
        {
            padding:20px 0;
            width:100%;
            font-size:50px;
            font-family: 'Lobster', cursive;
        }
        .blog-post
        {
            width:100%;
            max-width:98rem;
            padding:5rem;
            background-color:#630000;
            box-shadow:0 1.4rem 8rem rgba(0,0,0,.2);
            display:flex;
            align-items:center;
            border-radius:.8rem;
            margin:auto;
            opacity:0.8;
        }

        .blog-post_img
        {
            min-width: 35rem;
            max-width: 35rem;
            height:30rem;
            transform: translateX(-8rem);
            position:relative;
            opacity:1;
        }

        .blog-post_img img
        {
            widht:100%;
            height:100%;
            object-fit:cover;
            display:block;
            border-radius:.8rem;
            opacity:1;
        }
        .blog-post_img img::before
        {
            content:'';
            widht:100%;
            height:100%;
            position:absolute;
            top:0;
            left:0;
            background:linear-gradient(to right, rgba(79,172,254,.8),rgba(0,242,254,.8));
            box-shadow:.5rem .5rem 3rem 1px rgba(0,0,0,.05);
            opacity:1;
            border-radius:.8rem;
        }
        .blog-post_date span
        {
            display:block;
            color:#DA0037;
            font-size:3.0rem;
            font-weight:600;
            margin:.5rem 0;
            opacity:1;
            font-family: 'Yanone Kaffeesatz', sans-serif; 
        }
        .blog-post_title
        {
            font-size:3.5rem;
            margin:1.5rem 0 2rem;
            color:white;
            opacity:1;
            font-family: 'Lobster', cursive;
        }
        .blog-post_text
        {
            margin-bottom:3rem;
            font-size:2.5rem;
            color:azure;
            opacity:1;
            font-family: 'Yanone Kaffeesatz', sans-serif; 
        }
        .blog-post_cta
        {
            display:inline-block;
            background:darkred;
            padding:1.5rem 3rem;
            letter-spacing:1px;
            text-transform:uppercase;
            font-size:1.2rem;
            color:#fff;
            border-radius:.8rem;
            font-family: 'Dancing Script', cursive;
            text-decoration:none;
            border-color:darkred;
            opacity:1;

        }
        .blog-post_cta:hover
        {
           border-color:white;
           background:#DA0037;
           transition:.9s;
           color:antiquewhite;
           opacity:1;
        }
* {
	padding: 0;
	margin: 0;
	list-style: none;
	box-sizing: border-box;
	outline: none;
	font-weight: normal;
}



a {
	color: #fff;
	text-decoration: none;
}

header {
	color: #fff;
	text-align: center;
	min-height: 140px;
	margin-bottom: 60px;
}

header h1{
	margin-top: 100px;
	font-size: 50px;
	margin-bottom: 20px;
	font-weight: 100;
}

header a{
	font-size: 18px;
	margin-left: 20px;
}

.copyright {
	font-size: 25px;
	font-weight: 100;
	color: #fff;
	text-align: center;
	margin-top: 100px;
}

/* Tabs Start */

.ease {
	-webkit-transition: all .5s;
	   -moz-transition: all .5s;
		 -o-transition: all .5s;
			transition: all .5s;
}

.container {
	width: 100%;
	max-width: 1000px;
	margin: 0 auto;
}

.tabs {
	background: grey;
	position: relative;
	margin-bottom: 50px;
}

.tabs > input,
.tabs > span {
	width: 20%;
	height: 60px;
	line-height: 60px;
	position: absolute;
	top: 0;
}

.tabs > input {
	cursor: pointer;
	filter: alpha(opacity=0);
	opacity: 0;
	position: absolute;
	z-index: 99;
}

.tabs > span {
	background: #f0f0f0;
	text-align: center;
	overflow: hidden;
    
}

.tabs > span i,
.tabs > span {
	-webkit-transition: all .5s;
	   -moz-transition: all .5s;
		 -o-transition: all .5s;
			transition: all .5s;
}

.tabs > input:hover + span {
	background: rgba(255,255,255,.1);
}

.tabs > input:checked + span {
	background: #fff;
}

.tabs > input:checked + span,
.tabs > input:hover + span {
	color: #3498DB;
}

#tab-1, #tab-1 + span {
	left: 0;
}

#tab-2, #tab-2 + span {
	left: 20%;
}

#tab-3, #tab-3 + span {
	left: 40%;
}

#tab-4, #tab-4 + span {
	left: 60%;
}

#tab-5, #tab-5 + span {
	left: 80%;
}



.tab-content {
	padding: 80px 10px 20px 20px;
	width: 100%;
	min-height: 340px;
}

.tab-content section {
	width: 100%;
	display: none;
}

.tab-content section h1 {
	margin-top: 15px;
	font-size: 100px;
	font-weight: 100;
	text-align: center;
}

#tab-1:checked ~ .tab-content #tab-item-1  {
	display: block;
}

#tab-2:checked ~ .tab-content #tab-item-2  {
	display: block;
}

#tab-3:checked ~ .tab-content #tab-item-3  {
	display: block;
}

#tab-4:checked ~ .tab-content #tab-item-4  {
	display: block;
}

#tab-5:checked ~ .tab-content #tab-item-5  {
	display: block;
}



/* effect-1 */

.effect-1 > input:checked + span {
	background: maroon;
    /*width:100%;*/
   
}


/* effect-2 */

.effect-2 span i{
	padding-right: 15px;
}

@media (max-width: 600px) {
	.effect-2 span span {display: none;}
	.effect-2 span i {padding: 0;}
}

/* effect-3 */

.effect-3 .line{
	background: #3498DB;
	width: 10%;
	height: 4px;
	position: absolute;
	top: 56px;
}

#tab-1:checked ~ .line {
	left: 0;
}

#tab-2:checked ~ .line {
	left: 20%;
}

#tab-3:checked ~ .line {
	left: 40%;
}

#tab-4:checked ~ .line {
	left: 60%;
}

#tab-5:checked ~ .line {
	left: 80%;
}



/* effect-4 */

.effect-4 span i{
	font-size: 18px;
	display: block;
	position: absolute;
	left: 50%;
	top: 0;
	opacity: 0;
	transform: translateX(-50%);
}

.effect-4 span span{
	position: relative;
	top: 10px;
}

.effect-4 > input:checked + span i,
.effect-4 > input:hover + span i {
	top: 20%;
	opacity: 1;
}

/* effect-5 */

.effect-5 > input:checked + span i,
.effect-5 > input:hover + span i {
	font-size: 25px;
}


</style>
<body>
<header id="header">      
        

               
        <div class="menu-bar">
            <ul>
                <li class="active"><a href='http://localhost/302/homee.php'><i class="fa fa-home"></i> Home</a></li>
                <li><a href='https://localhost/302/login_admin.php'><i class="fa fa-check" ></i> Logged In</a></li>
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
    <br>
    <br>
    <!-----------hhhhhhhhhhhhhhhhhhhhhhhhhhhhhh------------------->
	<div class="container">
		
		<div class="tabs effect-1">			
			<!-- tab-title -->
			<input type="radio" id="tab-1" name="tab-effect-3" checked="checked">
			<span>Employee Record</span>

			<input type="radio" id="tab-2" name="tab-effect-3">
			<span>Insert Employee Record</span>

			<input type="radio" id="tab-3" name="tab-effect-3">
			<span>Delete Employee Record</span>

			<input type="radio" id="tab-4" name="tab-effect-3">
			<span>Membership Record</span>

            <input type="radio" id="tab-5" name="tab-effect-3" >
			<span>Purchase Orders</span>
			
			

			<div class="line ease"></div>

			<!-- tab-content -->
			<div class="tab-content">
				
				<section id="tab-item-1">
                <h4>EMPLOYEE RECORDS</h4>
                 <?php require 'd_emp.php' 
                  ?>
				</section>
				<section id="tab-item-2">
					<h4>Insert Employee Record</h4>
                    <form action="final admin view.php" method="POST">                            
                                                                
                                <div class="form-group">
                                <h5>Enter Full Name</h5>
                                    <div class="row">
                                    
                                    <div class="col-xs-12"><input type="text" class="form-control" name="first_name" placeholder="Full Name" required="required" value="  "></div>
                                </div>        	
                                </div>
                                <div class="form-group">
                                    <h5>Enter Email Address</h5>
                                    <input type="email" class="form-control" name="email" placeholder="Email" required="required" value="  ">
                                </div>
                                 
                                <div class="form-group">
                                    <h5>Enter phone number</h5>
                                    <input type="tel" pattern="[0][1][0-9]{9}"class="form-control" name="phone_number" placeholder="phone number" required="required" value=" ">
                                </div>       
                                
                                <div class="form-group">
                                    
                                    <button type="submit" name="button1"  value="button1" class="btn btn-success btn-lg btn-block">Save</button>
                                </div>
                            </form>

                      <?php
                      if (isset($_POST['button1'])){
                         
                       $conn=oci_connect("dbms","dbms","localhost/XE");
                       
                       $f_name=$_POST["first_name"];        
                       $email=$_POST["email"];
                       $phone=$_POST["phone_number"];


                       if(!$conn)
                       {
                        echo "fail";
                       }
                       else
                       {
                        
///********************************date************************************************/
                        $da=date("d-M-y");
///********************************employee************************************************/                      
                        $sql="declare
                        begin
                        employee_proc('$f_name','$email','$phone','$da');
                        end;";
                        $compile=oci_parse($conn,$sql);
                        oci_execute($compile);

                       } }?>
				</section>
                <section id="tab-item-3">
                <h4>Enter Email Address</h4>

                <form action="final admin view.php" method="POST">                            
                                                                
                                                                
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="email" value="  " placeholder="Email" required="required">
                                                                </div>
                                                                  <div class="form-group">
                                                                    <button type="submit" name="button"  value="button" class="btn btn-success btn-lg btn-block">Delete</button>
                                                                </div>
                                                            </form>
                                
                                                      <?php
                                                      if (isset($_POST['button'])){
                                                         
                                                       $conn=oci_connect("dbms","dbms","localhost/XE");
                                   
                                                       $email=$_POST["email"];
                                                       
                                
                                
                                                       if(!$conn)
                                                       {
                                                        echo "fail";
                                                       }
                                                       else
                                                       {    
                                
                                                      
                                                        //$sql="insert into Duty_Employee values ('$f_name','$email','$phone')";
                                                       $sql="delete from Duty_Employee where email_id='".$email."'";
                                                      
                                                       //$sql="update membership set no_of_booking=".$b." where email_id='".$u."'"; 
                                                        $compile=oci_parse($conn,$sql);
                                                       
                                                        oci_execute($compile);
                                
                                                       } }?>
                </section>
				<section id="tab-item-4">
                <h4>MEMBERSHIP RECORDS</h4>
                <form action="final admin view.php" method="POST">
                <div class="topnav">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit" name="ss"><i class="fa fa-search"></i></button>
                <br> <br> 
                </div>
                </form>

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
   
if(isset($_POST["ss"])){
   $s=$_POST["search"];
   $query2= "SELECT * FROM membership  WHERE email_id='".$s."'";
   $result2 = oci_parse($connection, $query2);
   oci_execute($result2);
  
   
   print "<table class = \"table table-bordered  \">\n";
   print "    <th>" . 'Email id' . "</th>\n";
   print "    <th>" . 'First Name' . "</th>\n";
   print "    <th>" . 'Last Name' . "</th>\n";
   print "    <th>" . 'Status' . "</th>\n";
   print "    <th>" . 'Password' . "</th>\n";
   print "    <th>" . 'Phone Number' . "</th>\n";
   print "    <th>" . 'No of booking' . "</th>\n";
   
   while ($row = oci_fetch_array($result2, OCI_ASSOC + OCI_RETURN_NULLS)) {
       print "<tr>\n";
       
       foreach ($row as $item) {
           print "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
       }
       print "</tr>\n";
   }
   print "</table>\n";
} 

   print "<br><br><h3><center> <b>ALL MEMBERSHIP RECORDS </b></center></h3>\n";
   print "<table class = \"table table-bordered table-dark \">\n";
   print "    <th>" . 'Email id' . "</th>\n";
   print "    <th>" . 'First Name' . "</th>\n";
   print "    <th>" . 'Last Name' . "</th>\n";
   print "    <th>" . 'Status' . "</th>\n";
   print "    <th>" . 'Password' . "</th>\n";
   print "    <th>" . 'Phone Number' . "</th>\n";
   print "    <th>" . 'No of booking' . "</th>\n";
   
   while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) {
       print "<tr>\n";
       
       foreach ($row as $item) {
           print "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
       }
       print "</tr>\n";
   }
   print "</table>\n";

   
?> 
				</section>


                <section id="tab-item-5">
                <h4>Purchase Orders</h4>
                
                <?php
                $username = 'dbms';
                $password = 'dbms';
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

                
                    
                $query = "SELECT payment_id,m_email_id,system,purchase_date,name,type,price from payment";
                $result = oci_parse($connection, $query);
                oci_execute($result);
                
                echo "<table class='table table-bordered table-dark text-center'>";
                echo "<thead>";
                echo "    <th> Order ID</th>";
                echo "    <th> Email Address </th>";
                echo "    <th> Payment System</th>";
                echo "    <th>Purchase Date. </th>";
                echo "    <th>Orders</th>";
                echo " </thead>";
                echo " <tbody>";
                
                $pd=0;

                while ($row = oci_fetch_array($result, OCI_BOTH))
                {   
                    
                    if($pd!=$row[0])
                    {
                      $pd=$row[0];
                    echo "
                    <tr>
                    <td>$row[0]</td>
                    <td>$row[1]</td>
                    <td>$row[2]</td>
                    <td>$row[3]</td>
                    <td>
                   <table class='table table-bordered table-dark text-center'>
                   <thead class='text-center' >
                   <tr>
                        <th class='text-center' scope='col'> Item Name</th>
                       <th class='text-center' scope='col'> Type </th>
                        <th class='text-center' scope='col'> Price </th>
                      </tr>
                      </thead>
                       <tbody>
                    ";
                 
               $query1 = "SELECT payment_id,name,type,price from payment";
                $result1 = oci_parse($connection, $query1);
                oci_execute($result1);
               
                while ($row1 = oci_fetch_array($result1, OCI_BOTH))
                {

                    
                    if($row1[0]==$row[0])
                    {

                    echo "
                    <tr>
                    <td>$row1[1]</td>
                    <td>$row1[2]</td>
                    <td>$row1[3]</td>
                    </tr>
                    ";
                    }
                }
                 echo "   
                    </tbody>
                    </table>
                    </td>
                    </tr>
                    ";
                   // $pd=$pd+1;
                    
                }
            }
                echo "</tbody>";
                echo "</table>";
                   

                          ?>
                </section>

                

			</div>
		</div>
        <form action="final admin view.php" method="POST">
        <button type="submit" name="logout"class="btn btn-danger">Logout</button>		
        <?php
        if(isset($_POST['logout'])){
            //$_SESSION['mevalid'] = false;

            $_SESSION['mevalid']=false;
            echo"<script> 
            
            alert('Logged out');
            window.location.href='login_admin.php';
           </script>";
            
          }
          ?>
        </form>	

	
	<footer class="footer">
		<div class="container">
			<div class="copyright">
            
           
		
			</div>
		</div>
	</footer>
</body>
</html>