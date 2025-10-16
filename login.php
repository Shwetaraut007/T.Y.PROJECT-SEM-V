<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Doctor Appointment Management System</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: url("N1.jpg") no-repeat center/cover;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      height: 100vh;
      margin: 0;
    }
    .title {
      font-size: 45px;   
      font-weight: 900;  
      color: #FF69B4;
      text-shadow: 3px 3px 6px rgba(0,0,0,0.9);
      margin-bottom: 30px; 
    }
    .container {
      background: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(10px);
      padding: 30px;
      border-radius: 15px;
      width: 350px;
      text-align: center;
      box-shadow: 0px 0px 15px rgba(0,0,0,0.3);
    }
    h2 { 
      color: green; 
      margin-bottom: 15px;
    }
    input, button {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border-radius: 5px;
      border: none;
    }
    button {
      background: green;
      color: white;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
    }
    button:hover { background: darkgreen; }
  </style>
</head>
<body>
 
  <div class="title">Doctor Appointment Management System</div>

  <div class="container">
    <h2>Login</h2>
    <form method="post" action="login1.php">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>
