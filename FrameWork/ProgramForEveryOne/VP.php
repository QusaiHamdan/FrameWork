<?php
$username = $_GET['username'];
$password = $_GET['password'];

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$CFlag = "0";

if(empty($username)){
    $CFlag = "Please Enter Your Data";
    if(empty($password)){
        $CFlag = "Please Enter Your Data";
    }else{
        $username = test_input($_GET['username']);
        $password = test_input($_GET['password']);
    }
}

if($CFlag == "0"){
    header('Location: index.php');
    exit;
}else{
    $CFlag = "Some Data Was Empty Or False Please Enter Them";
}
?>