<?php
$conn = new mysqli("localhost","root","","clinic");
if($conn->connect_error) die("DB Error: ".$conn->connect_error);

appointment if form submitted
if(isset($_POST['doctor_name']) && isset($_POST['patient_name'])){
    $doctor = $conn->real_escape_string($_POST['doctor_name']);
    $patient = $conn->real_escape_string($_POST['patient_name']);
    $contact = $conn->real_escape_string($_POST['contact_no']);
    $date = $_POST['date']; 
    $time = $_POST['time']; 
    $document = $conn->real_escape_string($_POST['document'] ?? '');
    $datetime = $date.' '.$time;

    // appointment मध्ये सेव्ह
    $conn->query("INSERT INTO appointment (doctor_name, patient_name, contact_no, date, time, document)
                  VALUES ('$doctor', '$patient', '$contact', '$datetime', '$time', '$document')");

    // report मध्ये सेव्ह
    $conn->query("INSERT INTO report (doctor_name, patient_name, contact_no, date, time, document)
                  VALUES ('$doctor', '$patient', '$contact', '$datetime', '$time', '$document')");
}

// ✅ Determine which report to show
$type = $_POST['type'] ?? 'Day';
$today = date("Y-m-d");
$filter = '';
$table = 'appointment'; // default table


if($type=='Day') $filter = "WHERE DATE(date)='$today'";
elseif($type=='Month'){
    $month_start = date("Y-m-01");
    $month_end = date("Y-m-t");
    $filter = "WHERE DATE(date) BETWEEN '$month_start' AND '$month_end'";
}
elseif($type=='Year'){
    $year_start = date("Y-01-01");
    $year_end = date("Y-12-31");
    $filter = "WHERE DATE(date) BETWEEN '$year_start' AND '$year_end'";
}

// Emergency reports
elseif($type=='DayEmergency'){
    $table = 'emergency';
    $filter = "WHERE DATE(timestamp)='$today'";
}
elseif($type=='MonthEmergency'){
    $table = 'emergency';
    $month_start = date("Y-m-01");
    $month_end = date("Y-m-t");
    $filter = "WHERE DATE(timestamp) BETWEEN '$month_start' AND '$month_end'";
}
elseif($type=='YearEmergency'){
    $table = 'emergency';
    $year_start = date("Y-01-01");
    $year_end = date("Y-12-31");
    $filter = "WHERE DATE(timestamp) BETWEEN '$year_start' AND '$year_end'";
}


$result = $conn->query("SELECT * FROM $table $filter ORDER BY id ASC");
if(!$result){
    die("SQL Error: ".$conn->error);
}

if($result->num_rows > 0){
    echo "<h3 style='text-align:center;'>$type Report - Total Patients: ".$result->num_rows."</h3>";
    echo "<table border='1' cellpadding='8' cellspacing='0' style='width:100%; border-collapse:collapse;'>
            <tr style='background:#28a745; color:white;'>";
    if($table=='appointment'){
        echo "<th>ID</th><th>Doctor</th><th>Patient</th><th>Contact</th><th>Date</th><th>Time</th><th>Document</th><th>Created At</th>";
        echo "</tr>";
        while($row=$result->fetch_assoc()){
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['doctor_name']}</td>
                    <td>{$row['patient_name']}</td>
                    <td>{$row['contact_no']}</td>
                    <td>{$row['date']}</td>
                    <td>{$row['time']}</td>
                    <td>".($row['document'] ?: 'N/A')."</td>
                    <td>{$row['created_at']}</td>
                  </tr>";
        }
    } else { // emergency table
        echo "<th>ID</th><th>Patient</th><th>Emergency Type</th><th>Priority Level</th><th>Timestamp</th><th>Seen</th><th>Created At</th>";
        echo "</tr>";
        while($row=$result->fetch_assoc()){
            $seen = $row['is_seen'] ? 'Yes' : 'No';
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['patient_name']}</td>
                    <td>{$row['emergency_type']}</td>
                    <td>{$row['priority_level']}</td>
                    <td>{$row['timestamp']}</td>
                    <td>{$seen}</td>
                    <td>{$row['created_at']}</td>
                  </tr>";
        }
    }
    echo "</table>";
} else {
    echo "<p style='text-align:center; font-size:18px;'>No records found for $type Report</p>";
}
?>
