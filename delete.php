<?php
session_start();
include 'dbconnection.php';
$sql = 'DELETE FROM bookdetail WHERE ID = :a';
$stmt = $conn->prepare($sql);
$stmt->execute(array(
':a'=> $_SESSION['iddi'],
));
echo "<script> alert('this appointment was deleted successfully')</script>";
header("Location:History.php")
?>