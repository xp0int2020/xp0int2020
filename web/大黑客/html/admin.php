<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>admin page</title>

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
            if ($token->data->username === 'admin') {
                $res = $pdo->query("select * from flag ")->fetchColumn();
                echo $res;
            } else {

                echo '<h1>没有权限看flag</h1><br>';
                echo '<h1>你不是admin 可恶的黑客</h1><br>';
                echo '<h1><a href="login.php" >重新登录</a></h1>';
                echo '<h1><a href=# onclick="history.back(-1)">别看了没有flag</a></h1>';

            }

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
