<?php
	include("header.php");
	session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}

	if($_SESSION['Status'] != "USER")
	{
		echo "This page for User only!";
		exit();
	}	
	
	mysqli_connect("mydbms","robotclubkmitl","tene23t","robotclubkmitl");
	mysql_select_db("robotclubkmitl");
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
?>

<body>
  Welcome to User Page! <br>
  <table border="1" style="width: 300px">
    <tbody>
      <tr>
        <td width="87"> &nbsp;Username</td>
        <td width="197"><?=$objResult["Username"];?>
        </td>
      </tr>
      <tr>
        <td> &nbsp;Name</td>
        <td><?=$objResult["Name"];?></td>
      </tr>
    </tbody>
  </table>

</body>

