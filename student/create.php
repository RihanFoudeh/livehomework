<?php

include './functions.php';

$name= $_POST['name'];
$man_year= $_POST['man_year'];
$sales_quantity=$_POST['sales_quantity'];
$id = $_POST['id'];

$connections = connection();

$sql = "INSERT INTO customers ( name , man_year, sales_quantity) VALUES ('$name','$man_year','$sales_quantity')";
var_dump($sql);
$result = mysqli_query($connections, $sql);
mysqli_close($connections);

if($result){
    header('Location: ./');
} else {
    header('Location: ./create.php');
}


?>