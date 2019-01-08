
<?php include('header.php');
$cat_id=$_GET['id'];
?>
<!-- //navigation -->
<!-- breadcrumbs -->
<style>
.col-m {
   
    height: 326px;
}
.img-responsive, .thumbnail > img, .thumbnail a > img, .carousel-inner > .item > img, .carousel-inner > .item > a > img {
   
    height: 232px;
   
    width: 100%;
}
</style>
<!--content-->
<div class="kic-top ">
	<div class="container ">
	<div class="kic ">
			<h3>Popular Blogs</h3>
			
		</div>
			<?php														
																		
				$querysubcatblog="select * from 
				hsubcatblogs where blog_id=$cat_id";
				$res_subcatblog=mysqli_query($con,$querysubcatblog);
				while($row_subcatblog=mysqli_fetch_array($res_subcatblog))
				{
					
			?>
				<div class="col-md-4 kic-top1">
						<a href="blogdesc.php?sid=<?php echo $row_subcat['blog_id']; ?>">
						<img src="<?php echo $row_subcat['blog_image']; ?>" class="img-responsive" alt="">
					</a>
					<h6><?php echo  $row_subcat['blog_title'];?></h6>
					<p>Nam libero tempore</p>
				</div>
				
					<?php
					
				  }
				  
				  ?>
		
	</div>
</div>
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Blogs</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!--- beverages --->
	<div class="hsubcatblogs">
		<div class="container">
			<div class="col-md-4 hsubcatblogs-left">
																																		
			</div>
			<div class="col-md-8 hsubcatblogs-right">
				<div class="hsubcatblogs-right-grid">
					<div class="hsubcatblogs-right-grids">
						<div class="sorting">
							<select id="country" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Default sorting</option>
								<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by popularity</option> 
								<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by average rating</option>					
								<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by price</option>								
							</select>
						</div>
						<div class="sorting-left">
							<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Item on page 9</option>
								<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Item on page 18</option> 
								<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Item on page 32</option>					
								<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>All</option>								
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				
				
				
				<div class="agile_top_brands_grids">
				<?php
				  $query_pro="select * from hsubcatblogs";
				  $res_pro=mysqli_query($con,$query_pro);
				  while($row_pro=mysqli_fetch_array($res_pro))
				  {
					  
				  
				?>
					
					
					
					<div class="col-md-6 top_brand_left">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="productdetail.php?id=<?php  echo $row_pro['blog_id'];?>"><img title=" "  style="height:150px;border:10px;" alt=" " src="<?php  echo $row_pro['blog_image'];?>"></a>		
												<p>
				<?php  echo substr($row_pro['blog_title'],0,30);?></p>
												<h4><?php  echo substr($row_pro['blog_desc'],0,200);?><span><?php  echo $row_pro['blog_addedon'];?>%</span></h4>
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