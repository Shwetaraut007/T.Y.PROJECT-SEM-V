<?php 
session_start(); 
// ✅ Check updated to match login session
if (!isset($_SESSION['doctor'])) {
    header("Location: doctor_login.php");
    exit();
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Doctor Dashboard</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<style>
body { font-family: 'Arial', sans-serif; background: #eef2f7; margin: 0; }
header { background: linear-gradient(90deg, #43cea2, #185a9d); color:white; padding:25px; text-align:center; font-size:28px; font-weight:bold; letter-spacing:1px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
nav { display:flex; background:#2c3e50; padding:12px 0; justify-content:center; gap:25px; flex-wrap:wrap; }
nav a { color:white; text-decoration:none; font-weight:bold; padding:10px 18px; border-radius:6px; transition:0.3s; }
nav a:hover { background:#43cea2; color:white; transform: scale(1.05); }
.welcome { text-align:center; margin:40px 20px 30px 20px; }
.welcome h2 { color:#185a9d; margin-bottom:8px; font-size:28px; }
.welcome p { color:#555; font-size:16px; }
.options { display: grid; grid-template-columns: repeat(4, 1fr); gap:20px; padding:20px; max-width:1400px; margin:auto; }
.option { background: linear-gradient(135deg, #43cea2, #185a9d); color: white; text-align:center; padding:40px 20px; border-radius:12px; font-size:20px; font-weight:bold; transition: transform 0.3s, box-shadow 0.3s; cursor:pointer; position: relative; overflow: hidden; }
.option i { display:block; font-size:40px; margin-bottom:15px; }
.option::after { content:""; position:absolute; width:100%; height:100%; top:0; left:-100%; background: rgba(255,255,255,0.1); transform: skewX(-20deg); transition: 0.5s; }
.option:hover::after { left:100%; }
.option:hover { transform: translateY(-8px); box-shadow: 0 10px 25px rgba(0,0,0,0.2); }
.option p { margin-top:10px; font-size:14px; color: #f0f0f0; }
.option .report-links a { color: #f0f0f0; text-decoration: none; display:block; margin:3px 0; font-size:14px; }
.option .report-links a:hover { text-decoration: underline; }
@media (max-width: 1200px) { .options { grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); } }
</style>
</head>
<body>

<header>🏥 Doctor Appointment Management - Doctor</header>

<nav>
<a href="doctor_dashboard.php"><i class="fas fa-home"></i> Dashboard</a>
<a href="manage_appointment.php"><i class="fas fa-calendar-check"></i> Appointment</a>
<a href="manage_emergency1.php"> <i class="fas fa-triangle-exclamation"></i> Emergency</a>
<a href="doctor_logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
</nav>

<div class="welcome">
<h2>Welcome, <?php echo htmlspecialchars($_SESSION['doctor']); ?> 👋</h2> <!-- ✅ Show logged-in doctor name -->
<p>Manage your appointments and emergencies efficiently.</p>
</div>

<div class="options">

<div class="option" onclick="location.href='manage_appointment.php'">
    <i class="fas fa-calendar-alt"></i>
    Appointments
    <p>View all appointments</p>
</div>

<div class="option" onclick="location.href='manage_emergency1.php'">
    <i class="fas fa-triangle-exclamation"></i>
    Emergency
    <p>Emergency Appointments</p>
</div>

</div>

</body>
</html>
