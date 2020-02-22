<?php

$auth = "XXXXXX"; //联系作者获取
$biz = "xxxxxx"; //公众号biz, 如果不会获取,请参考get_biz.php代码


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://121.196.196.117/Home/info/get_newprofile?auth={$auth}&biz={$biz}",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 10,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
