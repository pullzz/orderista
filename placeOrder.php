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
 
    <div data-role="page" > 
        <div data-role="header"> 
            <h1>Place Order</h1>
        </div> 
        
        <div data-role="content"> 
        
                <form method="POST"  action="cardPayment.php" > 
                        <div class="ui-field-contain">                         
                                <label>'.$product_name.'</label>
                                <label>'.$product_calories.'</label>                              
                        </div>                    

                        <div class="ui-field-contain">
                                <label>Price:</label>
                                <label>'.$product_price.'</label>                               
                        </div>

                        <div data-role="fieldcontain" >
                                <label for="slider-2">Quantity:</label>
                                <input type="range" name="slider-2" id="slider-2" value="25" min="0" max="100"  />
                        </div> 

                        <div data-role="fieldcontain">
                            <fieldset data-role="controlgroup"  data-type="horizontal">
	                        <legend>Chesse:</legend>
     	                    <input type="radio" name="radio-choice" id="radio-choice-1" value="choice-1" checked="checked" />
     	                    <label for="radio-choice-1">Cheese</label>

     	                    <input type="radio" name="radio-choice" id="radio-choice-2" value="choice-2"  />
     	                    <label for="radio-choice-2">Extra Chesse</label>

     	                    <input type="radio" name="radio-choice" id="radio-choice-3" value="choice-3"  />
     	                    <label for="radio-choice-3">Double Cheese</label>

     	                    <input type="radio" name="radio-choice" id="radio-choice-4" value="choice-4"  />
     	                    <label for="radio-choice-4">No Cheese</label>
                            </fieldset>
                        </div> 
                        
            
                        <div class="ui-field-contain">
                            <label for="address">Your Address:</label>
                            <input type="text" name="address" placeholder="Your Address"/> 
                            <input type="hidden" name="prod_name" value="'.$product_name.'>" 
                            <input type="hidden" name="prod_price" value='.$product_price.'>                        
                        </div>

                    <a href="secret.php" class="ui-btn ui-corner-all" data-transition="slide">Guess the secret Ingredient</a>
                    
                    <button class="ui-shadow ui-btn ui-corner-all" type="submit" id="submit-2" >Confirm Payment</button>
                    <div align="center" id="thankyouPayment"> 
                    </div> 
                </form>         
            
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
    </div>
</body> 
</html>

') 

 

?>  



