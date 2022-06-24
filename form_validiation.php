<?php

var_dump($_posts);

$error_msgs=array();
$error=false ;


if($_SERVER['REQUEST_METHOD']=='post'&& !empty($_POST)){

    if(!isset($_POST['username'])){
        $error_msgs['username_not_found']='you didnot submit username'
    }




}