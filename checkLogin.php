<?php
	include("header.php");
	session_start();
	mysqli_connect("mydbms","robotclubkmitl","tene23t","robotclubkmitl");
	mysql_select_db("robotclubkmitl");
	$strSQL = "SELECT * FROM member WHERE Username = '".mysql_real_escape_string($_POST['inputName'])."' 
	and Password = '".mysql_real_escape_string($_POST['inputLastname'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["name"] = $objResult["name"];
			$_SESSION["lastname"] = $objResult["lastname"];

			session_write_close();
			header("location:user_page.php");
	}
	mysql_close();

?>
<script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>