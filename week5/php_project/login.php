<?php


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'db_class.php';
if(isset($_POST['user']) and isset($_POST['pass'])){
    $user =$_POST['user'];
    $pass = $_POST['pass'];
    echo $user;
    echo $pass;
//$db = new db_connect();
    
    $db = new db_class();
$result=$db->userlogin($user, $pass);
if($result=='1'){
echo 'Successfuly login!!';
}
else{
echo 'incorect username or password';
}
}