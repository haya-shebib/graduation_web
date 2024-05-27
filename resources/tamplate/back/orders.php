
 <div class="col-md-12">
<div class="row">
<h1 class="page-header">
   All Orders

</h1>
<h4><?php  
//  message_set(" ");
 ?>
</h4>
</div>

<div class="row">
<table class="table table-hover">
    <thead>

      <tr>
           <th>id</th>
           <th>total </th>
           <th>transaction</th>
           <th>Status</th>
           <!-- <th>Invoice Number</th>
           <th>Order Date</th>
           <th>Status</th> -->
      </tr>
    </thead>
    <tbody>
    <?php echo show_order_admin();  ?>

    </tbody>
</table>
</div>




    </div>
