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

<?php 
include("db_conn.php"); 
session_start();
?> 


<

        <div data-role="page" > 
                <div data-role="header"> 
                    <h1>Success Payment of Your Order
                    

                  </h1>
                </div>  

                <div data-role="content">   
                <ol data-role="listview"> 
                <li data-role="list-divider">Order Details</li>
                <li>Order no : </li> 
                <li>Pizza Name : </li>
                <li>Quantity : 
                </ol> 
</div>  
<div data-role="footer"> 
</div> 
</div> 
</body> 
</html> 