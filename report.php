<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Appointment Report</title>
<style>
  body { 
  font-family: Arial;
  margin:0; 
  padding:0; 
  background:#eef2f7; }

  h2 {
  text-align:center; 
  font-size:36px; 
  margin:20px 0; }

 .container { 
  display:flex; 
  padding:20px; }

 .boxes {
  width:250px; 
  display:flex; 
  flex-direction:column;
  gap:15px; }

 .box { 
  padding:20px; 
  border-radius:10px;
  color:white; 
  cursor:pointer;
  font-size:20px; 
  font-weight:bold;
  text-align:center;
  background:#8B4513;
  transition:0.3s; }

 .box p {
 font-size:14px;
 font-weight:normal;
 margin:5px 0 0 0; }

 .box:hover {
 background:#5C3317; }

  .report-output { 
  flex:1; margin-left:20px; 
  padding:20px; 
  background:white; 
  border-radius:10px;
  box-shadow:0 0 8px rgba(0,0,0,0.2); 
  text-align:center; 
  font-size:20px; 
  font-weight:bold; 
  color:#333; }

 .back-btn {
 display:inline-block;
 margin:20px auto; 
 padding:15px 25px; 
 background:#8B4513; 
 color:white;
 text-decoration:none;
 font-size:18px;
 font-weight:bold;
 border-radius:10px;
 transition:0.3s; }

.back-btn:hover { 
background:#5C3317; }

</style>
<script>
function showReport(type){
    var xhr = new XMLHttpRequest();
    xhr.open("POST","report1.php",true);
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhr.onreadystatechange = function(){
        if(xhr.readyState==4 && xhr.status==200){
            document.getElementById("reportArea").innerHTML = xhr.responseText;
        }
    };
    xhr.send("type="+type);
}


window.onload = function(){
    showReport('Day');
};
</script>
</head>
<body>
<h2>Generate Report</h2>

<div class="container">
  <div class="boxes">

    <div class="box" onclick="showReport('Day')">Daily <p>Daily Appointment Report</p></div>
    <div class="box" onclick="showReport('Month')">Monthly <p>Monthly Appointment Report</p></div>
    <div class="box" onclick="showReport('Year')">Yearly <p>Yearly Appointment Report</p></div>

    <div class="box" onclick="showReport('DayEmergency')">Daily <p>Daily Emergency Appointment Report</p></div>
    <div class="box" onclick="showReport('MonthEmergency')">Monthly <p>Monthly Emergency Appointment Report</p></div>
    <div class="box" onclick="showReport('YearEmergency')">Yearly <p>Yearly Emergency Appointment Report</p></div>
  </div>

  <div class="report-output" id="reportArea">
    <p style="color:#888;"></p>
  </div>
</div>

<center>
<a href="admin_dashboard.php" class="back-btn">Back</a>
</center>
</body>
</html>
