<?php  
include('header.php');
$cat_id=$_GET['id'];
?>
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Non-Prescription</li>
			</ol>
		</div>
	</div>
	<div class="products">
		<div class="container">
			<div class="col-md-8 products-right">
				<div class="agile_top_brands_grids">
				<?php														
																			
					$querysubcat="select * from 
					subcategory where cat_id=$cat_id";
					$res_subcat=mysqli_query($con,$querysubcat);
					while($row_subcat=mysqli_fetch_array($res_subcat))
					{
						
					?>
					<div class="col-md-4 top_brand_left">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
				<a href="allproducts.php?sid=<?php echo $row_subcat['subcat_id']; ?>"><img title=" " alt=" "  style="height:200px;width:200px;" src="<?php echo $row_subcat['subcat_image']; ?>"></a>		
												<p><?php echo  $row_subcat['subcat_name'];?></p>
											
											</div>
											<div class="snipcart-details top_brand_home_details">
												
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>	
				<?php		
					}	
				?>	
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<?php include('footer.php'); ?>