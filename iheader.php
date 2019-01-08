<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--><?php include('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Life Medicos</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->

</head>
<body>
<a href="offer.html"><img src="images/download.png" class="img-head" alt=""></a>
<div class="header">

		<div class="container">
			
			<div class="logo">
				<h1 ><a href="index.html"><b>T<br>H<br>E</b>Life Medicos<span>BEST MEDICAL FACILITY</span></a></h1>
			</div>
			<div class="head-t">
				<ul class="card">
					
					<li><a href="logout.php" ><i class="fa fa-user" aria-hidden="true"></i>Log Out</a></li>
					<li><a href="myprofile.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Account Settings</a></li>
					
				</ul>	
			</div>
			

		

				<div class="nav-top">
					<nav class="navbar navbar-default">
					
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
								
							
							<li class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>PRESCRIPTIONS<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
											<?php														
															
												$querypcat="select * from pcategory";
												$res_pcat=mysqli_query($con,$querypcat);
												while($row_pcat=mysqli_fetch_array($res_pcat))
												{
													
												?>
											
											<li><a href="hsubcat.php?id=<?php echo $row_pcat['pcat_id']; ?>""><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo $row_pcat['pcat_name'];?></a></li>
											<?php	
													
													
												}
												
												
											?>
											</ul>
										</div>
										</div>
									</ul>	
										

							<li class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>NON-PRESCRIPTIONS<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
											<?php														
															
												$querynoncat="select * from noncategory";
												$res_noncat=mysqli_query($con,$querynoncat);
												while($row_noncat=mysqli_fetch_array($res_noncat))
												{
													
												?>
											
											<li><a href="subcat.php?id=<?php echo $row_noncat['cat_id']; ?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo $row_noncat['cat_name'];?></a></li>
											<?php	
													
													
												}
												
												
											?>
											</ul>
										</div>
									</div>
								</ul>	
								<li class="dropdown ">
									<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>HEALTH-LIBRARY<b class="caret"></b></span></a>
									<ul class="dropdown-menu multi">
										<div class="row">
											<div class="col-sm-3">
												<ul class="multi-column-dropdown">
												<?php														
																
													$queryhcat="select * from hcategory";
													$res_hcat=mysqli_query($con,$queryhcat);
													while($row_hcat=mysqli_fetch_array($res_hcat))
													{
														
													?>
												
												<li><a href="hsubcategory.php?id=<?php echo $row_hcat['hcat_id']; ?>""><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo $row_hcat['hcat_name'];?></a></li>
												<?php	
														
														
													}
													
												
												?>	
												</ul>
											</div>
										</div>
									</ul>												

												

				</div>
					</nav>
						<div class="cart" >
					
							<a href="cart.php">
							<span class="fa fa-shopping-cart my-cart-icon">
							<span class="badge badge-notify my-cart-badge">
							</span>
							</span></a>
						</div>
					<div class="clearfix"></div>
				</div>
					
				</div>			
</div>