<?php
namespace app\index\controller;

class TestCache{

    //测试redis连接
    protected $rd;

    public function __construct(){
       
       $this->rd = new Redis('127.0.0.1',6379);
    
    }
    
    public function setCache(){

       echo '1111';
    
    }
 
}
