<?php
$servername = "localhost";
$username = "root";   
$password = "";       
$dbname = "clinic";   

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    if (!empty($name) && !empty($email) && !empty($message)) {
        $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "<div style='max-width:600px; margin:50px auto; padding:20px; border-radius:10px; 
                        box-shadow:0px 0px 10px rgba(0,0,0,0.2); text-align:center;'>
                    <h2 style='color:green;'>✅ Thank you for contacting us!</h2>
                    <p>We have received your message. Our team will get back to you soon.</p>
                    <br>
                    <button onclick=\"window.location.href='index1.php'\" 
                            style='background:#007bff; color:white; padding:10px 20px; border:none; 
                                   border-radius:5px; cursor:pointer;'>
                        Back
                    </button>
                  </div>";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "❌ All fields are required!";
    }
}

$conn->close();
?>
