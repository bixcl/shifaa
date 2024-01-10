<?php
include 'dbconnection.php';
session_start();
session_unset();
session_destroy();

$sql = "insert into transaction(civilID,in_out) values(:a,:b)";
$stmt = $conn->prepare($sql);
$stmt->execute(array(
    ':a'=> $_SESSION['id'],
    ':b'=> 'Log out',
    
));
header('Location:homee.php');
?>