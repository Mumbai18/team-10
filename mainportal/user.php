<?php
require("dbconnect.php");
session_start();

$name=$_SESSION['name'];
$id=$_SESSION['id'];
$q1="SELECT * FROM userdetails WHERE name='$name'";
$q=mysqli_query($conn,$q1);

if($q)
{   
    $row=mysqli_fetch_assoc($q);

    $id=$row['id'];
    $_SESSION['id']=$id;

    $profilepic=$row['profilepic'];
    $bio=$row['bio'];
    
    $ccoll=$row['ccoll'];
    $cbranch=$row['cbranch'];
    $caddr=$row['caddr'];

    $mobile=$row['mobile'];
    $site=$row['site'];
      
    $gcoll=$row['gcoll'];
    $gbranch=$row['gbranch'];
    $year=$row['year'];
}

echo'<center><h3> Profile Page</h3>';
echo '<h4>Welcome '.$name.'</h4>';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="navbar-fixed-top.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <style>
        .navbar{
        background: linear-gradient(to left,#e6f3ff,#80c1ff);
        box-shadow: 2px 2px 4px black;
        }    img{width: 150px;
        height: 150px;

        }
        #footer{
        background: linear-gradient(to right,#e6f3ff,#80c1ff);
        /* background: linear-gradient(to right,#ffffff,#737373); */
        width:100% ;
        padding: 10px; 
        box-shadow: 2px 2px 4px black;

        }
        .img {
        border: 1px solid #ddd; /* Gray border */
        border-radius: 4px;  /* Rounded border */
        padding: 5px; /* Some padding */
        width: 150px;/* Set a small width */
        }

        /* Add a hover effect (blue shadow) */
        img:hover {
        box-shadow: 0 0 2px 1px rgba(0, 140, 186, 1);
        }
        .card {
        background: linear-gradient(to right,#e6f3ff,#80c1ff);
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4);
        transition: 0.3s;
        width: 300px;
        margin-bottom: 50px;
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
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="map.php">Map</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li ><a href="map.php">Map</a></li>
            <li ><a href="searchusers.php">Search Users</a></li>
            <li class="active"><a href="user.php">User</a></li>
            <li><a href="logout.php">Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <center>
        <div class="card">
        <div class="item">
        <center>
        <h3><?php echo $name; ?></h3>
        <h4><?php echo '<a target="_blank" href="profilepics/'.$profilepic.'">
        <img src="profilepics/'.$profilepic.'" alt="ProfilePic">
        </a>'?></h4>
       
        <br>
        <h4>Biography</h4>
        <h2><?php echo $bio;?></h2>
        <h4><?php echo "Id:".$id;?></h4>
        <a href="editprofile.php">Edit Profile</a><br>
        <a href="filesupload.php">Files Upload</a><br>
        <a href="registermap.php">Edit Location</a><br>
        </center>
        </div>
        </div>
    </center>
        
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">
        <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $name;?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-1 col-lg-1 " align="center"></div>
                
                
                <div class=" col-md-11 col-lg-11 ">
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>History</td>
                        <td><?php echo $bio;?></td>
                      </tr>
                      <tr>
                        <td>Gender</td>
                        <td><?php echo $cbranch;?></td>
                      </tr>
                      <tr>
                        <td>Age</td>
                        <td><?php echo $caddr;?></td>
                      </tr>
                   
                       <tr>
                        <tr>
                        <td>Mobile</td>
                        <td><?php echo $mobile;?></td>
                      </tr>
                        <tr>
                        <td>Website</td>
                        <td><?php echo $site;?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com">info@support.com</a></td>
                      </tr>
                           
                      </tr>
                      <tr>
                        <td>Address</td>
                        <td><?php echo $gcoll;?></td>
                      </tr>
                      <tr>
                        <td>occupation</td>
                        <td><?php echo $gbranch;?></td>
                      </tr>
                      <tr>
                        <td>Year</td>
                        <td><?php echo $year;?></td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            
          </div>


          <div id="footer"><center>
      <h3 id="ftext">
      By <a href="about.php">Cancer Connect</a></h3>
      <h4 id="ftext"><b>All Rights reserved &copy; 2017 </b></h4></center>
      </div>
      </div>
</body>
</html>