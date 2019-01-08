<?php include('header.php');
$cat_id=$_GET['id'];
?>



<style>
.col-m {
   
    height: 326px;
}
.img-responsive, .thumbnail > img, .thumbnail a > img, .carousel-inner > .item > img, .carousel-inner > .item > a > img {
   
    height: 232px;
   
    width: 100%;
}
</style>



<div class="banner-top">
	<div class="container">
		<h3 style="font-size:2.0em;" >POPULAR-BLOGS</h3>
		<h4><a href="index.php">Home</a><label>/</label>Popular-blogs</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="products" style="margin-top:87px; margin-bottom:70px;">
		<div class="container">


        <?php														
																		
             $querysubcatb="select * from 
             hsubcatblogs where blogcat_id=$cat_id";
             $res_subcatb=mysqli_query($con,$querysubcatb);
             while($row_subcatb=mysqli_fetch_array($res_subcatb))
                    {
                                                                            
        ?>
                    
                        <div class="col-md-4"  style="height:360px">
                            <a href="blogdesc.php?sid=<?php echo $row_subcatb['blog_id']; ?>">  
                            <img src="<?php echo $row_subcatb['blog_image']; ?>" class="img-responsive" alt="">
                            </a>
                            <h4 style="margin-top: 30px;"><?php echo  $row_subcatb['blog_title'];?></h4>
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