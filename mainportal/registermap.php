<!DOCTYPE html>
<html lang="en">
  <head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    
    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
     <link href="style.css" rel="stylesheet">
          <style >
       #footer{
           background: -webkit-linear-gradient(left, #e6f3ff, #80c1ff);
           background: -o-linear-gradient(left, #e6f3ff, #80c1ff);
           background: linear-gradient(to right, #e6f3ff, #80c1ff);
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
.jumbotron{
  margin-top: -125px;
}

.form-control{
	width:50%;
}
.btn{
width: 20%;
}
</style>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8DFyRxuVaYalT2v5ajYfkPFhNa8_r1lo&libraries=places"></script>

<script>
function initialize() {
var input = document.getElementById('searchTextField');
var autocomplete = new google.maps.places.Autocomplete(input);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
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
          <a class="navbar-brand" href="home.php">DJ Cancer</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li ><a href="map.php">Map</a></li>
            <li><a href="searchusers.php">SearchUser</a></li>
            <li><a href="user.php">User</a></li>
            <li class="active"><a href="registermap.php">Register</a></li>
            <li><a href="about.php">About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <?php
session_start();
$name=$_SESSION['name'];
$id=$_SESSION['id'];

require("dbconnectmap.php");

function geocode($address){
    $address = urlencode($address);
    $url = "http://maps.google.com/maps/api/geocode/json?address={$address}";
    $response = file_get_contents($url);
    $resp = json_decode($response, true);
    $lat=$resp['results'][0]['geometry']['location']['lat'];
    $long=$resp['results'][0]['geometry']['location']['lng'];
    $addr = $resp['results'][0]['formatted_address'];
            $locn = array();
            array_push($locn, $lat, $long, $addr);
             return $locn;
    }
if(!empty($_POST['searchTextField']))
{ 
    $address = trim($_POST['searchTextField']);
   

  $locn= geocode($address);
	$lat=$locn[0];
	$lon=$locn[1];
	$addr=$locn[2];
     $sql = "INSERT INTO maps4 (id,name,latitude,longtitude,link) VALUES ('$id','$name', '$lat', '$lon','$name')";
    $q = mysqli_query($conn,$sql);
    if($q)
      {
        echo('<br><br><br>Successfully added to database');
          header("Location: map.php");
      }
      else
        {die('<h1>Couldnt save</h1>');}
}
?>

    <div class="container">
    <center>
    <div class="jumbotron">
      </div><br><br><br><br><br>

      <form class="form-signin" method="post" action="registermap.php">
       <h2 class="form-signin-heading" align="center">Update Location</h2>
       <br><?php echo $name.$id; ?><br>
       <input id="searchTextField" type="text"  name="searchTextField" class="form-control" style="width:350px" placeholder="Address" required autofocus><br>
      <button class="btn btn-lg btn-primary btn-block" style="width:100px" type="submit">Submit</button>
      </form></center>

      <div id="footer"><center>
      <h3 id="ftext">
      By <a href="about.php">Cancer Connect</a></h3>
      <h4 id="ftext"><b>All Rights reserved &copy; 2017 </b></h4></center>
      </div>

    </div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </body>
</html>