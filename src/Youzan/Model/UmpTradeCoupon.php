<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/23
 * Time: 21:40
 */

namespace Youzan\Model;


class UmpTradeCoupon
{
    const TYPE_PROMOCARD = 'PROMOCARD'; // 优惠券
    const TYPE_PROMOCODE = 'PROMOCODE'; // 优惠码

    public $coupon_id;
    public $coupon_name;
    public $coupon_type;
    public $coupon_content;
    public $coupon_description;
    public $coupon_condition;
    public $used_at;
    public $discount_fee;
}