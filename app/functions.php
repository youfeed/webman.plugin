<?php
/**
 * Here is your custom functions.
 */

function onRequest($url,$option=[]){
  static $http;
  $http || $http = new Workerman\Http\Client([
    'max_conn_per_addr' => 128, // 每个域名最多维持多少并发连接
    'keepalive_timeout' => 15,  // 连接多长时间不通讯就关闭
    'connect_timeout'   => 1,  // 连接超时时间
    'timeout'           => 1,  // 请求发出后等待响应的超时时间
  ]);
  try {
    $response = $http->request($url, array_merge(['method' => 'GET','version' => '1.1'],$option));
    $boby = (string)$response->getBody();
    return json_decode($boby,true) ?? $boby;
  } catch (\Exception  $th) {
    return false;
  }
}