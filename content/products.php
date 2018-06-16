<?php $products = initProducts(); ?>
<script>
  $(document).ready(function() 
    { 
      $("#productTable").tablesorter();

    }
  ); 
</script>

<form id="productForm">
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Title" name="title" required>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Description" required>
    </div>
    <div class="col">
      <input type="number" step=".01" class="form-control" placeholder="Price" required>
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="Quantity" required>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Image" required>
    </div>
    <button type="submit" id="sumbit" class="btn btn-primary" onClick="addProduct();">Add Product</button>
  </div>
</form>

<br />

<div id="tblHolder">
  <table id="productTable" class="table table-hover">
    <thead class="thead-dark">
      <tr>
          <th>Title</th>
          <th>Description</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Image</th>
      </tr>
    </thead>
    <?php echo getProducts($products); ?>
  </table>
</div>