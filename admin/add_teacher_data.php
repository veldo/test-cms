<?php
error_reporting(0);
include_once 'dbcon.php';

if(isset($_POST['save_mul']))
{		
	$total = $_POST['total'];
		
	for($i=1; $i<=$total; $i++)
	{
		$name = $_POST["nteacher"];
		$gender = $_POST["gteacher"];
		$class = $_POST["class$i"];
		$sql="INSERT INTO teacher_tbl(name, gender, class) VALUES('".$name."', '".$gender."', '".$class."')";
		$sql = $MySQLiconn->query($sql);		
	}
	
	if($sql)
	{
		?>
        <script>
		alert('<?php echo $total." Records was Inserted !!!"; ?>');
		window.location.href='teacher_data.php';
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
            <a class="navbar-brand" title='Add New Class'>ADD TEACHER</a>
        </div>
 
    </div>
</div>
<div class="clearfix"></div>

<div class="container">
<a href="teacher_generate.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Teachers</a>
</div>

<div class="clearfix"></div><br />

<div class="container">
<?php
if(isset($_POST['btn-gen-form']))
{
	?>
    <form method="post">
    <input type="hidden" name="total" value="<?php echo $_POST["no_of_rec"]; ?>" />
	<input type="hidden" name="nteacher" value="<?php echo $_POST["teacher_name"]; ?>" />
	<input type="hidden" name="gteacher" value="<?php echo $_POST["teacher_gender"]; ?>" />
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
        <td><input type="text" value="<?php echo $_POST['teacher_name']; ?>" name="name<?php echo $i; ?>" class='form-control' disabled/></td>
        <td><input type="text" value="<?php echo $_POST['teacher_gender']; ?>" name="gender<?php echo $i; ?>" class='form-control' disabled/></td>
		<td><input type="text" name="class<?php echo $i; ?>" placeholder="Class" class='form-control' required/></td>
        </tr>
        <?php
	}
	?>
    <tr>
    <td colspan="4">
    
    <button type="submit" name="save_mul" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Insert all Records</button> 

    <a href="teacher_data.php" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; Back to index</a>
    
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