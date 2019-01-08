<!DOCTYPE html>
<html>
<head>
		<?php
session_start();
if(isset($_SESSION['user_id']))
{
	include('iheader.php');
	$id=$_SESSION['user_id'];
}
else
{
	include('header.php');
} 
	include('connect.php');
	?>
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/responsive.dataTables.css">
</head>
<body>
	
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
                <div class="banner-top">
                    <div class="container">
                        <h3 style="font-size:2.0em;" >PAYMENT</h3>
                        <h4><a href="index.php">Home</a><label>/</label>payment</h4>
                        <div class="clearfix"> </div>
                    </div>
                </div>
				<!-- Simple Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<strong class="card-title">Payment</strong>
								</div>
								<div class="card-body">
									<table id="bootstrap-data-table" class="table table-striped table-bordered">
									<thead>
									  <tr>
										
										<th>Transaction ID</th>
										<th>Product Name</th>
										<th>Email</th>
										<th>Total Amount</th>
										<th>Status</th>
										<th>Currency</th>
										<th>Date</th>
									  </tr>
									</thead>
										<tbody>
										 <?php
										$id = $_SESSION['user_id'];				
				$query="select p.*,pro.* from payment p join product pro on p.pro_id=pro.prod_id where  user_id=$id";
	//echo $query;			
										$res=mysqli_query($con,$query);
										while($row=mysqli_fetch_array($res))
										{
										
										?> 
										
										  <tr>
											<td><?php  echo $row['txn_id'];?></td>
											<td><?php  echo $row['item_name'];?></td>
											<td><?php  echo $row['payer_email'];?></td>
											<td><?php  echo $row['payment_amount'];?></td>
											<td><?php  echo $row['payment_status'];?></td>
											<td><?php  echo $row['payment_currency'];?></td>
											<td><?php  echo $row['payment_date'];?></td>
											
											
										  </tr>
									 <?php
										}
									 ?>
									 
									 
									 
										</tbody>
										</table>
									</div>
								</div>
							</div>

						</div>
				</div>
				<!-- Export Datatable End -->
			</div>
			<?php include('footer.php'); ?>
		</div>
	</div>
	<script src="src/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/media/js/dataTables.bootstrap4.js"></script>
	<script src="src/plugins/datatables/media/js/dataTables.responsive.js"></script>
	<script src="src/plugins/datatables/media/js/responsive.bootstrap4.js"></script>
	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/media/js/button/dataTables.buttons.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.bootstrap4.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.print.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.html5.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.flash.js"></script>
	<script src="src/plugins/datatables/media/js/button/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/media/js/button/vfs_fonts.js"></script>
	<script>
		$('document').ready(function(){
			$('.data-table').DataTable({
				scrollCollapse: true,
				autoWidth: false,
				responsive: true,
				columnDefs: [{
					targets: "datatable-nosort",
					orderable: false,
				}],
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"language": {
					"info": "_START_-_END_ of _TOTAL_ entries",
					searchPlaceholder: "Search"
				},
			});
			$('.data-table-export').DataTable({
				scrollCollapse: true,
				autoWidth: false,
				responsive: true,
				columnDefs: [{
					targets: "datatable-nosort",
					orderable: false,
				}],
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"language": {
					"info": "_START_-_END_ of _TOTAL_ entries",
					searchPlaceholder: "Search"
				},
				dom: 'Bfrtip',
				buttons: [
				'copy', 'csv', 'pdf', 'print'
				]
			});
			var table = $('.select-row').DataTable();
			$('.select-row tbody').on('click', 'tr', function () {
				if ($(this).hasClass('selected')) {
					$(this).removeClass('selected');
				}
				else {
					table.$('tr.selected').removeClass('selected');
					$(this).addClass('selected');
				}
			});
			var multipletable = $('.multiple-select-row').DataTable();
			$('.multiple-select-row tbody').on('click', 'tr', function () {
				$(this).toggleClass('selected');
			});
		});
	</script>
</body>
</html>