<?php
error_reporting(0);
include "flag.php";

header('Set-Cookie: '.base64_encode('admin=0').';');

function GetIP(){
if(!empty($_SERVER["HTTP_CLIENT_IP"]))
    $ip = $_SERVER["HTTP_CLIENT_IP"];
else if(!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
    $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
else if(!empty($_SERVER["REMOTE_ADDR"]))
    $ip = $_SERVER["REMOTE_ADDR"];
else
    $ip = "0.0.0.0";
return $ip;
}

if($_GET['Xp0int'] !== '666'){
	die("GET me Xp0int with 666.");
}

if($_POST['Xp0int'] !== 'JoinUs'){
	die("Then post me Xp0int JoinUs.");
}

$GetIPs = GetIP();
$cookie = base64_decode(getallheaders()['Cookie']);
if ($GetIPs !== "127.0.0.1" || $cookie !== 'admin=1'){
	die("What's your problems? You are not admin!");
}else{
	echo 'Welcome admin! Here is your flag:'.$flag;
}