<?php
 include('header.php');
 include('connect.php');
 
if(isset($_POST['btnsubmit']))
 { 
	 
	 $fname=$_POST['firstname'];
	 $lname=$_POST['lastname'];
	 $city=$_POST['city'];
	 
	 
	 $username=$_POST['Username'];
	 $password=$_POST['password'];
	 $email=$_POST['Email'];
	 $profile=$_FILES['profile']['name'];
	 $phoneno=$_POST['phone-no'];
	 $state=$_POST['state'];
	 $country=$_POST['ddlcountry'];
	 
	 move_uploaded_file($_FILES['profile']['tmp_name'],"images/".$_FILES['profile']['name']);
	$profile="images/".$_FILES['profile']['name'];
	echo"image uploaded successfully";
	 
	 $rquery="insert into register(first_name,last_name,city,username,password,email_id,profile_pic,phone_no,state,country) values('$fname','$lname','$city','$username','$password','$email','$profile',$phoneno,'$state','$country')";
	 echo $rquery;
	 
	 $rres=mysqli_query($con,$rquery);//true/false
	 if($rres)
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
		<h3 >Register</h3>
		<h4><a href="index.html">Home</a><label>/</label>Register</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!--login-->

	<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Register</h3>
					<form  method="post" enctype="multipart/form-data">
					<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="firstname" name="firstname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'firstname';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="lastname" name="lastname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'lastname';}" required="">
							<div class="clearfix"></div>
						</div>
						
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Username" name="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
							<div class="clearfix"></div>
						</div>
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

						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="phone-no" name="phone-no" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'phone-no';}" required="">
							<div class="clearfix"></div>
						</div>
						
						
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i><br>
							
						
						
						<div><input type="file" id="file-input" name="profile" class="form-control-file"><br></div>
                            
							
							<div class="clearfix"></div>
						</div>
						
						
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="city" name="city" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'city';}" required="">
							
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="state" name="state" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'state';}" required="">
							
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i><br>
							
							     <select name="ddlcountry" style="width:183px;">
							
							<option>select country</option>
							<option>India</option>
							<option>Australia</option>
							<option>United States of America (USA)</option>
							<option>Canada</option>
							<option>Argentina</option>
							<option>Bangladesh</option>
							<option>Bhutan</option>
							<option>China</option>
							<option>Egypt</option>
							<option>France</option>
							<option>Greece</option>
							<option>Iran</option>
							<option>Italy</option>
							<option>Japan</option>
							<option>New Zealand</option>
							<option>Russia</option>
							<option>South Africa</option>
							<option>South Korea</option>
							<option>Sri Lanka</option>
							<option>Sudan</option>
							<option>Thailand</option>
							<option>Turkey</option>
							<option>Uganda</option>
							<option>United Arab Emirates (UAE)</option>
							
							 </select><br/><br>

							<div class="clearfix"></div>
						</div>
						
						<input type="submit" value="Submit" name="btnsubmit" >
					</form>
				</div>
				
			</div>
		</div>
<?php include('footer.php'); ?>