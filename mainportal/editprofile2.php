<?php
session_start(0);
require("dbconnect.php");

//$id=$_SESSION['id'];

/*if (isset($_SESSION['name']))
{*/
      $name = $_SESSION['name'];

if(isset($_POST['btn-upload']))
{    
     
	$file =$_FILES['file']['name'];
  $file_loc = $_FILES['file']['tmp_name'];
	
	
	$folder="profilepics/";
	
	$new_file_name = strtolower($file);
	$final_file=str_replace(' ','-',$new_file_name);
	$bio=$_POST['bio'];

  $ccoll=$_POST['ccoll'];
  $cbranch=$_POST['cbranch'];
  $caddr=$_POST['caddr'];

  $mobile=$_POST['mobile'];
  $site=$_POST['site'];
  
  $gcoll=$_POST['gcoll'];
  $gbranch=$_POST['gbranch'];
  $year=$_POST['year'];


	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
   $sql="INSERT INTO userdetails (name,profilepic,bio,ccoll,cbranch,caddr,mobile,site,gcoll,gbranch,year) VALUES ('$name','$final_file','$bio','$ccoll','$cbranch','$caddr','$mobile','$site','$gcoll','$gbranch','$year')";


		$q=mysqli_query($conn,$sql);
		if(!$q)
			echo "<h1>Couldnt add to database</h1>";
		else
			echo "<h1>Succesfully Edited</h1>";
      header('Location: user.php');

	}
}
//}
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
</head>
    <style>
        .navbar{
        background: linear-gradient(to left,#e6f3ff,#80c1ff);
        box-shadow: 2px 2px 4px black;
        }    
        img{width: 150px;
        height: 150px;

        }
        #footer{
        background: linear-gradient(to right,#e6f3ff,#80c1ff);
        width:100% ;
        padding: 10px; 
        box-shadow: 2px 2px 4px black;
        }
form{
	padding-bottom: 5px;
	margin-left: 300px; 
	text-align: center;
}
.bun{
	margin-left: -200px;
}
    </style>

<script >

$(document).ready(function() {
    var brand = document.getElementById('logo-id');
    brand.className = 'attachment_upload';
    brand.onchange = function() {
        document.getElementById('fakeUploadLogo').value = this.value.substring(12);
    };
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
                $('.img-preview').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#logo-id").change(function() {
        readURL(this);
    });
});
</script>

<style>
.btn-danger {background-color: #B73333;}
/* File Upload */
.fileUpload {
    position: relative;
    overflow: hidden;
}
.fileUpload #logo-id
  {
       position: absolute;
      top: 0;
      right: 0;
      margin: 0;
      padding: 0;
      font-size: 33px;
      cursor: pointer;
      opacity: 0; 
      filter: alpha(opacity=0);
  } 
.img-preview {
    max-width: 100%;
}
</style>

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
          <a class="navbar-brand" href="map.php">Maps</a>
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




<div id="body" ><br><br><br>
  <h3 align="center">Add your profile details <?php echo $name; ?></h3>

    <form class="form-signin" method="post" action="editprofile2.php" enctype="multipart/form-data">
        <h2 class="form-signin-heading"> Profile</h2>

      <div class="main-img-preview" align="center">
      <!-- <?php echo '<img class="thumbnail img-preview" src="profilepics/'.$profilepic.'" alt="ProfilePic">'?> -->

      <img class="thumbnail img-preview" src="https://cdn2.iconfinder.com/data/icons/user/539/default-avatar.png">
      </div>
      <div class="fileUpload btn btn-danger ">
        <span><i class="glyphicon glyphicon-upload"></i> Select Profile Pic</span>
        <input id="logo-id" name="file" type="file" class="attachment_upload" />
      </div>
        
    <br> <br><input type="text" name="bio" id="inputName" class="form-control" placeholder="Add your BIO"  required autofocus>

    <h2 class="form-signin-heading"> User Details</h2>
        <input type="text" name="ccoll" id="inputName" class="form-control" placeholder="Current University/Company"  required autofocus>

        <input type="text" name="cbranch" id="inputName" class="form-control" placeholder="Branch/Specialization"  required autofocus>

        <input type="text" name="caddr" id="inputName" class="form-control" placeholder="Current Address/City"  required autofocus>
        
        <h3>Contact Details</h3>
        <input type="text" name="mobile" id="inputName" class="form-control" placeholder="Mobile No"  autofocus>

        
        <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email"  required autofocus>

        
        <input type="text" name="site" id="inputPassword" class="form-control" placeholder="Website"  >


        <h3>Graduation</h3>
        
        <input type="text" name="gcoll" id="inputName" class="form-control" placeholder="Graduation College (DJ Sanghvi)"  required autofocus>

        
        <input type="text" name="gbranch" id="inputEmail" class="form-control" placeholder="Branch"  required autofocus>
        
        <input type="text" name="year" id="inputName" class="form-control" placeholder="Year of passing "  required autofocus><br>

    <button class="btn btn-lg btn-primary btn-block" type="submit" name="btn-upload">Update Profile</button>
	</form>

  <div id="footer"><center>
      <h3 id="ftext">
      By <a href="about.php">Cancer Connect</a></h3>
      <h4 id="ftext"><b>All Rights reserved &copy; 2017 </b></h4></center>
      </div>
	
</div>
</body>
</html>