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

use Youzan\Model\TradeStatus;

$youzan = new \Youzan\Youzan(AppId, AppSecret, CacheDIR);
$service = $youzan->trade();
list($result, $total) = $service->tradesSoldGet(TradeStatus::WAIT_BUYER_CONFIRM_GOODS);
var_dump($total);
//$result = $service->tradeGet('E20160324160355034258503');
var_dump($result);
