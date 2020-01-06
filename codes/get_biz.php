<?php
//获取公众号biz的方式

//首先获取该公众号下的任意一篇文章
$url = "https://mp.weixin.qq.com/s/etlCJyJrNn5aM9c_ZsVbnA"; 
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
));

$html = curl_exec($curl);
curl_close($curl);

//第二步 在 返回的html信息中匹配出biz
preg_match('/biz = \"\"\|\|\"(.*?)\";/',$html,$return);

$biz = $return[1];
echo $biz;


?>