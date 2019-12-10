<?php
include("db_conn.php"); 
session_start(); 
$text=''; 
$product_id=$_SESSION["prod_id"];  
$answer=$_POST['ingredient'];
$sql="select * from secret_ingredient where product_id=".$product_id;
$exeSQL=mysqli_query($conn,$sql) or die (mysqli_error());  
while ($arrayp=mysqli_fetch_array($exeSQL)){  
    $secret= $arrayp['secret'];
    $points = $arrayp['points']; 
  

}  

 if ($answer == $secret) {
    $text='You guessed right chef!!';
} 
else {
    $text='Next Time OKay ? ';
}
?>





<!DOCTYPE html>  
<html> 
<head> 
<meta name = "viewpoint" content="width= device-width, initial-scale = 1">
<link rel="stylesheet" href="themes/orderista_green.min.css" />
<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" /> 
<link rel ="stylesheet" href = "http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"> 
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head> 
<body>  
    <div data-role="page">  
        <div data-role="header"> 
        <h1>Guess the Secret Ingredient</h1> 
        </div> 
        <div data-role="content">   
        <h1><?php echo ($text) ; 
        ?>
        </h1>
        </div> 
        <div data-role="footer" > 
        <h1>Orderista by BruteForce</h1>
        </div>
    </div>

</body> 
</html> 


  

