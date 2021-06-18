<?php

session_start();
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

span.price {
  float: right;
  color: grey;
}
    </style>
  </head>
  <body>
    <div class="container">
    <?php
         
         $PRO="PROFILE";
         $NAME="Name :";
         $MOB="Mobile number :";
         
         print "<table class = \"table table-bordered table-dark \">\n";
         print "<tr>\n";
         print "    <td><span>" . $PRO . "</span></td>\n";
         print "<tr>\n";
         print "    <td>" . $NAME . "</td>\n";
         print "<tr>\n";
         print "    <td>" . $f=$_SESSION['myFirstName'].  $l=$_SESSION['myLastName']. "</td>\n";
         
         
         print "<tr>\n";
         print "    <td>" . $MOB . "</td>\n";
         print "<tr>\n";
         print "    <td>" . $p=$_SESSION['myPhone'] . "</td>\n";
         print "<tr>\n";
         
         print "</table>\n";
         ?>
      <div class="row"> 
          <div class="col-md-6">
          <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary py-2 px-4">Proceed to make the purchase</button> 
          </div>
          <div class="col-md-6">
          <a href='http://localhost/302/myCart.php'><button type="button"  class="btn btn-primary py-2 px-4">LOGOUT</button></a>
          
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
  </body>
</html>
