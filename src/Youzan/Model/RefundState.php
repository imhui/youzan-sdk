<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/23
 * Time: 22:47
 */

namespace Youzan\Model;


interface RefundState
{
    const NO_REFUND = 'NO_REFUND'; // 无退款
    const PARTIAL_REFUNDING = 'PARTIAL_REFUNDING'; // 部分退款中
    const PARTIAL_REFUNDED = 'PARTIAL_REFUNDED'; // 已部分退款
    const PARTIAL_REFUND_FAILED = 'PARTIAL_REFUND_FAILED'; // 部分退款失败
    const FULL_REFUNDING = 'FULL_REFUNDING'; // 全额退款中
    const FULL_REFUNDED = 'FULL_REFUNDED'; // 已全额退款
    const FULL_REFUND_FAILED = 'FULL_REFUND_FAILED'; // 全额退款失败
}