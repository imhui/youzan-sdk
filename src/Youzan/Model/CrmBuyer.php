<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/23
 * Time: 22:07
 */

namespace Youzan\Model;


class CrmBuyer
{
    const GENDER_UNKNOW = 0;
    const GENDER_MALE = 1;
    const GENDER_FEMALE = 2;

    const SOURCE_REGISTRANT = 1;
    const SOURCE_FANS = 2;

    public $bid;
    public $name;
    public $telephone;
    public $avatar;
    public $gender;
    public $source;
    public $trade_closed;
    public $trade_finish;
    public $trade_send;
    public $trade_to_send;
    public $trade_count;
    public $total_amount;
    public $remark;
}