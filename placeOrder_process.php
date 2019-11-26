<!DOCTYPE html>  
<html> 
<head> 
<meta name = "viewpoint" content="width= device-width, initial-scale = 1"> 
<link rel ="stylesheet" href = "http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"> 
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>  
</head> 
<body>

<div data-role="page"> 
        <div data-role="header"> 
            <h1>Success Message</h1>
        </div> 

<div data-role="content">

<?php


$quantity=$_GET['quantity']; 
$address=$_GET['address']; 
$payment=$_GET['rb'];  


    echo ("<h3>You have Ordered Pizza </h3>   Quantity :  ".$quantity." <br>Address : ".$address." <br>Payment method :".$payment)


?> 
</div> 
<div data-role="footer"> 
    <h3>This is the footer</h3>
</div>

</body> 
</html> 