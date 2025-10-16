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
    $rating = $_POST['rating'] ?? '';
    $comment = $_POST['comment'] ?? '';

    if (!empty($rating)) {
        $sql = "INSERT INTO feedback (rating, comment) VALUES ('$rating', '$comment')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<div style='
                    font-family: Arial, sans-serif;
                    background: #f4f4f4;
                    text-align: center;
                    padding: 50px;
                    border-radius: 10px;
                    margin: 50px auto;
                    width: 60%;
                    box-shadow: 0px 4px 12px rgba(0,0,0,0.3);'>
                    <h2 style='color:green;'>✅ Thank you for your feedback!</h2>
                    <p><b>Rating:</b> $rating</p>
                    <p><b>Comment:</b> ".(!empty($comment) ? $comment : "No comment")."</p>
                    <a href='index1.php' style='display:inline-block;
                        margin-top:20px;
                        padding:10px 20px;
                        background:#007bff;
                        color:white;
                        text-decoration:none;
                        border-radius:8px;'>Back </a>
                  </div>";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "<p style='color:red; text-align:center; font-weight:bold;'>❌ Please select an emoji before submitting.</p>";
    }
}

$conn->close();
?>
