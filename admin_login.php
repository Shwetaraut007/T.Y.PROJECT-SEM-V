<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: url("Y1.jpg") no-repeat center center fixed; 
      background-size: cover;
      display: flex;
      flex-direction: column; 
      height: 100vh;
      justify-content: center;
      align-items: center;
      margin: 0;
    }


    h1 {
      color:#FF8C00;
      text-align: center;
      font-size: 45px;
      margin-bottom: 40px;
      font-weight: bold;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.6);
    }

  
    .box {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(10px); 
      padding: 25px 30px;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.4);
      width: 320px;
      text-align: center;
      border: 1px solid rgba(255,255,255,0.4);
    }

    h2 {
      color: #ffffff;
      margin-bottom: 15px;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
    }

    input, button {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 6px;
      border: none;
      font-size: 14px;
    }

    input {
      background: rgba(255,255,255,0.8);
      color: #000;
    }

    button {
      background: #007bff;
      color: white;
      cursor: pointer;
      transition: 0.3s;
      font-weight: bold;
    }

    button:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>

  <h1>Doctor Appointment Management System</h1>

  <div class="box">
    <h2>Admin Login</h2>
    <form method="post" action="admin_login_check.php">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
  </div>

</body>
</html>
