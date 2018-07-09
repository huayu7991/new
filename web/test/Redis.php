<?php

   $rdi =new Redis();
   
   $so  =   $rdi -> connect('127.0.0.1',6379);
   
   if ($so) {
     
     $rdi -> setex('lzw',30,'lzw shi ge xiao jj');

   } else {
     
     echo  'fail';

   }


 
