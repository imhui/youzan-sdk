<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/23
 * Time: 22:25
 */

namespace Youzan\Model;


class UmpReward
{
    public $activity_id;
    public $range_type;
    public $preference_type;
    public $title;
    public $start_at;
    public $end_at;
    /** @var GoodsDetail[] */
    public $specify_items;
    /** @var  UmpRewardRule[] */
    public $preference_rules;
    public $created;
}