<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/23
 * Time: 21:56
 */

namespace Youzan\Model;


class TradePayQrcode
{
    public $tid;
    public $qr_id;
    public $qr_url;
    public $qr_name;
    public $qr_price;
    public $real_price;
    public $payer_nick;
    public $outer_tid;

    const STATUS_WAIT_RECEIVED = 'WAIT_RECEIVED'; // 待收款
    const STATUS_TRADE_RECEIVED = 'TRADE_RECEIVED'; // 已收款
    const STATUS_TRADE_EXPIRED = 'TRADE_EXPIRED'; // 已过期，即：48小时内未付款
    public $status;
    public $pay_type;
    public $book_date;
    public $pay_date;
    public $created_date;
}