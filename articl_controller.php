<?php 
include_once('db/database.php');
include_once('models/function.php');

$cont=Articles_get($_GET['id']);

include_once('views/content_view.php');


 ?>