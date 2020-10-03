<!--/*
	*
	* Project Name: 	A Novel Approach to Eradicate Pre-Existing Detriments in Public Toilets to Be Incorporated with Smart Cities – Intelligent Toilets
	* Author List: 		H.Mohammed Ameenullah, A.E Manish
	* Filename: 		Signup.php
	* Functions: 		None
	* Global Variables:	 None
	*
	*
	*/
-->

<?php

include 'header.php';
?>
<!--Displaying the signup form and at once the form is entered with the correct details
and  submitted, it sends the details to another php file named signup.inc.php
-->

</details>
<section class="main-container">
  <div class="main-wrapper2">
    <h2 style="color:black; margin-top:100px; padding-bottom:10px;">Sign up</h2>
    <form class="signup-form" action="includes/signup.inc.php" method="POST">
      <input type="text" name="first" placeholder="Firstname">
      <input type="text" name="last" placeholder="Lastname">
      <input type="text" name="email" placeholder="E-mail">
      <input type="text" name="uid" placeholder="Username">
      <input type="password" name="pwd" placeholder="Password">
      <button type="submit" name="submit">Sign up</button>
    </form>
  </div>
</section>


<<?php
include 'footer.php';
 ?>
