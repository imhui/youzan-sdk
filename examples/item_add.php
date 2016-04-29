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

use Youzan\Youzan;
use Youzan\Service\Parameters\GoodsParamters;

$youzan = new Youzan(AppId, AppSecret, CacheDIR);

$parameters = new GoodsParamters();
$parameters->title = 'Nike 耐克官方 NIKE AIR MAX TAVAS SE 男子运动鞋';
$parameters->outer_id = '718895';
$parameters->price = 999.00;
$parameters->desc = '经典缓震，时尚舒适。
Nike Air Max Tavas SE 男子运动鞋鞋跟搭载 Max Air 气垫，结合可驾驭多种地面的华夫格外底，再现元年款跑步鞋的经典复古设计。无缝覆面结合 Ortholite 鞋垫，塑就时尚外观与创新风范，同时实现卓越舒适度。';

$parameters->images = array(
    'https://img.alicdn.com/bao/uploaded/i3/TB1NzqEKVXXXXaRXVXXXXXXXXXX_!!0-item_pic.jpg_430x430q90.jpg',
    'https://img.alicdn.com/bao/uploaded/i7/TB1FwtzLXXXXXbIXFXXkHr9.FXX_110253.jpg_430x430q90.jpg',
);

$skus = array(
    [
        'sku_price' => 699.00,
        'sku_property' => [
            '颜色' => '蓝色',
            '鞋码' => '40'
        ],
        'sku_quantity' => 2,
        'sku_outer_id' => ''
    ],
    [
        'sku_price' => 699.00,
        'sku_property' => [
            '颜色' => '蓝色',
            '鞋码' => '41'
        ],
        'sku_quantity' => 12,
        'sku_outer_id' => ''
    ],
    [
        'sku_price' => 699.00,
        'sku_property' => [
            '颜色' => '白色',
            '鞋码' => '40'
        ],
        'sku_quantity' => 8,
        'sku_outer_id' => ''
    ],
    [
        'sku_price' => 699.00,
        'sku_property' => [
            '颜色' => '白色',
            '鞋码' => '41'
        ],
        'sku_quantity' => 5,
        'sku_outer_id' => ''
    ],
    [
        'sku_price' => 699.00,
        'sku_property' => [
            '颜色' => '白色',
            '鞋码' => '42'
        ],
        'sku_quantity' => 10,
        'sku_outer_id' => ''
    ],
);
$parameters->skus_with_json = json_encode($skus);

$parameters->cid = '2000000';
$parameters->tag_ids = '85416261,85416375';

$goodsService = $youzan->goods();
$items = $goodsService->itemAdd($parameters);
var_dump($items);
var_dump($goodsService->getLastError());
