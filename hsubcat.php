<?php include('header.php');
$hcat_id=$_GET['id'];
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
																		
                $queryhsubcat="select * from 
                product where pcat_id=$hcat_id";
                $res_hsubcat=mysqli_query($con,$queryhsubcat);
                while($row_hsubcat=mysqli_fetch_array($res_hsubcat))
                {
                                                                            
        ?>
                    
                        <div class="col-md-4"  style="height:360px">
                        <a href="productdetail.php?id=<?php echo $row_hsubcat['prod_id']; ?>">
						<img src="<?php echo $row_hsubcat['pro_image1']; ?>" class="img-responsive" alt="">
					</a>
                            <h4 style="margin-left: 25px;"><?php echo  $row_hsubcat['pro_title'];?></h4>
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