<?php $products = initProducts(); ?>

<form id="productForm">
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Title">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Description">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Price">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Quantity">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Image">
    </div>
    <button type="reset" class="btn btn-primary" onClick="addProduct()">Add</button>
  </div>
</form>

<br />

<table id="productTable" class="table table-hover">
  <thead class="thead-dark">
    <tr>
        <th onclick="sortTable(0)">Title</th>
        <th onclick="sortTable(1)">Description</th>
        <th onclick="sortTable(0)">Price</th>
        <th onclick="sortTable(0)">Quantity</th>
        <th onclick="sortTable(0)">Image</th>
    </tr>
  </thead>
  <?php echo getProducts($products); ?>
</table>