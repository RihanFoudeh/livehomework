<?php

function connection () {
    $connection = mysqli_connect('localhost', 'root', '', 'car');
    if (!$connection) {
        die('DB Connection Failed!');
    }
    return $connection;
}

function get_info($id){
    $info_cars=array();
    $sql = "SELECT * FROM customers WHERE id=$id;";
    $result = mysqli_query(connection(),$sql);
    
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
    
    };
    mysqli_close(connection());
    return $info_cars[0];
}

?>