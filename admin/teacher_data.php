<?php
	include_once 'dbcon.php';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CMS</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<script src="jquery.js" type="text/javascript"></script>
</head>

<body>
	
<script>
$('document').ready(function()
{
    $(".select-all").click(function ()
    {
        $('.chk-box').attr('checked', this.checked)
    });
        
    $(".chk-box").click(function()
    {
        if($(".chk-box").length == $(".chk-box:checked").length)
        {
            $(".select-all").attr("checked", "checked");
        }
        else
        {
            $(".select-all").removeAttr("checked");
        }
    });
});
	
function teacher_edit_records() 
{
	document.frm.action = "teacher_edit_mul.php";
	document.frm.submit();		
}
function teacher_delete_records() 
{
	document.frm.action = "teacher_delete_mul.php";
	document.frm.submit();
}
</script>

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
<div class="clearfix"></div>

<div class="container">
<h2>Teachers Lists</h2>
<a href="teacher_generate.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Teacher</a>
</div>

<div class="clearfix"></div><br />

<div class="container">
<form method="post" name="frm">
<table class='table table-bordered table-responsive'>
<tr>
<th>No.</th>
<th>Name</th>
<th>Gender</th>
<th>Class</th>
</tr>
<?php
	$res = $MySQLiconn->query("SELECT * FROM teacher_tbl ORDER BY id_teacher ASC");
	$count = $res->num_rows;

	if($count > 0)
	{
		while($row=$res->fetch_array())
		{
			?>
			<tr>
			<td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $row['id_teacher']; ?>"  /></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['gender']; ?></td>
			<td><?php echo $row['class']; ?></td>
			</tr>
			<?php
		}	
	}
	else
	{
		?>
        <tr>
        <td colspan="4"> No Records Found ...</td>
        </tr>
        <?php
	}
?>

<?php

if($count > 0)
{
	?>
	<tr>
    <td colspan="4">
    <label><input type="checkbox" class="select-all" /> Check / Uncheck All</label>

    
    <label style="margin-left:100px;">
    <span style="word-spacing:normal;"> with selected :</span>
    <span><img src="edit.png" onClick="teacher_edit_records();" alt="edit" /> edit</span>
	<span> | </span>
    <span><img src="delete.png" onClick="teacher_delete_records();" alt="delete" /> delete</span>
    </label>
    
    
    </td>
	</tr>    
    <?php
}

?>

<tr>
	<td colspan="4" align="right" valign="middle"><a href="teacher_print.php"><strong>PRINT LISTS</strong></a></td>
</tr>

</table>
</form>
</div>
</body>
</html>