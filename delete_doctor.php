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

$id = $_GET['id'];

$result = $conn->query("SELECT photo FROM doctors WHERE id=$id");
if($result && $row = $result->fetch_assoc()){
    if(!empty($row['photo']) && file_exists($row['photo'])){
        unlink($row['photo']); // remove file from uploads
    }
}

$conn->query("DELETE FROM doctors WHERE id=$id");
header("Location: manage_doctors.php");
exit();
?>
