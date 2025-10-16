<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Doctor Appointment Management Sysystem</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url('F1.jpeg');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: rgba(255, 255, 255, 0.9);
      padding: 10px 30px;
      box-shadow: 0 4px 5px rgba(0, 0, 0, 0.1);
    }

    .logo {
      font-weight: bold;
      font-size: 24px;
      color: #CC5500;
    }

    .center-nav {
      display: flex;
      gap: 20px;
    }

    .center-nav a {
      text-decoration: none;
      color: #333;
      font-weight: bold;
    }

   
    .btn {
      background-color: #007bff;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
    }

    .btn:hover {
      background-color: #0056b3;
    }

   
    .card-style {
      background: #fff;
      border-radius: 6px;
      padding: 30px 20px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
      max-width: 450px;
      margin: 20px auto;
      text-align: center;
    }

    .card-style h1 {
      margin-bottom: 15px;
      font-size: 28px;
      color: #000;
    }

    .card-style p {
      font-size: 18px;
      color: #555;
      margin-bottom: 20px;
    }

    .card-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      margin: 40px 20px;
    }

    .card {
      background: #fff;
      border-radius: 10px;
      width: 250px;
      padding: 20px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .card h3 {
      margin: 10px 0 5px;
    }

    .card p {
      color: #666;
      margin-bottom: 10px;
    }

    .card img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 15px;
    }

    .card button {
      padding: 8px 12px;
      background: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .card button:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <header>
    <div class="logo">🩺॥ श्री ॥
 MediBook</div>
    <nav class="center-nav">
      <a href="index1.php">Home</a>
      <a href="about.php">About</a>
      <a href="doctor list.php">Doctor list</a>
      <a href="Contact.php">Contact</a>
      <a href="admin_login.php">Admin</a>
      <a href="doctor_login.php">Doctor_login</a>
      
    </nav>

    <a href="feedback.php">
      <button class="btn">Feedback</button>
    </a>
  </header>

  <div class="card-style">
    <h1>Doctor Appointment Management System</h1>
    <p>Book your appointment with top doctors in just a few clicks.</p>
    
    <!-- Book Appointment button updated -->
    <button class="btn" onclick="window.location.href='doctor list.php'">
      Book Appointment
    </button>
  </div>

  <div class="card-container">
    <div class="card">
      <h3>👨‍⚕️ Featured Doctors</h3>
      <p>Browse profiles of experienced doctors</p>
    </div>

    <div class="card">
      <h3>🏥 Clinic Services</h3>
      <p>Explore the services we offer at our clinic</p>
    </div>

    <div class="card">
      <h3>📅 Make Appointment</h3>
      <p>Schedule an appointment with a doctor</p>
    </div>
  </div>

</body>
</html>
