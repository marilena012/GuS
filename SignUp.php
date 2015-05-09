<?php
$db = new mysqli
		 (
			'localhost', // locatia serverului
			'GuessStar',       // numele de cont
			'fqhvO9xLkG',    // parola
			'GuessStar'   // baza de date
		);

		if (mysqli_connect_errno())
			die ('Conexiunea a esuat...');

		$result = $db->prepare('select count(user_id) from user');
		$result->execute();
		$result->bind_result($count);
		$result->fetch();
		$result->close();
		if($count > 0)
			echo "exista user: ".$count;
		else
			echo "nu exista useri";

?>
