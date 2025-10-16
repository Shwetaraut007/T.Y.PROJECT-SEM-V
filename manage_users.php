<?php
$conn = new mysqli("localhost", "root", "", "clinic");
if ($conn->connect_error) { 
    die("DB Error: " . $conn->connect_error); 
}

$sql = "SELECT id, name, email, password FROM registration ORDER BY id DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Manage Users</title>
<style>
table { border-collapse: collapse; width: 100%; margin-top:20px; }
th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
th { background:#6c757d; color:white; }
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
<h2>👤 Registered Users</h2>
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
  </tr>
  <?php while($row = $result->fetch_assoc()) { ?>
  <tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['password'] ?></td>
  </tr>
  <?php } ?>
</table>

<!-- ✅ Back Button -->
<center>
<a href="admin_dashboard.php" class="back-btn">Back </a>
</center>

</body>
</html>
