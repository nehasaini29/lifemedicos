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
//include('header.php');
$cat_id=$_GET['id'];
?>

<!--content-->

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
			<h3>Popular SubCategories</h3>
			
		</div>
			<?php														
																		
				$querysubcat="select * from 
				subcategory where cat_id=$cat_id";
				$res_subcat=mysqli_query($con,$querysubcat);
				while($row_subcat=mysqli_fetch_array($res_subcat))
				{
					
			?>
				<div class="col-md-4 kic-top1">
						<a href="allproducts.php?sid=<?php echo $row_subcat['subcat_id']; ?>">
						<img src="<?php echo $row_subcat['subcat_image']; ?>" class="img-responsive" alt="">
					</a>
					<h6><?php echo  $row_subcat['subcat_name'];?></h6>
					<p>Nam libero tempore</p>
				</div>
				
					<?php
					
				  }
				  
				  ?>
		
	</div>
</div>
	
<?php include('footer.php') ?>
</html>