<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About -॥ श्री ॥ MediBook</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url('L1.jpg');  
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: center;
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

    .book-btn {
      padding: 8px 14px;
      background: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .book-btn:hover {
      background: #0056b3;
    }

   
    .main-title {
      text-align: center;
      color: black;
      font-size: 38px;
      font-weight: bold;
      margin-top: 40px;
      text-shadow: 2px 2px 5px rgba(0,0,0,0.3);
    }

    .transparent-box {
      background: rgba(255, 255, 255, 0.85);
      padding: 20px;
      border-radius: 12px;
      max-width: 800px;
      margin: 20px auto 30px auto;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      text-align: center;
    }

    .transparent-box h1 {
      color: purple;
      font-size: 32px;
      margin-bottom: 15px;
    }

    .transparent-box p {
      font-size: 16px;
      color: #333;
      line-height: 1.5;
    }

    .back-btn {
      background-color: #0000FF;  
      color: white;
      padding: 10px 22px;
      border: none;
      border-radius: 8px;
      font-size: 17px;
      cursor: pointer;
      transition: 0.3s;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .back-btn:hover {
      background-color: #0000FF;  
      transform: scale(1.05);
    }

    .center-button {
      text-align: center;
      margin: 10px 0 20px 0;
    }
  </style>
</head>
<body>
  
  <header>
    <div class="logo">🩺॥ श्री ॥ MediBook</div>

    <nav class="center-nav">
      <a href="index1.php">Home</a>
      <a href="about.php">About</a>
      <a href="doctor list.php">Doctor list</a>
      <a href="Contact.php">Contact</a>
      <a href="admin_login.php">Admin</a>
      <a href="doctor_login.php">Doctor_login</a>
    </nav>

    
    <a href="feedback.php">
      <button class="book-btn">Feedback</button>
    </a>
  </header>

  
  <h1 class="main-title">Doctor Appointment Management System</h1>

  <!-- Transparent Box -->
  <div class="transparent-box">
    <h1>About Us</h1>
    <p>
      Welcome to <strong>॥ श्री ॥ MediBook</strong>, your trusted partner for managing doctor appointments efficiently and conveniently.
      Our system is designed to connect patients with healthcare providers seamlessly, making healthcare more accessible for everyone.
      At MediBook, we are dedicated to providing a simple and user-friendly platform that makes appointment booking easier, faster, and more reliable — ensuring you receive the care you need without any hassle.
      <br><br>
      Our goal is to bridge the gap between patients and doctors by offering a secure, digital solution that promotes better healthcare communication.
      With MediBook, you can find doctors, schedule appointments, and manage your medical visits — all in one place.
      Because we believe that better organization leads to better care.
    </p>
  </div>

 
  <div class="center-button">
    <a href="index1.php"><button class="back-btn">Back</button></a>
  </div>
</body>
</html>
