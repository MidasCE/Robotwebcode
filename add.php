<?php
	include("header.php");
	$con=mysqli_connect("mydbms","robotclubkmitl","tene23t","robotclubkmitl");
            if (mysqli_connect_errno())
            {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
			else{
				mysqli_query($con,"INSERT INTO Registration (name,lastname)
				VALUES('$_POST[Name]','$_POST[Lastname]'");	
				
			}
  
  
?>
<script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>