<?php
include_once 'dbcon.php';
$id = $_POST['id_student'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$class = $_POST['class'];
$chk = $_POST['chk'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE student_tbl SET name='$name[$i]', gender='$gender[$i]', class='$class[$i]' WHERE id_student=".$id[$i]);
}
header("Location: student_data.php");
?>