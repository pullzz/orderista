<?php
session_start();
include("db_conn.php");

echo('
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
    </head> ');



echo ('<body>');
   echo(' <div data-role="page" id="page" > 

            <div data-role="header" id="header" >

            
                <h1>User Favourites!</h1>
            </div>');



            //echo($_SESSION['username']);
      $username=$_SESSION['username'];

      
      $sql='SELECT product_id,product_name,image_name,description FROM favourites WHERE username="'.$username.'";';
      $exeSQL=mysqli_query($conn,$sql)or die (mysqli_error()); 
     
      
     // if(mysqli_num_rows($exeSQL)>0){
          while($row= mysqli_fetch_array($exeSQL)){

            $product_id= $row["product_id"];
            $product_name=$row['product_name'];
            $image_name=$row['image_name'];
            $description=$row['description'];
            

            echo "product_id:".$row["product_id"]."-Product Name".$row["product_name"]."-Image".$row["image_name"].
             "Description".$row["description"]."<br>";

             
      

echo('
        <div data-role="main" class="ui-content">  



        <ul data-role="listview" data-icon="delete" data-theme="a" data-split-theme="b" data-inset="true">
     <li data-role="list-divider"></li>
                <li>
                <a href="removeFavourites.php?product_id='.$product_id.'" ><img src="images/'.$image_name.'" class="ui-li-thumb">'.$product_name.'</a>
                
      
                

                </li>

                
    </ul>

    
    

    
    



    


            
            </div>

');


             

    
//}else{
  //  echo "0 results";
}


echo ('
            <div data-role="footer">
             <h3>This is the footer</h3>

            </div>

            ');




     echo('  </div> ');





echo('</body>');




echo (' </html> ');
?>