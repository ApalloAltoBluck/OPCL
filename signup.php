<!DOCTYPE html>
<html>
  <head class="SignupClass">
  
    <!--Import Google Icon Font-->
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css--> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Sign Up</title>
  </head>
  <body>
 

  <div class="row">

  <form class="col s12">


      <div class="col s6">
     <img width="800px"; class="zindex" src="Createlog.png">
    <img class="zindex2" width=1000px; height=1360px; src="signupgradient.png" >

      </div>
      
    
 
      <div class="signupform">
      <font size="13">Sign Up</font>
            <form class = "signup-form" action="includes/signup.inc.php" method="POST">
            <input type="text" name="first" placeholder="Firstname">
            <link rel="stylesheet" href="style.css">
            <input type="text" name="last" placeholder="Lastname">
            <input type="text" name="email" placeholder="E-mail">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <button type ="submit" name ="submit" class="waves-effect waves-light btn">Sign up</button>
        </form>
        </div>

   <!-- Scripts !-->
   <link rel="stylesheet" href="style.css">
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>


  </body>
</html>