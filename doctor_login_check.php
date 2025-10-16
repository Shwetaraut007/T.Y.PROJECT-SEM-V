<?php
session_start();

// Get POST data safely
$user = isset($_POST['username']) ? trim($_POST['username']) : '';
$pass = isset($_POST['password']) ? trim($_POST['password']) : '';

// Check credentials (simple check, replace with DB in future)
if ($user === "doctor" && $pass === "doctor") {
    $_SESSION['doctor'] = $user;  // ✅ Session name updated
    header("Location: doctor_dashboard.php");
    exit();
} else {
    echo "<script>
            alert('❌ Invalid Login');
            window.location.href='doctor_login.php';
          </script>";
    exit();
}
?>
