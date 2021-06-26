<?php

$conn=oci_connect("dbms","dbms","localhost/XE");

$email=$_GET['email'];
$f_name=$_GET['firstname'];
$l_name=$_GET['lastname'];
$phone=$_GET['phone'];
$c_pass=$_GET['pass'];


 $sql121="
 declare
 begin
 registration_proc('$email','$f_name','$l_name','customer','$c_pass','$phone','0');
 end;";


  $compile=oci_parse($conn,$sql121);
  oci_execute($compile);
  echo "<script>alert('Registration Completed');
                           window.location.href='registration.php';
                           </script>";
                           
  
  $url = 'http://localhost/302/registration.php';
  echo '<script>window.location="'.$url.'"</script>';



?>