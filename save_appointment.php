<?php
$conn = new mysqli("localhost","root","","clinic");
if ($conn->connect_error) die("Connection failed: ".$conn->connect_error);

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $doctor_name = $_POST['doctor'];
    $patient_name = $_POST['patient_name'];
    $contact_no = $_POST['phone'];
    $date = $_POST['appointment_date'];   
    $time = $_POST['appointment_time'];    

    $document = null;
    if(isset($_FILES['document']) && $_FILES['document']['error']==0){
        $targetDir="uploads/";
        if(!is_dir($targetDir)) mkdir($targetDir,0777,true);
        $fileName = time()."_".basename($_FILES['document']['name']);
        $targetFile = $targetDir.$fileName;
        if(move_uploaded_file($_FILES['document']['tmp_name'],$targetFile)){
            $document=$fileName;
        }
    }

    $stmt = $conn->prepare("INSERT INTO `appointment`
        (`doctor_name`, `patient_name`, `contact_no`, `date`, `time`, `document`, `created_at`)
        VALUES (?, ?, ?, ?, ?, ?, NOW())");

    if(!$stmt){
        die("Prepare failed: ".$conn->error);
    }

    $stmt->bind_param("ssssss",$doctor_name,$patient_name,$contact_no,$date,$time,$document);

    if($stmt->execute()){
        echo "<script>alert('Appointment booked successfully ✅'); window.location.href='doctor list.php';</script>";
        exit;
    }else{
        echo "<script>alert('Error: ".addslashes($stmt->error)."'); window.history.back();</script>";
    }

    $stmt->close();
}
$conn->close();
?>
