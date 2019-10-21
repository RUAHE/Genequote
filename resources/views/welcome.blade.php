<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>




        <title>GeneQuotes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- PACIFICO -->
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
        <!-- SATISFY -->
        <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">         
        <link rel="icon" type="images/png" href="images/genequotes.png"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <!-- Styles -->
        <style>

@import url(https://fonts.googleapis.com/css?family=Josefin+Sans:300,400);
* {
  margin: 0;
  padding: 0;
}
html, body {
  height: 100%;
  color:white;
}


#section01 {
  position: relative;
  width: 100%;
  height: 100%;
}
#section01::after {
  position: absolute;
  bottom: 0;
  left: 0;
  content: '';
  width: 100%;
  height: 80%;
}
#section01 h1 {
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0, 0.4); 
  color: white;
  font-weight: bold;
  border: 4px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 1;
  width: 60%;
  padding: 40px;
  text-align:center;
  font-family: 'Times New Roman', Times, serif;
  font-size:50px;
}


#section01 { background: url('images/fond.jpg') 
center center / cover no-repeat;
}

.demo a {
    position: absolute;
    bottom: -230px;
    left: 42.5%;
    z-index: 2;
    display: inline-block;
    -webkit-transform: translate(-50, -50%);
    transform: translate(-50, 50%);
    color: #fff;
    font : normal 400 20px/1 'Josefin Sans', sans-serif;
    letter-spacing: .1em;
    text-decoration: none;
    transition: opacity .3s;
  }

.demo a:hover {
    opacity: .5;
  }

  
  
#section01 a {
    padding-top: 60px;
    padding-left:165px;

  }

#section01 a span {
    position: absolute;
    top: 0;
    left: 50%;
    width: 46px;
    height: 46px;
    margin-left: -23px;
    border: 1px solid #fff;
    border-radius: 100%;
    box-sizing: border-box;
  }

#section01 a span::after {
    position: absolute;
    top: 50%;
    left: 50%;
    content: '';
    width: 16px;
    height: 16px;
    margin: -12px 0 0 -8px;
    border-left: 1px solid #fff;
    border-bottom: 1px solid #fff;
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
    box-sizing: border-box;
  }

.titre{
  margin-top: 14%;
}
 

.content {
    text-align: center;
}
.title {
    font-size: 84px;
}
.m-b-md {
    margin-bottom: 30px;
}

.img1{
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 35%;
}

.responsive{
  max-width: 100%;
  height: auto;
}


                /* effect 2nd page */
.overlay {
  height: 0%;
  width: 100%;
  position: fixed;
  z-index: 2;
  top: 0;
  left: 0;
  background: url('images/fond_3.jpg') center center / cover no-repeat;
  overflow-y: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}

.picture{
    width: 30%;
    margin: auto;
  }

.pictures{
  width: 60%;
  margin: auto;
}

.picturess{
  width: 45%;
  margin: auto;
}

.carouss{
  margin-top:-250px;
}



        </style>
    </head>
    <body>



        <section id="section01" class="demo">

            <div class="container">
              
                <img class="img1 responsive" src="images/genequotes.png" alt="logo">

              <div class="row">
                <div class="col-md-12 titre">
                  <h1>Generate Quote</h1>
                  <a onclick="openNav()" class="bouton"><span></span></a>
                </div>
              </div>
          
            </div>

        </section>




        <section id="section02">
          <div  id="myNav" class="overlay">
            <a href="javascript:void()" class="closebtn" onclick="closeNav()">&times;</a>
              <div class="overlay-content carouss">           







                  <div class="container">
                      <br>
                      <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                          <li data-target="#myCarousel" data-slide-to="2"></li>
                          <li data-target="#myCarousel" data-slide-to="3"></li>
                          <li data-target="#myCarousel" data-slide-to="4"></li>
                          <li data-target="#myCarousel" data-slide-to="5"></li>
                          <li data-target="#myCarousel" data-slide-to="6"></li>
                          <li data-target="#myCarousel" data-slide-to="7"></li>
                          <li data-target="#myCarousel" data-slide-to="8"></li>
                          <li data-target="#myCarousel" data-slide-to="9"></li>

                        </ol>
                    
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                    
                          <div class="item active">
                            <img src="images/eames.png" alt="Chania" class="picture">
                          </div>
                    
                          <div class="item">
                            <img src="images/bob_marley.jpg" alt="Chania" class="pictures">
                          </div>
                        
                          <div class="item">
                            <img src="images/picasso.jpg" alt="Flower" class="picture">
                          </div>
                    
                          <div class="item">
                            <img src="images/gainsbourg.jpg" alt="Flower" class="picture">
                          </div>

                          <div class="item">
                            <img src="images/chaplin.jpg" alt="Flower" class="picture">
                          </div>

                          <div class="item">
                            <img src="images/churchill.jpg" alt="Flower" class="picture">
                          </div>

                          <div class="item">
                              <img src="images/einstein.jpg" alt="Flower" class="picturess">
                          </div>

                          <div class="item">
                            <img src="images/gandhi.jpg" alt="Flower" class="picture">
                          </div>

                          <div class="item">
                              <img src="images/nelson.jpg" alt="Flower" class="picture">
                          </div>

                          <div class="item">
                            <img src="images/victor.jpg" alt="Flower" class="picture">
                          </div>
      
                      
                        </div>
                    
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    </div>










                <div class="content">

                    <div class="title m-b-md">
                        @if($liste_citation)
                            {{ $liste_citation->random()->citation }}
                        @endif
                    </div>


                    <div>
                        <form action="{{route('generer_citation')}}" method="post" class="formulaire">
                            {{ csrf_field() }}
                            <button class="btn btn-primary">Generate</button>
                        </form>
                    </div>

                </div>

            </div>  
          </div>
        </section>












    <script>
        function openNav() {
          document.getElementById("myNav").style.height = "100%";
        }

        function closeNav() {
          document.getElementById("myNav").style.height = "0%";
        }
     </script>




     



    </body>
</html>