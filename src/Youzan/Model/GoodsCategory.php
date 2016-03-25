<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/23
 * Time: 21:48
 */

namespace Youzan\Model;


class GoodsCategory
{
    public $cid;
    public $parent_cid = 0;
    public $name;
    public $is_parent;

    /**
     * @var GoodsCategory[]
     */
    public $sub_categories;
}