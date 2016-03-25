<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/23
 * Time: 22:45
 */

namespace Youzan\Model;

interface PayType
{
    const WEIXIN = 'WEIXIN'; // 微信支付
    const ALIPAY = 'ALIPAY'; // 支付宝支付
    const BANKCARDPAY = 'BANKCARDPAY'; // 银行卡支付
    const PEERPAY = 'PEERPAY'; // 代付
    const CODPAY = 'CODPAY'; // 货到付款
    const BAIDUPAY = 'BAIDUPAY'; // 百度钱包支付
    const PRESENTTAKE = 'PRESENTTAKE'; // 直接领取赠品
    const COUPONPAY = 'COUPONPAY'; // 优惠券/码全额抵扣
    const BULKPURCHASE = 'BULKPURCHASE'; // 来自分销商的采购
    const ECARD = 'ECARD'; // 有赞E卡通支付
}