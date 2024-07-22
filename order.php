<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="order/fonts/icomoon/style.css">

    <link rel="stylesheet" href="order/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="order/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="order/css/style.css">

    <title>Order </title>
  </head>
  <?php
  session_start();
  include 'dbconnect.php';
  $un=$_SESSION['uname'];
  $data=mysqli_query($con,"select * from invoice where custmid='$un'");
  ?>
  <body>
  

  <div class="content">
    
    <div class="container">
      <h2 class="mb-5">My Orders</h2>
      

      <div class="table-responsive custom-table-responsive">

        <table class="table custom-table">
          <thead>
            <tr>  

              
              
              <th scope="col">Sales No </th>
              <th scope="col">Purchase date</th>
              <th scope="col">Name</th>
              <th scope="col">Shipment Address</th>
              <th scope="col">Total</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while($row=mysqli_fetch_array($data))
            {

            ?>
            <tr scope="row">
              
              <td>
               <?php echo $row['sno'];?>

              </td>
              <td><a href="#"><?php echo $row['sdate'];?></a></td>
              <td>
                
                <small class="d-block"><?php echo $row['name'];?></small>
              </td>
              <td><?php echo $row['shipadd'];?></td>
              <td><?php echo $row['gtotal'];?></td>
              <td><?php echo $row['status'];?></td>
              <td><a href="Order-1.php?id=<?php echo $row['sno'];?>">More</a></td>
              <td><a href="invoice.php?id=<?php echo $row['sno'];?>">Invoice</a></td>
            </tr>
<?php
            }
            ?>
           
          </tbody>
        </table>
      </div>


    </div>

  </div>
    
    

    <script src="order/js/jquery-3.3.1.min.js"></script>
    <script src="order/js/popper.min.js"></script>
    <script src="order/js/bootstrap.min.js"></script>
    <script src="order/js/main.js"></script>
  </body>
</html>