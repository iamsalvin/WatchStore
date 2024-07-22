<?php 
session_start(); 
include '../connections/connection.php';
$sid = $_SESSION['id'];
$sql=mysqli_query($con,"SELECT * FROM `newreg` WHERE `id`='$sid'");
$row=mysqli_fetch_assoc($sql);

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - profile edit</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->

<div class="container">
    <h1>Edit Profile</h1>
    <a href="../index.php" class="btn btn-primary">Back</a>
  	<hr>
	<div class="row">
      <!-- left column -->
      <form  >
      <div class="col-md-3">

      </div>
      </form>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">

        <h3>Personal info</h3>
        
        <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
          
 

          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="name" value="<?php echo $row['fname']; ?>">
            </div>
          </div>
            <div class="form-group">
            <label class="col-lg-3 control-label">Username:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="uname" value="<?php echo $row['uname']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Mail:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="mail" value="<?php echo $row['email']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Phone no:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="phno" value="<?php echo $row['phno']; ?>">
            </div>
          </div>
          
        
        
          
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <button type="submit" class="btn btn-primary" name="submit">Save Changes</button>
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $uname=$_POST['uname'];
        $mail=$_POST['mail'];
        $phno=$_POST['phno'];
 


$sql = mysqli_query($con, "UPDATE `newreg` SET `fname`='$name',`uname`='$uname',`email`='$mail',`phno`='$phno' WHERE `id`='$sid'");

if ($sql) {
  echo "<script>alert('Profile Updated Successfully');window.location.href='index.php';</script>";
} else {
  echo "<script>alert('Profile Not Updated');window.location.href='index.php';</script>";
}

    }
?>