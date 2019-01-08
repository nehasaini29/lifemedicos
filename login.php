<?php 
ob_start();
include('header.php');
include('connect.php');

$msg="";
if(isset($_POST['btnsubmit']))
 { 
	 $password=$_POST['password'];
	 $email=$_POST['Email'];
	 
	 
	 $querylogin="select * from register where email_id='$email' and password='$password'";
	 //echo $querylogin;
	 $res=mysqli_query($con,$querylogin);
	 $countlog=mysqli_num_rows($res);
	 if($countlog==1)
	 {
		 session_start();
		$row= mysqli_fetch_array($res);
		 $_SESSION["user_id"]=$row["reg_id"];
		 header("location:myprofile.php");
	 }
	 else
	 {
		 $msg= "Invalid Username/Password";
	 }
 }
	 
	 

?>
<div class="banner-top">
	<div class="container">
		<h3 >Login</h3>
		<h4><a href="index.html">Home</a><label>/</label>Login</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<!--login-->

	<div class="login">
	
		<div class="main-agileits">
				<div class="form-w3agile">
					<h3>Login</h3>
					<form method="post">
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="Login" name="btnsubmit">
						<?php echo $msg; ?>
					</form>
				</div>
				<div class="forg">
					<a href="changepass1.php" class="forg-left">Forgot Password</a>
					<a href="register.php" class="forg-right">Register</a>
				<div class="clearfix"></div>
				</div>
			</div>
		</div>
<?php include('footer.php');
ob_flush();
?>