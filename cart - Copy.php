<!doctype html>
<html lang="en">
  <head>
  	<title>Table 06</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="cart/css/style.css">

	</head>
    <?php
    include 'dbconnect.php';
    session_start();
    $un=$_SESSION['uname'];
    $data=mysqli_query($con,"select * from cart where uname='$un'");
    $t=0;

    ?>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-4">
					<h2 class="heading-section">CART</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h3 class="h5 mb-4 text-center">ITS YOUR CART</h3>
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						    	<!--<th>Photo</th>!-->
						    	<th>Product name</th>
						      <th>Price</th>
						      <th>Quantity</th>
						      <th>Total</th>
						     
						    </tr>
						  </thead>
						  <tbody>
                          <?php
                          while($rs=mysqli_fetch_array($data))
                          {
                            $t=$t+$rs['tot'];

                          ?>
						    <tr class="alert" role="alert">
						    	
						    
						      <td>
						      	<div class="email">
						      		<span><?php echo $rs['pname'];?></span>
						      		<span></span>
						      	</div>
						      </td>
						      <td><?php echo $rs['price'];?></td>
						      <td class="quantity">
                              <?php echo $rs['quantity'];?>
				          </td>
				          <td><?php echo $rs['tot'];?></td>
						      <td>
                              <a href="deletcart.php?id=<?php echo $rs['id'];?>">Cancel</a>
				        	</td>
						    </tr>
                            <?php
                          }
                          ?>
                            <tr class="alert" role="alert">
						    	
						    	
						      <td colspan="3" align="center">
                              payable amount
				          </td>
				          <td><?php echo $t;?></td>
						      <td>
                              
				        	</td>
						    </tr>
                           

						    
						  </tbody>

						</table>
                         <a  href="user.php" class="btn btn- danger">Add more</></a>
                         <a  href="paymnt.php?id=<?php echo $t;?>"  class="btn btn- danger" style="float: right;">Payment</></a>

					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="cart/js/jquery.min.js"></script>
  <script src="cart/js/popper.js"></script>
  <script src="cart/js/bootstrap.min.js"></script>
  <script src="cart/js/main.js"></script>

	</body>
</html>

