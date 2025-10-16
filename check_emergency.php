<?php
$conn = new mysqli("localhost","root","","clinic");
if($conn->connect_error){ 
    echo json_encode(['new_emergency'=>false]); 
    exit; 
}

 emergency
$sql = "SELECT * FROM emergency WHERE is_seen = 0 ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

$response = ['new_emergency' => false];
if($result && $row = $result->fetch_assoc()){
    $response = [
        'new_emergency' => true,
        'id' => $row['id'],
        'patient_name' => $row['patient_name'],
        'emergency_type' => $row['emergency_type'],
        'priority_level' => $row['priority_level']
    ];

   
    $conn->query("UPDATE emergency SET is_seen = 1 WHERE id = " . $row['id']);
}

header('Content-Type: application/json');
echo json_encode($response);
$conn->close();
?>
 