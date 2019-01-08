<?php
 include('header.php');
 include('connect.php');
 
if(isset($_POST['btnsubmit']))
 { 
	 
	 $pid=$_POST['productid'];
	 $ptitle=$_POST['title'];
	 
	 $pdesc=$_POST['description'];
	 $pprice=$_POST['price'];
	 $pcatid=$_POST['cat-id'];
	 $psubcatid=$_POST['subcat-id'];
	 $pdiscount=$_POST['discount'];
	 $pimage=$_POST['image'];
	 
	 
	 
	 $pquery="insert into product(prod_id,pro_title,pro_desc,pro_price,cat_id,subcat_id,pro_discount,pro_image1) values('$pid','$ptitle','$pdesc','$pprice',$pcatid,$psubcatid,'$pdiscount','$pimage')";
	
	 
	 $pres=mysqli_query($con,$pquery);//true/false
	 if($pres)
	 {
		 echo "Data inserted Successfully";
	 }
	 else
	 {
		echo "Error in insertion".mysqli_error($con);
	 }
 
}
?>


     <!--banner-->
     <div class="banner-top">
	<div class="container">
		<h3 >Add Product</h3>
		<h4><a href="index.php">Home</a><label>/</label>Add Product</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!--login-->

	<div class="product add">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Add Product</h3>
					<form  method="post">
					<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="productid" name="productid" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'productid';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="title" name="title" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'title';}" required="">
							<div class="clearfix"></div>
						</div>
						
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="description" name="description" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'description';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="price" name="price" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'price';}" required="">
							<div class="clearfix"></div>
						</div>
						
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="category-id" name="cat-id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'cat-id';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="sub category-id" name="subcat-id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'subcat-id';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="discount" name="discount" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'discount';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="image" name="image" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'image';}" required="">
							<div class="clearfix"></div>
						</div>
						
						<input type="submit" value="Submit" name="btnsubmit" >
					</form>
				</div>
				
			</div>
		</div>
<?php include('footer.php'); ?>