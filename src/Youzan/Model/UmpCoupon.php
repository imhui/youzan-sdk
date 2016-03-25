<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/23
 * Time: 21:52
 */

namespace Youzan\Model;


class UmpCoupon
{
    public $group_id;
    public $coupon_type;
    public $range_type;
    public $title;
    public $value;
    public $is_random;
    public $value_random_to;
    public $need_user_level;
    public $user_level_name;
    public $quota;
    public $is_at_least;
    public $at_least;
    public $total;
    public $stock;
    public $start_at;
    public $end_at;
    public $expire_notice;
    public $description;
    public $is_forbid_preference;
    public $is_sync_weixin;
    public $status;
    public $is_share;
    public $fetch_url;
    public $stat_fetch_user_num;
    public $stat_fetch_num;
    public $stat_use_num;
    public $created;
}