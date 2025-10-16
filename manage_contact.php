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

// Fetch all messages
$sql = "SELECT * FROM contact ORDER BY id ASC";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
<title>Contact Messages</title>
<style>
body {
 font-family: Arial;
 background:#eef2f7;
 padding:20px;
}
table { 
width:100%; 
border-collapse: collapse; 
background:white;
 border-radius:8px;
 overflow:hidden;
 margin-top:20px;
}
th, td { 
padding:12px; 
border-bottom:1px solid #ddd; 
text-align:center;
}
th { 
background:#43cea2; 
color:white;
}
tr:hover {background:#f9f9f9;}
a.button { 
padding:6px 12px; 
background:#f0ad4e;
color:white;
text-decoration:none; 
border-radius:4px; 
}
a.delete { background:#d9534f; }

.back-btn {
    display:inline-block;
    margin-top:20px;
    padding:10px 18px;
    background:#007bff;
    color:white;
    text-decoration:none;
    border-radius:6px;
    font-weight:bold;
    transition:0.3s;
}
.back-btn:hover {
    background:#0056b3;
}
</style>
</head>
<body>
<h2>📩 Contact Messages</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Actions</th>
    </tr>
    <?php 
    if($result && $result->num_rows > 0){
        while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo htmlspecialchars($row['name']); ?></td>
            <td><?php echo htmlspecialchars($row['email']); ?></td>
            <td><?php echo htmlspecialchars($row['message']); ?></td>
            <td>
                <a href="delete_contact.php?id=<?php echo $row['id']; ?>" class="button delete" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
    <?php 
        } 
    } else {
        echo "<tr><td colspan='5'>No messages found</td></tr>";
    }
    ?>
</table>

<!-- ✅ Back Button -->
<center>
<a href="admin_dashboard.php" class="back-btn"> Back </a>
</center>

</body>
</html>
