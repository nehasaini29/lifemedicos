  <?php 
  ob_start();
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




   <!--banner-->
 <div class="banner-top">
	<div class="container">
		<h3 style="font-size:2.0em;" >PRODUCT-DETAIL</h3>
		<h4><a href="index.php">Home</a><label>/</label>Product-detail</h4>
		<div class="clearfix"> </div>
	</div>
</div>
    <div class="products" style="margin-top:87px; margin-bottom:70px;">
		<div class="container">
		

		<?php 
					$search=$_POST['Search'];
					$query="select * from product where pro_title like '%$search%'";
					
					$res=mysqli_query($con,$query);
					while($row_data=mysqli_fetch_array($res))
					{
				?>
		
				
			<div class="agileinfo_single">
				<div class="col-md-4 agileinfo_single_left">
					<img id="example" src="<?php  echo $row_data['pro_image1']; ?>" alt=" " class="img-responsive">
				</div>
				<div class="col-md-8 agileinfo_single_right">
					<h2><?php  echo $row_data['pro_title']; ?></h2>
					
					<div class="w3agile_description"><br>
						<h4>Manufacturer :</h4>
						<p><?php  echo $row_data['manufacturer']; ?></p>
					</div>
					<div class="snipcart-thumb agileinfo_single_right_snipcart"><br>
					    <h4>Price</h4>
						<h4 class="m-sing">$<?php  echo $row_data['pro_price']; ?> <span></span></h4>
					</div>
					<div class="snipcart-thumb agileinfo_single_right_snipcart"><br>
					    <h4>After Discount price (Total Price)</h4>
						<h4 class="m-sing">$<?php  echo $row_data['pro_discount']; ?> <span></span></h4>
					</div>
					<div class="w3agile_description"><br>
						<h4>Description :</h4>
						<p><?php  echo $row_data['pro_desc'];?></p>
					</div>
					<div class="add" style="margin-top:29px; text-align:left; margin-bottom:30px;" >
					<form method="post">
						<button class="btn btn-danger my-cart-btn my-cart-b" type="submit" name="addcart" >Add to Cart</button>
					</form>
					</div>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			<?php
					}
			?>
		</form>
		</div>
	</div>

	
			

<!--footer-->
<?php include('footer.php');
ob_flush();?>