<?php


class foo{
         public   $a=1111111;
		 
         function  an( $name){
               echo "你好：".$name;
			   echo $this->c("个方法");
			    }  
	     function  c( $name){
               echo "又一".$name;
			   }
              
         
}
$b=new foo( );   //(实例化变为对象)
echo  $b->a;   // 1111111  (调用类属性)
$b->an("wangning" );    //你好wangning  又一个方法 (调用类方法)



?>