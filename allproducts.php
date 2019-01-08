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
}?>

<!--content-->

<style>
.col-m {
   
    height: 326px;
}
.offer-img img {
    
    height: 129px;
}
</style>
<!--content-->
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
		<div class="product">
		<div class="container">
			
				<div class=" con-w3l agileinf">
							
							
							
							<?php
									$id=$_GET['sid'];
								  $query_pro="select * from product where subcat_id=$id";
								  $res_pro=mysqli_query($con,$query_pro);
								  while($row_pro=mysqli_fetch_array($res_pro))
								  {
									  
							  
							?>
					
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="productdetail.php?id=<?php  echo $row_pro['prod_id'];?>" class="offer-img">
										<img src="<?php  echo $row_pro['pro_image1'];?>" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="productdetail.php?id=<?php  echo $row_pro['prod_id'];?>"><?php  echo substr($row_pro['pro_title'],0,30);?></a></h6>							
										</div>
										<div class="mid-2">
											<p >$<?php  echo $row_pro['pro_price'];?></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="37" data-name="Soap" data-summary="summary 37" data-price="4.50" data-quantity="1" data-image="images/of37.png">Add to Cart</button>
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
<?php include('footer.php') ?>
</html>