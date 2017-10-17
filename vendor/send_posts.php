<?php
include 'connection.php';

$text = $_POST['text'];

$sql = "INSERT INTO text_content (text) VALUES ('$text')";
$result = mysqli_query($conn,$sql);

ob_start();

header('Location: mockup.php');
exit();

?>