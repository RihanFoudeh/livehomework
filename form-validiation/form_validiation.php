<?php

require '/data.php';
var_dump($_POST);

$error_msgs=array();
$error=false ;


$username = null;
$email = null;
$password = null;


if($_SERVER['REQUEST_METHOD']=='post'&& !empty($_POST)){

    if ( !isset($_POST['username']) ){ attribute
        $error_msgs['username_not_found'] = 'You didnot submit username ..';
        $error = true;
    } else {
        if (empty($_POST['username'])) {
            $error_msgs['username_no_value'] = 'username is empty ..';
            $error = true;
        } else {
            if(strlen($_POST['username']) < 4 || strlen($_POST['username']) > 15){
                $error_msgs['username_not_valid'] = 'Please make sure the username length is between 4 and 15!';
                $error = true;
            }

        }
    }

    if ( !isset($_POST['email']) ){ 
        $error_msgs['email_not_found'] = 'You didnot submit email!';
        $error = true;
    } else {
        if (empty($_POST['email'])) {
            $error_msgs['email_no_value'] = 'Email empty!';
            $error = true;
        } else {
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ // check if email follows the email pattern
                $error_msgs['email_not_valid'] = 'Email not valid, please enter valid email address!';
                $error = true;
        
            }
        }
    }


    if ( !isset($_POST['password']) ){ 
        $error_msgs['password_not_found'] = 'You didn\'t submit password!';
        $error = true;
    } else {
        if (empty($_POST['password'])) {
            $error_msgs['password_no_value'] = 'Password empty!';
            $error = true;
        } else {
            
            if(strlen($_POST['password']) < 7 || strlen($_POST['password']) > 15){
                $error_msgs['password_not_valid'] = 'Please make sure the password length is between 7 and 15!';
                $error = true;
            }

        }
    }



    if ( !isset($_POST['radio']) ){ 
        $error_msgs['radio_not_found'] = 'You didnot submit radio!';
        $error = true;
    } else {
        if (empty($_POST['radio'])) {
            $error_msgs['radio_no_value'] = 'radio is empty ...';
            $error = true;
        } 
    }

        if (empty($_POST['textarea'])) {
            $error_msgs['textarea_no_value'] = 'textarea is empty ...';
            $error = true;
        } 
    






 


// username 1
// email 1
// password 1
// radio   1
// textarea 1

    




}else {
    // array_push($error_msgs, ['request_method' => 'You used a wrong request method']);
    $error_msgs['request_error'] = 'You used a wrong request method or you didn\'t submit data!';
    $error = true;
}


if(!$error){

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


foreach (USERS as $Validation){


    if($Validation['username'] == $username){
        $error_msgs['username_already_exists'] = 'username already exists!';
        $error = true;
    }
}


if($user != null) { // validate user information
    if(strtolower($name) != $user['username']){ 
        $error_msgs['name_not_valid'] = 'Name doesn\'t match!';
        $error = true;
    }
    if($email != $user['email']){ 
        $error_msgs['email_not_found'] = 'Email doesn\'t match!';
        $error = true;
    }
    if($password != $user['password']){ 
        $error_msgs['password_not_found'] = 'Password doesn\'t match!';
        $error = true;
    }
} else {
    $error_msgs['user_not_found'] = 'Username was not found!';
    $error = true;
}



}