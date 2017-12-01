<?php
	//echo "Before the include";
	include 'connection.php';
	//echo "After the include";
	//define variables to empty values
	$Email = $Username = $Password = $RetypePassword = $NewPassword = "NONE";

	//if($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST['signUpEmail'])){
			//echo "Triggered";
			$Email = $_POST['signUpEmail'];
			//echo $Email;
			//echo "hello";
		}
		if (isset($_POST['signUpUsername'])){
			$Username = $_POST['signUpUsername'];
		}		
		if (isset($_POST['signUpPassword'])){
			$NewPassword = sha1($Password);
			$Password = $_POST['signUpPassword'];
			}
		if (isset($_POST['signUpRetypePassword'])){
			$RetypePassword = $_POST['signUpRetypePassword'];
			if ($RetypePassword === $Password) {
				$NewPassword = sha1($Password);
				}
			}
		//$NewPassword = sha1($Password);
	    validatePassword($Password, $RetypePassword);
	    
	   // echo "After validate password";
	//}

	function test_input($data) {
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
}
	function validatePassword($password, $RetypePassword){
		if(($password !=$RetypePassword )){
			echo '<script type="text/javascript">alert("Passwords do not match!");</script>';
		}
	}

//echo "before the branches";
$queryemail = "SELECT * FROM user_table WHERE email='$Email'";
$resultemail = mysqli_query($conn, $queryemail);
$queryuser = "SELECT * FROM user_table WHERE username='$Username'";
$resultuser = mysqli_query($conn, $queryuser);


if(mysqli_num_rows($resultemail)>0) {
	echo'error1';
	
 	
 	$message = "Your email has already been taken. Please use a different email or sign in.";
	echo "<script type='text/javascript'>alert('$message');</script>";
	//header('Location: index.html');
 	exit();
} 

elseif(mysqli_num_rows($resultuser)>0){
	
 	
 	$message = "Your username has already been taken. Please create a different username or sign in.";
	echo "<script type='text/javascript'>alert('$message');</script>";
	//header('Location: signup.php');
 	exit();
}

else{
	session_start();
	//$_SESSION['first'] = $username;
	$sql = "INSERT INTO user_table (email,username,password) VALUES ('$Email','$Username','$NewPassword')";
	$result = mysqli_query($conn, $sql);
	
	//header('Location: signup.php');
	exit();

}



	
	
?>

