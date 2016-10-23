<?php 
function connect ()
{ $host= "localhost";
$user="root";
$pass="123456";
$dbname="rov";

mysql_connect($host,$user,$pass) /*подключение к серверу*/ or die ('не удалось подключиться к серверу'); 
mysql_select_db($dbname) or die('не удалось войти в базу данных'); 
mysql_query('set names "utf8"'); // utf8 encoding
}


 ?>