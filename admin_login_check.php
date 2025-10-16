<?php
session_start();

$user = isset($_POST['username']) ? trim($_POST['username']) : '';
$pass = isset($_POST['password']) ? trim($_POST['password']) : '';

if ($user === "shweta raut" && $pass === "192005") {
    $_SESSION['admin'] = $user;
    header("Location: admin_dashboard.php");
    exit();
} else {
    echo "<script>
            alert('❌ Invalid Login');
            window.location.href='admin_login.php';
          </script>";
    exit();
}
?>
