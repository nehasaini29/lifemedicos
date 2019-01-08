<?php  include('header.php');?>
<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Non-Prescription</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!--- beverages --->
	<div class="products">
		<div class="container">
			
			<div class="col-md-8 products-right">
				
				
				
				
				<div class="agile_top_brands_grids">
				<?php
				$id=$_GET['sid'];
				  $query_pro="select * from product where subcat_id=$id";
				  $res_pro=mysqli_query($con,$query_pro);
				  while($row_pro=mysqli_fetch_array($res_pro))
				  {
					  
				  
				?>
					
					
					
					<div class="col-md-4 top_brand_left">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
				<a href="productdetail.php?id=<?php  echo $row_pro['prod_id'];?>">
				<img title=" "  style="height:150px;" alt=" " src="<?php  echo $row_pro['pro_image1'];?>"></a>		
												<p>
				<?php  echo substr($row_pro['pro_title'],0,30);?></p>
												<h4>$<?php  echo $row_pro['pro_price'];?><span><?php  echo $row_pro['pro_discount'];?>%</span></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												
														
								<a href="productdetails.php" class="button">View Details</a>
													
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
<!--- beverages --->
<!-- //footer -->
<?php include('footer.php'); ?>