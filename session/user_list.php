<?php
include_once("config.php");
include_once("function.php");

check_login_user();

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
<!DOCTYPE HTML>
<html>

<head>
	<title></title>

</head>

<body>
	
		<table class="table">
			<thead>
				
			</thead>
			<tbody>
				<?php
				while ($res = mysqli_fetch_array($result)) {
					
				}
				?>
			</tbody>
		</table>
		<a href="add.php" class="btn btn-info" role="button" style="float:right;">Add New</a>
		<a href="logout.php" class="btn btn-info" role="button" style="float:right;">Log Out</a>
	</div>
</body>

</html>