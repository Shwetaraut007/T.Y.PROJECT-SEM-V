<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctor Appointment</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background: url("N1.jpg") no-repeat center center fixed;
      background-size: cover;
    }

    
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: rgba(255, 255, 255, 0.9);
      padding: 15px 30px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .logo {
      font-weight: bold;
      font-size: 24px;
      color: #CC5500;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .logo img {
      width: 28px;
      height: 28px;
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

    .center-nav a:hover {
      color: #007bff;
    }

    .feedback-btn {
      padding: 8px 14px;
      background: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .feedback-btn:hover {
      background: #0056b3;
    }

    .main-title {
      text-align: center;
      margin-top: 40px;
      font-size: 38px;
      font-weight: bold;
      color: #CC5500;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
    }

    .transparent-box {
      background: rgba(255, 255, 255, 0.7);
      padding: 20px;
      border-radius: 20px;
      box-shadow: 0px 6px 15px rgba(0,0,0,0.2);
      width: 300px;
      text-align: center;

      position: absolute;
      top: 60%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .transparent-box h2 {
      color: darkgreen;
      margin-bottom: 20px;
    }

    .transparent-box input,
    .transparent-box textarea {
      width: 90%;
      padding: 8px;
      margin: 8px 0;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .transparent-box button {
      background: #007bff;
      color: white;
      border: none;
      padding: 10px 15px;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    }

    .transparent-box button:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">🩺 ॥श्री॥ MediBook</div>

    <nav class="center-nav">
      <a href="index1.php">Home</a>
      <a href="about.php">About</a>
      <a href="doctor list.php">Doctor list</a>
      <a href="contact.php">Contact</a>
      <a href="admin_login.php">Admin</a>
      <a href="doctor_login.php">Doctor_login</a>
    </nav>

    <a href="feedback.php"><button class="feedback-btn">Feedback</button></a>
  </header>

  <!-- Main Title -->
  <h1 class="main-title">Doctor Appointment Management System</h1>

  
  <div class="transparent-box">
    <form action="contact2.php" method="POST">
      <label>Name:</label>
      <input type="text" name="name" required><br><br>

      <label>Email:</label>
      <input type="email" name="email" required><br><br>

      <label>Message:</label>
      <textarea name="message" required></textarea><br><br>

      <button type="submit">Send</button>
      <button type="button" onclick="window.location.href='index1.php'">Back</button>
    </form>
  </div>
</body>
</html>
