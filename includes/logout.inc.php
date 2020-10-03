<!--
/*
	*
	* Project Name: 	A Novel Approach to Eradicate Pre-Existing Detriments in Public Toilets to Be Incorporated with Smart Cities – Intelligent Toilets
	* Author List: 		H.Mohammed Ameenullah, A.E Manish
	* Filename: logout.inc.php
	* Functions: session_start(), session_unset(), session_destroy()
	* Global Variables: none
	*
	*
	*/
<?php
if (isset($_POST['submit'])) {
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
	/*
		*
		* Function Name:session_unset()
		* Input: 		None
		* Output: 	None
		* Logic: 	Frees all the set session variables
		* Example Call:		Called automatically upon logout
		*
		*/
	session_unset();
	/*
		*
		* Function Name:session_destroy()
		* Input: 		None
		* Output: 	None
		* Logic: 	it destroys all of the data associated with the current session
		* Example Call:		Called automatically upon logout
		*
		*/
	session_destroy();
	//redirecting to the index page.
	header("Location: ../index.php");
	exit();
}
