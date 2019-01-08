<?php 
//include('header.php');
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
 ?>
  <!---->
  <style>
  .hold.html
  {
	  height:100px;
  }
  .banner-info {
   
    margin-top: -320px;
}
.col-m {
    
    margin-bottom: 47px;
    height: 341px;
}
  </style>
	
		<div class="container-fluid">
			<img src="./images/banner5.jpg" alt="banner-image" width="100%"; height="550px";/>
			<div class="banner-info">
				
				<h3>It is a long established fact that a reader will be distracted by 
				the readable </h3>	
				<div class="search-form">
					<form action="searchresult.php" method="post">
						<input type="text" placeholder="Search..." name="Search">
						<input type="submit" value=" " >
					</form>
			</div>		
		</div>	
    
</div>

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="js/jquery.vide.min.js"></script>

<!--content-->
<div class="content-top ">
	<div class="container ">
		<div class="spec ">
			<h3>Special Offers</h3>
			<div class="ser-t">
				<b></b>
				<span><i></i></span>
				<b class="line"></b>
			</div>
		</div>
			<div class="tab-head ">
				<nav class="nav-sidebar">
					<ul class="nav tabs ">
					  
					  
					  <li class=""><a href="#tab3" data-toggle="tab">Medicine</a></li>  
					  
					</ul>
				</nav>
				<div class=" tab-content tab-content-t ">

					<div class="tab-pane active text-style" id="tab1">
					
						<div class="con-w3l">
							
							<?php
									$queryoffer="select prod_id, pro_title,pro_price,pro_discount,pro_image1,pro_quantity from product LIMIT 12";								
									
									$resoffer=mysqli_query($con,$queryoffer);
									while($rowoffer=mysqli_fetch_array($resoffer))
									{
										?>
							
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									 
										<a href="productdetail.php?id=<?php  echo $rowoffer['prod_id'];?>"  class="offer-img">
										<img src=<?php echo $rowoffer['pro_image1']?> class="img-responsive" 
										
										alt="";>
										<div class="offer"><p><span>Offer</span></p></div>
										</a>
										<div class="mid-1">
											<div class="women">
												<h6><a href="subcategory.php?id=<?php echo $rowoffer['prod_id']; ?>"><?php echo substr($rowoffer['pro_title'],0,40)."..";?></a> </h6>							
											</div>
											<div class="mid-2">
												<p >$<?php echo $rowoffer['pro_price']?></p>
												<div class="block">
													<div class="starbox small ghosting"> </div>
												</div>
												<div class="clearfix"></div>
											</div>
											
										<div class="add">
										   <a href="productdetail.php?id=<?php  echo $rowoffer['prod_id']; ?>"   class="btn btn-danger my-cart-btn my-cart-b "  >view detail</a>
										</div>
										

										
										
									</div>
								</div>
								</div>

								<?php
										}
								?>
							
							
							<div class="clearfix"></div>
						 </div>
					</div>
					
					
		
	</div>
	</div>
	</div>

<!--content-->
<div class="content-mid">
	<div class="container">
		
		<div class="col-md-4 m-w3ls">
			<div class="col-md1 ">
				<a href="kitchen.html">
					<img src="images/image3.jpg" class="img-responsive img" alt="" style="height:310px;">
					<div class="big-sa">
						<h6>New Collections</h6>
						<h3>Season<span>ing </span></h3>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 m-w3ls1">
			<div  class="col-md ">
				<a  href="hold.html">
					<img src="images/image4.jpg" class="img-responsive img" alt="" style="height:310px;">
					<div class="big-sale">
						<div class="big-sale1">
							<h3>Big <span>Sale</span></h3>
							<p>It is a long established fact that a reader </p>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 m-w3ls">
			
			<div class="col-md3 ">
				<a href="hold.html">
					<img src="images/image5.jpg" class="img-responsive img1" alt="" style="height:310px;">
					<div class="big-sale3">
						<h3>Vegeta<span>bles</span></h3>
						<p>It is a long established fact that a reader </p>
					</div>
				</a>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--content-->
  <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
         <a href="index.php"> <img class="first-slide" src="images/non-prescriptions_1920.jpg" alt="First slide"></a>
       
        </div>
        <div class="item">
         <a href="index.php"> <img class="second-slide " src="images/ayurvedic_1920.jpg" alt="Second slide"></a>
         
        </div>
        <div class="item">
          <a href="index.php"><img class="third-slide " src="images/otc_1920.jpg" alt="Third slide"></a>
          
        </div>
      </div>
    
    </div><!-- /.carousel -->

<!--content-->
	<div class="product">
		<div class="container">
			
							<div class="clearfix"></div>
						 </div>
		</div>
	</div>
<!--footer-->
<?php include('footer.php'); ?>