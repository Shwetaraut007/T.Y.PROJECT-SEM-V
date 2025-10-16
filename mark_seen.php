<?php
$conn = new mysqli("localhost","root","","clinic");
if($conn->connect_error){ echo "Error"; exit; }

$id = intval($_GET['id']);
$conn->query("UPDATE emergency SET is_seen = 1 WHERE id = $id");
echo "OK";
$conn->close();
?>
