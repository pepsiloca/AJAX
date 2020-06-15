<?php
include "base.php";

$class=$_GET['class'];
$db=new DB("student");
$student=$db->q("select name,class_num,dept,nat_id, form studentd where substring(`class_num`,1,3)='class'");
foreach($student)







?>