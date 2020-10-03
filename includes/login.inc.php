<!--
/*
	*
	* Project Name: 	A Novel Approach to Eradicate Pre-Existing Detriments in Public Toilets to Be Incorporated with Smart Cities – Intelligent Toilets
	* Author List: 		H.Mohammed Ameenullah, A.E Manish
	* Filename: login.inc.php
	* Functions: session_start(), mysqli_query($conn, $sql), mysqli_fetch_assoc($result), mysqli_real_escape_string($conn, $_POST['uid'])
	* Global Variables: none
	*
	*
	*/
-->
<?php

/*
	*
	* Function Name:session_start()
	* Input: 		None
	* Output: 	None
	* Logic: 		To begin  a new session and generate a unique session ID for the user
	* Example Call:		Called automatically
	*
	*/
session_start();
if (isset($_POST['Submit'])) {
	include 'dbh.inc.php';
	/*
		*
		* Function Name: mysqli_real_escape_string($conn, $_POST['uid']
		* Input: 		$conn, $_POST['uid']
		* Output: 	None
		* Logic: 		This function simply escapes special characters in a string for use in an SQL statement
		* Example Call:		Called automatically
		*
		*/
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	//Error handlers
	//Check if inputs are empty
	if (empty($uid) || empty($pwd)) {
			header("Location: ../index.php?login=empty");
			exit();
	} else {
		$sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";
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
		if ($resultCheck < 1) {
			header("Location: ../index.php?login=error3");
			exit();
		} else {
		/*
			*
			* Function Name: mysqli_fetch_assoc($result)
			* Input: 		$result
			* Output: 	Returns an associative array of strings representing the fetched row. NULL if there are no more rows in result-set
			* Logic: 		This function  fetches a result row as an associative array.
			* Example Call:		Called automatically
			*
			*/
			if ($row = mysqli_fetch_assoc($result)) {
				//De-hashing the paswrd
				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
				if ($hashedPwdCheck == false) {
					header("Location: ../index.php?login=error2");
					exit();
				} elseif ($hashedPwdCheck == true) {
					//Log in the user here by setting the session variables
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
					header("Location: ../home.php?login=success");
					exit();
				}
			}
		}
	}
} else {
	header("Location: ../index.php?login=error1");
	exit();
}
