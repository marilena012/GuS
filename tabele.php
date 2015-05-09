<?php
$mysqli = new mysqli('localhost', 'GuessStar', 'fqhvO9xLkG', 'GuessStar');

if ($mysqli->connect_errno)
	die ('Conexiunea a esuat...');
else
{
	$stmt = $mysqli->prepare("CREATE TABLE user (user_id int(2), user_name VARCHAR(30), email VARCHAR(30), pass VARCHAR(30), id_friends VARCHAR(30))");
	$stmt->execute();
	$stmt->close();
}
?>
