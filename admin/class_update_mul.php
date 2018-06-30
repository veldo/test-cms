<?php
include_once 'dbcon.php';
$id = $_POST['id_class'];
$class = $_POST['class'];
$teacher = $_POST['teacher'];
$student = $_POST['student'];
$chk = $_POST['chk'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE class_tbl SET class='$class[$i]', teacher='$teacher[$i]', student='$student[$i]' WHERE id_class=".$id[$i]);
}
header("Location: index.php");
?>