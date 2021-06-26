<?php
 session_start(); 

  $conn=oci_connect("dbms","dbms","localhost/XE");
	$query = 'SELECT *from membership';
	$stid = oci_parse($conn, $query);
	oci_execute($stid);

  $query22 = 'SELECT *from payment';
	$stid22 = oci_parse($conn, $query22);
	oci_execute($stid22);

 

if(isset($_POST['confirm_mob']))
{
  
$u=$_SESSION['myid'];
$id=$_SESSION['myP_ID'];

 while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC))
  {  
    if($row["EMAIL_ID"]==$u){
      ///********************************no of booking ************************************************/
        $b=$row["NO_OF_BOOKING"];
        $b=$b+1;
        $u=$_SESSION['myid'];
                                          
        $sql="update membership set no_of_booking=".$b." where email_id='".$u."'";
        $compile=oci_parse($conn,$sql);
        oci_execute($compile);
        echo "<script>alert('Payment Record Added');
            window.location.href='payment.php';
    </script>";}
  }
  while ($row = oci_fetch_array($stid22, OCI_RETURN_NULLS+OCI_ASSOC))
  {  
    if($row["PAYMENT_ID"]==$id){
        
        $sql2="update payment set system='Mobile Banking' where payment_ID='".$id."'";
        $compile=oci_parse($conn,$sql2);
        oci_execute($compile);
       }
  }
}


else if(isset($_POST['confirm_int']))
{
  
$u=$_SESSION['myid'];
$id=$_SESSION['myP_ID'];

 while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC))
  {  
    if($row["EMAIL_ID"]==$u){
        $b=$row["NO_OF_BOOKING"];
        $b=$b+1;
        $u=$_SESSION['myid'];
        
        $sql="update membership set no_of_booking=".$b." where email_id='".$u."'";
        $compile=oci_parse($conn,$sql);
        oci_execute($compile);
        echo "<script>alert('Payment Record Added');
            window.location.href='payment.php';
    </script>";}
  }
  while ($row = oci_fetch_array($stid22, OCI_RETURN_NULLS+OCI_ASSOC))
  {  
    if($row["PAYMENT_ID"]==$id){
        
        $sql2="update payment set system='Internet Banking' where payment_ID='".$id."'";
        $compile=oci_parse($conn,$sql2);
        oci_execute($compile);
       }
  }
}
if(isset($_POST['confirm_card']))
{
  
$u=$_SESSION['myid'];
$id=$_SESSION['myP_ID'];

 while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC))
  {  
    if($row["EMAIL_ID"]==$u){
        $b=$row["NO_OF_BOOKING"];
        $b=$b+1;
        $u=$_SESSION['myid'];
      
        $sql="update membership set no_of_booking=".$b." where email_id='".$u."'";
        $compile=oci_parse($conn,$sql);
        oci_execute($compile);
        echo "<script>alert('Payment Record Added');
            window.location.href='payment.php';
    </script>";}
  }
  while ($row = oci_fetch_array($stid22, OCI_RETURN_NULLS+OCI_ASSOC))
  {  
    if($row["PAYMENT_ID"]==$id){
        
        $sql2="update payment set system='Via Card' where payment_ID='".$id."'";
        $compile=oci_parse($conn,$sql2);
        oci_execute($compile);
       }
  }
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='Cache-Control' content='no-cache, no-store, must-revalidate' />
    <meta http-equiv='Pragma' content='no-cache' />
    <meta http-equiv='Expires' content='0' />
    <meta charset='UTF-8' />
    <meta name='google' content='notranslate'>
    <meta http-equiv='Content-Language' content='en' />
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <title>bootstrap-tab-modal</title>

    <script src='https://code.jquery.com/jquery-2.2.4.min.js' integrity='sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44='   crossorigin='anonymous'></script>

    <script src='https://code.jquery.com/ui/1.12.0-rc.2/jquery-ui.min.js' integrity='sha256-55Jz3pBCF8z9jBO1qQ7cIf0L+neuPTD1u7Ytzrp2dqo='   crossorigin='anonymous'></script>

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' integrity='sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7' crossorigin='anonymous'>

    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js' integrity='sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS' crossorigin='anonymous'></script>

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <script src='https://rawgit.com/aino/throbber.js/master/throbber.js' type='text/javascript' charset='utf-8'></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src='../bootstrap-tab-modal.js' type='text/javascript' charset='utf-8'></script>
    <link rel='stylesheet' href='../bootstrap-tab-modal.css' type='text/css' media='screen' />

    <style>
     body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    
    background-repeat: no-repeat;
    
  font-size: 17px;
  padding: 8px;
  background-image: url("images/payment.jpg");
            background-size: cover;
            background-position: center;
            font-family: 'Oswald', sans-serif;
           
            background-attachment: fixed;
            background-size: 100% 100%;
}

