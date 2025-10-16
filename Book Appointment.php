<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Book Appointment</title>
<style>
body {
  font-family: Arial, sans-serif;
  background: url("V1.jpg") no-repeat center center fixed;
  background-size: cover;
  margin: 0; 
  padding: 0; 
}

h1 {
  text-align: center;
  color:#6A1B9A;
  font-size: 38px;
  margin-top: 25px;
  margin-bottom: 30px;
  font-weight: bold;
}

.form-container {
  max-width: 380px;  
  background: rgba(255, 255, 255, 0.92);
  margin: 30px auto;
  padding: 15px 20px;
  border-radius: 15px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.25);
  backdrop-filter: blur(4px);
}

h2 {
  text-align: center;
  margin-bottom: 15px; 
  color: #0033cc;
  font-size: 22px;
}

label {
  display: block; 
  margin: 8px 0 4px;
  font-size: 14px;
}

input, textarea, select {
  width: 100%; 
  padding: 8px; 
  border: 1px solid #ccc;
  border-radius: 6px;
  font-size: 14px;
}

.btn-container {
  margin-top: 18px; 
  display: flex; 
  justify-content: space-between;
  gap: 10px;
}

.btn { 
  flex: 1; 
  padding: 10px; 
  background: #007bff; 
  color: #fff; 
  border: none; 
  border-radius: 8px;
  cursor: pointer; 
  font-size: 15px; 
  text-align: center; 
  text-decoration: none;
}

.btn:hover { 
  background: #0056b3;
}

.back-btn {
  background: #6c757d;
}

.back-btn:hover { 
  background: #495057;
}
</style>
</head>
<body>

<h1>Doctor Appointment Management System</h1>

<div class="form-container">
  <h2>Book Appointment</h2>
  <form method="POST" action="save_appointment.php" enctype="multipart/form-data">
    <label>Doctor Name</label>
    <input type="text" name="doctor" value="<?php echo $_GET['doctor'] ?? ''; ?>" readonly>

    <label>Patient Name</label>
    <input type="text" name="patient_name" required>

    <label>Contact Number</label>
    <input type="text" name="phone" required>

    <label>Appointment Date</label>
    <input type="date" name="appointment_date" required>

    <label>Time</label>
    <input type="time" name="appointment_time" required>

    <label>Upload Documents (Optional)</label>
    <input type="file" name="document" accept=".pdf,.jpg,.jpeg,.png">

    <div class="btn-container">
      <a href="doctor list.php" class="btn back-btn">Back</a>
      <button type="submit" class="btn">Confirm Appointment</button>
    </div>
  </form>
</div>

</body>
</html>