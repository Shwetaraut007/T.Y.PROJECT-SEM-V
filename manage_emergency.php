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
a.button { padding:6px 12px; background:#f0ad4e; color:white; text-decoration:none; border-radius:4px; }
a.delete { background:#d9534f; }
.back-btn { display:inline-block; margin-top:20px; padding:10px 18px; background:#007bff; color:white; text-decoration:none; border-radius:6px; font-weight:bold; transition:0.3s; }
.back-btn:hover { background:#0056b3; }
#ackBtn { background:green; color:white; padding:10px 20px; border:none; border-radius:8px; cursor:pointer; margin-top:15px; }
#ackBtn:hover { background:darkgreen; }
</style>
</head>
<body>
<h2>🚨 Emergency Records</h2>

<!-- Audio alert -->
<audio id="alertSound" src="alert.mp3" preload="auto" loop></audio>

<table>
<tr>
    <th>ID</th>
    <th>Patient Name</th>
    <th>Emergency Type</th>
    <th>Priority</th>
    <th>Created At</th>
    <th>Actions</th>
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
        <td>
            <a href="delete_emergency.php?id=<?php echo $row['id']; ?>" class="button delete" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
<?php 
    } 
} else {
    echo "<tr><td colspan='6'>No emergency records found</td></tr>";
}
?>
</table>

<center>
<button id="ackBtn" onclick="stopAlert()">Acknowledge / Stop Alert</button><br>
<a href="admin_dashboard.php" class="back-btn">Back</a>
</center>

<script>
let alertPlaying = false;

function checkEmergency(){
    fetch("check_emergency.php")
    .then(res => res.json())
    .then(data => {
        if(data.new_emergency){
            let sound = document.getElementById("alertSound");
            if(!alertPlaying){
                sound.play();
                alertPlaying = true;
            }
            alert("🚨 New Emergency from " + data.patient_name + " (" + data.priority_level + ")");
        }
    })
    .catch(err => console.error(err));
}


setInterval(checkEmergency, 10000);

function stopAlert(){
    let sound = document.getElementById("alertSound");
    sound.pause();
    sound.currentTime = 0;
    alertPlaying = false;
}
</script>

</body>
</html>
