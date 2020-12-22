<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<h1>用户信息查询</h1>
<form action="index.php" method="post">
  <p>id: <input type="text" name="id" /></p>
  <input type="submit" value="Submit" />
</form>
</html>
<!-- 某列 -->

<?php
error_reporting(0);
header("Content-Type: text/html;charset=utf-8");
include_once('db.php');
highlight_file('sql.txt');
echo '<br>';

function waf1($inject) {
    preg_match("/select|update|delete|alert|drop|insert|where|\./i",$inject) && die('你不对劲');
}

function waf2($inject) {
    stristr($inject, "set") && stristr($inject, "prepare") && die('你不对劲');
}

if(isset($_POST['id'])){
  $id = $_POST['id'];
  waf1($id);
    waf2($id);
  

    //多条sql语句
    $sql = "select * from `users` where id = '$id';";
    //echo $sql;

    $res = $mysqli->multi_query($sql);

    if ($res){//使用multi_query()执行一条或多条sql语句
      do{
        if ($rs = $mysqli->store_result()){//store_result()方法获取第一条sql语句查询结果
          while ($row = $rs->fetch_row()){
            var_dump($row);
            echo "<br>";
          }
          $rs->Close(); //关闭结果集
          if ($mysqli->more_results()){  //判断是否还有更多结果集
            echo "<hr>";
          }
        }
      }while($mysqli->next_result()); //next_result()方法获取下一结果集，返回bool值
    } else {
      echo "error ".$mysqli->errno." : ".$mysqli->error;
    }
    $mysqli->close();  //关闭数据库连接
}

?>

