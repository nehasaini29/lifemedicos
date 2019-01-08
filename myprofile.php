  <?php
ob_start();

include('connect.php');
//$tid=$_GET['id'];
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

//echo $id."dddd";
$query="select * from register where reg_id=$id";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);	
if(isset($_POST['update']))
{
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$city=$_POST['ddlcity'];
	//$email_id=$_POST['email_id'];
	
	$id=$_SESSION['user_id'];
	move_uploaded_file($_FILES['fimage']['tmp_name'],"images/".$_FILES['fimage']['name']);
	$filepath="images/".$_FILES['fimage']['name'];
	
	$rquery="update register set first_name='$fname',last_name='$lname',city='$city',profile_pic='$filepath' where reg_id=$id";
	echo $rquery;
	$res=mysqli_query($con,$rquery);
	if($res)
	{
		header("location:myprofile.php");
	}
	
}
	
?>
<style>

.main-agileits {
    width: 96%;
}
.style {
    line-height: 1.6;
    margin-bottom: 10px;
    text-transform: uppercase;
    font-size: 17px;
}
</style>

<div class="banner-top">
	<div class="container">
		<h3 >MY PROFILE</h3>
		<h4><a href="index.html">Home</a><label>/</label>my profile</h4>
		<div class="clearfix"> </div>
	</div>
</div>
		<div class="single">
			<div class="container">
						<div class="single-top-main">
	   		<?php
			include('userside.php');
			?>
			<div class="col-md-7 single-top-left ">
			<div class="single-right">
				<div class="single-page">
				<div class="single-page">
				<div class="single-page-row" id="detail-21">
					<div class="col-md-6 single-top-left">	
						
						
							<img src="<?php echo $row['profile_pic']; ?>"  class="img-responsive" alt="image">
							<form  method="post" enctype="multipart/form-data">
							<div class="row form-group">
							  <div class="col col-md-3"><label for="file-input" class=" form-control-label">Profile Pic</label></div>
							  <div class="col-12 col-md-9"><input type="file" id="file-input" name="fimage" class="form-control-file"></div>
							</div>
					  
						
					</div>
					
					
					<div class="col-md-6 single-top-right">
						
						<div class="demo-data">
							
		<div class="container">
			<div class="agileinfo_single">
				
				
					
					<div class="w3agile_description"><br>
						<h4>First Name :</h4>
						<p><?php  echo $row['first_name']; ?></p>
					</div>
					<div class="w3agile_description"><br>
						<h4>Last Name :</h4>
						<p><?php  echo $row['last_name']; ?></p>
					</div>
					
					<div class="snipcart-thumb agileinfo_single_right_snipcart"><br>
					    <h4>email id :</h4>
						<h4 class="m-sing"><?php  echo $row['email_id']; ?> <span></span></h4>
					</div>
					<div class="snipcart-thumb agileinfo_single_right_snipcart"><br/>
								<h4>City :<?php  echo $row['city']; ?> <span></span></h4></h4>
						    </div><br/>
					
						
                            First Name<input type="text" name="firstname" value="<?php  echo $row['first_name']; ?>"/><br/><br/>					
                            Last Name<input type="text" name="lastname" value="<?php  echo $row['last_name']; ?>"/><br/><br/>					
							<div class="clearfix"></div>
					City<select name="ddlcity" style="width:183px;">
							
							<option>Select city</option>
							<option>Jalandhar</option>
							<option>Amritsar</option>
							<option>Moga</option>
							<option>Hoshiarpur</option>
							<option>Chandigarh</option>
							<option>Mohali</option>
							<option>Nawa-shahar</option>
							<option>Panchkula</option>
							<option>Faridkot</option>
							
							</select><br/><br>
							
							
							<button type="submit" class="w3ls-cart" name="update"> Update</button>
						</div>
						
						</form>
						
					</div>
					
				   <div class="clearfix"> </div>  
				</div>
				</div>
				</div>
			   
			<div class="clearfix"> </div>
			</div>
			</div>
		 

			</div>
		   <div class="clearfix"> </div>
	   </div>	
				 
				
	</div>
</div>
		<!---->


				</div>
<?php include('footer.php');?>