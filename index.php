<?php 

include_once('db/database.php'); // подключаем файл для работы с базой данных
include_once('models/function.php'); // подключаем файл с функциями

	connect(); // подключаем базу данных
	$art=Articles_all(); // присвоил переменной выборку из таблицы blog_tabel

		include_once('views/articles_view.php'); //подключил вьюшку для вывлда статей блога из базы



 ?>