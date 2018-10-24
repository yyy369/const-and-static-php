<?php
header('Content-type:text/html;charset=utf8');
 function woc(){
 	static $object= 0;
 	$object++;
 	echo "函数第{$object}次被调用<br>";
 }
 woc();
 woc();
?>