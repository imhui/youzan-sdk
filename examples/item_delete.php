<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/24
 * Time: 11:57
 */

header("Content-type:text/html;charset=utf-8");
require '../vendor/autoload.php';
require 'config.php';

$youzan = new \Youzan\Youzan(AppId, AppSecret, CacheDIR);
$goodsService = $youzan->goods();
//$result = $goodsService->itemDelete(234933164);
$result = $goodsService->itemUpdateListing(234748549);
//$result = $goodsService->itemUpdateDelisting(234933164);
//$result = $goodsService->batchItemsUpdateListing([234750256,234748549]);
//$result = $goodsService->batchItemsUpdateDelisting([234750256,234748549]);
var_dump($result);
