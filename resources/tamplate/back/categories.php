
<?php add_cat_admin();
?>
<h1 class="page-header">
  Product Categories

</h1>


<div class="col-md-4">
    <h3 class="bg-sucess"></h3>
    
    <form action="" method="post">
    
        <div class="form-group">
            <label for="category-title">Title</label>
            <input  name="cat_title" type="text" class="form-control">
        </div>

        <div class="form-group">
            
            <input name="add_cat_admin" type="submit" class="btn btn-primary" value="Add Category">
        </div>      


    </form>


</div>


<div class="col-md-8">

    <table class="table">
            <thead>

        <tr>
            <th>id</th>
            <th>Title</th>
        </tr>
            </thead>


    <tbody>
    <?php show_cat_adminn(); 
    
    ?>
    </tbody>

        </table>

</div>



                













   
