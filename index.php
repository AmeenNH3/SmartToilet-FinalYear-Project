<!--/*
	*
	* Project Name: 	A Novel Approach to Eradicate Pre-Existing Detriments in Public Toilets to Be Incorporated with Smart Cities – Intelligent Toilets
	* Author List: 		H.Mohammed Ameenullah, A.E Manish
	* Filename: 		index.php
	* Functions: 		None
	* Global Variables:	 None
	*
	*
	*/
-->
<?php
 include 'header.php';
 ?>
<!--login Page of the portal displaying the login form, login,logout,signup buttons-->
<section ="main-container">
  <div class="main-wrapper2">
    <h2> LOGIN PORTAL</h2>
  <form class="loginform" action="includes/login.inc.php" method="post">
    <input type="text" name="uid" placeholder=" username/email-id">
    <input type="password" name="pwd" placeholder="password">
    <button type="submit" name="Submit">Login</button>
  </form>
    </div>

</section>

<?php
include 'footer.php';
?>
