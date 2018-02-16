<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OCPL</title>
</head>

<body>
<script>
  function myFunction(){
    var xr = new XMLHttpRequest();
    var url = "saveNewText.php";
    var text = document.getElementById("myDiv").innerHTML;
    var vars = "newText="+text;
    
    xr.open("POST", url, true);
    xr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xr.send(vars);
}
  
</script> 
   <!-- add button     #https:www.youtube.comwatchv=JaRq73y5MJk -->
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <a class="waves-effect btn-floating btn-large red file-field input-field">
                <input type="file" name="file"> <i class="large material-icons">add</i></input>
            </a>
            <ul>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">delete</i></a></li>
                <li>
                    <button class="btn-floating green darken-1" type="submit" name="submit"><i class="material-icons">check</i></button>
                </li>
            </ul>
        </form>
    </div>

    <nav>
        <div class="nav-wrapper blue">
            <ul id="slide-out" class="side-nav">
                <nav>
                    <div class="nav-wrapper">
                        <form>
                            <div class="input-field bluexx`">
                                
                                <form action = "includes/login.inc.php" method = "POST">
                                <input type = "text" name= "uid" placeholder="Username/e-mail">
                                <input type = "password" name= "pwd" placeholder="password">
                                <button class="btn btn-primary #80cbc4 teal lighten-3" type = "submit" name  = "submit">Login</button>
                            </form>
                            <button class = "btn btn-primary #80cbc4 teal lighten-3" href="signup.php">Sign up</button>
                                <i class="material-icons">close</i>
                            </div>
                        </form>
                    </div>
                </nav>
               
            </ul>

<?php 

if (isset($_SESSION['u_id'])){
    include_once 'loggedinheader.php';
} else {
 include_once 'notloggedinheader.php';
}
?>

            

    <div class="col s9">
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </div>

 



    </div>






    
<div class="grid">
<div class="Container">
        <div class="Gallery-item ">
        <div class  ="grid-item Nepenthes" >
                <div class="card-reveal">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator"  src="img/lowii.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4"><div id="myDiv" contenteditable="true" onblur="myFunction()"><?php include("myText.txt");?></div> <i class="material-icons right">more_vert</i></span>
                            <p><a href="#">This is a link</a></p>
                          

                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
        <div class="Gallery-item ">
        <div class  ="grid-item Heliamphora" data-category="Nepenthes">
                <div class="card-reveal">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator"  src="img/minor.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Heliamphora Minor<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">This is a link</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </div>
</div>
</body>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="main.js"></script>
    <script src="isotope.pkgd.min"></script>

</html>