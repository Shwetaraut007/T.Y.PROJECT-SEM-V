<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: url("V1.jpg") no-repeat center center/cover;
      display: flex;
      flex-direction: column;   /* title वर आणि box खाली दिसेल */
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .page-title {
      font-size: 42px;      /* मोठं */
      font-weight: bold;    /* जाड (bold) */
      color: mango orange;      /* रंग */
      margin-bottom: 20px;  /* खाली space */
      text-align: center;
    }
    .container {
      background: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      padding: 30px;
      border-radius: 15px;
      width: 350px;
      text-align: center;
      box-shadow: 0px 0px 15px rgba(0,0,0,0.3);
    }
    h2 {
      color: green;
      margin-bottom: 20px;
    }
    input {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 2px solid #000;
      border-radius: 5px;
      font-size: 14px;
      background: rgba(255,255,255,0.6);
    }
    button {
      width: 100%;
      padding: 10px;
      background: green;
      color: white;
      font-size: 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    }
    button:hover {
      background: darkgreen;
    }
    .login-link {
      margin-top: 15px;
    }
    .login-link a {
      color: purple;
      text-decoration: none;
    }
    .login-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <!-- Title वर -->
  <h1 class="page-title">Doctor Appointment Management System</h1>

  <div class="container">
    <h2>Registration</h2>
    <form method="post" action="registration1.php">
      <input type="text" name="name" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      
      <button type="submit">Register</button>
    </form>
    <div class="login-link">
      <a href="login.html">Already have an account? Login</a>
    </div>
  </div>
</body>
</html>
