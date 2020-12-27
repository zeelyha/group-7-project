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
        header{
          background:url('imgs/land.jpg') no-repeat center;
          background-size:cover;
          min-height:700px;
          width: 100vw;
          height: auto;
          
        }
        /* .home .max-width{
          margin: auto 0 auto 30px;

        } */
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
     </style>

</head>
<body>
    <header>
        <nav class="nav-wrapper transparent fixed">
          <div class="container">
            <a href="#" class="brand-logo white-text text-brighten-4">Eat<span class="yellow-text">At</span></a>
            <a href="#" class="sidenav-trigger" data-target="mobile-menu"><i class="material-icons">menu</i></a>  
            <ul class="right hide-on-med-and-down">
              <li><a href="#" class="white-text">Home</a></li>
              <li><a href="#" class="white-text">Explore</a></li>
              <li><a href="#" class="white-text">About</a></li>
              <li><a href="#" class="white-text">Contact</a></li>
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
              <li><a href="#"><i class="material-icons medium-icon white-text">person_pin</i></a></li>
            </ul>
            <ul class="sidenav" id="mobile-menu">
              <li><a href="#">Home</a></li>
              <li><a href="#">Explore</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          
        </nav>
        <section class="home" id="home">
          <div class="max-width">
            <div class="home-content">
              <div class="text white-text">Your Guide to Quality Meals!</div>
              <button class="btn btn-medium">Explore</button>
            </div>
          </div>
        </section>
      </header>

      <div class="container">
        <div class="section">
          <h2 id="hh">ABOUT</h2>
    
          <!--   Icon Section   -->
          <div class="row">
            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center yellow-text"><i class="material-icons medium">location_on</i></h2>
                <h5 class="center">Easy Navigation</h5>
    
                <p class="light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur in et officia ut vel perferendis saepe ipsum quaerat, delectus sed sequi nobis eos earum praesentium odio error est rem non?</p>
              </div>
            </div>
    
            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center yellow-text"><i class="material-icons medium">restaurant_menu</i></h2>
                <h5 class="center">Quality Meals</h5>
    
                <p class="light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, iure officia sit quae, fugit repellendus, quibusdam modi animi ratione provident asperiores sunt. Maiores iusto qui asperiores harum voluptas accusamus recusandae.</p>
              </div>
            </div>
    
            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center yellow-text"><i class="material-icons medium">attach_money</i></h2>
                <h5 class="center">Spend Less</h5>
    
                <p class="light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut temporibus distinctio repudiandae ullam reprehenderit iste, voluptate asperiores eos amet corporis harum consequuntur dolor accusamus quo fugiat sint libero veniam? Iure.</p>
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
        });
      </script>
      
  </body>
  </html>
</body>
</html>