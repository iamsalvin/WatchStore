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

    <title>Table #8</title>
  </head>
  <?php
  session_start();
  include 'dbconnect.php';
  $un=$_GET['id'];
  $data=mysqli_query($con,"select * from invoiceitem where sno='$un'");
  ?>
  <body>
  

  <div class="content">
    
    <div class="container">
      <h2 class="mb-5">My Orders</h2>
      

      <div class="table-responsive custom-table-responsive">

        <table class="table custom-table">
          <thead>
            <tr>  

              
              
              <th scope="col">Serial No </th>
              <th scope="col">Product Name</th>
              <th scope="col">Quantity</th>
              <th scope="col">Price</th>
              <th scope="col">Total</th>
           
            </tr>
          </thead>
          <tbody>
            <?php
            while($row=mysqli_fetch_array($data))
            {

            ?>
            <tr scope="row">
              
              <td>
               <?php echo $row['slno'];?>

              </td>
              <td><a href="#"><?php echo $row['pname'];?></a></td>
              <td>
                
                <small class="d-block"><?php echo $row['quantity'];?></small>
              </td>
              <td><?php echo $row['price'];?></td>
              <td><?php echo $row['total'];?></td>
              
            </tr>
<?php
            }
            ?>
            
            
            
           
            
            
          </tbody>
        </table>
        <button class="button button--full" type="submit" name="submit">
          <a href="order.php" >Back</a>
        </button>
      </div>


    </div>

  </div>
    
    

    <script src="order/js/jquery-3.3.1.min.js"></script>
    <script src="order/js/popper.min.js"></script>
    <script src="order/js/bootstrap.min.js"></script>
    <script src="order/js/main.js"></script>
  </body>
</html>