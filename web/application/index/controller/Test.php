<?php
namespace app\index\controller;
//测试单例模式
class Test

 {

      private static $obj =null;

      private function __construct(){}

      public static function single(){
        
        if(empty(self::$obj)){
           
           self::$obj = new self();
        }
         
        return self::$obj;
      }
}

      $obj =Test::single();
