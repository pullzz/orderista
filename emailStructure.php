<?php
//session_start();
include("db_conn.php");
?>

<!DOCTYPE html>
<html>

<head>
        <title>Welcome to Favourites Page!</title>

 <style>


  .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 10%;
}

.margin {margin-bottom: 20px;
text-align: center;}

.bg-1 { 
    background-color: #aa232e; /* Green */
    color: #ffffff;
  }

  .container-fluid {
    padding-top: 5px;
    padding-bottom: 5px;
  }
.container{
  padding-top: 5px;
  padding-bottom: 5px;

}

.bg-2{
    background-color: #F5F5DC;
    color: #006400;
}

.bg-3{
  background-color: #000000;
  color:#FFDEAD;
}

</style>

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

<img  src="cid:logo_2u"  style="width= 50px; height=50px;" class="center" >
<div class="container-fluid bg-1 text-center">
      <h3 class="margin">Your Favourite Pizza's</h3>

      </div>

<br>
<div class="container bg-2">
<p>	Orderista <br>
Informatics Institute of Technology,<br> Wellawatta <br>
011-1212123</p>

<b>Dear Customer This email is to Show the Favourites you Have been added so far!</b>
<br>

<br>


<table align="center" border="1px" style="width:600px; line-height:30px;">
<tr>
<th>Product Name</th>
<th>Description </th>

</tr>


<?php
      $username=$_SESSION['username'];
      $email= $_SESSION['email'];

      $sqlquery='SELECT product_name,description FROM favourites WHERE username="'.$username.'";';
      $executeSQL=mysqli_query($conn,$sqlquery)or die (mysqli_error()); 
     

      //if($executeSQL->num_rows>0){
        while($rows = mysqli_fetch_array($executeSQL)){
 
            $product_name= $rows["product_name"];
            $description=$rows['description'];
           
        

  //echo "<tr><td>".$rows["product_name"]. "</td><td>" .$rows["description"]. "</td> <br> </tr> ";
  $products = "<tr><td>".$rows["product_name"]. "</td><td>" .$rows["description"]. "</td></tr> ";
      

$content= ('

'.$products.'


');




echo $content;
//$_SESSION['content'] = $content;
  //echo $emailStructure;

//echo($_SESSION['products']);
//$products=$_SESSION['products'];
//$_SESSION['emailStructure'] = $emailStructure;     

}
        
 ?>         


                 

</table>
<br>
</div>

<br>
<div class="container bg-3">

<h4 class="margin"> Thank you for Choosing Orderista! </h4>
<br>
<h6 align="center">You’re receiving this email because you have a Orderista account. </h1>
</div>




</body>

</html>



