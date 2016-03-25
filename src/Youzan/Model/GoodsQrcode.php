<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/23
 * Time: 19:08
 */

namespace Youzan\Model;


class GoodsQrcode
{
    const TYPE_GOODS_SCAN_FOLLOW = 'GOODS_SCAN_FOLLOW'; // 扫码关注后购买商品
    const TYPE_GOODS_SCAN_FOLLOW_DECREASE = 'GOODS_SCAN_FOLLOW_DECREASE'; // 扫码关注后减优惠额
    const TYPE_GOODS_SCAN_FOLLOW_DISCOUNT = 'GOODS_SCAN_FOLLOW_DISCOUNT'; // 扫码关注后折扣
    const TYPE_GOODS_SCAN_DECREASE = 'GOODS_SCAN_DECREASE'; // 扫码直接减优惠额
    const TYPE_GOODS_SCAN_DISCOUNT = 'GOODS_SCAN_DISCOUNT'; // 扫码直接折扣

    public $id;
    public $name;
    public $desc;
    public $created;
    public $type;
    public $discount;
    public $decrease;
    public $link_url;
    public $weixin_qrcode_url;
}