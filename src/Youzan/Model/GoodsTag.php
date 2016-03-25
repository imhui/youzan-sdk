<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/23
 * Time: 19:07
 */

namespace Youzan\Model;


class GoodsTag
{
    public $id;
    public $name;

    // 0 自定义，1 未分类，2 最新，3 最热，4 隐藏
    const TYPE_CUSTOM = 0;
    const TYPE_UNCLASSIFIED = 1;
    const TYPE_NEWEST = 2;
    const TYPE_HOTTEST = 3;
    const TYPE_HIDDEN = 4;

    public $type;
    public $created;
    public $item_num;
    public $tag_url;
    public $share_url;
    public $desc;
}