<?php 

$query = 'SELECT * FROM points';
$stmt = $connect -> prepare($query);
$stmt -> execute();
$points = $stmt -> fetch(PDO::FETCH_ASSOC);

?>