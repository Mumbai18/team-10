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
    //require("dbconnect.php");

if(!empty($_POST['email']))
{
    $count=0;
    $email = $_POST['email'];

require("class.phpmailer.php");
$mail = new PHPMailer;
//Enable SMTP debugging. 
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "innovolabs9@gmail.com";                 
$mail->Password = "DEVANSHSHAH";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = 587;                                   

$mail->From = "innovolabs9@gmail.com";
$mail->FromName = "Devansh";

$mail->addAddress($email, "Hello Vcare");

$mail->isHTML(true);

$mail->Subject = "Weekly Report";
$mail->Body = "<i>Hello Sir, Below is our attached budget and demographics report</i>";
//$mail->AltBody = "This is the plain text version of the email content";
$mail->AddAttachment('abc.pdf', $name = 'abc',  $encoding = 'base64', $type = 'application/pdf');

if(!$mail->send()) 
{echo "Mailer Error: " . $mail->ErrorInfo;} 
else 
{echo "Message has been sent successfully";}
   
}

?>
    <div class="container">
      <form class="form-signin" method="post" action="login.php">
        <h2 class="form-signin-heading">Get Reports</h2><br>

        <label for="inputEmail"  class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <button class="btn btn-primary btn-block" type="submit">Generate</button>
      </form>

      <div id="footer"><center>
      <h3 id="ftext">
      By <a href="about.php">Cancer Connect</a></h3>
      <h4 id="ftext"><b>All Rights reserved &copy; 2017 </b></h4></center>
      </div>

    </div> <!-- /container -->
  </body>
</html>
