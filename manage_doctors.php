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

$sql = "SELECT * FROM doctors ORDER BY id ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Doctors</title>
<style>
body {
    font-family: Arial;
    background:#eef2f7;
    padding:20px;
}
.container {
    max-width:1200px;
    margin:auto;
}
.header {
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:20px;
}
.header h2 {
    margin:0;
}
.add-btn, .back-btn {
    padding:10px 15px;
    color:white;
    text-decoration:none;
    border-radius:4px;
}
.add-btn {
    background:#43cea2;
}
.add-btn:hover {
    background:#2d8f70;
}
.back-btn {
    background:#007bff;
}
.back-btn:hover {
    background:#0056b3;
}
table {
    width:100%;
    border-collapse: collapse;
    background:white;
    border-radius:8px;
    overflow:hidden;
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
img {
    width:70px;
    height:70px;
    border-radius:50%;
    object-fit:cover;
}

/* ✅ Edit/Delete buttons side by side */
a.button {
    padding:6px 12px;
    background:#f0ad4e;
    color:white;
    text-decoration:none;
    border-radius:4px;
    display:inline-block;  /* side by side */
    margin-right:5px;      /* space between buttons */
}
a.delete {
    background:#d9534f;
}

/* ✅ Back button style for bottom */
.back-container {
    text-align:center;
    margin-top:20px; /* table पासून थोडा space */
}
</style>
</head>
<body>
<div class="container">
    <div class="header">
        <h2>Doctor List</h2>
        <div>
            <a href="add_doctor.php" class="add-btn">Add Doctor</a>
        </div>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Specialization</th>
            <th>Degree</th>
            <th>Experience</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td>
                <?php if(!empty($row['photo'])) { ?>
                    <img src="<?php echo $row['photo']; ?>" alt="Doctor Photo">
                <?php } else { ?>
                    No Photo
                <?php } ?>
            </td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['speciality']; ?></td>
            <td><?php echo $row['degree']; ?></td>
            <td><?php echo $row['experience']; ?> Years</td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
                <a href="edit_doctor.php?id=<?php echo $row['id']; ?>" class="button">Edit</a>
                <a href="delete_doctor.php?id=<?php echo $row['id']; ?>" class="button delete" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <!-- ✅ Back Button at bottom -->
    <div class="back-container">
        <a href="admin_dashboard.php" class="back-btn">Back</a>
    </div>

</div>
</body>
</html>
