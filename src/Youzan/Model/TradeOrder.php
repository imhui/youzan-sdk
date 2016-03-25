<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/23
 * Time: 21:36
 */

namespace Youzan\Model;


class TradeOrder
{
    public $oid;
    public $num_iid;
    public $sku_id;
    public $sku_unique_code;
    public $num;
    public $outer_sku_id;
    public $outer_item_id;
    public $title;
    public $seller_nick;
    public $fenxiao_price;
    public $fenxiao_payment;
    public $price;
    public $total_fee;
    public $discount_fee;
    public $payment;
    public $sku_properties_name;
    public $pic_path;
    public $pic_thumb_path;

    public $item_type;

    /** @var  TradeBuyerMessage[] */
    public $buyer_messages;

    /** @var  TradeOrderPromotion[] */
    public $order_promotion_details;
    public $state_str;
    public $item_refund_state;
}