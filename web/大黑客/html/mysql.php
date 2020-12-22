<?php


$ip = $_POST['ip'];
$username = $_POST['username'];
$password = $_POST['password'];
$query="select 1;";


$conn=mysqli_connect($ip,$username,$password);

if ($conn===false){
    die('Connect failed');
}
$result=$conn->query($query);
if ($result===false){
    die('query error');
}
$row=$result->fetch_row();
echo $row[0];
?>

