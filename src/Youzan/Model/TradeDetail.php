<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/23
 * Time: 21:31
 */

namespace Youzan\Model;


class TradeDetail
{
    public $tid;
    public $num;
    public $num_iid;
    public $price;
    public $pic_path;
    public $pic_thumb_path;
    public $title;

    const TYPE_FIXED = 'FIXED'; // 一口价
    const TYPE_GIFT = 'GIFT'; // 送礼
    const TYPE_BULK_PURCHASE = 'BULK_PURCHASE'; // 来自分销商的采购
    const TYPE_PRESENT = 'PRESENT'; // 赠品领取
    const TYPE_COD = 'COD'; // 货到付款
    const TYPE_QRCODE = 'QRCODE'; // 扫码商家二维码直接支付的交易

    public $type;
    public $weixin_user_id;

    const BUYER_TYPE_UNKNOW = 0;
    const BUYER_TYPE_WEIXIN = 1;
    const BUYER_TYPE_WEIBO = 2;

    public $buyer_type;
    public $buyer_id;
    public $buyer_nick;
    public $buyer_message;
    public $seller_flag;
    public $trade_memo;
    public $receiver_city;
    public $receiver_district;
    public $receiver_name;
    public $receiver_state;
    public $receiver_address;
    public $receiver_zip;
    public $receiver_mobile;
    public $feedback;
    public $refund_state;
    public $outer_tid;
    public $status;
    public $shipping_type;
    public $post_fee;
    public $total_fee;
    public $refunded_fee;
    public $discount_fee;
    public $payment;
    public $created;
    public $update_time;
    public $pay_time;
    public $pay_type;
    public $consign_time;
    public $sign_time;
    public $buyer_area;

    /** @var TradeOrder[] */
    public $orders;

    /** @var  TradeFetch */
    public $fetch_detail;

    /** @var  UmpTradeCoupon[] */
    public $coupon_details;

    /** @var  TradePromotion[] */
    public $promotion_details;
    public $adjust_fee;
    public $sub_trades;

    const RELATION_TYPE_NORMAL = ''; // 普通订单
    const RELATION_TYPE_SOURCE = 'source'; // 采购单
    const RELATION_TYPE_FENXIAO = 'fenxiao'; // fenxiao
    public $relation_type;

    public $relations = array();
}