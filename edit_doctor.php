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

$id = $_GET['id'];
$sql = "SELECT * FROM doctors WHERE id=$id";
$result = $conn->query($sql);
$doctor = $result->fetch_assoc();

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $speciality = $_POST['speciality'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $degree = $_POST['degree'];
    $experience = $_POST['experience'];

    $photo = $doctor['photo'];
    if(isset($_FILES['photo']) && $_FILES['photo']['error'] == 0){
        $targetDir = "uploads/";
        if(!is_dir($targetDir)){
            mkdir($targetDir, 0777, true);
        }
        $filename = time() . "_" . basename($_FILES['photo']['name']);
        $photo = $targetDir . $filename;
        move_uploaded_file($_FILES['photo']['tmp_name'], $photo);
    }

    $sql = "UPDATE doctors SET 
                name='$name', 
                speciality='$speciality', 
                email='$email', 
                phone='$phone',
                degree='$degree',
                experience='$experience',
                photo='$photo'
            WHERE id=$id";

    if($conn->query($sql)){
        header("Location: manage_doctors.php");
        exit();
    }else{
        echo "Error: ".$conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Doctor</title>
<style>
body {
 font-family: Arial;
 background:#eef2f7;
 padding:20px; }

form {
 background:white;
 padding:20px;
 border-radius:8px; 
max-width:400px; 
margin:auto; }

input {
 width:100%; 
padding:10px; 
margin:10px 0; }

button { 
padding:10px 20px; 
background:#f0ad4e;
 color:white;
 border:none;
 cursor:pointer; }

</style>
</head>
<body>
<h2>Edit Doctor</h2>
<form method="post" enctype="multipart/form-data">
    <input type="text" name="name" value="<?php echo htmlspecialchars($doctor['name']); ?>" required>
    <input type="text" name="speciality" value="<?php echo htmlspecialchars($doctor['speciality']); ?>" required>
    <input type="email" name="email" value="<?php echo htmlspecialchars($doctor['email']); ?>" required>
    <input type="text" name="phone" value="<?php echo htmlspecialchars($doctor['phone']); ?>" required>
    <input type="text" name="degree" value="<?php echo htmlspecialchars($doctor['degree']); ?>" required>
    <input type="text" name="experience" value="<?php echo htmlspecialchars($doctor['experience']); ?>" required>
    <p>Current Photo:</p>
    <?php if(!empty($doctor['photo'])) { ?>
        <img src="<?php echo $doctor['photo']; ?>" width="100" style="border-radius:8px;"><br>
    <?php } ?>
    <input type="file" name="photo" accept="image/*">
    <button type="submit" name="update">Update Doctor</button>
</form>
</body>
</html>
