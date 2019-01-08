  <?php include('header.php');
  include('connect.php');
  ?>
  <style>
  .content{
	  
      width: 1091px;
    margin: 0 auto;
  }
}
  </style>

   <!--banner-->

<div class="modal-content content" style="margin-top:20px; margin-bottom:20px;">
    <div class="modal-header">
	
        
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-shopping-cart"></span> My Cart</h4>
    </div>
    <div class="modal-body">
	<?php
	
	$querycart="select p.*,c.* from cart c join product p on c.prod_id=p.prod_id";
                            $res_cart=mysqli_query($con,$querycart);
                            $total=0;
                            $count=mysqli_num_rows($res_cart);
							if($count>0)
							{
	?>
        <table class="table table-hover table-responsive" id="my-cart-table">
            <tbody>
            <?php 
                    $pro_names=array();
					$pro_ids=array();
					$pro_price=array();
                            while($row_cart=mysqli_fetch_array($res_cart))
                            {
                             	$pro_names['name']=$row_cart['pro_title'];
								$pro_ids[]=$row_cart['prod_id'];
								$pro_price[]=$row_cart['price'];   
                                $tot=$row_cart['quantity'] *$row_cart['price'];
                                         $total=$total+$tot;   
                    ?>
                <tr title="summary 9" data-id="9" data-price="1.50">
                    <td class="text-center" style="width: 30px;">
                        <img width="30px" height="30px" src="<?php echo $row_cart['pro_image1'];?>">
                    </td>
                    <td><h6 style="    font-size: 15px;"><?php echo $row_cart['pro_title'];?></h6></td>
                    <td title="Unit Price">$<?php echo $row_cart['price'];?></td>
                    <td title="Quantity">
                        <input type="number" min="1" style="width: 70px;" class="my-product-quantity" value="<?php echo $row_cart['quantity'];?>" >
                    </td>
                    <td title="Total" class="my-product-total">$<?php echo $tot; ?></td>
                    <td title="Remove from Cart" class="text-center" style="width: 30px;">
                        <a href="cartremove.php?id=<?php  echo $row_cart['cart_id'];?>" 
						class="btn btn-xs btn-danger ">X</a>
						 
                    </td>
                </tr>
                <?php
                            }
							$_SESSION['pro_names']=$pro_names;
                            $_SESSION['pro_ids']=$pro_ids;
                            $_SESSION['pro_price']=$pro_price;
                ?>
                
                <tr>
                    <td></td>
                    <td><strong>Total</strong></td>
                    <td></td>
                    <td></td>
                    <td><strong id="my-cart-grand-total">$<?php echo $total;?></strong></td>
                    <td></td>
                </tr>
               
        </tbody>
    </table>
	
</div>
<?php
$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
$paypal_id='tanvibus123@gmail.com'; // Business email ID
?>
 <div class="btn">
    <form action="<?php echo $paypal_url; ?>" method="post" name="frmPayPal1">
    <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="item_name" value="Life Medicos Product">
    <input type="hidden" name="item_number" value="1">
    <input type="hidden" name="credits" value="510">
    <input type="hidden" name="userid" value="1">
    <input type="hidden" name="amount" value="<?php echo $total;?>">
    <input type="hidden" name="cpp_header_image" value="http://www.phpgang.com/wp-content/uploads/gang.jpg">
    <input type="hidden" name="no_shipping" value="1">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="handling" value="0">
    <input type="hidden" name="cancel_return"  value="http://localhost:8080/paypalsite/cancel.php">
    <input type="hidden" name="return" value="http://localhost/project/user/success.php">
	<input type="hidden" name="rm" value="2"/>
    <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form> 
    </div>
        </tbody>
    </table>
	<?php
		}
		else
		{
			echo "<h2 class='text-center' style='margin-top:20px;margin-bottom:80px;'>YOUR CART IS EMPTY</h2>";
		}
	?>
</div>

</div>
	
			

<!--footer-->
<?php include('footer.php');?>