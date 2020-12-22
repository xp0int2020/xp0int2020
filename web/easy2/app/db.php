<?php
 $mysqli = new mysqli("localhost","ctf","XXp0int2020..","ctf");
if (!$mysqli) 
{
	printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error());
	exit; 
}