.container {
    margin: 200px auto
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
p{
  text-align:center;
}
button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
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
  padding: 5px 20px 15px 20px;
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
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
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
h6{
  text-align:center;
}
span.price {
  float: right;
  color: grey;
}
    </style>
  </head>
  <body>
    <div class="container">
    <?php
         $Adsgt="After Discount";
         $PRO="PROFILE";
         $NAME="Name :";
         $MOB="Mobile number :";
         $booking="Points:";
         $itemName="Item Name";
         $Price="Price";
         $Quantity="Quantity";
         $type="Type";
         $gt="Grand Total";
         $dis="Discount";
         $freepop="Free Popcorn";
         $yes="You have earned 2 free popcorns!!!";
         $no="Sorry! Better luck next time.";
         print "<table class = \"table table-bordered table-dark \">\n";
         print "<tr>\n";
         print "    <td><span>" . $PRO . "</span></td>\n";
         print "<tr>\n";
         print "    <td>" . $NAME . "</td>\n";
         print "    <td>" . $f=$_SESSION['myFirstName']." ". $l=$_SESSION['myLastName']. "</td>\n";
         print "</tr>\n";
         
         print "<tr>\n";
         print "    <td>" . $MOB . "</td>\n";
         print "    <td>" . $p=$_SESSION['myPhone'] . "</td>\n";
         print "</tr>\n";
         
         //points
         print "<tr>\n";
         print "    <td>" . $booking . "</td>\n";
         print "    <td>" . $b=$_SESSION['booking'] . "</td>\n";
         print "</tr>\n";

         print "<tr>\n";
         $flag=0;

         for ($i=0;$i<count($_SESSION['cart']);$i++){
         
          print "<tr>\n";
          print "    <td>" . $type . "</td>\n";
          print "    <td>" . $_SESSION['cart'][$i]['Type'] . "</td>\n";
          print "</tr>\n";


         print "    <td>" . $itemName . "</td>\n";
         print "    <td>" . $_SESSION['cart'][$i]['Item_Name'] . "</td>\n";
         print "</tr>\n";

         print "<tr>\n";
         print "    <td>" . $Price . "</td>\n";
         print "    <td>" . $_SESSION['cart'][$i]['Price'] . "</td>\n";
         print "</tr>\n";

         print "<tr>\n";
         
         print "    <td>" . $Quantity . "</td>\n";
         print "    <td>" . $_SESSION['cart'][$i]['Quantity'] . "</td>\n";
         print "</tr>\n";
         
        
         if(isset($_POST['confirm_mob']) || isset($_POST['confirm_int']) || isset($_POST['confirm_card'])   ){
          
         if ($_SESSION['cart'][$i]['Type']=='Merchandise Product'){
         $q5="select available from merchandise where title='".$_SESSION['cart'][$i]['Item_Name']."'";
      
         $stmt5=oci_parse($conn,$q5);
         oci_execute($stmt5);

         $row = oci_fetch_array($stmt5, OCI_RETURN_NULLS+OCI_ASSOC);
         ///********************************quantity availbility************************************************/
         $somethingMERCH=$row["AVAILABLE"];
         

         $newM=$_SESSION['cart'][$i]['Quantity'];
         

         $newW=$somethingMERCH-$newM;
        


         $query51="update merchandise set available =".$newW." where title= '".$_SESSION['cart'][$i]['Item_Name']."'";
         
         $stmt51=oci_parse($conn,$query51);
         oci_execute($stmt51);
         }

         if ($_SESSION['cart'][$i]['Type']=='Food'){
          $q="select available from food where food_name='".$_SESSION['cart'][$i]['Item_Name']."'";
          $stmt2=oci_parse($conn,$q);
          oci_execute($stmt2);
 
          $row = oci_fetch_array($stmt2, OCI_RETURN_NULLS+OCI_ASSOC);
          $somethingFOOD=$row["AVAILABLE"];
          
 
          $newQ=$_SESSION['cart'][$i]['Quantity'];
          
 
          $new=$somethingFOOD-$newQ;
          
 
 
          $query31="update food set available =".$new." where food_name= '".$_SESSION['cart'][$i]['Item_Name']."'";
         
          $stmt23=oci_parse($conn,$query31);
          oci_execute($stmt23);
          }
          
          if ($_SESSION['cart'][$i]['Type']=='Ticket'){
            $qTT = "select availability from showtime s,movie_info m where s.showtime_id=m.movie_id and m.movie_name='".$_SESSION['cart'][$i]['Item_Name']."'";
      
            $stmt2TT=oci_parse($conn,$qTT);
            oci_execute($stmt2TT);
   
            $row = oci_fetch_array($stmt2TT, OCI_RETURN_NULLS+OCI_ASSOC);
            $somethingTT=$row["AVAILABILITY"];
            
   
            $newQT=$_SESSION['cart'][$i]['Quantity'];
            
   
            $newT=$somethingTT-$newQT;
            
            
         
              $qTT12="update showtime s set availability=".$newT." where showtime_id=(select s.showtime_id from showtime s inner join  
              movie_info m on s.movie_id=m.movie_id
                   where movie_name='".$_SESSION['cart'][$i]['Item_Name']."')";
            $stmt2TT12=oci_parse($conn,$qTT12);
            oci_execute($stmt2TT12);
   
            
            }


         }
         if($_SESSION['cart'][$i]['Type']=='Ticket') {
                 $flag=$flag+$_SESSION['cart'][$i]['Quantity'];
         }
        }
          
