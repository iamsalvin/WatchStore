<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>A simple, clean, and responsive HTML invoice template</title>

		<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>
	</head>
    <?php
  
  include 'dbconnect.php';

  $sno=$_GET['id'];
  $data=mysqli_query($con,"select * from invoice where sno='$sno'");
  $res=mysqli_fetch_array($data);
  $datas=mysqli_query($con,"select * from invoiceitem where sno='$sno'");
  ?>


	<body>
		<div class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									<img
										src="invoice/website/images/logo.png"
										style="width: 100%; max-width: 300px"
									/>
								</td>

								<td>
									Invoice #: <?php echo $res['sno'];?><br />
									Created:  <?php echo $res['sdate'];?><br />
							
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
                                <?php echo $res['shipadd'];?><br />
                               
								</td>

								<td>
                                <?php echo $res['name'];?><br />
									
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td>Payment Method</td>
                    <td ></td>
                    <td ></td>
					<td>Online Payment</td>
				</tr>

				<tr class="details">
					<td>Card No</td>
                    <td ></td>
                    <td ></td>
					<td><?php echo $res['cardno'];?></td>
				</tr>

				<tr class="heading">
					<td>Item</td>

					<td>Price</td>
                    <td>Quantity</td>

					<td>Total</td>
                    
				</tr>
<?php
while($ds=mysqli_fetch_array($datas))
{

?>
				<tr class="item">
					<td><?php echo $ds['pname'];?></td>

					<td><?php echo $ds['price'];?></td>
                    <td><?php echo $ds['quantity'];?></td>

					<td><?php echo $ds['total'];?></td>
                    
				</tr>
<?php
}
?>
				<tr class="item">
					<td >Product Total</td>
                    <td ></td>
                    <td ></td>
					<td><?php echo $res['total'];?></td>
				</tr>

				<tr class="item last">
					<td >Shipment Charge</td>
                    <td ></td>
                    <td ></td>

					<td><?php echo $res['scharge'];?></td>
				</tr>
                <tr class="item last">
					<td ><b>Total:</b></td>
                    <td ></td>
                    <td ></td>
					<td><b><?php echo $res['gtotal'];?></b></td>
				</tr>
				
			</table>
		</div>
	</body>
</html>
