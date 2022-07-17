<?php
$connection =mysqli_connect('localhost','root','','car');
// print_r($connection);

if(!$connection){
    die("Database connection failed");
}
$info_cars=array();

$sql = "SELECT * FROM customers";
$result = mysqli_query($connection,$sql);

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
       
        $info_cars [] = array(
            'id'=>$row['id'],
            'name'=>$row['name'],
            'man_year'=>$row['man_year'],
            'sales_quantity'=>$row['sales_quantity'],
            'reg_date'=>$row['reg_date'],
        ); 

    }
    // print_r($info_cars);

};
mysqli_close($connection);

?>

<?php include './partials/header.php'; 
 ?>
<div class="d-flex justify-content-between align-items-center">
    <h1>Cars Info</h1>
    <a href="./add_car.php" class="btn btn-success col-1 m-5">Add cars</a>
</div>
<hr class="my-5">

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">man_year</th>
            <th scope="col">sales_quantity</th>
            <th scope="col">Regestration Date</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ( $info_cars as $info ) : ?>
            <tr>
                <td><?= $info['id'] ?></td>
                <td><?= $info['name'] ?></td>
                <td><?= $info['man_year'] ?></td>
                <td><?= $info['sales_quantity'] ?></td>
                <td><?= $info['reg_date'] ?></td>
                <td>
                    <a class="btn btn-info" href="./info_car.php?id=<?= $info['id'] ?>">View info</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>




    </div>



    