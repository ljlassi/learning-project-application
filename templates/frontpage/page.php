<h2>Add product</h2>
<form action="<?php echo SITE_URL . '/action/add_product.php' ?>" method="post">
  <div class="form-group">
    <label for="product_name">Product name</label>
    <input type="text" name="product_name" id="product_name" class="form-control">
  </div>
  <div class=form-group>
    <label for="product_price">Product price</label>
    <input type="text" name="product_price" id="product_price" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<p>
<a href="<?php echo SITE_URL; ?>/action/add_user.php">Add user</a>
</p>
<h2>List of all products (max 50)</h2>
<?php
  require_once(PROJECT_DIR . '/action/list_products.php');
