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

    
  

        <div>

        <form action="signup.php" method="post">
            <div class=" container">

                <div class="row">
                    <div class="col-sm-3">
                
                <label for="firstname"><b> First Name </b> </label>
                <input class="form-control" type="text" name="firstname" required>

                <label for="lastame"><b> Last Name </b> </label>
                <input class="form-control" type="text" name="lastname" required>

                <label for="username"><b> User Name </b> </label>
                <input class="form-control" type="text" name="username" required>


                <label for="email"><b> Email </b> </label>
                <input class="form-control" type="email" name="email" required>

                <label for="password"><b> Password </b> </label>
                <input class="form-control" type="password" name="password" required>

                <label for="address"><b> Address </b> </label>
                <input class="form-control" type="text" name="address" required>

                <label for="postal"><b> Postal Code </b> </label>
                <input class="form-control" type="text" name="postal" required>

                <label for="contact"><b> Contact Number </b> </label>
                <input class="form-control" type="text" name="contact" required>

                <hr class="mb-3">
                <input class=" btn btn-primary" type="submit" name="create" value="Sign Up">
    </div>
    </div>
</div>


</form>
    </div>

    
    <script type="text/javascript">
$(function() {
    alert('Hello');
    
});


    </script>





    
            </div>







            <div data-role="footer">
             <h3>This is the footer</h3>

            </div>




        </div>





</body>




</html>