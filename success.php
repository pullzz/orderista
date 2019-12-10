<?php 
include("db_conn.php"); 
session_start();
$order=0;
$prod_id=$_SESSION["prod_id"]; 
$prod_name=$_SESSION["prod_name"];
echo ('
<!DOCTYPE html>  
<html> 
<head> 
<meta name = "viewpoint" content="width= device-width, initial-scale = 1"> 
<link rel ="stylesheet" href = "http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"> 
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src = "https://checkout.stripe.com/checkout.js" ></script>  
</head> 

<body>  
            <div data-role="page" > 
                <div data-role="header" data-theme="b"> 
                    <h1>Success Payment of Your Order</h1>
                </div>   
            <div data-role="content">    
                <div class="row">
                <div class="col-sm-4">
                <img src="images/Light Brown Pizza Funny Cute Desktop Wallpaper.png" class="img-responsive" style="width:100%" alt="Image">
                </div>
            <br>
            </div> 
            <ul data-role="listview" data-inset="true"> 
                <li data-role="list-divider"><h2> Order Details <h2> </li>
                <li>Order no :'); 

               $sql = "SELECT * FROM orders"; 

               $exeSQL=mysqli_query($conn,$sql) or die (mysqli_error());
               
               while ($arrayp=mysqli_fetch_array($exeSQL)){  
                 $lastOrder=$arrayp['orderno']; 
               } ;  

               $order=$lastOrder+1; 
               $date = date('Y-m-d H:i:s');
               echo("".$order."");  

               $sql="insert into orders values (".$order.",'".$date."',".$prod_id.",'user1') "; 

               if (mysqli_query($conn, $sql)) {
                echo "";
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
              
                
                
                echo ('</li> 
                <li>Pizza Name : '.$prod_name.'</li>
                <li> Quantity : 1 </li> 
                <li> Address : Ramakrishna Road, IIT </li> 
               <li><a href="ar.html" class="ui-btn " data-transition="slide">See Your Pizza</a></li>
                </ul> 
                
</div> 

<div data-role="footer" data-id="foo1" data-position="fixed" data-theme="b">
<h1>Orderista by BruteForce</h1>
<div data-role="navbar">
<ul>
  <li><a href="menu.php">Menu</a></li>
  <li><a>Home</a></li>
  <li><a>Account</a></li>
</ul>
</div> 

</div> 
</body> 
</html>  '); 

?> 