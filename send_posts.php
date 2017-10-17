<?php
include 'connection.php';

$text = $_POST['content'];

if(isset($_POST['content'])){
$sql = "INSERT INTO text_content (posts) VALUES ('$text')";
$result = mysqli_query($conn,$sql);
ob_start();
echo "Post Sumbmitted.";
header('Location: mockup.php');

exit();
}


?>
