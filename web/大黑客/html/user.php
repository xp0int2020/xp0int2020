<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>user</title>

</head>
<body>
<?php
include "config.php";
use \Firebase\JWT\JWT;

if (isset($_COOKIE['token'])) {
    $jwt = $_COOKIE['token'];

    try {
        $token = JWT::decode($jwt, $secret_key, array('HS256'));

        if ($token->exp >= time()) {
            echo '<h1> Hello '.htmlspecialchars($token->data->username).'</h1><br>';
            echo '<h1><a href="admin.php">Getflag</a></h1><br>';



        } else {
            echo '请重新登录<br>';
            echo "<script>setTimeout(\"location.href='login.php'\",2000);</script>";
            die();
        }
    }
    catch (Exception $exception){
        echo '验证失败,请登录<br>';
        echo "<script>setTimeout(\"location.href='login.php'\",2000);</script>";
        die();

    }
}
else{
    echo '请登录<br>';
    echo "<script>setTimeout(\"location.href='login.php'\",2000);</script>";
    die();
}