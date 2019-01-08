<?php
 include('header.php');
$id=$_GET['sid'];
$query_data="select * from hsubcatblogs where blog_id=$id";
$res_data=mysqli_query($con,$query_data);
$row_data=mysqli_fetch_array($res_data);
 ?>


<div class="banner-top">
	<div class="container">
		<h3 style="font-size:2.0em;" >BLOG-DESCRIPTION</h3>
		<h4><a href="index.php">Home</a><label>/</label>blog-description</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="products" style="margin-top:87px; margin-bottom:70px;">
		<div class="container">
			<div class="agileinfo_single">
				<div class="col-md-4 agileinfo_single_left">
					<img id="example" src="<?php  echo $row_data['blog_image']; ?>" alt=" " class="img-responsive">
				</div>
				<div class="col-md-8 agileinfo_single_right">
					<h2><?php  echo $row_data['blog_title']; ?></h2>
					
					<div class="w3agile_description"><br>
						<u><h3>Description :</h3></u>
						<p style="margin-top: 20px;"><?php  echo $row_data['blog_desc'];?></p>
					</div>
					
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>		
<!--footer-->
<?php include('footer.php');
ob_flush();?>