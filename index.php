<?php 
include_once('db/database.php');
include_once('models/function.php');
connect();
$art=Articles_all();

include_once('views/articles_view.php');



 ?>