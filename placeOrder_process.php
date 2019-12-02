<!DOCTYPE html>  
<html> 
<head> 
<meta name = "viewpoint" content="width= device-width, initial-scale = 1"> 
<link rel ="stylesheet" href = "http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"> 
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>  
</head> 
<body>

<div data-role="page" data-theme="b"> 
        <div data-role="header"> 
            <h1>Success Message</h1>
        </div> 

<div data-role="content">

<?php

$name =  $_GET['pro_name'];
$quantity=$_GET['quantity']; 
$address=$_GET['address']; 



echo ("<h3>You have ".$name." </h3>   Quantity :  ".$quantity." <br>Address : ".$address." <br>"); 


?> 

<div data-role="content"> 


 

<?php 

  include ("meRaviQr/qrlib.php");
  include ("config.php");
  $qc = "ordered italian pizza";
  $qrUname = "Pulsara";
  $qrImgName = "meravi".rand();    
  $dev = " ...Developed By Orderista";
  $final = $qc.$dev;
  $qrs = QRcode::png($final,"userQr/$qrImgName.png","H","3","3");
  $qrimage = $qrImgName.".png";
  $workDir = $_SERVER['HTTP_HOST'];
  $qrlink = $workDir."/qrcode".$qrImgName.".png";
  $insQr = $meravi->insertQr($qrUname,$final,$qrimage,$qrlink);
  $srcPath="userQr/".$qrimage;
  echo ('<img src='.$srcPath.' align ="center" style="width=100%" alt="">');
  ?> 
<a href="menu.php" class="ui-btn">OK</a>
</div> 
<div data-role="footer"> 
    <h3></h3>
</div>

</body> 
</html> 