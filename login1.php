<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];   
    $password = $_POST['password'];

    // DB connect
    $conn = new mysqli("localhost", "root", "", "clinic");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // User check
    $stmt = $conn->prepare("SELECT * FROM registration WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Password verify (important!)
        if (password_verify($password, $row['password'])) {
            echo "<script>
                    alert('✅ Login Successful!');
                    window.location.href='index1.php';
                  </script>";
        } else {
            echo "<script>
                    alert('❌ Wrong Password!');
                    window.location.href='login.html';
                  </script>";
        }
    } else {
        echo "<script>
                alert('❌ Account not found! Please register first.');
                window.location.href='registration.php';
              </script>";
    }

    $stmt->close();
    $conn->close();
}
?>
