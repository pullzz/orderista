<?php
session_start();
include("db_conn.php");
$product_id=$_GET['product_id'];
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


<div data-role="page" id="page" > 

            <div data-role="header" id="header" >

            
                <h1>Removing Favourites!</h1>
            </div>


<?php



$sql='select * from product where product_id='.$product_id.';';
$exeSQL=mysqli_query($conn,$sql) ;  
while ($array=mysqli_fetch_array($exeSQL)){  
    $product_name=$array['product_name'];
    $image_name=$array['product_img'];
    $product_price=$array['product_price'];
    
}



            //$product_name=$_SESSION['product_name'];
            $username=$_SESSION['username'];

            //echo $product_name;
            //echo $username;

            $sql= 'DELETE FROM favourites WHERE product_id= "'.$product_id.'" AND username= "'.$username.'"; ';

            $exeSQL=mysqli_query($conn,$sql)or die (mysqli_error()); 

            if($exeSQL){
                echo('
                <a href="#transitionExample" data-transition="pop" class="ui-btn ui-corner-all ui-shadow ui-btn-inline" data-rel="popup">Pop</a>

            
                ');
                echo 'Successfully Deleted! '.$product_name.' ';
               
               // header("Location: userFavourites.php");
            }
            else{
                echo 'error';
            }



            echo ('
            
            
            <div data-role="main" class="ui-content">  



        
                <li>
                <a href="removeFavourites.php?product_id='.$product_id.'" ><img width= "30%"src="images/'.$image_name.'" class="ui-li-thumb">'.$product_name.'</a>
                
      
                

                </li>

                
    

    
    

    </div>
            
            
            
            
            
            
            ');


        

            
      

            


?>












</body>

    </html>