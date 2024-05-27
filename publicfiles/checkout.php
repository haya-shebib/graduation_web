<?php require_once("../resources/confiq.php")?>
<!-- here require the chart php  -->

<!-- // this php code help to connect  header to the templets front -->
<?php include(TEMPLATE_FRONT .DS. "header.php") ?> 


    <!-- Page Content -->
    <div class="container">


<!-- /.row --> 

<div class="row">
<h4 class="text-center"> <?php
// to call method from cart to increase the number of cart
// echo $_SESSION['video_1']; 
    // <!-- display the message  -->
 echo display_m(); ?> </h4>
<br><br><br>
  <h1>Checkout</h1>

<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post"> 
<input type="hidden" name="cmd" value="_cart"> 
<input type="hidden" name="business" value="sb-0gnne26858049@personal.example.com">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="upload" value="1">


  <table class="table table-striped">
  <thead>
  <tr  style="background-color: black;   font-size: 20px;">
      <th>Product</th> <br>
      <th>Price</th>
      <th>Quantity</th>
      <th>Sub-total</th>
    </tr>
  </thead>
  <tbody>
    <br><br><br>
  <?php 
    c();
   ?>
  </tbody>
</table>

<?php echo display_pay();?>

</form>
<!--  ***********CART TOTALS*************-->
            
<div class="col-xs-4 pull-right ">
<h2>Cart Totals</h2>

<table class="table table-bordered" cellspacing="0">

<tr class="cart-subtotal">
<th>Items:</th>
<td><span class="amount"><?php echo isset($_SESSION['items'])? $_SESSION['items'] : $_SESSION['items'] = "0" ;?></span></td>
</tr>
<tr class="shipping">
<th>Shipping and Handling</th>
<td>Free Shipping</td>
</tr>

<tr class="order-total">
<th>Order Total</th>
<td><strong><span class="amount"><?php echo isset($_SESSION['max']) ? $_SESSION['max']
: $_SESSION['max'] = "0" ;?></span></strong> </td>
</tr>


</tbody>

</table>

</div><!-- CART TOTALS-->


 </div><!--Main Content-->
 <hr>

       
<?php include(TEMPLATE_FRONT .DS. "footer.php") ;


?>