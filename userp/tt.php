<?php session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hospital</title>
    <link rel="icon" href="tt/images/logo.png" type="image/png">
    <link rel="stylesheet" href="tt/css/bootstrap1.min.css">
    <link rel="stylesheet" href="tt/css/themify-icons.css">
    <link rel="stylesheet" href="tt/css/swiper.min.css">
    <link rel="stylesheet" href="tt/css/select2.min.css">
    <link rel="stylesheet" href="tt/css/nice-select.css">
    <link rel="stylesheet" href="tt/css/owl.carousel.css">
    <link rel="stylesheet" href="tt/css/gijgo.min.css">
    <link rel="stylesheet" href="tt/css/all.min.css">
    <link rel="stylesheet" href="tt/css/tagsinput.css">
    <link rel="stylesheet" href="tt/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="tt/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="tt/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="tt/css/summernote-bs4.css">
    <link rel="stylesheet" href="tt/css/morris.css">
    <link rel="stylesheet" href="tt/css/material-icons.css">
    <link rel="stylesheet" href="tt/css/metisMenu.css">
    <link rel="stylesheet" href="tt/css/style1.css">
    <link rel="stylesheet" href="tt/css/default.css" id="colorSkinCSS">
  </head>
  <body class="crm_body_bg">
  <nav class="sidebar">
<div class="logo d-flex justify-content-between">
<a href="index.html"><img src="../../homep/favicons/logo.jpg" alt=""></a>
<div class="sidebar_close_icon d-lg-none">
<i class="ti-close"></i>
</div>
</div>
<ul id="sidebar_menu">
<li class="side_menu_title">
<span>Dashboard</span>
</li>
<li class="">
<a class="has-arrow" href="index.php" aria-expanded="false">

<img src="profile/images/1.svg" alt="">
<span>Dashboard</span>
</a>




<li class="">
<a class="has-arrow" href="profile-edit/index.php" aria-expanded="false">
<img src="profile/images/2.svg" alt="">
<span>Edit Profile</span>
</a>
</li>

<li class="">
<a class="has-arrow" href="tt.php" aria-expanded="false">
<img src="profile/images/2.svg" alt="">
<span>Change Password</span>
</a>
</li>


</ul>
</nav>
    <section class="main_content dashboard_part">
      
      <div class="main_content_iner ">
        <div class="container-fluid p-0">
          <div class="row justify-content-center">
            <div class="col-lg-12">
              <div class="white_box mb_30">
                <div class="row justify-content-center">
                  <div class="col-lg-6">
                    <div class="modal-content cs_modal">
                      <div class="modal-header">
                        <h5 class="modal-title">Forget Password</h5>
                      </div>
                      <div class="modal-body">
                        <form method="post">
                          <div class="mb-3">
                            <input type="text" name="email" class="form-control" placeholder="Enter your email">
                          </div>
                          <button type="submit" class="btn_1 full_width text-center" name="forgot_pass">Change</button>
                        </form>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container-fluid p-0">
          <div class="row justify-content-center">
            <div class="col-lg-12">
              <div class="white_box mb_30">
                <div class="row justify-content-center">
                  <div class="col-lg-6">
                    <div class="modal-content cs_modal">
                      <div class="modal-header">
                        <h5 class="modal-title">Change Password</h5>
                      </div>
                      <div class="modal-body">
                        <form method="post">
                          <div class="mb-3">
                            <input type="text" name="cpass" class="form-control" placeholder="Enter your Current Password">
                            <input type="text" name="npass" class="form-control" placeholder="Enter your New Password">
                            <input type="text" name="cnpass" class="form-control" placeholder="Enter your Confirm New Password">

                          </div>
                          <button type="submit" class="btn_1 full_width text-center" name="update_pass">Change</button>
                        </form>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer_part">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="footer_iner text-center">
                  <p>2020 © Influence - Designed by <a href="#">
                      <i class="ti-heart"></i>
                    </a>
                    <a href="#"> Dashboard</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="tt/js/jquery1-3.4.1.min.js"></script>
    <script src="tt/js/popper1.min.js"></script>
    <script src="tt/js/bootstrap1.min.js"></script>
    <script src="tt/js/metisMenu.js"></script>
    <script src="tt/js/jquery.waypoints.min.js"></script>
    <script src="tt/js/Chart.min.js"></script>
    <script src="tt/js/jquery.counterup.min.js"></script>
    <script src="tt/js/swiper.min.js"></script>
    <script src="tt/js/jquery.nice-select.min.js"></script>
    <script src="tt/js/owl.carousel.min.js"></script>
    <script src="tt/js/gijgo.min.js"></script>
    <script src="tt/js/jquery.dataTables.min.js"></script>
    <script src="tt/js/dataTables.responsive.min.js"></script>
    <script src="tt/js/dataTables.buttons.min.js"></script>
    <script src="tt/js/buttons.flash.min.js"></script>
    <script src="tt/js/jszip.min.js"></script>
    <script src="tt/js/pdfmake.min.js"></script>
    <script src="tt/js/vfs_fonts.js"></script>
    <script src="tt/js/buttons.html5.min.js"></script>
    <script src="tt/js/buttons.print.min.js"></script>
    <script src="tt/js/chart.min.js"></script>
    <script src="tt/js/jquery.barfiller.js"></script>
    <script src="tt/js/tagsinput.js"></script>
    <script src="tt/js/summernote-bs4.js"></script>
    <script src="tt/js/apexcharts.js"></script>
    <script src="tt/js/custom.js"></script>
  </body>
</html>

<?php
include 'connections/connection.php';
$sid=$_SESSION['id'];


if(isset($_POST['update_pass']))
{
    $cpass=$_POST['cpass'];
$npass=$_POST['npass'];
$cnpass=$_POST['cnpass'];
  $sql=mysqli_query($con,"SELECT * FROM `newreg` WHERE `id`='$sid' AND `pswd`='$cpass'");
  if(mysqli_num_rows($sql)>0)
  {
    if($npass==$cnpass)
    {
      $sql1="UPDATE `newreg` SET `pswd`='$npass' WHERE `id`=$sid";
      $result1=mysqli_query($con,$sql1);
      if($result1)
      {
        echo "<script>alert('Password Updated Successfully')</script>";
      }
      else
      {
        echo "<script>alert('Password Not Updated')</script>";
      }
    }
    else
    {
      echo "<script>alert('New Password and Confirm New Password Not Matched')</script>";
    }
  }
  else
  {
    echo "<script>alert('Current Password Not Matched')</script>";
  }
}
if(isset($_POST['forgot_pass']))
{
  $email=$_POST['email'];
  $sql=mysqli_query($con,"SELECT * FROM newreg WHERE id=$sid AND email='$email'");
  $row=mysqli_fetch_assoc($sql);
  if($sql)
  {
    echo "<script> alert('Your password: ". $row['pswd']."');</script>";
  }
  else
  {
    echo "<script>".$row['pswd']."</script>";

  }
}
?>