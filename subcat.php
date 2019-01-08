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
.carousel{
    margin-top:20px;
}
</style>


<div class="banner-top">
	<div class="container">
		<h3 style="font-size:2.0em;" >POPULAR SUBCATEGORIES</h3>
		<h4><a href="index.php">Home</a><label>/</label>Popular-SubCategories</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
         <a href="kitchen.html"> <img class="first-slide" src="images/non-prescriptions_1920.jpg" alt="First slide"></a>
       
        </div>
        <div class="item">
         <a href="care.html"> <img class="second-slide " src="images/ayurvedic_1920.jpg" alt="Second slide"></a>
         
        </div>
        <div class="item">
          <a href="hold.html"><img class="third-slide " src="images/otc_1920.jpg" alt="Third slide"></a>
          
        </div>
      </div>
   </div>

<div class="products" style="margin-top:87px; margin-bottom:70px;">
		<div class="container">


        <?php														
																		
                $querysubcat="select * from 
                subcategory where cat_id=$cat_id";
                $res_subcat=mysqli_query($con,$querysubcat);
                while($row_subcat=mysqli_fetch_array($res_subcat))
                {
                                                                            
        ?>
                    
                        <div class="col-md-4"  style="height:360px">
                        <a href="allproducts.php?sid=<?php echo $row_subcat['subcat_id']; ?>">
						<img src="<?php echo $row_subcat['subcat_image']; ?>" class="img-responsive" alt="">
					  </a>
                            <h4 style="margin-left: 125px; margin-top: 30px;"><?php echo  $row_subcat['subcat_name'];?></h4>
                        </div>
                    <?php
                    }
                    ?>
                            
                            
                        
                        <div class="clearfix"> </div>
                    
		</div>
	</div>		
		
<!--footer-->
<?php include('footer.php');
ob_flush();?>