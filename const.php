<?php
class person{
	const sex_male=1;
	const sex_female=2;
	const sex_secret=3;
	private $sex;
	public function setsex($sex){
		$this->sex=$sex;
	}
}
$p1= new person();
$p1->setsex('male');
$p1->setsex(1);
$p1->setsex(person::sex_male);
//以上皆可给性别赋值为男




?>