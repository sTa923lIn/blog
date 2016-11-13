<?php  

include_once('../db/database.php');
include_once('../models/function.php');

	connect(); // подключаем базу данных
	$art=Articles_all(); // присвоил переменной выборку из таблицы blog_tabel

include ('../views/panel_view.php');

?>