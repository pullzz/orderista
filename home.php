<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title> Welcome to Orderista!</title>
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

.bg-3 {
    background-color:#aa232e; 
    color: #fdfdfa;

  }


  .coverpic{
  
  background-repeat: no-repeat;
  background-size: cover;
  min-height: 90%;
    
}




</style>

</head>

<body>





<div data-role="page" id="page" data-theme="b" >


    <div data-role="header" id="header" >
        
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
                          <li class="active"><a href="home.php">Home</a></li>
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
                          <li><a href="/Orderista/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                          <li><a href="/Orderista/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

                          <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="/Orderista/menu.php"><span class="glyphicon glyphicon-user"> <?php echo($_SESSION['username']); ?> </span> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <a href="/Orderista/userprofile.php"><span class="glyphicon glyphicon-user"><?php echo($_SESSION['username']); ?></span></a>
                              
                              <li><a href="logout.php">  Log Out</a></li>
                            </ul>
                          </li>
                         
  
                        </ul>
                      </div>
                    </div>
                  </nav>
                    
</div>
       



<!--- <a id ="navbar"  href="#menu"  data-role="button" data-icon="bars" data-iconpos="right">Orderista</a> -->
<div data-role="main" class="ui-content">



  <div class="covercontainer">
    <img class="coverpic" src="/Orderista/images/pizza4.jpeg" >
    
   <!-- <button class="btn">View Our Pizza's</button> -->
   <a href="menu.php" data-role="button" class="btn"> View Our Pizza's</a>
    
  </div>


    <h1>Welcome to our Store!</h1>



    <div class="container text-center">    
      <h3>What We Do</h3><br>
      <div class="row">
        <div class="col-sm-4">
          <img src="/Orderista/images/pizza6.jpeg" class="img-responsive" style="width:100%" alt="Image">
          <p>Current Project</p>
        </div>
        <div class="col-sm-4"> 
          <img src="/Orderista/images/pizza7.jpeg" class="img-responsive" style="width:100%" alt="Image">
          <p>Project 2</p>    
        </div>
        <div class="col-sm-4">
          <img src="/Orderista/images/pizza8.jpeg" class="img-responsive" style="width:100%" alt="Image">
           <p>Some text..</p>   
        </div>
      </div>
    </div><br>



    <div class="container-fluid bg-1 text-center">
      <h3 class="margin">The Way to my Heart?</h3>
      <img src="/Orderista/images/pizza9.jpeg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
      <h1>BUY ME PIZZA & I'M YOURS</h1>
      <h5>If you guess my favourite flavor, you're a keeper!</h5>
    </div>

    <br>

    <div class="container-fluid bg-2 text-center">
      <h3 class="margin">Search for delicious Pizzas in our Store</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
      <a href="#" class="btn btn-default btn-lg">
        <span class="glyphicon glyphicon-search"></span> Search
      </a>
    </div>

    <br>


    <div class="container-fluid bg-3 text-center">
      <h3 class="margin">Know your Jumanji? Take the Quiz , Take the pizza!</h3>
     
      <img src="/Orderista/images/jumanji.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
    </div>

    <br>

    <iframe width="100%" height="315" src="https://www.youtube.com/embed/M2mzIMv5k_Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
    <!-- <video width="100%" height="240" controls>
      <source src="/Orderista/videos/Orderista.mp4" type="video/mp4">
    </video> -->
    
    
    <br>
    <br>

    

    <div id="contact" class="container-fluid1 bg-grey">
      <h2 class="text-center">CONTACT US</h2>
      <div class="row">
        <div class="col-sm-5">
          <p>Contact us and we'll get back to you within 24 hours.</p>
          <p><span class="glyphicon glyphicon-map-marker"></span> Colombo, Sri Lanka</p>
          <p><span class="glyphicon glyphicon-phone"></span> +94 771515151</p>
          <p><span class="glyphicon glyphicon-envelope"></span> bruteforce@gmail.com</p>
        </div>
        <div class="col-sm-7 slideanim">
          <div class="row">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
          </div>
          <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
          <div class="row">
            <div class="col-sm-12 form-group">
              <button class="btn btn-default pull-right" type="submit">Send</button>
            </div>
          </div>
        </div>
      </div>
    </div>


<br>










    

</div>









<div data-role="footer">


<h4>This is footer</h4>


<h6>Hi HI HI</h6>

</div>


</div>











</body>









</html>