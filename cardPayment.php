<?php
session_start();
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

<body>   




        <div data-role="page" > 
                <div data-role="header" data-theme="b"> 
                    <h1>Confirm Method Of Payment
                    

                  </h1>
                </div>  

                <div data-role="content"> 
                <div class="row">
        <div class="col-sm-4">
          <img src="images/Cream Pizza Love Triangle Funny Wallpaper.png" class="img-responsive" style="width:100%" alt="Image">
         
        </div>

                <form method="get"  id="frmBooking" action="success.php" >  
                    
                    <?php  
                    
                    $name=$_SESSION["prod_name"];
                    $price=$_SESSION["prod_price"];  
                    echo (" <div class='ui-field-contain'> <label> <b>Pizza Name: </b>".$name."</label>");
                    echo (" <label><b> Price : </b>".$price."</label>  </div>");  
                    echo('<input type="hidden" id="item_name" value="'.$name.'"');                                          
                    echo('<input type="hidden" id="item_value" value='.$price.'>')
                    
                    ?>
                <fieldset data-role="controlgroup">
                        <legend> <b>Payment Option <b></legend>
                        <label for="rb1">Card</label>
                        <input type="radio" name="rb" id="rb1" value="Card" />
                        <label for="rb2">Cash</label>
                        <input type="radio" name="rb" id="rb2" value="Cash" checked="checked"/>
                      </fieldset> 
                </div>  

                <button class="ui-shadow ui-btn ui-corner-all"  id="confirm" >Confirm</button>
                <a href="menu.php" class="ui-btn ui-corner-all" data-transition="slide">Cancel</a>

                </form> 
                     
        </div> 

        <div data-role="footer"> 
                <h1>Footer</h1>
        </div>  

        <script type="text/javascript">
            jQuery(function($){
              var $form = $('#frmBooking');
              var handler = StripeCheckout.configure({
                key:'pk_test_cp21BcECf4kMMUbSlRlZlsMo',
                token : function(token){
                   if(token.id){
                     $("#thankyouPayment").html("Thank you")
                   }
                }
              })
   
            $('#rb1').on('click', function(e) {
              handler.open({
                  name : 'Demo Site',
                  currency: 'LKR',
                  description: $('#item_name').val(),
                  amount: $('#item_value').val() * 100
              });
   
            $(window).on('popstate', function(){
              handler.close();
            });
            });
          });
          </script>


        </body> 
        </html>

        

