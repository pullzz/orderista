<?php

session_start();
include('functions.php');

?>
<!DOCTYPE html>
<html>
    <head>
    <title>Welcome to your Profile!</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/Orderista/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
         rel="stylesheet" >


</head>


    <body>
    <div data-role="page" id="page" >

    <div data-role="header" id="header" >      
       <h1>User Profile</h1>
          </div>

          <div data-role="main" class="ui-content">

          

          <?php

          echo($_SESSION['username']);



?>


<br>


 <a href="/Orderista/home.php" class="ui-btn ui-btn-inline">Go to Home</a>


 <form>

 <a href="/Orderista/userFavourites.php" class="ui-btn ui-btn-inline">Go to Favourites</a>
 
    



 </form>







</div>








          
</div>



<div data-role="footer">
             <h3>This is the footer</h3>

            </div>












</div>



</body>







</html>