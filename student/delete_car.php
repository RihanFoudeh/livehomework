<?php 
// Delete operation
include './functions.php';

$id = $_GET['id'];

$connection = connection();

$sql = "DELETE FROM customers WHERE id=$id";
$res = mysqli_query($connection, $sql);
mysqli_close($connection);

if($res){
    header('Location: ./');
} else {
    header('Location: ./customer.php?id=' . $id);
}






?>

