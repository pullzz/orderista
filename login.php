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
    </head>



<body>
    <div data-role="page" id="page" >

            <div data-role="header" id="header" >

            
                <h1>Registration</h1>
            </div>




        <div data-role="main" class="ui-content1">

        <?php

        session_start();
        
        
        if(isset($_POST['log'])){
           
            $username= $_POST['username'];
            $email     =$_POST['email'];
            $password  =$_POST['password'];
            
           
           $sql= "select * from users where username='".$username."' AND email='".$email."' AND password= '".$password."' limit 1   ";

           $result=mysqli_query($conn,$sql)or die (mysqli_error());

           if(mysqli_num_rows($result)!==0){
               echo 'Successfully Logged in!';
               header("Location: home.php");


               $_SESSION['username'] = $username;







           } else{
               echo ' Errors!';
           }


        }

          ?>

    
  

        <div>

        <form action="login.php" method="post">
            <div class=" container">

                <div class="row">
                    <div class="col-sm-3">
                
                <label for="username"><b> Username </b> </label>
                <input class="form-control" type="text" name="username" required>
                
                <label for="email"><b> Email </b> </label>
                <input class="form-control" type="email" name="email" required>

                <label for="password"><b> Password </b> </label>
                <input class="form-control" type="password" name="password" required>

                
                <hr class="mb-3">
                <input class=" btn btn-primary" type="submit" name="log" value="Log in">
    </div>
    </div>
</div>


</form>
    </div>

    
    


    </script>





    
            </div>







            <div data-role="footer">
             <h3>This is the footer</h3>

            </div>




        </div>





</body>




</html>