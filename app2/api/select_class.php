<?php
include_once "base.php";

$db=new DB('student');
$classes=$db->q("SELECT substring(`class_num`,1,3) as '班級' FROM `students` group by substring(`class_num`,1,3)");

foreach($classes as $c){
    echo "<option value='".$c['班級']."'>".$c['班級']."</option>";
}



?>