<?php
$url = 'https://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=1&ch=3&tn=98010089_dg&wd=%E6%8E%92%E5%88%97%E4%B8%89&oq=%25E6%258E%2592%25E5%2588%2597%25E4%25B8%2589&rsv_pq=f524f5180000e358&rsv_t=232dqg%2Bon%2B47zqM5GfMF8y8qN02EnJhVqjlF5KN4L6%2F4BEf28hIUrHW4sVWZ3SFG58A&rqlang=cn&rsv_enter=0';  //这儿填页面地址
$info=file_get_contents($url);
preg_match('|<title>(.*?)<\/title>|i',$info,$m);
echo $m[1];
?>