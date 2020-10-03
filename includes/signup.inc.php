<!--
/*
	*
	* Project Name: 	A Novel Approach to Eradicate Pre-Existing Detriments in Public Toilets to Be Incorporated with Smart Cities – Intelligent Toilets
	* Author List: 		H.Mohammed Ameenullah, A.E Manish
	* Filename: signup.inc.php
	* Functions:mysqli_query($conn, $sql), mysqli_fetch_assoc($result), mysqli_real_escape_string($conn, $_POST['uid']), mysqli_num_rows($result), password_hash($pwd, PASSWORD_DEFAULT)
	* Global Variables: none
	*
	*
	*/
-->


<?php
session_start();
if (isset($_POST['submit'])) {

	include_once 'dbh.inc.php';
	/*
		*
		* Function Name: mysqli_real_escape_string($conn, $_POST['uid']
		* Input: 		$conn, $_POST['first']
		* Output: 	None
		* Logic: 		This function simply escapes special characters in a string for use in an SQL statement
		* Example Call:		Called automatically
		*
		*/
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	//Error handlers
	//Check for empty fields
	if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
		header ("Location: ../signup.php?signup=empty");
		exit();
	} else {
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header ("Location: ../signup.php?signup=invalid");
			exit();
		} else {
			//Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header ("Location: ../signup.php?signup=email");
				exit();
			} else {
				$sql = "SELECT * FROM users WHERE user_uid='$uid'";
				/*
					*
					* Function Name: mysqli_query($conn, $sql);
					* Input: 		$conn, $sql
					* Output: 	True or False
					* Logic: 		This function simply performs a query against the database
					* Example Call:		Called automatically
					*
					*/

				$result = mysqli_query($conn, $sql);

				$resultCheck = mysqli_num_rows($result);
				if ($resultCheck > 0) {
					header ("Location: ../signup.php?signup=usertaken");
					exit();
				} else {
					//Hashing the password
					/*
						*
						* Function Name: password_hash($pwd, PASSWORD_DEFAULT)
						* Input: 		$pwd, PASSWORD_DEFAULT
						* Output: 	Garbage Value
						* Logic: 		creates a new password hash using a strong one-way hashing algorithm
						* Example Call:		Called automatically
						*
						*/
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					//Inserting the user into the database
					$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";
					mysqli_query($conn, $sql);
					header ("Location: ../index.php?signup=success");
					exit();
				}
			}
		}
	}
} else {
	//redirecting to the login page
	header ("Location: ../signup.php");
	exit();
}
