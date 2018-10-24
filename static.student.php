<?php
class student
{
	private static $stu_Num=0;
	function __construct(){
		static::$stu_Num++;
	}
	function destruct(){
		static::$stu_Num--;
	}
	public static function getStuNum(){
		echo "当前学生数量".static::$stu_Num;
	}
}
$stu1=new student();
$stu2=new student();
$stu3=new student();

student::getStuNum();

$stu1= null;
$stu2= null;

student::getStuNum();	



?>