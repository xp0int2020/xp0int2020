<?php
highlight_file(__FILE__);


$phpp=$_GET['phpp'];
$hphh=$_GET['hphh'];

if (md5($phpp)===md5($hphh) and $phpp!==$hphh ){
    highlight_file('flag.php');
}else{
    echo 'PHP 彳亍'."\n";
}

