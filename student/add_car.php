<?php 
include_once './partials/header.php'; 

?>

<div class="container my-5">
<form class="w-50" method="POST" action="./create.php">
    <input type="hidden" name="id" value="<?= $info_cars['id'] ?>">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input name="name" type="text" class="form-control" id="name"  
    </div>
    <div class="mb-3">
        <label for="man_year" class="form-label">Man Year</label>
        <input name="man_year" type="text" class="form-control" id="man_year" ">
    </div>
    <div class="mb-3">
        <label for="Quantity" class="form-label">Sales Quantity</label>
        <input name="sales_quantity" type="text" class="form-control" id="Quantity" ">
    </div>
   
    <button type="submit" class="btn btn-primary">Add Car</button>
</form>
</div>

<?php include_once './partials/footer.php'; ?>