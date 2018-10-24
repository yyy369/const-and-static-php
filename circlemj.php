<?php
header('Content-type:text/html;charset=utf8');
class circle{
   const PI=3.14;
   public $mj;
   //public $r;
   public $zc;
   public static function ymj($r){
     $this->r=$r;
     $this->mj=circle::PI*$r*$r;
     echo "您所输入的半径为".$this->r."的圆面积为".$this->mj;
   }
   public function yzc($r){
   	$this->r=$r;
   	$this->zc=circle::PI*2*$r;
   	echo "您所输入的半径为".$this->r."的圆周长为".$this->zc;
   }
}
$a=new circle();
$a->ymj(2);
$a->yzc(2);

?>