<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Emergency</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: url("b1.jpg") no-repeat center center/cover;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      padding: 20px;
    }
    h1 {
      text-align: center;
      color: darkgreen;
      padding: 15px 30px;
      border-radius: 10px;
      margin-bottom: 30px;
      font-size: 50px;
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
    .container h2 {
      color: darkblue;
      margin-bottom: 20px;
      font-size: 22px;
    }
    input, select {
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
      background: darkblue;
      color: white;
      font-size: 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
      transition: 0.3s;
    }
    button:hover {
      background: darkblue;
    }
  </style>
</head>
<body>
  <h1>Doctor Appointment Management System</h1>

  <div class="container">
    <h2>Emergency</h2>
    <form id="emergencyForm">
      Patient Name: <input type="text" name="patient_name" required><br>
      Emergency Type: <input type="text" name="emergency_type" required><br>
      Priority:
      <select name="priority_level">
        <option value="High">High</option>
        <option value="Medium">Medium</option>
        <option value="Low">Low</option>
      </select><br>
      <button type="submit">Submit Emergency</button>
    </form>
  </div>

  <!-- Audio Alert -->
  <audio id="alertSound" src="alert.mp3" preload="auto"></audio>

  <!-- AJAX + Sound Script -->
  <script>
    document.getElementById("emergencyForm").addEventListener("submit", function(e){
      e.preventDefault(); 
      let formData = new FormData(this);

      fetch('submit_emergency.php', {
          method: 'POST',
          body: formData
      })
      .then(res => res.text())
      .then(data => {
          if(data === "Success"){
              alert("Emergency submitted!");
              document.getElementById("alertSound").play(); 
          } else {
              alert("Error submitting emergency!");
          }
      });
    });
  </script>
</body>
</html>
