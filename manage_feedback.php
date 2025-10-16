<?php 
$conn = new mysqli("localhost", "root", "", "clinic");
if ($conn->connect_error) { die("DB Error: " . $conn->connect_error); }

$sql = "SELECT * FROM feedback ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Manage Feedback</title>
<style>
table { border-collapse: collapse; width: 100%; margin-top:20px; }
th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
th { background:#28a745; color:white; }
tr:nth-child(even){ background:#f2f2f2; }
.back-btn { 
    padding: 10px 20px; 
    background:#007bff; 
    color:white; 
    border:none; 
    border-radius:5px; 
    cursor:pointer; 
    margin-top:25px;   /* टेबलपासून थोडा gap */
}
.back-btn:hover { background:#0056b3; }
</style>
</head>
<body>

<h2>📝 Patient Feedback</h2>

<table>
  <tr>
    <th>ID</th>
    <th>Rating</th>
    <th>Comment</th>
  </tr>
  <?php while($row = $result->fetch_assoc()) { ?>
  <tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['rating'] ?></td>
    <td><?= $row['comment'] ?: 'N/A' ?></td>
  </tr>
  <?php } ?>
</table>


<center>
    <button class="back-btn" onclick="window.location.href='admin_dashboard.php';"> Back</button>
</center>

</body>
</html>
