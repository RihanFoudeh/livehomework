<?php

include_once './partials/header.php';


$info_cars = get_info($_GET['id']);

?>

<div class=" justify-content-center">

    <h1> <strong>Name car :</strong> <?= $info_cars['name'] ?></h1>
    </div>
        <div class="col-6">

            <h4> <strong>Id :</strong> <?= $info_cars['id'] ?></h4>
            <h3><strong>Name :</strong> <?= $info_cars['name'] ?></h3>
            <h3><strong>Man Year :</strong> <?= $info_cars['man_year'] ?></h3>
            <h3><strong>Sales Quantity :</strong> <?= $info_cars['sales_quantity'] ?></h3>
            <h3><strong>Regestration Date :</strong> <?= $info_cars['reg_date'] ?></h3>

        </div>

        <div class="col-6">
            <a href="./edit_car.php?id=<?= $info_cars['id'] ?>" class="btn btn-warning">Edit</a>
            <a id="delete" href="./delete_car.php?id=<?= $info_cars['id'] ?>" class="btn btn-danger ml-5">Delete</a>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="./action.js"></script>
<?php include_once './partials/footer.php'; ?>