<?php
header('Content-type:text/html;charset=utf8');
class b{
	private $name='李四'；
	public static $age=10;
	public function getname(){
		echo "他的名字是".$this->name.;
	}
	public static function getage(){
	    echo b::$age;//以下三种皆可输出，推荐第三种输出静态变量
	    echo self::$age;
	    echo static::$age;
	}
}
echo b::$age;
echo b::getage();





?>