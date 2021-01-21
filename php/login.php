<?php 
session_start();  

require '/private/config.php';

$password = $_POST['password']; 
$username = $_POST['username'];  

$query = 'SELECT * FROM users WHERE username = :username'; 
$sth = $connect->prepare($query); 
$sth->bindParam('username', $username); 
$sth->execute(); 
$data = $sth->fetch(PDO::FETCH_ASSOC);

if($data == false){
    header('Location: ../index.php?page=login');
}

    if ($password == $data['password']) {
        $_SESSION['loggedin'] = $data['username'];     
        
        header('location:../index.php?page=home');
    }

    else{
        header('Location: ../index.php?page=login');
    }

?>
