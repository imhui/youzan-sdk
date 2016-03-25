<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/23
 * Time: 21:51
 */

namespace Youzan\Model;


class UmpPresent
{
    public $present_id;
    public $title;
    public $start_at;
    public $end_at;
    public $fetch_limit;
    /** @var  GoodsDetail */
    public $item;
    public $created;
}