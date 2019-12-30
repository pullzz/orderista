<?php
session_start();
include("db_conn.php");
include("emailStructure.php");

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

<style>

@import url("https://fonts.googleapis.com/css?family=Raleway&display=swap");
*{
    font-family: "Raleway", sans-serif;
}

.letter{
    font-family: "Raleway", sans-serif;
}

</style>

    </head> ');



echo ('<body>');
   echo(' <div data-role="page" id="page" > 

            <div data-role="header" id="header" >

            
                <h1>User Favourites!</h1>
            </div>');



            //echo($_SESSION['username']);
      $username=$_SESSION['username'];
      $email= $_SESSION['email'];

      
      $sql='SELECT product_id,product_name,image_name,description FROM favourites WHERE username="'.$username.'";';
      $exeSQL=mysqli_query($conn,$sql)or die (mysqli_error()); 
     
      
     // if(mysqli_num_rows($exeSQL)>0){
          while($row= mysqli_fetch_array($exeSQL)){

            $product_id= $row["product_id"];
            $product_name=$row['product_name'];
            $image_name=$row['image_name'];
            $description=$row['description'];
            

           // echo "product_id:".$row["product_id"]."-Product Name".$row["product_name"]."-Image".$row["image_name"].
           //  "Description".$row["description"]."<br>";

            // $products= "<tr><td>" .$row["product_name"]. "</td> <td>" .$row["description"]. "</td> </tr>";
 
                  

echo('
        <div data-role="main" class="ui-content">  



        <ul data-role="listview" data-icon="delete" data-theme="a" data-split-theme="b" data-inset="true">
     <li data-role="list-divider"></li>
                <li>
                <a class="letter" href="removeFavourites.php?product_id='.$product_id.'" ><img src="images/'.$image_name.'" class="ui-li-thumb">'.$product_name.' <p> <h3> '.$description.'</h3> </p> </a> 

                


                </li>   
                
    

    </ul>
    





            </div>

');



          }



require "phpmailer/class.phpmailer.php";
require "phpmailer/PHPMailerAutoload.php";


$mail=new PHPMailer(true); // Passing `true` enables exceptions

try {
    //settings
   // $mail->SMTPDebug=2; // Enable verbose debug output
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true; // Enable SMTP authentication
    $mail->Username='bruteforceteam4@gmail.com'; // SMTP username
    $mail->Password='teambruteforce'; // SMTP password
    $mail->SMTPSecure='ssl';
    $mail->Port=465;

    $mail->setFrom('bruteforceteam4@gmail.com', 'Bruteforce');

    //recipient
    $mail->addAddress($email);     // Add a recipient
    //$email
    //content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject='User Favourites!';
    //$mail->addAttachment('/Users/ishicroos/.bitnami/stackman/machines/xampp/volumes/root/htdocs/Orderista/images/'.$image_name.''); 
    //$mail->Body=' '.$emailStructure.' ';
    //$mail->AltBody='This is the body in plain text for non-HTML mail clients';

ob_start();
include "emailStructure.php";
$contents = ob_get_clean();
$mail->msgHTML($contents);
$mail->AddEmbeddedImage('images/LOGO.png', 'logo_2u');
    $mail->Send();

   // echo 'Message has been sent';
} 
catch(Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: '.$mail->ErrorInfo;
}



      





     echo('  </div> ');





echo('</body>');




echo (' </html> ');
?>