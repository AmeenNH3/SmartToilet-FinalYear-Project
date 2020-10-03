<!--/*
	*
	* Project Name: 	A Novel Approach to Eradicate Pre-Existing Detriments in Public Toilets to Be Incorporated with Smart Cities – Intelligent Toilets
	* Author List: 		H.Mohammed Ameenullah, A.E Manish
	* Filename: 		Home.php
	* Functions: 		None
	* Global Variables:	 None
	*
	*
	*/
-->


<?php
//including header file
include 'header.php';
?>
<style>


.home h2
{
  margin-top: 20px;
  text-align: center;
  font-family: arial;
  font-size: 40px;
  color: #111;
  padding-top: 10px;
}

.home nav
{
  width:600px;
  height: 60px;
  list-style: none;

}
.home nav li{

  margin-top: 50px;
  border: none;
  background-color: #222;
  font-family: arial;
  font-size: 16px;
  color: #fff;
  cursor: pointer;


}

.home nav ul li a{
  display: block;

  margin-bottom: 3px;
  padding: 20px 2px;
  text-align: center;
  text-decoration: none;
   font-family: arial;
   font-size: 20px;
   color: white;

}
.home nav ul li a:hover{
background-color: red;
}


#logout{
  display: block;
  float: right;
   width:60px;
   height: 40px;
   margin: -50px;
   margin-right: 30px;
   border: none;
   background-color: #222;
   font-family: arial;
   font-size: 16px;
  color: #fff;
  cursor: pointer;

}

</style>

<?php

//Allows the user to access or see the content only if the session variable is Set
if (isset($_SESSION['u_id']))
{
  echo '
<form action="includes/logout.inc.php" method="POST">
<button id="logout" type ="submit" name="submit">Logout</button>
</form>

  <div class="home">



    <h2>Welcome to the portal</h2>

            <nav style="margin: 0 auto; width: 600px;">
          <ul style="margin: 0 auto;">
            <li><a href="display/displaycount.php">Usage Analysis</a></li>
            <li><a href="display/displaygas.php">Odour Management</a></li>
            <li><a href="">Water Management</a></li>
            <li><a href="display/displayenergy.php">Energy Management</a></li>
            <li><a href="display/displaycleaner.php">Cleaner Attendance</a></li>
            <li><a href="fbdisplay.php">Restroom Feedback and complaints</a></li>
            <li><a href="https://gettable-cheetah-2454.dataplicity.io/stream_simple.html">Live Monitering</a></li>

          </ul>
        </nav>

        </div>
   </div>';

}


 ?>


<?php
include 'footer.php';
?>
