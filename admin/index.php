<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CMS</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<script src="jquery.js" type="text/javascript"></script>
</head>
<body>
	
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
 
        <div class="navbar-header">
            <a class="navbar-brand" href="class_data.php" title='View Classes Lists'>CLASS</a>
			<a class="navbar-brand">|</a>
            <a class="navbar-brand" href="teacher_data.php" title='View Teachers Lists'>TEACHER</a>
			<a class="navbar-brand">|</a>
            <a class="navbar-brand" href="student_data.php" title='View Students Lists'>STUDENT</a>
			<a class="navbar-brand">|</a>
            <a class="navbar-brand" href="logout.php" title='View XXX Lists'>LOGOUT</a>
        </div>
    </div>
</div>
</body>
</html>