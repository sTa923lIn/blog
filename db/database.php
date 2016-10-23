<?php 
function connect()
{ 

$host= "localhost";
$user="admin";
$pass="adminadmin";
$dbname="blog";

mysql_connect($host,$user,$pass) /*подключение к серверу*/ or die ('не удалось подключиться к серверу'); 
mysql_select_db($dbname) or die('не удалось войти в базу данных'); 
mysql_query('set names "utf8"'); // utf8 encoding

}


 ?>