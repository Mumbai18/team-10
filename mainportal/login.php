<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="navbar-fixed-top.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
    <style type="text/css">
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
          <a class="navbar-brand" href="login.php">Maps</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="home.php">Home</a></li>
            <li class="active"><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="about.php">About</a></li>
         </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<?php
session_start();
    require("dbconnect.php");

if (isset($_SESSION['name']))//already loggedin
    {
        $uname = $_SESSION['name'];
        header('Location: user.php');
    }

if(!empty($_POST['email'])&&!empty($_POST['password']))
{
    $count=0;
    $email = $_POST['email'];
    $password =$_POST['password'];
    $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
    $q=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($q);
    if($count==1)
    { 
        $row = mysqli_fetch_assoc($q);
        $name=$row['name'];
        $id=$row['row'];
        $_SESSION['id']=$id;
        $_SESSION['name']=$name;
        $_SESSION['row']=$row;
         header('Location: user.php');
       
    }
    
    else
    {echo ("<h2>Incorrect email or Password </h2>");}
}

?>
    
    <div class="container">

      <form class="form-signin" method="post" action="login.php">
        <h2 class="form-signin-heading">User Login</h2>

        <label for="inputEmail"  class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password"  name="password"id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
      <center><a href="register.php"><p>Not registered? Register first</p></a></center>

      <div id="footer"><center>
      <h3 id="ftext">
      By <a href="about.php">Cancer Connect</a></h3>
      <h4 id="ftext"><b>All Rights reserved &copy; 2017 </b></h4></center>
      </div>

    </div> <!-- /container -->
  </body>
</html>
