<?php
error_reporting(0);
include_once 'dbcon.php';

if(isset($_POST['save_mul']))
{		
	$total = $_POST['total'];
		
	for($i=1; $i<=$total; $i++)
	{
		$name = $_POST["name$i"];
		$gender = $_POST["gender$i"];
		$class = $_POST["class$i"];
		$sql="INSERT INTO student_tbl(name, gender, class) VALUES('".$name."', '".$gender."', '".$class."')";
		$sql = $MySQLiconn->query($sql);		
	}
	
	if($sql)
	{
		?>
        <script>
		alert('<?php echo $total." Records was Inserted !!!"; ?>');
		window.location.href='student_data.php';
		</script>
        <?php
	}
	else
	{
		?>
        <script>
		alert('Error while Inserting , PLEASE TRY AGAIN');
		</script>
        <?php
	}
}
?>
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
            <a class="navbar-brand" title='Add New Class'>ADD STUDENT</a>
        </div>
 
    </div>
</div>
<div class="clearfix"></div>

<div class="container">
<a href="student_generate.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Students</a>
</div>

<div class="clearfix"></div><br />

<div class="container">
<?php
if(isset($_POST['btn-gen-form']))
{
	?>
    <form method="post">
    <input type="hidden" name="total" value="<?php echo $_POST["no_of_rec"]; ?>" />
	<table class='table table-bordered'>
    
    <tr>
    <th>No.</th>
    <th>Name</th>
    <th>Gender</th>
	<th>Class</th>
    </tr>
	<?php
	for($i=1; $i<=$_POST["no_of_rec"]; $i++) 
	{
		?>
        <tr>
        <td><?php echo $i; ?></td>
        <td><input type="text" name="name<?php echo $i; ?>" placeholder="Student Name"  class='form-control' required/></td>
        <td>
			<select name="gender<?php echo $i; ?>" placeholder="Student Gender" class="form-control" required>
				<option value="">GENDER</option>
				<option value="Male">MALE</option>
				<option value="Female">FEMALE</option>
			</select>
		</td>
		<td><input type="text" name="class<?php echo $i; ?>" placeholder="Student Class" class='form-control' required/></td>
        </tr>
        <?php
	}
	?>
    <tr>
    <td colspan="4">
    
    <button type="submit" name="save_mul" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Insert all Students</button> 

    <a href="student_data.php" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; Back to Student Lists</a>
    
    </td>
    </tr>
    </table>
    </form>
	<?php
}
?>
</div>

</body>
</html>