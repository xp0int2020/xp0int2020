<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body>

<?php
require "config.php";
use \Firebase\JWT\JWT;
if (isset($_POST['username'])&&isset($_POST['password'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query=$pdo->prepare("select * from users where username= :username and password=:password ");
    $query->bindParam(":username",$username);
    $query->bindParam(":password",$password);

    if ($query->execute()){
        if ($query->rowCount()==1){
            $row=$query->fetch();
            $time=time();
            $token=array(

                "iat" => $time,
                "nbf" => $time,
                "exp" =>$time+7200,
                "data" =>[
                    "id"=>$row['id'],
                    "username"=>$row['username'],
                ]
            );



            $jwt = JWT::encode($token, $secret_key);

            echo ($jwt)."\n";
            $decode=JWT::decode($jwt,$secret_key,array('HS256'));
            var_dump($decode);


            setcookie("token",$jwt);
            header("location:user.php");

        }
    }




}
?>
<div class="container">
    <div class="Box">
        <div class="userImage">
            <h1>登录</h1>
        </div>
        <form id="loginForm" method="post" action="login.php">
            <div class="input-wrapper">
                <label>username</label>
                <input type="input" name="username" placeholder="guest" id="username">
            </div>

            <div class="input-wrapper">
                <label id="password">password</label>
                <input type="password" name="password" placeholder="guest" id="password">
            </div>
            <input type="submit" name="" value="Submit" id="login">
            <input type="button" name="" value="register" id="register">
        </form>

    </div>
</div>
<script src='static/js/jquery.min.js'></script>
<script src="static/js/querycode.js"></script>
</body>
</html>