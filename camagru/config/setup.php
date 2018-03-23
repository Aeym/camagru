<?php 
	include('./database.php');

	$sql = file_get_contents('../sql/cambase.sql');

	if (!file_exists('/Users/ealrick/goinfre/.data/cambase'))
	{
		$createdb = new PDO('mysql:host=localhost;', $DB_USER , $DB_PASSWORD);
		$createdb->query($sql);
		echo 'Database cambase created';
	}
	else
		echo 'Database already exist';

 ?>
