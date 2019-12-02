 <?php 
include("db_conn.php"); 
session_start();
$prod_id=$_GET['prod_id']; 
echo('
<!DOCTYPE html>  
<html> 
<head> 
<meta name = "viewpoint" content="width= device-width, initial-scale = 1"> 
<link rel ="stylesheet" href = "http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"> 
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>   
<script src = "https://checkout.stripe.com/checkout.js" ></script> 
</head>');

$sql='select product_id,product_name,product_calories,product_price from product where product_id='.$prod_id; 
$exeSQL=mysqli_query($conn,$sql) or die (mysqli_error()); 

while ($arrayp=mysqli_fetch_array($exeSQL)){  
    $product_id=$arrayp['product_id'];
    $_SESSION["prod_id"]=$product_id;
    $product_name=$arrayp['product_name'];
    $_SESSION["prod_name"]=$product_name;
    $product_calories=$arrayp['product_calories'];
    $product_price=$arrayp['product_price']; 
    $_SESSION["prod_price"]=$product_price;

} 
echo('
<body> 
 
    <div data-role="page" data-theme="b"> 
        <div data-role="header"> 
            <h1>Place Order</h1>
        </div> 
        
        <div data-role="content"> 
                <form method="POST"  action="cardPayment.php" > 
                        <div class="ui-field-contain">
                         
                                <label>'.$product_name.'</label>
                                <label>'.$product_calories.'</label>
                                <lable></lable>
                                <lable></lable>
                                
                                
                        
                                
                        </div> 

                    

                        <div class="ui-field-contain">
                                    <label>Price:</label>
                                    <label>'.$product_price.'</label>
                                <lable></lable>
                                <lable></lable>
                                 
                                </div>
                        <div class="ui-field-contain">
                                <label for="quantity">Quantity:</label>
                                <input type="text" name="quantity"  placeholder="Quantity" > 
                                
                            </div>                
                            
                        
            
                        <div class="ui-field-contain">
                        <label for="address">Your Address:</label>
                        <input type="text" name="address" placeholder="Your Address"/> 
                        <input type="hidden" name="prod_name" value="'.$product_name.'>" 
                        <input type="hidden" name="prod_price" value='.$product_price.'>
                        
                        </div> 
                    
                    <button class="ui-shadow ui-btn ui-corner-all" type="submit" id="submit-2" >Confirm Payment</button>
                    <div align="center" id="thankyouPayment"> 
                    </div> 
                </form>         
            
        </div>  

        

        <div data-role="footer"> 
                <h1>Footer</h1>
        </div>
    </div>
</body> 
</html>

') 

 

?>  



