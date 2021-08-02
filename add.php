<?php
	$task = $_POST ['task'];
	if($task == '') {
		echo 'Введите само задание';
		exit();
	}

	require 'configDB.php';

	$sql = 'INSERT INTO tasks(task, done) VALUES(:task,0)';
	$query = $pdo->prepare($sql);
	$query->execute(['task' => $task]);

	header('Location: /');
?>
