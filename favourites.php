<?php
session_start();
include("db_conn.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Favourites Page!</title>

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
<div data-role="page" id="page">

       <div data-role="header" id="header" >

            
                <h1>Favourites</h1>
            </div>

        
<?php





    $username      =$_SESSION['username'];
    $product_id       =$_SESSION['product_id'];
    $product_name  =$_SESSION['product_name'];
    $image_name    =$_SESSION['image_name'];
    $product_price =$_SESSION['product_price'];
    $setFav= $username.$product_id;
    

    $sql="INSERT INTO favourites(username,product_id,product_name,image_name,description,setFav) VALUES('$username','$product_id','$product_name','$image_name','$product_price','$setFav')";
    $exeSQL=mysqli_query($conn,$sql); 

  
    
   if($exeSQL){
       echo 'Successfull!';
       
   }if(mysqli_errno($conn)==1062){
       echo 'You Cannot add the Same Pizza Twice to Favourites';
   }


   $to = "ishani.2017364@iit.ac.lk";
   $subject = "Customer Favourites";
   $message= "Product Name is";
   $headers= "From: ishanirayanthi@gmail.com";

   if(mail($to,$subject,$message,$headers)){
       echo "Mail Sent Successfully!";
   }else{
       echo "Can not send mail";
   }

?>


 <div data-role="main" class="ui-content">
<br>

<br>
<?php

echo('

<ul data-role="listview">
     
                <li><a href="# product_id='.$product_id.'  "><img src="images/'.$image_name.'" class="ui-li-thumb" width:150%>'.$product_name.'</a></li>
                

                

    </ul>

');


?>



          </div>  


     <div data-role="footer">
             <h3>This is the footer</h3>

            </div> 


</div> 
</body>
</html>







