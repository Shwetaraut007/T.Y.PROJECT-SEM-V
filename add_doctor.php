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

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $speciality = $_POST['speciality'];  
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $degree = $_POST['degree'];
    $experience = $_POST['experience'];

   
    $photo = "";
    if(isset($_FILES['photo']) && $_FILES['photo']['error'] == 0){
        $targetDir = "uploads/";
        if(!is_dir($targetDir)){
            mkdir($targetDir, 0777, true);
        }
        $filename = time() . "_" . basename($_FILES['photo']['name']);
        $photo = $targetDir . $filename;
        move_uploaded_file($_FILES['photo']['tmp_name'], $photo);
    }

    $sql = "INSERT INTO doctors (name, speciality, degree, experience, phone, email, photo) 
            VALUES ('$name','$speciality','$degree','$experience','$phone','$email','$photo')";

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
<title>Add Doctor</title>
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
 background:#43cea2;
 color:white;
 border:none;
 cursor:pointer; }

</style>
</head>
<body>
<h2>Add New Doctor</h2>
<form method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Doctor Name" required>
    <input type="text" name="speciality" placeholder="Speciality" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="phone" placeholder="Phone" required>
    <input type="text" name="degree" placeholder="Degree" required>
    <input type="text" name="experience" placeholder="Experience" required>
    <input type="file" name="photo" accept="image/*">
    <button type="submit" name="submit">Add Doctor</button>
</form>
</body>
</html>
