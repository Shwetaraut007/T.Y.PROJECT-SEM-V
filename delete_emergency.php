<?php
$conn = new mysqli("localhost","root","","clinic");
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
    die("Invalid emergency ID");
}

$id = intval($_GET['id']); // safe conversion

$sql = "DELETE FROM emergency WHERE id=$id";

if($conn->query($sql)){
    header("Location: manage_emergency.php");
    exit;
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
