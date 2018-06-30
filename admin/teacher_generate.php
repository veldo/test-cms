<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CMS</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<script src="jquery.js" type="text/javascript"></script>
</head>

<body>

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
 
        <div class="navbar-header">
            <a class="navbar-brand">ADD TEACHER</a>
        </div>
 
    </div>
</div>
<div class="clearfix"></div>

<div class="container">
<a href="teacher_data.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-eye-open"></i> &nbsp; View Data</a>
</div>

<div class="clearfix"></div><br />

<div class="container">
<form method="post" action="add_teacher_data.php">

<table class='table table-bordered'>

<tr>
<td><strong>Teacher</strong></td>
</tr>

<tr>
<td>
<input type="text" name="teacher_name" placeholder="Enter Teacher Name" class="form-control" required />
</td>
</tr>
	
<tr>
<td><strong>Gender</strong></td>
</tr>

<tr>
<td>
<select name="teacher_gender" placeholder="Enter Teacher Gender" class="form-control" required>
	<option value="">Choose Gender</option>
	<option value="Male">MALE</option>
	<option value="Female">FEMALE</option>
</select>
</td>
</tr>
	
<tr>
<td><strong>How Many Classes</strong></td>
</tr>

<tr>
<td>
<input type="text" name="no_of_rec" placeholder="Enter How Many Classes the Teacher Takes" maxlength="2" pattern="[0-9]+" class="form-control" required />
</td>
</tr>

<tr>
<td><button type="submit" name="btn-gen-form" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Generate</button> 

<a href="teacher_data.php" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; Back to index</a>
</td>
</tr>

</table>

</form>

</div>
</body>
</html>