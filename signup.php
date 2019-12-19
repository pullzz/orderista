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
background-size: cover;

}

.form-container{
    border: 0px solid #fff;
    padding: 50px 60px;
    margin-top: 5vh;
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



        
        <?php
        
        
        if(isset($_POST['create'])){
            echo 'User Submitted' ;
            $username =$_POST['username'];
            $firstname =$_POST['firstname'];
            $lastname  =$_POST['lastname'];
            $email     =$_POST['email'];
            $password  =$_POST['password'];
            $address   =$_POST['address'];
            $postal    =$_POST['postal'];
            $contact   =$_POST['contact'];

            $sql="INSERT INTO users(username,firstname,lastname,email,password,address,postal,contact) VALUES('$username','$firstname','$lastname','$email','$password','$address','$postal','$contact')";
            $exeSQL=mysqli_query($conn,$sql) or die (mysqli_error()); 
           

           if($exeSQL){
               echo 'Successfull!';
           } else{
               echo ' Errors!';
           }


        }


          ?>



        <div class="container-fluid bg">
        <div class="row logo" > 
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
       
    


        <form action="signup.php" method="post" name="signupform" class="form-container">
        <div class="form-group">    
        <img class="logo" src="/Orderista/images/LOGO.png" >
            

                
         
                <label for="firstname"><b> First Name </b> </label>
                <input class="form-control" type="text" name="firstname" required>
                
</div>

<div class="form-group">    
                <label for="lastame"><b> Last Name </b> </label>
         
                <input class="form-control" type="text" name="lastname" required>
</div>


<div class="form-group">    
                <label for="username"><b> User Name </b> </label>
                <input class="form-control" type="text" name="username" required>
</div>


<div class="form-group">    
                <label for="email"><b> Email </b> </label>
                <input class="form-control" type="text" name="email" value="" required>
                <span id="Message"> </span>
</div>


<div class="form-group">    
                <label for="password"><b> Password </b> </label>
                <input class="form-control" type="password" name="password" required>
</div>


<div class="form-group">    
                <label for="address"><b> Address </b> </label>
                <input class="form-control" type="text" name="address" required>
</div>


<div class="form-group">    
                <label for="postal"><b> Postal Code </b> </label>
                <input class="form-control" type="text" name="postal" required>
</div>


<div class="form-group">    
                <label for="contact"><b> Contact Number </b> </label>
                <input class="form-control" type="text" name="contact" required>
</div>




                <hr class="mb-3">
     
                <button class=" btn btn-success btn-block" type="submit" name="create" >Sign Up </button>
   </div>




</form>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12"> </div>

</div>
</div>
    




</body>




</html>