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


<?php while ($row=mysql_fetch_array($art)) 
			{
			echo '<option value="'.$row[0].'">'; // назначаем выбранной стране из списка, айди или номер
			echo $row[1];
			echo $row[2];
			echo $row[3];
			
			echo '</option>';
			}
?>


				<?php foreach($art as $i):?>
					<div class="art">
						<h3>
							<a href="articl_controller.php?id=<?=$i['id']?>">
							<?=$i['title']?></a>
						</h3>	
						<em><?=$i['date']?></em>
						<p><?=$i['content']?></p>
					</div>
				<?php endforeach ?>
			</div>
	</div>
<div>
		<footer>Мой  первый блог <br>
		&copy; 2015</footer>
</div>

</body>
</html>