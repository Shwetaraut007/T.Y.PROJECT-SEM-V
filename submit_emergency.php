<?php
$conn = new mysqli("localhost","root","","clinic");
if($conn->connect_error) die("Connection failed: ".$conn->connect_error);

$patient_name = $_POST['patient_name'];
$emergency_type = $_POST['emergency_type'];
$priority_level = $_POST['priority_level'];


$sql = "INSERT INTO emergency (patient_name, emergency_type, priority_level, is_seen)
        VALUES ('$patient_name', '$emergency_type', '$priority_level', 0)";

if($conn->query($sql)){
    echo "Success";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
