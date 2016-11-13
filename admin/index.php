<?php  

include_once('../db/database.php');
include_once('../models/fuction.php');

	connect(); // подключаем базу данных
	$art=Articles_all(); // присвоил переменной выборку из таблицы blog_tabel

include ('../views/admin_panel.php');

?>