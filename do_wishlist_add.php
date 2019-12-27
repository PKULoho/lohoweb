<?php
$act_id = $_GET['id'];
$username = $_COOKIE['username'];

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'abcd');
define('DB_NAME', 'loho');
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$stmt = $conn->prepare("INSERT INTO collection_act VALUES (?, ?)");
$stmt->bind_param("si", $username, intval($act_id));
$stmt->execute();

echo '<script>self.location=document.referrer;</script>';
