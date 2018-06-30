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
            <a class="navbar-brand">ADD STUDENT</a>
        </div>
 
    </div>
</div>
<div class="clearfix"></div>

<div class="container">
<a href="student_data.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-eye-open"></i> &nbsp; View Data</a>
</div>

<div class="clearfix"></div><br />

<div class="container">
<form method="post" action="add_student_data.php">

<table class='table table-bordered'>

<tr>
<td><strong>How Many Students</strong></td>
</tr>

<tr>
<td>
<input type="text" name="no_of_rec" placeholder="Enter How Many Student" maxlength="2" pattern="[0-9]+" class="form-control" required />
</td>
</tr>

<tr>
<td><button type="submit" name="btn-gen-form" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Generate</button> 

<a href="student_data.php" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; Back to index</a>
</td>
</tr>

</table>

</form>

</div>
</body>
</html>