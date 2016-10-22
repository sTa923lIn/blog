<?php 
include_once('db/database.php');
include_once('models/function.php');

$content= Articles_get($_GET['id']);

include_once('views/articles_view.php');


 ?>