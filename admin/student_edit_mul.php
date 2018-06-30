<?php
	
	error_reporting(0);

	include_once 'dbcon.php';

	if(isset($_POST['chk'])=="")
	{
		?>
        <script>
		alert('At least one checkbox Must be Selected !!!');
		window.location.href='student_data.php';
		</script>
        <?php
	}
	$chk = $_POST['chk'];
	$chkcount = count($chk);
	
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CMS</title>
<!--<link rel="stylesheet" href="style.css" type="text/css" />-->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<script src="jquery.js" type="text/javascript"></script>
</head>

<body>

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
 
        <div class="navbar-header">
            <a class="navbar-brand" title='EDIT STUDENT'>EDIT STUDENT</a>
        </div>
 
    </div>
</div>
<div class="clearfix"></div>

<div class="container">
<a href="student_generate.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Students</a>
</div>

<div class="clearfix"></div><br />

<div class="container">
<form method="post" action="student_update_mul.php">
<table class='table table-bordered'>
<tr>
<th>Name</th>
<th>Gender</th>
<th>Class</th>
</tr>
<?php
for($i=0; $i<$chkcount; $i++)
{
	$id = $chk[$i];			
	$res=$MySQLiconn->query("SELECT * FROM student_tbl WHERE id_student=".$id);
	while($row=$res->fetch_array())
	{
		?>
		<tr>
		<td>
    	<input type="hidden" name="id[]" value="<?php echo $row['id_student'];?>" />
		<input type="text" name="fn[]" value="<?php echo $row['name'];?>" class="form-control" disabled/>
        </td>
        <td>
		<input type="text" name="ln[]" value="<?php echo $row['gender'];?>" class="form-control" disabled/>
		</td>
		<td>
		<input type="text" name="ln[]" value="<?php echo $row['class'];?>" class="form-control" />
		</td>
		</tr>
		<?php	
	}			
}
?>
<tr>
<td colspan="3">
<button type="submit" name="savemul" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> &nbsp; Update all</button>&nbsp;
<a href="student_data.php" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; cancel</a>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>