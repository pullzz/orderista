<?php
include("db_conn.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Signup Page!</title>




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
    font-family: 'Raleway', sans-serif;
}
.bg{
background: url("/Orderista/images/pizza6.jpeg");
width:100%;
 height:100vh;

}

.form-container{
    border: 0px solid #fff;
    padding: 50px 60px;
    margin-top: 10vh;
    background: #8FBC8F;

-webkit-box-shadow: 10px 10px 13px 3px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 13px 3px rgba(0,0,0,0.75);
box-shadow: 10px 10px 13px 3px rgba(0,0,0,0.75);
}
.logo{
    display: block;
  margin-left: auto;
  margin-right: auto;
  
}
</style>
    </head>



<body>
   

            
        <!--    <nav class="navbar navbar-inverse">
                   <div class="container-fluid">
                         <div class="navbar-header">
                      <a class="navbar-brand" href="#">O r d e r i s t a</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Login</a></li>
      <li><a href="#">Sign Up</a></li>
      
    </ul>
  </div>
</nav>-->    
        <?php

        session_start();
        
        if(isset($_POST['log'])){
           
            $username  =$_POST['username'];
            $email     =$_POST['email'];
            $password  =$_POST['password'];
            
           
           $sql= "select * from users where username='".$username."' AND email='".$email."' AND password= '".$password."' limit 1   ";

           $result=mysqli_query($conn,$sql)or die (mysqli_error());

           if(mysqli_num_rows($result)!==0){
              // echo 'Successfully Logged in!';
               header("Location: home.php");


               $_SESSION['username'] = $username;
               $_SESSION['email']= $email;


           } else{
               echo ' Errors!';
           }


        }

          ?>

    
  

        <div class="container-fluid bg">
        <div class="row logo" > 
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
       
        <form action="login.php" method="post" class="form-container">

        <div class="form-group">    
        <img class="logo" src="/Orderista/images/LOGO.png" >
                <label for="username"><b> Username </b> </label>
                <input class="form-control" type="text" name="username" required>
      
       </div>


       <div class="form-group">    
          
                <label for="email"><b> Email </b> </label>
                <input class="form-control" type="email" name="email" required>
       
       </div>

       <div class="form-group">    
       
                <label for="password"><b> Password </b> </label>
                <input class="form-control" type="password" name="password" required>
       
       </div>


       <button type="submit" class="btn btn-success btn-block" name="log"> Log In </button>

</div>

</form>

</div>
<div class="col-md-4 col-sm-4 col-xs-12"> </div>

    </div>
    </div>
    
    


</body>




</html>