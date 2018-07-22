<?php session_start();?>

<?php require("includes/_header.html"); ?>

<?php require("includes/_dbconnect.php");

$n=$_GET['n'];
$q1="SELECT * FROM userdetails WHERE id='$n'";
$q=mysqli_query($conn,$q1);

if($q)
{   
    $row=mysqli_fetch_assoc($q);

    $name=$row['name'];
    $id=$row['id'];
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
                        <td>Currently At</td>
                        <td><?php echo $ccoll;?></td>
                      </tr>
                      <tr>
                        <td>Specialization</td>
                        <td><?php echo $cbranch;?></td>
                      </tr>
                      <tr>
                        <td>City</td>
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
                        <td>Graduation College</td>
                        <td><?php echo $gcoll;?></td>
                      </tr>
                      <tr>
                        <td>Graduation Branch</td>
                        <td><?php echo $gbranch;?></td>
                      </tr>
                      <tr>
                        <td>Graduation Year</td>
                        <td><?php echo $year;?></td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            
          </div>
          
<?php require("includes/_footer.php"); ?>