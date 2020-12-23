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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
     <title>EatAt</title>
     <style>

        @import url('https://fonts.googleapis.com/css?family=Ubuntu:400,500,600,700&display=swap');
        body{
            font-family: "Ubuntu", sans-serif;
        }
       
        .input-field{
            margin-top: 30px;
            display: inline-flex;
            flex: 1 1 300px;
            border: 1px solid black;
            border-radius: 15px;
            overflow: hidden;
            height: 40px;
            width: 40%;
        }
        #search{       
            padding: 0.5rem 0.5rem 0.5rem 0.5rem;
        }
        #icon{
            padding: 0.5rem;
        }


        /*Slider */
        .slider{
            max-width: 1400px;
            display: flex;
        }
        .slider .card{
            flex: 1;
            margin: 0 20px;
            background: #fff;
            border-radius: 6px;
        }
        .slider .card .img{
            height: 200px;
            width: 100%;
            border-radius: 6px 6px;
        }
        .slider .card .img img{
            height: 100%;
            width: 100%;
            object-fit: cover;
        }
        .slider .card .content{
            padding: 10px 20px;
        }
        .card .content .title{
            font-size: 25px;
            font-weight: 600;
        }
        .card .content .sub-title{
            font-size: 20px;
            font-weight: 600;
            color: #e74c3c;
            line-height: 20px;
        }
        .card .content p{
            text-align: justify;
            margin: 10px 0;
        }
        .card .content .btn{
            display: block;
            text-align: right;
            margin: 10px 0;
            border: 5px;
        }
        .card .content .btn{
            background: #e74c3c;
            color: #fff;
            border: none;
            outline: none;
            font-size: 17px;
            padding: 5px 8px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.2s;
        }
        .card .content .btn:hover{
            transform: scale(0.9);
        }
        .card .content .checked{
            color: darkgoldenrod;
        }
        #rest{
            margin-top: 50px;
            margin-left: 50px;

        }
        #rest .card{
            flex: 1;
            margin: 0 20px;
            background: #fff;
            border-radius: 6px;
            width: 350px;
            margin-top: 30px;
        }
        #rest .card .img{
            height: 200px;
            width: 100%;
        }
        #rest .card .img img{
            height: 100%;
            width: 100%;
            object-fit: cover;
        }
        #rest .card .content{
            padding: 10px 20px;
        }
        #rest .content .title{
            font-size: 25px;
            font-weight: 600;
        }
        #rest .content .sub-title{
            font-size: 20px;
            font-weight: 600;
            color: #e74c3c;
            line-height: 20px;
        }
        #rest .content p{
            text-align: justify;
            margin: 10px 0;
        }

    </style>
</head>
<body>
    <header class="landing">
        <nav class="nav-wrapper transparent fixed">
          <div class="container">
            <a href="#" class="brand-logo black-text text-brighten-4">Eat<span class="yellow-text">At</span></a>
            <a href="#" class="sidenav-trigger" data-target="mobile-menu"><i class="material-icons black-text">menu</i></a>  
            <ul class="right hide-on-med-and-down">
              <li><a href="#" class="black-text">Home</a></li>
              <li><a href="#" class="black-text">Explore</a></li>
              <li><a href="#" class="black-text">About</a></li>
              <li><a href="#" class="black-text">Contact</a></li>
              <li><a href="#"><i class="material-icons medium-icon black-text">person_pin</i></a></li>
            </ul>
            <ul class="sidenav" id="mobile-menu">
              <li><a href="#">Home</a></li>
              <li><a href="#">Explore</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
        </nav>
    </header>