<?php
include_once 'dbcon.php';
$id = $_POST['id_teacher'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$class = $_POST['class'];
$chk = $_POST['chk'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE teacher_tbl SET name='$name[$i]', gender='$gender[$i]', class='$class[$i]' WHERE id_teacher=".$id[$i]);
}
header("Location: teacher_data.php");
?>