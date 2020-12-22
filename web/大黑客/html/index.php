<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Mysql Connect</title>
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body>


<div class="container">
    <div class="Box">
        <div class="userImage">
           <h1>mysql</h1>
        </div>

        <form id="loginForm">
            <div class="input-wrapper">
                <label>ip</label>
                <input type="input" name="query" placeholder="127.0.0.1" id="ip">
            </div>
            <div class="input-wrapper">
                <label id="username">username</label>
                <input type="input" name="code" placeholder="username" id="uname">
            </div>
            <div class="input-wrapper">
                <label id="password">password</label>
                <input type="input" name="code" placeholder="password" id="pass">
            </div>

            <div class="input-wrapper">
                <label id="querycode">query:  select 1;</label>

            </div>

            <div class="input-wrapper">
                <p id="news"></p>
            </div>
        </form>
        <input type="button" name="" value="Connect" id="Connect">
        <input type="button" name="" value="login" id="login">
    </div>
</div>

<script src='static/js/jquery.min.js'></script>
<script src="static/js/querycode.js"></script>
</body>
</html>