<?php 
include("db_conn.php");
$prod_id=$_GET['prod_id'];
echo "<p>".$prod_id."</p>"; 
echo (' 
<!DOCTYPE html>  
<html> 
<head> 
<meta name = "viewpoint" content="width= device-width, initial-scale = 1"> 
<link rel ="stylesheet" href = "http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"> 
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>  
</head>'); 

echo ('<body'); 
echo ('<div data-role="page"> ');
echo ('<div data-role="header" data-theme="b"> 
        <h1>Product</h1>
        </div>
'); 


$sql='select * from product where product_id='.$prod_id.';'; 
$exeSQL=mysqli_query($conn,$sql) or die (mysqli_error());  
while ($arrayp=mysqli_fetch_array($exeSQL)){  
    $product_name=$arrayp['product_name'];
    $image_name=$arrayp['product_img'];
    $product_calories=$arrayp['product_calories'];
    $product_price=$arrayp['product_price'];
    $seller=$arrayp['seller_email'];
    
}  

echo (' 
    <div data-role="content" > 
    <form method="get" action="placeOrder.php?prod_id='.$prod_id.'"> 
        <div class="ui-field-contain"> 
        <label>'.$product_name.'</label>
        <label>'.$product_calories.'</label>
        <label>'.$product_price.'</label>
        </div> 
        <button class="ui-shadow ui-btn ui-corner-all" type="submit" id="submit-2">Order</button> 
        
        </form> 
        </div> 


    '); 



echo ('</div>');
echo ('</body>');
echo ('<html>');



?> 