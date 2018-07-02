<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">12载初心不改（2006-2018） - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
    }
    public function test(){
        
        echo 'just a test!';
        
    }
    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
    //curl方式提交表单
   /* public function ct(){
        $url="http://localhost/index/index/testct";
        $postData=[
             'title'=>'使用curl方式发送的标题',
             'content'=>'使用curl方式发送的内容',
        ];
        //初始化
 2      $curl = curl_init();
 3      //设置抓取的url
 4      curl_setopt($curl, CURLOPT_URL, $url);
 5      //设置数据发送方式
 6      curl_setopt($curl, CURLOPT_POST, 1);
        //发送数据 
        curl_setopt($curl,CURLOPT_POSTFIELDS,$postData);
 7      //设置获取的信息以文件流的形式返回，而不是直接输出。
 8      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 9      //执行命令
10      $data = curl_exec($curl);
11      //关闭URL请求
12      curl_close($curl);
13      //显示获得的数据
14      print_r($data);
    }*/
    public function testct(){
       
    }
}
