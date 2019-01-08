
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
$msg="";
if(isset($_POST['btnsubmit']))
{
	 $oldpass=$_POST['txtoldpass'];
	 $newpass=$_POST['txtnewpass'];
	 $confirmpass=$_POST['txtconfirmpass'];
	  //session_start();
	  $id=$_SESSION['user_id'];
	
	$querypass="select * from register where reg_id=$id and password='$oldpass'";
	//echo $querypass;
	$respass=mysqli_query($con,$querypass);
	$countpass=mysqli_num_rows($respass);
	
	
	if($countpass==1)
	 {
		  $querypass1="update register set password='$newpass' where reg_id=$id";
		$respass1=mysqli_query($con,$querypass1);
		 $msg="password updated successfully";
	 }
	 else
	 {
		 $msg= "Invalid Username/Password";
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
		<h3 >ACCOUNT SETTING</h3>
		<h4><a href="index.php">Home</a><label>/</label>account setting</h4>
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
											<div class="main-agileits">
				<div class="form-w3agile">
					<h3>Change Password</h3>
					<form method="post">
                    Old Password<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Old Password" name="txtoldpass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							<div class="clearfix"></div>
						</div>
						New Password
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value=" New Password" name="txtnewpass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							<div class="clearfix"></div>
						</div>
						Confirm Password<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Confirm Password" name="txtconfirmpass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="update" name="btnsubmit">
						<p><?php echo $msg; ?></p>
					</form>
				</div>
				<div class="forg">
					
					<a href="register.php" class="forg-right">Register</a>
				<div class="clearfix"></div>
				</div>
			</div>
				
				 </div>
			   
			<div class="clearfix"> </div>
			</div>
		 

			</div>
		   <div class="clearfix"> </div>
	   </div>	
				 
				
	</div>
</div>
		<!---->


				</div>
<?php include('footer.php');?>