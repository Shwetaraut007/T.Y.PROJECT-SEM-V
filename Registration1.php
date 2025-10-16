<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // DB connect
    $conn = new mysqli("localhost", "root", "", "clinic");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Secure password hash
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepared statement
    $stmt = $conn->prepare("INSERT INTO registration (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $hashed_password);

    if ($stmt->execute()) {
        echo "<script>
                alert('✅ Registration Successful!');
                window.location.href='Index1.php';
              </script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

