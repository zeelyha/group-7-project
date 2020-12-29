<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- font awesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
     <title>EatAt</title>
     <style>
         @import url('https://fonts.googleapis.com/css?family=Ubuntu:400,500,600,700&display=swap');
        *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: 'Ubuntu', sans-serif;
        }
        html{
          scroll-behavior: smooth;
        }
        header{
          background:url('imgs/land.jpg') no-repeat center;
          background-size:cover;
          min-height:700px;
          width: 100vw;
          height: auto;
          
        }
        @media screen and (max-width:670px){
          header{
            min-height: 500px;
          }
        }
        .home .home-content .text{
          font-size: 45px;
          font-weight: 350;
          padding-top: 130px;
          margin-left: 700px;
        }
        .btn{
          border-radius: 10px;
          margin-top: 25px;
          margin-left: 1000px;
          background-color: darkgoldenrod;
        }
        .scroll-up-btn{
          position: fixed;
          height: 45px;
          width: 42px;
          background: black;
          right: 30px;
          bottom: 10px;
          text-align: center;
          line-height: 45px;
          color: #fff;
          z-index: 9999;
          font-size: 30px;
          border-radius: 6px;
          border-bottom-width: 2px;
          cursor: pointer;
          opacity: 0;
          pointer-events: none;
          transition: all 0.3 ease;
        }
        .scroll-up-btn.show{
          bottom: 30px;
          opacity: 1;
          pointer-events: auto;
        }
        .scroll-up-btn:hover{
          filter: brightness(90%);
        }
     </style>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>   
    <header>
        <ul id="dropdown1" class="dropdown-content">
          <li ><a href="signup.php" class="black-text">Sign Up</a></li>
          <li ><a href="login.php" class="black-text">Log In</a></li>
          <li class="divider"></li>
        </ul>
        <nav class="nav-wrapper transparent fixed">
          <div class="container">
            <a href="#" class="brand-logo white-text text-brighten-4">Eat<span class="yellow-text">At</span></a>
            <a href="#" class="sidenav-trigger" data-target="mobile-menu"><i class="material-icons">menu</i></a>  
            <ul class="right hide-on-med-and-down">
              <li><a href="index.php" class="white-text">Home</a></li>
              <li><a href="main.php" class="white-text">Explore</a></li>
              <li><a href="#about" class="white-text">About</a></li>
              <li><a href="#contact" class="white-text">Contact</a></li>
              <li><a href="#" class="tooltipped btn-floating btn-small black" data-tooltip="Facebook">
                <i class="fab fa-facebook"></i>
              </a></li>
              <li><a href="#" class="tooltipped btn-floating btn-small black brighten-2" data-tooltip="Instagram">
                <i class="fab fa-instagram"></i>
              </a></li>
              <li>
                <form>
                    <div class="input-field col s4 m4 lg4 ">
                        <input id="search" type="search" required>
                        <label for="search" class="label-icon"><i class="material-icons white-text inline prefix">search</i></label>
                        <i class="material-icons">close</i>
                    </div>
                </form>
              </li>
              <li><a href="#"><i class="material-icons medium-icon white-text dropdown-trigger" data-target="dropdown1">person_pin</i></a></li>
            </ul>
            <ul class="sidenav" id="mobile-menu">
              <li><a href="index.php">Home</a></li>
              <li><a href="main.php">Explore</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div>
          
        </nav>
        <section class="home" id="home">
          <div class="max-width">
            <div class="home-content">
              <div class="text white-text">Your Guide to Quality Meals!</div>
              <a href="main.php"><button class="btn btn-medium">Explore</button></a>
            </div>
          </div>
        </section>
      </header>

      <div class="container">
        <div class="section" id='about'>
          <h2 id="hh">ABOUT</h2>
          <p class="light">EatAt is a restaurant review app project founded by a team of ladies for the LAW program which is aimed at providing people solutions and ease with restaurants that suits their preferences, budget, location and type of aesthetics.</p>
    
          <!--   Icon Section   -->
          <div class="row">
            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center yellow-text"><i class="material-icons medium">location_on</i></h2>
                <h5 class="center">Easy Navigation</h5>
    
                <p class="light">The reviews which other users (who have visited and explored said restaurants) would serve as recommendations and a type of guide for new explorers/consumers.
                  This would help with better decision making and satisfactory services for more people.
                  There would be ranges of restaurants based on location and choices.
                  </p>
              </div>
            </div>
    
            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center yellow-text"><i class="material-icons medium">restaurant_menu</i></h2>
                <h5 class="center">Quality Meals</h5>
    
                <p class="light">Our application helps you narrow out your preferences and informs your budget so you can go somewhere befitting and get the ultimate experience you should be met with.
                </p>
              </div>
            </div>
    
            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center yellow-text"><i class="material-icons medium">attach_money</i></h2>
                <h5 class="center">Spend Less</h5>
    
                <p class="light">Reviews do not lie.
                  No other person truthful than a dissatisfied customer and even more, one with a satisfactory cruise.
                  You know this offers you quality that you seek.
                  </p>
              </div>
            </div>
          </div>
    
        </div>
        <br><br>
      </div>
    
    
    
       <!-- contact form -->
       <section class="section container scrollspy" id="contact">
        <div class="row">
          <div class="col s12 l5">
            <h2 class="black-text">Contact</h2>
            <p>Send us a message.</p>
            
          </div>
          <div class="col s12 l5 offset-l2">
            <form>
              <div class="input-field">
                <i class="material-icons prefix">person</i>
                <input type="email" id="email">
                <label for="email">Name</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">email</i>
                <input type="email" id="email">
                <label for="email">Your Email</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">message</i>
                <textarea id="message" class="materialize-textarea" cols="20" rows="20"></textarea>
                <label for="message">Your Message</label>
              </div>
              
              <div class="input-field center">
                <button class=" black btn">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </section>
    
      
      
       <!-- footer -->
      <footer class="page-footer black">
        <div class="footer-copyright black brighten-5">
          <div class="container center-align">&copy; 2020 group7</div>
        </div>
      </footer>

     


      
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
      <script>
        $(document).ready(function(){
          $('.sidenav').sidenav();
          $('.scroll-up-btn').click(function(){
            $('html').animate({scrollTop: 0});
            //removing smooth scroll on slide-up button click
            $('html').css("scrollBehavior", "auto");
          });
          $(".dropdown-trigger").dropdown();
        });
      </script>
      
  </body>
  </html>
</body>
</html>