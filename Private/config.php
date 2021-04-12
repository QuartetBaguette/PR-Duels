<?php
class DB {
	static function connection() {
		try {
			$connect = new PDO("mysql:host=localhost; dbname=duels_counter", "root", "");
			$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $connect;
		}
		catch(PDOException $e) {
			echo $e->getMessage();
		}
	}
}
?>