///********************************Discount************************************************/
         $dis_var=(int)$b/5;
         $dv=ceil($dis_var);
         $adv=(int)$dv/100;
         $grt_total=$_SESSION['gt'] ;
         $Final_Aft_Dis=$grt_total*$adv;

         //discount
         print "<tr>\n";
         print "    <td>" . $dis . "</td>\n";
         print "    <td><b>" . $dv . "%</b></td>\n";
         print "<tr>\n";

         print "<tr>\n";
         print "    <td>" . $gt . "</td>\n";
         print "    <td><b>" . $_SESSION['gt'] . "</b></td>\n";
         print "<tr>\n";
         
         //after discount 
         print "<tr>\n";
         print "    <td>" . $Adsgt . "</td>\n";
         print "    <td><b>" . $grt_total-$Final_Aft_Dis . "</b></td>\n";
         print "<tr>\n";
        
         
         print "<tr>\n";
         print "    <td>" . $freepop . "</td>\n";
         if($flag>=3){
         print "    <td><b>" . $yes . "</b></td>\n";
         print "<tr>\n";}

         else{
          print "    <td><b>" . $no . "</b></td>\n";
          print "<tr>\n";}

         print "</table>\n";
         
        
	    
        ?>
      <div class="row"> 
      
          <div class="col-md-8">
          <button type="submit" data-toggle="modal" data-target="#myModal" name="proceed" class="btn btn-primary py-2 px-4">Proceed to make the purchase</button> 
          </div>
          <div class="col-md-4">
          <form action="payment.php" method="POST">
          <a href='http://localhost/302/myCart.php'><button type="submit" name="logout" class="btn btn-primary py-2 px-4">LOGOUT</button></a>
          <?php
          if(isset($_POST['logout'])){
            //$_SESSION['mevalid'] = false;

            unset($_SESSION['cart']);
            echo"<script> 
            alert('Logged out');
            window.location.href='myCart.php';
           </script>";
            
          }

          ?>


          </form>
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
                      <form method="POST">
                          <fieldset id="tab011">
                              <div class="bg-light">
                              
                                  <h3 class="text-center mb-4 mt-0 pt-4">Mobile Banking</h3>
                                  <p>Account no. 0173647189</p>
                                  <br>
                                  <ol class="pb-4">
                                      <a href='https://payment.bkash.com/redirect/tokenized/?paymentID=TR0011UR1624019924510&hash=qoTzSj4Xf(vh-E6Dl9qpUQ1Ic3SNWn-10mKsV(wQhkm8u*FZaQfS3VwFwXcGDNm7UhIVthFaeDcN_pdLGIJ9a2.l-lIYuu.!!naQ1624019924547&mode=0011&apiVersion=v1.2.0-beta'><img src="images/bkash.jpg" alt="" class="rounded" width="160"></a>
                                      <a href='https://nagad.com.bd/en/login/'><img src="images/nogod.png" alt="" class="rounded" width="160"></a>
                                      <a href='https://ibfcat1.dutchbanglabank.com/B001/ENULogin.jsp'><img src="images/rocket.png" alt="" class="rounded" width="160"></a>
                                      
                                  </ol>
                                  <div class="modal-footer d-flex flex-column justify-content-center border-0">
                                  <div class="modal-footer d-flex flex-column justify-content-center border-0">
                           <button type="submit" class="btn btn-primary" name="confirm_mob">Confirm checkout</button>
                              
                              </div>
                             
                          </fieldset>
                          </form>
                          <form method="POST">
                          <fieldset class="show" id="tab021">
                              <div class="bg-light">
                                  
                                  <h3 class="text-center mb-4 mt-0 pt-4">Internet Banking</h3><br>
                                  <p>Account no. 413794000</p>
                                  <ol class="pb-4">
                                    <a href='https://www.citytouch.com.bd/login#!'><img src="images/city touch.png" alt="" class="rounded" width="160"></a>
                                    <a href='https://abdirect.abbl.com/merchant/login#!'><img src="images/ab bank.png" alt="" class="rounded" width="160"></a>
                                    <a href='https://app.ipay.com.bd/login'><img src="images/ipay.png" alt="" class="rounded" width="160"></a>
                                    
                                </ol>
                              </div>
                              <div class="px-3">
                              <div class="modal-footer d-flex flex-column justify-content-center border-0">
                              <div class="modal-footer d-flex flex-column justify-content-center border-0">
                           
                           <button type="submit" class="btn btn-primary" name="confirm_int">Confirm checkout</button>
                         
                              </div>
                          </fieldset>
                          </form>
                          <fieldset id="tab031">
                              <div class="bg-dark">

                                  <div class="row">
                                    <div class="col-75">
                                      <div >
                                      <form method="POST">
                                            <div class="row">
                                            
                                            <div class="col-50">
                                              <h5><b>Account no. 1234-5678-9919-1287</b></h5>
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
                                         
                                          <input type="submit" value="Continue to checkout" class="btn" name="confirm_card">
                                          
                                        </form>
                                      </div>
                                    </div>
                                    
                                  </div>
               
                      </div>
                      <div class="line"></div>
                     
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
  </body>
</html>
