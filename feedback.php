<?php require("includes/_header.html");?>

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
        echo('<h2>Successfully added to database</h2>');
        
      }
      else
        {die('<h1>Couldnt save<h1>');}
  }//inner else
}
?>

    <div class="container">
      
    <div class="jumbotron">
      </div>

      <form class="form-signin" method="post" action="feedback.php">
        <h2 class="form-signin-heading"> Feedback form for Volunteers</h2>

        <label for="name" class="sr-only">Patient Name</label>
        <input type="text" name="name" id="inputName" class="form-control" placeholder="Patient Name" required autofocus><br>

        <label for="name" class="sr-only">Volunteer Name</label>
        <input type="text" name="name" id="inputName" class="form-control" placeholder="Volunteer Name" required autofocus><br>

        <div class="form-group">
        <label for="feedback">Write your Feedback:</label>
          <textarea class="form-control" rows="5" id="feedback"></textarea>
        </div>

        <br>  

        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      </form>
    </div>
  </div>    
    
<?php require("includes/_footer.html");?>
