<?php require("includes/_header.html");?>
<head>
  <style type="text/css">
     #mainNav{
      background-color:#212529;
     }
  </style>
</head>
<?php require("includes/_dbconnect.php");


if(!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['password']))
{ 

if($_POST['password']!=$_POST['cpassword'])
  {
      echo'Password and Confirm password do not match';
  }
else
  {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
 
    $sql = "INSERT INTO users (name,password,email) VALUES ('$name', '$password', '$email')";
    $q = mysqli_query($conn,$sql);
    if($q)
      {
        session_start();
        $_SESSION['name']=$name;

        echo('Successfully added to database');
        
      }
      else
        {die('<h1>Couldnt save<h1>');}
  }//inner else
}
?>

    <div class="container">
      
    <div class="jumbotron">
      </div>

      <form class="form-signin" method="post" action="register.php">
        <h2 class="form-signin-heading"> User Register</h2>

        <label for="name" class="sr-only">Name</label>
        <input type="text" name="name" id="inputName" class="form-control" placeholder="Name" required autofocus><br>

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus><br>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required><br>

        <label for="inputPassword" class="sr-only">Confirm Password</label>
        <input type="password"  name="cpassword" id="inputConfirmPassword" class="form-control" placeholder="Confirm Password" required><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
      <center><a href="login.php"><p>Already Registered?Login Here</p></a></center>
    </div>
  </div>    
    
<?php require("includes/_footer.html");?>

