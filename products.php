<?php  include('header.php');?>
<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Beverages</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!--- beverages --->
	<div class="products">
		<div class="container">
			<div class="col-md-4 products-left">
				<div class="categories">
					<h2>Categories</h2>
					<ul class="cate">
						<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Fruits And Vegetables</a></li>
							<ul>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Cuts & Sprouts</a></li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Flowers</a></li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Fresh Herbs & Seasonings</a></li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Fresh Vegetables</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>International Vegetables</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Organic Fruits & Vegetables</a></li>
							</ul>
						<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Grocery & Staples</a></li>
							<ul>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Dals & Pulses</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Dry Fruits</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Edible Oils & Ghee</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Flours & Sooji</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Masalas & Spices</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Organic Staples</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Rice & Rice Products</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Salt, Sugar & Jaggery</a></li>
							</ul>
						<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>PersonalCare</a></li>
							<ul>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Baby Care</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Cosmetics</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Deos & Perfumes</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Skin Care</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sanitary Needs</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Oral Care</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Personal Hygiene</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Shaving Needs</a></li>
							</ul>
					</ul>
				</div>																																												
			</div>
			<div class="col-md-8 products-right">
				<div class="products-right-grid">
					<div class="products-right-grids">
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
				  $query_pro="select * from product";
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
												<a href="productdetail.php?id=<?php  echo $row_pro['prod_id'];?>"><img title=" "  style="height:150px;border:10px;" alt=" " src="<?php  echo $row_pro['pro_image1'];?>"></a>		
												<p>
				<?php  echo substr($row_pro['pro_title'],0,30);?></p>
												<h4>Rs.<?php  echo $row_pro['pro_price'];?><span><?php  echo $row_pro['pro_discount'];?>%</span></h4>
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