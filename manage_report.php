<?php
$conn = new mysqli("localhost","root","","clinic");
if($conn->connect_error) die("DB Error: ".$conn->connect_error);

// ✅ Insert new regular appointment if form submitted
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

// ✅ बाकी कोड तसाच (report fetch करण्यासाठी)...
