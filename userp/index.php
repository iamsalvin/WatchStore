<?php session_start(); ?>
<!DOCTYPE html><html lang="zxx"><head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Customer Profile</title>
<link rel="icon" href="images/logo.png" type="image/png">

<link rel="stylesheet" href="profile/css/bootstrap1.min.css">

<link rel="stylesheet" href="profile/css/themify-icons.css">

<link rel="stylesheet" href="profile/css/swiper.min.css">

<link rel="stylesheet" href="profile/css/select2.min.css">

<link rel="stylesheet" href="profile/css/nice-select.css">

<link rel="stylesheet" href="profile/css/owl.carousel.css">

<link rel="stylesheet" href="profile/css/gijgo.min.css">

<link rel="stylesheet" href="profile/css/all.min.css">
<link rel="stylesheet" href="profile/css/tagsinput.css">

<link rel="stylesheet" href="profile/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="profile/css/responsive.dataTables.min.css">
<link rel="stylesheet" href="profile/css/buttons.dataTables.min.css">

<link rel="stylesheet" href="profile/css/summernote-bs4.css">

<link rel="stylesheet" href="profile/css/morris.css">

<link rel="stylesheet" href="profile/css/material-icons.css">

<link rel="stylesheet" href="profile/css/metisMenu.css">

<link rel="stylesheet" href="profile/css/style1.css">
<link rel="stylesheet" href="profile/css/default.css" id="colorSkinCSS">
</head>
<body class="crm_body_bg">


<?php
include 'connections/connection.php';
$sid=$_SESSION['id'];
$sql=mysqli_query($con,"SELECT * FROM `newreg` WHERE `id`='$sid'");
$row=mysqli_fetch_assoc($sql);

?>




<nav class="sidebar">
<a align=left href="../user.php">back</a>

<div class="logo d-flex justify-content-between">
<a href="index.html"><img src="../../homep/favicons/logo.jpg" alt=""></a>
<div class="sidebar_close_icon d-lg-none">
<i class="ti-close"></i>
</div>
</div>
<ul id="sidebar_menu">
<li class="side_menu_title">
<span>Dashboard <?php echo $sid; ?></span>
</li>
<li class="">
<a class="has-arrow" href="index.php" aria-expanded="false">

<img src="profile/images/1.svg" alt="">
<span>Dashboard</span>
</a>

</li>
<li class="side_menu_title">
<span>Applications</span>
</li>



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

<div class="col-md-6"style="  margin: auto;
  width: 100%;
  padding: 10px;">
<div class="white_box mb_30"style="  margin: auto;
  width: 100%;
  padding: 10px;">
<div class="box_header "style="  margin: auto;
  width: 100%;
  padding: 10px;">
<div class="main-title">
<h3 class="mb-0">Customer Profile </h3>
<li><a href="../logout.php" >&#x2190 Log Out </a></li>
</div>
</div>
<div class="profile_card_5">
<div class="cover-photo">
</div>
<div class="profile-name"> <h4>Name: <?php echo $row['fname'];?></h4></div>
<div class="profile-name"> <h4>Phoneno: <?php echo $row['phno'];?></h4></div>
<div class="profile-name"> <h4>Username:  <?php echo $row['uname'];?></h4></div>
<div class="profile-name"> <h4>Email: <?php echo $row['email'];?></h4></div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>

</div></section>


<script src="profile/js/jquery1-3.4.1.min.js"></script>

<script src="profile/js/popper1.min.js"></script>

<script src="profile/js/bootstrap1.min.js"></script>

<script src="profile/js/metisMenu.js"></script>

<script src="profile/js/jquery.waypoints.min.js"></script>

<script src="profile/js/Chart.min.js"></script>

<script src="profile/js/jquery.counterup.min.js"></script>

<script src="profile/js/swiper.min.js"></script>

<script src="profile/js/jquery.nice-select.min.js"></script>

<script src="profile/js/owl.carousel.min.js"></script>

<script src="profile/js/gijgo.min.js"></script>

<script src="profile/js/jquery.dataTables.min.js"></script>
<script src="profile/js/dataTables.responsive.min.js"></script>
<script src="profile/js/dataTables.buttons.min.js"></script>
<script src="profile/js/buttons.flash.min.js"></script>
<script src="profile/js/jszip.min.js"></script>
<script src="profile/js/pdfmake.min.js"></script>
<script src="profile/js/vfs_fonts.js"></script>
<script src="profile/js/buttons.html5.min.js"></script>
<script src="profile/js/buttons.print.min.js"></script>
<script src="profile/js/chart.min.js"></script>

<script src="profile/js/jquery.barfiller.js"></script>

<script src="profile/js/tagsinput.js"></script>

<script src="profile/js/summernote-bs4.js"></script>
<script src="profile/js/apexcharts.js"></script>

<script src="profile/js/custom.js"></script>

</body></html>