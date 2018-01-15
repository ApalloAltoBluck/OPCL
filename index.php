<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <!-- Compiled and minified CSS -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
       <link rel="stylesheet" href="style.css">

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>OPCL</title>
    </head>
    
    <body>
 

     

    <!-- add button -->
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">

        <a class="btn-floating btn-large red">
          <i class="large material-icons">add</i>
        </a>
        <ul>
            <li><a class="btn-floating yellow darken-1"><i class="material-icons">delete</i></a></li>
        </ul>
      </div>
      
      <nav>
          <div class="nav-wrapper blue">
              <ul id="slide-out" class="side-nav">
                  <nav>
                      <div class="nav-wrapper">
                        <form>
                          <div class="input-field bluexx`">
                            <input id="search" type="search" required>
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                          </div>
                        </form>
                      </div>
                    </nav>
                  <li><a href="#!">First Sidebar Link</a></li>
                  <li><a href="#!">Second Sidebar Link</a></li>
                </ul>
                <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="large material-icons">menu</i></a>
              
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li class="tab"><a href="#test1">Nepenthes</a></li>
                <li class="tab"><a href="#test1">Heliamphora</a></li>
                <li class="tab"><a href="#test1">Sarracenia</a></li>
                <li class="tab"><a href="#test1">Dioneae</a></li>
                <li class="tab"><a href="#test1">Drosera</a></li>
                <li class="tab"><a href="#test1">Cephalotus</a></li>
                <li class="tab"><a href="#test1">Pinguicula</a></li>
                <li class="tab"><a href="#test1">Utricularia</a></li>


                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
                <ul id="dropdown1" class="dropdown-content">
                    <li><a href="#!">Drosphyllum</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">Aldrovanda</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">Darlingtonia</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">Roridula</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">Genlisea</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">Byblis</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">Other</a></li>
                  </ul>
            </ul>
          </div>
        </nav>

      <div class ="col s9">
      <script type="text/javascript" src="js/materialize.min.js"></script>

      </div>

      <h1>My name is jeff</h1>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

      <script>
            $(".button-collapse").sideNav();

      </script>
      
      </div>
    
     
      <div class = "Gallery">
          <div class = "Gallery-item">
             
                  <div class="card-reveal">
                      <div class="card">
                          <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/qm.png" >
                          </div>
                          <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
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
    </body>

  </html>