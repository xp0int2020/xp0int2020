
<?php
include "config.php";
if (isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['confirm'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirm=$_POST['confirm'];
    $query=$pdo->prepare("select username from users where username= :username");
    $query->bindParam(":username",$username,PDO::PARAM_STR);
    $query->execute();
    if ($query->rowCount()){
        echo "user exists<br>";
        echo "<script>setTimeout(\"location.href='register.php'\",2000);</script>";
        die();

    }
    if ($password===$confirm) {
        $query = $pdo->prepare("insert into users set username= :username , password = :password");
        $query->bindParam(":username", $username, PDO::PARAM_STR);
        $query->bindParam(":password", $password, PDO::PARAM_STR);
        if ($query->execute()) {
            header("location:login.php");
        }
    }else{
        echo "password wrong<br>";
        echo "<script>setTimeout(\"location.href='register.php'\",2000);</script>";
        die();
    }

}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>register</title>
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body>


<div class="container">
    <div class="Box">
        <div class="userImage">
            <h1>注册</h1>
        </div>
        <form id="loginForm" method="post" action="register.php">
            <div class="input-wrapper">
                <label>username</label>
                <input type="input" name="username" placeholder="guest" id="username">
            </div>

            <div class="input-wrapper">
                <label id="password">password</label>
                <input type="password" name="password" placeholder="guest" id="password">
            </div>
            <div class="input-wrapper">
                <label id="confirm">password</label>
                <input type="password" name="confirm" placeholder="" id="confirm">
            </div>
            <input type="submit" name="" value="Submit" id="register">
            <input type="button" name="" value="login" id="login">
        </form>

    </div>
</div>
<script src='static/js/jquery.min.js'></script>
<script src="static/js/querycode.js"></script>
</body>
</html>