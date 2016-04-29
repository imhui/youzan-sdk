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
$service = $youzan->logistics();
$result = $service->onlineConfirm('E20160429112419034272xxx', 1);
var_dump($result);
