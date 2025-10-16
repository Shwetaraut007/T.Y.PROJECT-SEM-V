<?php
$conn = new mysqli("localhost", "root", "", "clinic");
if ($conn->connect_error) {
    die("DB Error: " . $conn->connect_error);
}

$sql = "SELECT * FROM `appointment` ORDER BY `date` DESC";
$result = $conn->query($sql);

if(!$result){
    die("Query Error: ".$conn->error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Manage Appointments</title>
<style>
table { border-collapse: collapse; width: 100%; margin-top:20px; }
th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
th { background:#007bff; color:white; }
tr:nth-child(even){ background:#f2f2f2; }

.back-btn {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 18px;
    background: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 6px;
    font-weight: bold;
    transition: 0.3s;
}
.back-btn:hover {
    background: #0056b3;
}
</style>
</head>
<body>
<h2>📅 All Appointments</h2>

<?php if($result->num_rows > 0){ ?>
<table>
  <tr>
    <th>ID</th>
    <th>Doctor</th>
    <th>Patient</th>
    <th>Contact</th>
    <th>Date</th>
    <th>Time</th>
    <th>Document</th>
    <th>Created At</th>
  </tr>
  <?php while($row = $result->fetch_assoc()){ ?>
  <tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['doctor_name'] ?></td>
    <td><?= $row['patient_name'] ?></td>
    <td><?= $row['contact_no'] ?></td>
    <td><?= $row['date'] ?></td>
    <td><?= $row['time'] ?></td>
    <td>
      <?php if($row['document'] && file_exists("uploads/".$row['document'])){ ?>
        <a href="uploads/<?= $row['document'] ?>" target="_blank">Download</a>
      <?php } else { echo "N/A"; } ?>
    </td>
    <td><?= $row['created_at'] ?></td>
  </tr>
  <?php } ?>
</table>
<?php } else { ?>
<p>No appointments found.</p>
<?php } ?>

<center>
<a href="admin_dashboard.php" class="back-btn">Back</a>
</center>
</body>
</html>
