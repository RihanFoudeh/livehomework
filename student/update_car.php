<?php 
include "./functions.php";

$name= $_POST['name'];
$man_year= $_POST['man_year'];
$sales_quantity=$_POST['sales_quantity'];
$id = $_POST['id'];


$connections = connection();

$sql = "UPDATE customers SET name='$name', man_year='$man_year', sales_quantity='$sales_quantity' WHERE id=$id";
// var_dump($sql);
$result = mysqli_query($connections, $sql);
mysqli_close($connections);

if($result){
    header('Location: ./info_car.php?id=' . $id);
} else {
    header('Location: ./');
}


?>