<?php
require 'configDB.php';

$id = $_GET['id'];

$sql = 'UPDATE `tasks` SET `done` = 1 WHERE `id` = ?';
$query = $pdo->prepare($sql);
$query->execute([$id]);

header ('Location: /')
?>
<input type="submit" onclick="this.disabled=true;">