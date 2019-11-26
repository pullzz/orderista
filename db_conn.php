<?php  

$host="localhost";  
$username="root";  
$password=""; 
$dbname="orderista"; 

//create db connection  

$conn = mysqli_connect($host,$username,$password,$dbname); 
//if the db connection fails, display an error message and exit 

if (!$conn){
	die ('Could not connect: '.mysqli_error($conn)); 
} 

//select the database 
mysqli_select_db($conn,$dbname); 


?>  