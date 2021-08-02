<?php
require 'configDB.php';

$id = $_GET['id'];

$sql = 'UPDATE `tasks` SET `done` = 0 WHERE `id` = ?';
$query = $pdo->prepare($sql);
$query->execute([$id]);

header ('Location: /')
?>