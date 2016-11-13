<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<meta charset="UTF-8">
	<title>Мой первый блог</title>
</head>
<body>
	<div class="container">
		<h1>Мой первый блог</h1>
			<div> 


<?php /*

	while ($row=mysql_fetch_array($art)) // делаем вывод статей через цикл while
			{
			echo '<p>';

			$id=1;            // делаем маштабируемость колонок блога 
			echo $row[$id++]; 
			echo $row[$id++];
			echo $row[$id++];
			echo $row[$id++];

			echo '</p>';
			
			}
	*/
	$n=mysql_num_rows($a);
	while($n>0)
	{
	foreach ($a as $k => $i)
	{
		echo $i.'<br>';

	}
	}
?>


			</div>
	</div>
<div>
		<footer>Мой  первый блог <br>
		&copy; 2015</footer>
</div>

</body>
</html>