<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/23
 * Time: 22:46
 */

namespace Youzan\Model;


interface TradeStatus
{
    const TRADE_NO_CREATE_PAY = 'TRADE_NO_CREATE_PAY'; // 没有创建支付交易
    const WAIT_BUYER_PAY = 'WAIT_BUYER_PAY'; // 等待买家付款
    const WAIT_PAY_RETURN = 'WAIT_PAY_RETURN'; // 等待支付确认
    const WAIT_SELLER_SEND_GOODS = 'WAIT_SELLER_SEND_GOODS'; // 等待卖家发货，即：买家已付款
    const WAIT_BUYER_CONFIRM_GOODS = 'WAIT_BUYER_CONFIRM_GOODS'; // 等待买家确认收货，即：卖家已发货
    const TRADE_BUYER_SIGNED = 'TRADE_BUYER_SIGNED'; // 买家已签收
    const TRADE_CLOSED = 'TRADE_CLOSED'; // 付款以后用户退款成功，交易自动关闭
    const TRADE_CLOSED_BY_USER = 'TRADE_CLOSED_BY_USER'; // 付款以前，卖家或买家主动关闭交易
}