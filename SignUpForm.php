<?php
	//define variables to empty values
	$Email = $Username = $Password = $RetypePassword = "";

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$Email = test_input($_POST["signUpEmail"]);
		$Username = test_input($_POST["signUpUsername"]);
		$Password = test_input($_POST["signUpPassword"]);
		$RetypePassword = test_input($_POST["signUpRetypePassword"]);
		validatePassword($Password, $RetypePassword);
	}

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
?>