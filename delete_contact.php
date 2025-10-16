<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}

$conn = new mysqli("localhost","root","","clinic");
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$id = intval($_GET['id']); 
$conn->query("DELETE FROM contact WHERE id=$id");
header("Location: manage_contact.php");
exit();
?>
