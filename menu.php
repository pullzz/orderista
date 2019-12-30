<?php 
include("db_conn.php");
echo (' 
<!DOCTYPE html>  
<html> 
<head> 
<meta charset="UTF-8">
<meta name = "viewpoint" content="width= device-width, initial-scale = 1"> 
<link rel ="stylesheet" href = "http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"> 
<link rel="stylesheet" type="text/css" href="/Orderista/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>  
</head>');
$sql='select * from product'; 
$exeSQL=mysqli_query($conn,$sql) or die (mysqli_error()); 
$username= $_SESSION['username'];
echo ('<body>'); 
echo ('<div data-role="page" data-theme="b">');
echo ('<div data-role="header"> 

<nav class="navbar navbar-inverse navbar-fixed-top">
                    <div class="container-fluid">
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="#">O r d e r i s t a</a>
                      </div>
                      
                      <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                          <li class="active"><a href="#">Home</a></li>
                          <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="/Orderista/menu.php"> Menus <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="/Orderista/menu.php">Page 1-1</a></li>
                              <li><a href="#">Page 1-2</a></li>
                              <li><a href="#">Page 1-3</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Page 2</a></li>
                          <li><a href="#">Page 3</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                          <li> <a href="/Orderista/userprofile.php"><span class="glyphicon glyphicon-user"></span> '.$username.'</a> </li>

                        </ul>
                      </div>
                    </div>
                  </nav>

       
        </div> ');

        echo ('<br>');
        echo ('<br>');
        echo ('<br>');

while ($arrayp=mysqli_fetch_array($exeSQL)){  
    $product_id=$arrayp['product_id'];
    $product_name=$arrayp['product_name'];
    $image_name=$arrayp['product_img'];
    $product_calories=$arrayp['product_calories'];
    $product_price=$arrayp['product_price'];
    echo (' 

    <div class="ui-content">
<br>
    <ul data-role="listview">
     <li data-role="list-divider"></li>
                <li><a href="product.php?prod_id='.$product_id.'"><img src="images/'.$image_name.'" class="ui-li-thumb">'.$product_name.'</a></li>
                
    </ul>
     </div>
    '); 
} 
echo ('</div>');
echo ('</body>');
echo ('</html>');
?> 