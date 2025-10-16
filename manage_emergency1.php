<?php 
session_start();
if(!isset($_SESSION['doctor'])){   // 
    header("Location: doctor_login.php");  page
    exit();
}

$conn = new mysqli("localhost","root","","clinic");
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM emergency ORDER BY id DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>Emergency Records</title>
<style>
body { font-family: Arial; background:#eef2f7; padding:20px; }
table { width:100%; border-collapse: collapse; background:white; border-radius:8px; overflow:hidden; margin-top:20px; }
th, td { padding:12px; border-bottom:1px solid #ddd; text-align:center; }
th { background:#d9534f; color:white; }
tr:hover {background:#f9f9f9;}
</style>
</head>
<body>
<h2>🚨 Emergency Appointments</h2>

<table>
<tr>
    <th>ID</th>
    <th>Patient Name</th>
    <th>Emergency Type</th>
    <th>Priority</th>
    <th>Created At</th>
</tr>
<?php 
if($result && $result->num_rows > 0){
    while($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo htmlspecialchars($row['patient_name']); ?></td>
        <td><?php echo htmlspecialchars($row['emergency_type']); ?></td>
        <td><?php echo htmlspecialchars($row['priority_level']); ?></td>
        <td><?php echo $row['created_at']; ?></td>
    </tr>
<?php 
    } 
} else {
    echo "<tr><td colspan='5'>No emergency records found</td></tr>";
}
$conn->close();
?>
</table>

<br>
<a href="doctor_dashboard.php">Back to Dashboard</a>
</body>
</html>
