<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/23
 * Time: 21:46
 */

namespace Youzan\Model;


class CrmWeixinFans
{
    const SEX_UNKNOW = '';
    const SEX_MALE = 'm';
    const SEX_FEMALE = 'f';

    public $user_id;
    public $weixin_openid;
    public $nick;
    public $avatar;
    public $follow_time;
    public $sex;
    public $province;
    public $city;
    public $points;
    public $traded_num;
    public $traded_money;

    /** @var  CrmUserTag[] */
    public $tags;
    public $level_info;
    public $union_id;
    public $is_follow;
}