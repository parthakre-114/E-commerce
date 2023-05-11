
<?php
	
$showAlert = false;
$showError = false;
$exists=false;
	
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	// Include file which makes the
	// Database Connection.
	include 'db_conn.php';
	
	$username = $_POST["username"];
	$password = $_POST["psw"];
	$cpassword = $_POST["psw-repeat"];
			
	
	$sql = "Select * from login where username='$username'";
	
	$result = mysqli_query($conn, $sql);
	
	$num = mysqli_num_rows($result);
	
	// This sql query is use to check if
	// the username is already present
	// or not in our Database
	if($num == 0) {
		if(($password == $cpassword) && $exists==false) {
	
			$hash = password_hash($password,
								PASSWORD_DEFAULT);
				
			// Password Hashing is used here.
			$sql = "INSERT INTO login ( `username`,
				`psw`, `psw-repeat`) VALUES ('$username',
				'$password', '$cpassword')";
	
			$result = mysqli_query($conn, $sql);
	
			if ($result) {
				$showAlert = true;
			}
		}
		else {
			$showError = "Passwords do not match";
		}	
	}// end if
	
if($num>0)
{
	$exists="Username not available";
}
	
}//end if
	
?>
	
