<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Список дел</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Список дел</h1>
		<form action="/add.php" method="post">
			<input type="text" name="task" id="task" placeholder="Нужно сделать" class="form-control">
			<button type="submit" name="sendTask" class="btn btn-success">Отправить</button>
		</form>

		<?php
		  require 'configDB.php';

		  echo '<ul>';
		  $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `done` = 1 ASC, `id` DESC');
		  while ($row = $query->fetch(PDO::FETCH_OBJ)) {

		  	if ($row->done == 0)

		  	  echo '<li><b>'.$row->task.'</b><a href="/delete.php?id='.$row->id.'"><button>Удалить</button>
		  	<a href="/complete.php?id='.$row->id.'"><button class="btn2">Выполнить</button></li>';
		  	
		  	else
	  	
		  	  echo '<li><b class="throught">'.$row->task.'</b><a href="/delete.php?id='.$row->id.'"><button>Удалить</button>
		  	<a href="/unfulfilled.php?id='.$row->id.'"><button class="btn1">Невыполненно</button></li>';

		  }    

		  echo '</ul>';
		?>
		
	</div>
</body>
</html>
