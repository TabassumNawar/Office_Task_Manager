<?php
include("../Controller/salaryempDBconnect.php")
?>



<html>
<head>
	<title>Salary Table | Office Task Manager</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body style = "background: url(../assets/bg2.jpg);
               background-size: cover;
			   background-repeat: no repeat;">
	
	<header>
		<nav>
		<h1>Taba's Desk</h1>
			<ul id="navli">
				<li><a class="homeblack" href="aloginwel.php">HOME</a></li>
				
				<li><a class="homeblack" href="addemp.php">Add Employee</a></li>
				<li><a class="homeblack" href="viewemp.php">View Employee</a></li>
				<li><a class="homeblack" href="assign.php">Assign Project</a></li>
				<li><a class="homeblack" href="assignproject.php">Project Status</a></li>
				<li><a class="homered" href="salaryemp.php">Salary Table</a></li>
				<li><a class="homeblack" href="empleave.php">Employee Leave</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">
		
	</div>
	
	<table>
			<tr>
				<th align = "center">Emp. ID</th>
				<th align = "center">Name</th>
				
				
				<th align = "center">Base Salary</th>
				<th align = "center">Bonus</th>
				<th align = "center">TotalSalary</th>
				
				
			</tr>
			
			<?php
				include("../Controller/salaryemp.php")
			?>
			
			</table>
</body>
</html>