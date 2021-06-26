<?php
session_start(); 
$conn=oci_connect("dbms","dbms","localhost/XE");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['add_to_cart']))
    {   
        
        if(isset($_SESSION['cart']))
        {   

            $myitems=array_column($_SESSION['cart'],'Item_Name');
            if(in_array($_POST['Item_Name'],$myitems))
            {
                
                 if($_POST['Type']=='Food')
                {
                    echo "<script>alert('Item Already Added');
                         window.location.href='portfolio.html';
                         </script>";
                }
                else if($_POST['Type']=='Merchandise Product')
                {
                    echo "<script>alert('Item Already Added');
                         window.location.href='merch.php';
                         </script>";
                }
                else if($_POST['Type']=='Ticket')
                {
                    echo "<script>alert('Item Already Added');
                         window.location.href='movies2D.php';
                         </script>";
                }
            }
            else
            {
                $flagg=0;
                if($_POST['Type']=='Food')
                {
                    $fname=$_POST['Item_Name'];
                    $query = "SELECT available from food where food_name='".$fname."'";
                    $stid = oci_parse($conn, $query);
                    oci_execute($stid);
                   
                    while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC))
                    {
                       
                    //$row = oci_fetch_array($query,OCI_BOTH);
                    $fvar=$row["AVAILABLE"];
                    if($fvar==0)
                    {
                        $flagg=1;
                        echo "<script>alert('Sorry out of Stock!');
                           window.location.href='portfolio.php';
                           </script>";
                          
                             
                    }
                    }
                }
                else if($_POST['Type']=='Merchandise Product')
                {
                    $fname=$_POST['Item_Name'];
                    $query = "SELECT available from merchandise where title='".$fname."'";
                    $stid = oci_parse($conn, $query);
                    oci_execute($stid);
                    while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC))
                    {
                   // $row = oci_fetch_array($query,OCI_BOTH);
                    $fvar=$row["AVAILABLE"];
                    if($fvar==0)
                    {
                        $flagg=1;
                        echo "<script>alert('Sorry out of Stock!');
                           window.location.href='merch.php';
                           </script>";  
                    }
                    }
                }
                else if($_POST['Type']=='Ticket')
                {
                    $fname=$_POST['Item_Name'];
                    
                    //$query = "select availability from showtime s,movie_info m where s.showtime_id=m.movie_id and m.movie_name='".$fname."'";
                   // $query = "select availability from showtime s,movie_info m where s.showtime_id=m.movie_id and m.movie_name='The Box'";
                   $query = "select availability from showtime s inner join movie_info m on  s.movie_id=m.movie_id  where  m.movie_name='".$fname."'";
                    $stid = oci_parse($conn, $query);
                    
                    oci_execute($stid);
                    echo "ticket";
                    //$row = oci_fetch_array($query,OCI_RETURN_NULLS+OCI_ASSOC);
                    while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC))
                    {
                      
                     
                    $fvar=$row["AVAILABILITY"];
                    echo $fvar;
                    if($fvar==0)
                    {
                        $flagg=1;
                      
                        echo "<script>alert('Sorry out of Stock!');
                           window.location.href='movies2D.php';
                           </script>";  
                    }
                    }
                }
               
                

             if($flagg==0) 
             {

            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Type'=>$_POST['Type'],'Quantity'=>1);
            if($_SESSION['cart'][$count]['Type']=='Ticket')
            {
                echo "<script>alert('Item Added');
                     window.location.href='movies3D.php';
                     </script>";

            }
            else if($_SESSION['cart'][$count]['Type']=='Food')
            {
                echo "<script>alert('Item Added');
                     window.location.href='portfolio.php';
                     </script>";
            }
            else if($_SESSION['cart'][$count]['Type']=='Merchandise Product')
            {
                echo "<script>alert('Item Added');
                     window.location.href='merch.php';
                     </script>";
            }
        }
        
         }
    }
    

                
    

        else
        {
            if($_POST['Type']=='Food')
            {
                $flagg=0;
                $fname=$_POST['Item_Name'];
                $query = "SELECT available from food where food_name='".$fname."'";
	            $stid = oci_parse($conn, $query);
	            oci_execute($stid);
                //$row = oci_fetch_array($query,OCI_BOTH);
                while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)){
                $fvar=$row["AVAILABLE"];
                if($fvar==0)
                {
                    $flagg=1;
                    echo "<script>alert('Sorry out of Stock!');
                       window.location.href='portfolio.php';
                       </script>";  
                }
            }
                if($flagg==0)
                {

                 $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Type'=>$_POST['Type'],'Quantity'=>1);
                 echo "<script>alert('Item Added');
                       window.location.href='portfolio.php';
                       </script>";
                }  
            
           }
           else if($_POST['Type']=='Merchandise Product')
            {
                $flagg=0;
                $fname=$_POST['Item_Name'];
                $query = "SELECT available from merchandise where title='".$fname."'";
	            $stid = oci_parse($conn, $query);
	            oci_execute($stid);
                //$row = oci_fetch_array($query,OCI_BOTH);
                while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)){
                $fvar=$row["AVAILABLE"];
                if($fvar==0)
                {
                    $flagg=1;
                    echo "<script>alert('Sorry out of Stock!');
                       window.location.href='merch.php';
                       </script>";  
                }
                }
               if($flagg==0)
                {

                 $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Type'=>$_POST['Type'],'Quantity'=>1);
                 echo "<script>alert('Item Added');
                       window.location.href='merch.php';
                       </script>";
                }  
            }
            
           
           else if($_POST['Type']=='Ticket')
           {
               $flagg=0;
               $fname=$_POST['Item_Name'];
               
               $query = "select availability from showtime s,movie_info m where s.showtime_id=m.movie_id and m.movie_name='".$fname."'";
               $stid = oci_parse($conn, $query);
               oci_execute($stid);
              // $row = oci_fetch_array($query,OCI_BOTH);
              while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)){
               $fvar=$row["AVAILABILITY"];
               if($fvar==0)
               {
                $flagg=1;
                  
                   echo "<script>alert('Sorry out of Stock!');
                      window.location.href='movies2D.php';
                      </script>";  
               }
            }
              if($flagg==0)
               {

                $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Type'=>$_POST['Type'],'Quantity'=>1);
                echo "<script>alert('Item Added');
                      window.location.href='movies2D.php';
                      </script>";
               }  
           }
          

        }

        
    }
}
  
    
    if(isset($_POST['Remove_Item']))
    {
         foreach($_SESSION['cart'] as $key => $value)
      {
            if($value['Item_Name']==$_POST['Item_Name'])
            {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo"<script> 
                alert('Item Removed');
                window.location.href='myCart.php';
               </script>";
           }
        }
     }
     if(isset($_POST['Mod_Quantity']))
     {
         $ticketsQuantity=0;
        foreach($_SESSION['cart'] as $key => $value)
        {
              if($value['Item_Name']==$_POST['Item_Name'])
              {
                  $_SESSION['cart'][$key]['Quantity']=$_POST['Mod_Quantity'];

                  echo"<script> 
                  window.location.href='myCart.php';
                 </script>";
             }
          }
     }

    

?>