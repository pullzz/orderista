<?php 
include("db_conn.php");
echo (' 
<!DOCTYPE html>  
<html> 
<head> 
<meta name = "viewpoint" content="width= device-width, initial-scale = 1"> 
<link rel ="stylesheet" href = "http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"> 
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>  
</head>');

$sql='select * from product'; 
$exeSQL=mysqli_query($conn,$sql) or die (mysqli_error()); 

echo ('<body>'); 
echo ('<div data-role="page">');
echo ('<div data-role="header" data-theme="b"> 
        <h1>Menu</h1>
        </div> 
        <div class="ui-content">
    
    <ul data-role="listview" data-inset="true">
        ');

while ($arrayp=mysqli_fetch_array($exeSQL)){  
    $product_id=$arrayp['product_id'];
    $product_name=$arrayp['product_name'];
    $image_name=$arrayp['product_img'];
    $product_calories=$arrayp['product_calories'];
    $product_price=$arrayp['product_price'];

    echo ('   
     
        <li><a href="product.php?prod_id='.$product_id.'"><img src="images/'.$image_name.'" class="ui-li-thumb">'.$product_name.'</a></li>               
    '); 
} 
echo ('</ul>
</div>');
echo ('
</div>
');
echo ('</body>');
echo ('</html>');
// <li data-role="list-divider"></li>


?> 