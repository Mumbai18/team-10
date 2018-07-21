<?php require("includes/_header.html");?>
<head>
  <style type="text/css">
     #mainNav{
      background-color:#212529;
     }
  </style>
</head>
<?php require("includes/_dbconnect.php");?>

<?php session_start();

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
      
    <div class="jumbotron">
      </div>
        <form class="form-signin" method="post" action="login.php">
        <h2 class="form-signin-heading">User Login</h2>

        <label for="inputEmail"  class="sr-only">Email address</label>
      
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <br>
        <label for="inputPassword" class="sr-only">Password</label>

        <input type="password"  name="password"id="inputPassword" class="form-control" placeholder="Password" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <br>
      </form>
      <br>
      <center><a href="register.php"><p>Not registered? Register first</p></a></center>
      <br>
    </div>  

<?php include_once("includes/_footer.html"); ?>