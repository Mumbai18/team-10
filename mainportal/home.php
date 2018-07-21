<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">

    <style>
#footer{
          background: -webkit-linear-gradient(left, #e6f3ff, #80c1ff);
          background: -o-linear-gradient(left, #e6f3ff, #80c1ff);
          background: linear-gradient(to right, #e6f3ff, #80c1ff);
          /* background: linear-gradient(to right,#ffffff,#737373); */
          width:100% ;
          padding: 10px; 
          box-shadow: 2px 2px 4px black;

        }
           
.navbar{
   background: -webkit-linear-gradient(right, #e6f3ff, #80c1ff);
   background: -o-linear-gradient(right, #e6f3ff, #80c1ff);
   background: linear-gradient(to left, #e6f3ff, #80c1ff);
  box-shadow: 2px 2px 4px black;
}
        #myCarousel{
           margin-top: 50px;
           box-shadow: 2px 2px 4px black;

        }
        .jumbotron
           {
            background: -webkit-linear-gradient(right, #e6f3ff, #80c1ff);
            background: -o-linear-gradient(right, #e6f3ff, #80c1ff);
            background: linear-gradient(to left, #e6f3ff, #80c1ff);
                       box-shadow: 2px 2px 4px black;
           }   
        #ftext{
          color: black;
        }
img{
    width: 150px;
    height: 150px;
    }
.img {
    border: 1px solid #ddd; 
    border-radius: 4px;  /* Rounded border */
    padding: 5px; /* Some padding */
    width: 150px;/* Set a small width */
}

/* Add a hover effect (blue shadow) */
img:hover {
    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 1);
}


      .card {
        background-color: white;
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4);
    transition: 0.3s;
    width: 300px;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,1.2);
}

/* Add some padding inside the card container */
.item {
    padding: 2px 16px;
    
}       
    </style>
</head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

           <a class="navbar-brand" href="home.php">CancerConnect+</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home.php">Home</a></li>

             <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="about.php">About</a></li>
         </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container">
<div class="jumbotron">

      <center>
        <div class="card">
        <div class="item">
        <center>
        <h2>Cancer Map</h2>
        <a class="btn btn-lg btn-primary" href="map.php" role="button">See the Map &raquo;</a><br> <br>
        </center>
        </div>
        </div>
        </center>
</div>

      <div id="footer"><center>
      <h3 id="ftext">
      By <a href="about.php">Cancer Connect</a></h3>
      <h4 id="ftext"><b>All Rights reserved &copy; 2017 </b></h4></center>
      </div>
    </div> <!--/container ends -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </body>
</html>
