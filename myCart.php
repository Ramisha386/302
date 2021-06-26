<?php
 session_start(); 
 
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

 $flag=false;
 for ($i=0;$i<count($_SESSION['cart']);$i++){
     if($_SESSION['cart'][$i]['Type']=='Ticket'){
         $flag=true;
     }
 }
 
 $grand_total=0;
 $u=$_POST['username'];
 $pas=$_POST['password'];
 $flag2=false;
 
  $_SESSION['mevalid'] = false;

 while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC))
  {  
      
    if(($row["EMAIL_ID"]==$u)&&($row["PASSWORD"]==$pas)&&($row["STATUS"]=='customer')&& ($flag==true))
      {
       
        $flag2=true;
        $f=$row["FIRST_NAME"];
        $l=$row["LAST_NAME"];
        $p=$row["MOBILE_NO"];
        $b=$row["NO_OF_BOOKING"];
        $_SESSION['mevalid'] = true;
        $_SESSION['myid'] = $u;
        $_SESSION['myFirstName'] = $f;
        $_SESSION['myLastName'] = $l;
        $_SESSION['myPhone'] = $p;
        $_SESSION['booking'] = $b;
        
        //////////////////////////////////////////////////
        if($flag2==true){
           
          
          $query2="INSERT INTO PAYMENT (payment_ID,system,name,price,type,purchase_date,m_email_id,d_email_id)values(:payment_ID_bv,:system_bv,:name_bv,:price_bv,:type_bv,:purchase_date_bv,:m_email_id_bv,:d_email_id_bv)";
         
          $stmt=oci_parse($conn,$query2);

          ///********************************Sequence************************************************/
          $sql222="SELECT  payment_id_gen.NEXTVAL
                   FROM DUAL";
                   $stmt22=oci_parse($conn,$sql222);
                   oci_execute($stmt22);
                   $row = oci_fetch_array($stmt22, OCI_RETURN_NULLS+OCI_ASSOC);
                   $payment_id=$row["NEXTVAL"];
               
                  
                  $_SESSION['myP_ID']=$payment_id;
                  echo $payment_id;
          if($stmt){
              
              
            
              foreach($_SESSION['cart'] as $key => $values){
                  
                   $name=$values['Item_Name'];
                    oci_bind_by_name($stmt, ":name_bv", $name);
                  
                  
                  $Price=$values['Price'];
                  oci_bind_by_name($stmt, ":price_bv", $Price);
                  
                  $Quantity=$values['Quantity'];
                  

                  $_SESSION['myPrice']=$Price*$Quantity;
                  $grand_total=$grand_total+$_SESSION['myPrice'];
                  
                  
                  $type=$values['Type'];
                  oci_bind_by_name($stmt, ":type_bv", $type);
                  //$_SESSION['myType']=$type;

                  
                  $system='cash on delivery';
                  oci_bind_by_name($stmt, ":system_bv", $system);
                  $_SESSION['mySystem']=$system;

                  
                  //////date choose//////
                  $purchase_date=date("d-M-y");
                  oci_bind_by_name($stmt, ":purchase_date_bv", $purchase_date);
                  $_SESSION['myPurDate']=$system;
                   
                
                  oci_bind_by_name($stmt, ":payment_id_bv", $payment_id);
            
                  $query3="select d_email_id from duty_employee d , payment p where d.assign_date = '".$purchase_date."'";
       
                  $stmt2=oci_parse($conn,$query3);
                  oci_execute($stmt2);
                  $row = oci_fetch_array($stmt2, OCI_RETURN_NULLS+OCI_ASSOC);
                  $something=$row["D_EMAIL_ID"];
                  if($stmt2){
                    oci_bind_by_name($stmt, ":d_email_id_bv", $something);
                  }
                  oci_bind_by_name($stmt, ":m_email_id_bv", $u);
                  oci_execute($stmt);}
                  
                }
                  
                  /*for ($i=0;$i<count($name[$i]);$i++){
                    $_SESSION['myItem_Name']=$name[$i];
                    }*/
                  

                  $_SESSION['gt']=$grand_total;
                  //$m_email_id=$u;
                  
                  

              
          
          $sql="insert into membership values ('$email','$f_name','$l_name','customer','$c_pass','$phone','2')";
         
        }
        ///////////////////////////////////////////////
        
       header("Location:payment.php");

      exit();
    }
      else if ($flag==false && ($row["EMAIL_ID"]==$u)&&($row["PASSWORD"]==$pas)&&($row["STATUS"]=='customer') )
     
       { echo "<script>alert('Book a ticket first!');
                           window.location.href='movies3D.php';
                           </script>";}
       }
      echo "<script>alert('Wrong password!');
            window.location.href='movies2D.php';
            </script>";
    
  }
  

  
  
  



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Lights Camera Action</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://www.youtube.com/redirect?event=video_description&redir_token=QUFFLUhqbnZ0dUhHSWtwNmhCOWwtb0luQ0ltSWVBdTdvd3xBQ3Jtc0tucDNNNENoV2tuLWV5V0lJV21Zcm5EdEpFQmxMb3ZiZjNva2RjczA3R3VCVHp0dTd4OGpuZ3FvOWJmb1JwUEQ4dGp3dnptVUFFMXg0d2VPWnk4SGo5d3M5LVBzTGVIYW1hUGJlUmJkZlZKcGZCM1ItQQ&q=https%3A%2F%2Fstackpath.bootstrapcdn.com%2Ffont-awesome%2F4.7.0%2Fcss%2Ffont-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
   <link rel="shortcut icon" type="imagge/png" href="images/favicon/camera.png">
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
        .ownn
        {
            
            
          
            font-size:small;
            color: whitesmoke;
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


        form text{
            text-align: center;
        }
     

   
    </style>
</head>
<body>
    <!--/head-->

<body>
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
    <body>
      
        <div class="container">
        <div class="row">
        <div class="col-lg-12 text-center border rounded bg-dark my-5">
        <h1>My Cart</h1>

        </div>
        <div class="col-lg-9">
        <table class="table table-dark">
  <thead class="text-center">
    <tr class="text-center">
      <th scope="col">Serial No</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Type</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
  <?php
    
   if(isset($_SESSION['cart']))
  {

    
      $sr=1;

  foreach($_SESSION['cart'] as $key => $value)
  {
      
      $sr=$key+1;
      
      echo "
      <tr>
      <td>$sr</td>
      <td>$value[Item_Name]</td>
      <td>$value[Type]</td>
      <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'> </td>
      <td>
      <form action='manage_cart.php' method='POST'>";
      if($value['Type']=='Food'){
        
        $q1="select available from food where food_name='".$value['Item_Name']."'";
        
        $stmt33=oci_parse($conn,$q1);
        
        oci_execute($stmt33);
        $row = oci_fetch_array($stmt33,OCI_BOTH);
        
                  $something33=$row[0];
                  

        if ($something33<0){
            echo "<input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='0' max='0' style='color:black;'>"; 
         
        }            
        else{
            echo "<input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='$something33' style='color:black;'>";
               }
        }
     
      else if($value['Type']=='Merchandise Product')
      {
        $q1="select available from merchandise where title='".$value['Item_Name']."'";
        
        $stmt33=oci_parse($conn,$q1);
        
        oci_execute($stmt33);
        $row = oci_fetch_array($stmt33,OCI_BOTH);
        
       $something33=$row[0];
       if ($something33<0){
           echo "<input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='1' style='color:black;'>"; 
                 
       }            
      else{
            echo "<input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='$something33' style='color:black;'>";
                 }
         }
      else if($value['Type']=='Ticket')
      {
        $q1="select availability from showtime s,movie_info m where s.showtime_id=m.movie_id and m.movie_name='".$value['Item_Name']."'";
        
        $stmt33=oci_parse($conn,$q1);
        
        oci_execute($stmt33);
        $row = oci_fetch_array($stmt33,OCI_BOTH);
        
       $something33=$row[0];
       if ($something33<0){
           echo "<input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='1' style='color:black;'>"; 
                 
       }            
      else{
            echo "<input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='$something33' style='color:black;'>";
                 }
         }
      
     
     
     
     
     
      echo "
      <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
      </from>
      </td>
      <td class='itotal'></td>
      <td>
      <form action='manage_cart.php' method='POST'>
      <button name='Remove_Item' class='btn btn-outline-danger btn-sm'>Remove </button> </td>
      <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
      </form> 
      </tr>
      ";
      } 
  }
  
  ?>
   
  </tbody>
</table>
        </div>
        <div class="col-lg-3">
        <div class="border bg-dark rounded p-4">
        <h4>Grand Total:</h4>
        <input type="hidden" id="btnClickedValue" name="btnClickedValue" value="gtotal" />
        <h5 class="text-right" id="gtotal"></h5>
        </form>
        <br>
        <?php
          if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
          {


        ?>
        <form action="myCart.php" method="POST">
        <div class="form-group">
        <h4 >LOGIN to make the purchase</h4><br>
        <h4 >Dont have an account?</h4>
        <h4><a href='http://localhost/302/registration.php'>Register now.</a></h4>
        <br>
        <input type="email" class="form-control" name="username" placeholder="Email" required="required" values="username">
        </div>
        <div class="form-group">
        <input type="text" class="form-control" name="password" placeholder="Password" required="required" values="password">
        </div>
        <button class="btn btn-danger btn-block" name="submit" type="submit">Log in</button>
        </form>
        <?php
          }
          ?>
        </div>
        </div>



        

        <footer id="footer" >
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="images/home/under.png" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="testimonial bottom">
                        <h2>Quotes</h2>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="images/kung-fu-panda.jpg" alt="" ></a>
                            </div>
                            <div class="media-body">
                                <div class="ownn"><blockquote>Your story may not have such a happy beginning but that does not make you who you are, it is the rest of it- who you choose to be</blockquote></div>
                                <h3><a href="#">- Master Oogway</a></h3>
                            </div>
                         </div>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="images/pursuit_of_happiness.jpg" alt=""></a>
                            </div>
                            <div class="media-body">
                            <div class="ownn">   <blockquote>You got a dream... You gotta protect it. People can't do somethin' themselves, they wanna tell you you can't do it. If you want somethin', go get it. Period.</blockquote></div>
                                <h3><a href="">- Christopher Gardner</a></h3>
                            </div>
                        </div>   
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <div class="ownn">
                        <address>
                        E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br> 
                        Phone: +1 (123) 456 7890 <br> 
                        Fax: +1 (123) 456 7891 <br> 
                        </address>
                        </div>
                        <h2>Address</h2>
                        <div class="ownn">
                        <address>
                        Army Officer's Club,Nirjhor Residential area, <br> 
                        Dhaka Cantonment, <br> 
                        Dhaka-1216, <br> 
                        Bangladesh <br> 
                        </address>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Our Location</h2>
                        <div class="mapouter"><div class="gmap_canvas"><iframe width="413" height="372" id="gmap_canvas" src="https://maps.google.com/maps?q=Officer's%20Club,Nirjhar,Dhaka%20Cantonment%20,Dhaka,Bangladesh&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">fmovies se</a><br><style>.mapouter{position:relative;text-align:right;height:372px;width:413px;}</style><a href="https://www.embedgooglemap.net">google map embed generator</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:372px;width:413px;}</style></div></div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Your Company 2014. All Rights Reserved.</p>
                        <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<script>
    var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');
    
    function subTotal()
    {
        gt=0;
        for(i=0;i<iprice.length;i++)
        {
            itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
            gt=gt+(iprice[i].value)*(iquantity[i].value);
        }
        gtotal.innerText=gt;
    }
    subTotal();

    
</script>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
    integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
    crossorigin="anonymous"></script>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/lightbox.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        </body>
        </html>
        
