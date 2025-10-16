<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Doctor Profile</title>
  <style>
    body {
    font-family: Arial, sans-serif;
    background: url("V1.jpg") no-repeat     center center fixed;
    background-size: cover;   
    margin: 0;
    padding: 0;
    }
    .profile-container {
      max-width: 800px;
      margin: 40px auto;
      background: #fff;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .profile-header {
      display: flex;
      align-items: center;
      gap: 20px;
    }
    .profile-header img {
      width: 180px;
      height: 180px;
      border-radius: 50%;
      object-fit: cover;
    }
    .profile-header h2 {
      margin: 0;
      font-size: 26px;
    }
    .profile-header p {
      margin: 5px 0;
      color: #555;
    }
    .details {
      margin-top: 20px;
    }
    .details h3 {
      margin-bottom: 10px;
    }
    .appointment-btn {
      margin-top: 20px;
      padding: 10px 20px;
      background: #28a745;
      color: #fff;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      text-decoration: none;
    }
    .appointment-btn:hover {
      background: #0056b3;
    }

.emergency-btn {
      margin-top: 20px;
      padding: 10px 20px;
      background: #FF0000;
      color: #fff;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      text-decoration: none;
    }
    .emergency-btn:hover {
      background: #0056b3;
    }

.back-btn {
  margin-top: 20px;
  padding: 10px 20px;
  background: #007bff;
  color: #fff;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  font-size: 16px;
  text-decoration: none;
}
.back-btn:hover {
  background: #0056b3;
}

  </style>
</head>
<body>
  <div class="profile-container">
    <div class="profile-header">
      <img src="doctor2.jpg" alt="Dr. Pooja Aadmane">
      <div>
        <h2>Dr. Pooja Aadmane</h2>
        <p>Cardiologist</p>
        <p>MBBS, MD (Cardiology)</p>
        <p>30+ Years Experience</p>
      </div>
    </div>
    <div class="details">
      <h3>Clinic Address</h3>
      <p>City Hospital, Shivaji Road, Kopargav</p>

      <h3>Contact</h3>
      <p>Phone: +91 9876543210</p>
      <p>Email: pooja.aadmane@hospital.com</p>

      <h3>Available Timings</h3>
      <p>Mon – Sat: 10:00 AM – 5:00 PM</p>
    </div>
     <center>
    <a href="book appointment.php?doctor=Dr.%20Pooja%20Aadmane" class="appointment-btn">Book Appointment</a>
<a href="emergency.php?doctor=Dr.%20Pooja%20Aadmane" class="emergency-btn">Emergency</a>
    <a href="doctor list.php?doctor=Dr.%20Pooja%20Aadmane" class="back-btn">Back</a>
    <center>
  </div>
</body>
</html>