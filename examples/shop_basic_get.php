<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/24
 * Time: 11:32
 */


header("Content-type:text/html;charset=utf-8");
require '../vendor/autoload.php';
require 'config.php';

$youzan = new \Youzan\Youzan(AppId, AppSecret, CacheDIR);
$shop = $youzan->shop();
$data = $shop->shopBasicGet();
var_dump($data);
