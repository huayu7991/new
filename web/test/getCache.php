<?php

 $rdi= new Redis();
 
 $rdi -> connect('127.0.0.1',6379);

 echo $rdi ->get('lzw');
