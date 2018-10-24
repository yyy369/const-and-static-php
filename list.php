<?php
header('Content-type:text/html;charset=utf8');
class student{
  var $name;
  var $age;
  function __construct($name,$age){
  	$this->name=$name;
  	$this->age=$age;
  }
  function __destruct(){
  	echo "你的对象已经销毁";

  }
  public function getname(){
  echo $this->name;
  }
}
$a= new student('张三',10);
$a->getname();
var_dump($a);
?>