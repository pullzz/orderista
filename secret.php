
<?php
include("db_conn.php"); 
session_start();
$product_id=$_SESSION["prod_id"];  
?> 

<!DOCTYPE html>  
<html> 
<head> 
<meta name = "viewpoint" content="width= device-width, initial-scale = 1"> 
<link rel ="stylesheet" href = "http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"> 
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src = "https://checkout.stripe.com/checkout.js" ></script>  
</head> 

<?php

$sql="select * from secret_ingredient where product_id=".$product_id;
$exeSQL=mysqli_query($conn,$sql) or die (mysqli_error());  
while ($arrayp=mysqli_fetch_array($exeSQL)){  
    $secret= $arrayp['secret'];
    $points = $arrayp['points'];
}     

?>
    <body>  
    <div data-role="page">  
        <div data-role="header" data-theme="b"> 
        <h1>Guess the Secret Ingredient</h1> 
        </div> 
        <div data-role="content">   
        <form method="POST" action="secret_process.php"> 
        <div class="ui-field-contain">
        
        <label for="ingredient">Whats the secret?</label>
        <input type="text" name="ingredient"  placeholder="Secret...." >   
        </div> 
        <button class="ui-shadow ui-btn ui-corner-all" type="submit" id="submit-2" data-theme="b" >Find out if your right</button>
        </form>
        </div> 
        <div data-role="footer" data-theme="b"> 
        <h1>Orderista by BruteForce</h1>
        </div>
    </div>

</body> 
</html> 

