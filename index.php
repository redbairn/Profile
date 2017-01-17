<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Irish Web Developer">
	<title>Profile</title>
	
	<!-- css files -->   
	<link href="css/jquery.mobile-1.4.5.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
	<!-- js files --> 
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
	
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
	<!--About section-->
		<?php include 'includes/about.php'; ?>
	<!-- /About section-->
	
	<!--Projects section-->
		<?php include 'includes/projects.php'; ?>
	<!-- /Projects section-->
	
	<!--Skills section-->
		<?php include 'includes/skills.php'; ?>
	<!-- /Skills section-->
</body>
</html>


