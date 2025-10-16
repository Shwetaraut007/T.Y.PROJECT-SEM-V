<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Doctors List</title>
  <style>

    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url('b1.jpg');  
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: center;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #ffffff;
      padding: 15px 30px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .logo {
      font-weight: bold;
      font-size: 24px;
      color:#CC5500;
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

    .feedback-btn {
      padding: 8px 14px;
      background: #28a745;  
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .feedback-btn:hover {
      background: #1e7e34;
    }

    main {
      padding: 30px;
      text-align: center;
    }

    h1 {
      margin-bottom: 30px;
    }

    .card-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .card {
      background: #fff;
      border-radius: 10px;
      width: 200px;
      padding: 20px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .card img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 15px;
    }

    .card h3 {
      margin: 10px 0 5px;
    }

    .card p {
      margin: 0 0 15px;
      color: #666;
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

.back-btn {
      background-color: #0000FF;  
      color: white;
      padding: 12px 25px;
      border: none;
      border-radius: 8px;
      font-size: 18px;
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
      margin: 40px;
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

    
    <a href="feedback.php"><button class="feedback-btn">Feedback</button></a>
  </header>

  <main>
    <h1>Doctors List</h1>
    <div class="card-container">

      <!-- Doctor 1 -->
      <div class="card">
        <img src="doctor1.jpg" alt="Dr. Shweta Raut">
        <h3>Dr. Shweta Raut</h3>
        <p>General Physician</p>
        <a href="doctor-profile1.php"> <button>View Profile</button></a>
      </div>

      <!-- Doctor 2 -->
      <div class="card">
        <img src="doctor2.jpg" alt="Dr. Pooja Aadmane">
        <h3>Dr. Pooja Aadmane</h3>
        <p>Cardiologist</p>
        <a href="doctor-profile2.php"> <button>View Profile</button></a>
      </div>

      <!-- Doctor 3 -->
      <div class="card">
        <img src="doctor3.jpg" alt="Dr. Mayuri Aasnes">
        <h3>Dr. Mayuri Aasne</h3>
        <p>Pediatrician</p>
       <a href="doctor-profile3.php"> <button>View Profile</button></a>
      </div>

      <!-- Doctor 4 -->
      <div class="card">
        <img src="doctor4.jpg" alt="Dr. Aarti Dalvi">
        <h3>Dr. Aarti Dalvi</h3>
        <p> Neurologist</p>
        <a href="doctor-profile4.php"> <button>View Profile</button></a>
      </div>

      <!-- Doctor 5 -->
      <div class="card">
        <img src="doctor5.jpg" alt="Dr. Bhargawi Rokade">
        <h3>Dr. Bhargawi Rokade</h3>
        <p>Gynecologist</p>
        <a href="doctor-profile5.php"> <button>View Profile</button></a>
      </div>

      <!-- Doctor 6 -->
      <div class="card">
        <img src="doctor6.jpg" alt="Dr. Nirmala Pawar">
        <h3>Dr. Nirmala Pawar</h3>
        <p> Dermatologist</p>
       <a href="doctor-profile6.php"> <button>View Profile</button></a>
      </div>

      <!-- Doctor 7 -->
      <div class="card">
        <img src="doctor7.jpg" alt="Dr. Akash Shinde">
        <h3>Dr. Akash Shinde</h3>
        <p>ENT Specialist</p>
        <a href="doctor-profile7.php"> <button>View Profile</button></a>
      </div>

      <!-- Doctor 8 -->
      <div class="card">
        <img src="doctor8.jpg" alt="Dr. Sagar Mehta">
        <h3>Dr. Sagar Mehta</h3>
        <p>Psychiatrist</p>
        <a href="doctor-profile8.php"> <button>View Profile</button></a>
      </div>

      <!-- Doctor 9 -->
      <div class="card">
        <img src="doctor9.jpg" alt="Dr. Shreyash Raut">
        <h3>Dr. Shreyash Raut</h3>
        <p>Oncologist</p>
        <a href="doctor-profile9.php"> <button>View Profile</button></a>
      </div>

      <!-- Doctor 10 -->
      <div class="card">
        <img src="doctor10.jpg" alt="Dr. Sanjay Ravat">
        <h3>Dr. Sanjay Ravat</h3>
        <p>Ophthalmologist</p>
        <a href="doctor-profile10.php"> <button>View Profile</button></a>
      </div>

       <!-- Doctor 11 -->
      <div class="card">
        <img src="doctor11.jpg" alt="Dr. Somnath Borude">
        <h3>Dr. Somnath Borude</h3>
        <p>Urologist</p>
        <a href="doctor-profile11.php"> <button>View Profile</button></a>
      </div>

       <!-- Doctor 12 -->
      <div class="card">
        <img src="doctor12.jpg" alt="Dr. Chandrkant Kasar">
        <h3>Dr. Chandrkant Kasar</h3>
        <p>Orthopedic Surgeon</p>
        <a href="doctor-profile12.php"> <button>View Profile</button></a>
      </div>
    </div>

  <div class="center-button">
    <a href="index1.php"><button class="back-btn">Back</button></a>
  </div>
 </main>
</body>
</html>
