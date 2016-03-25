<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/23
 * Time: 23:14
 */

namespace Youzan\Service\Parameters;


class GoodsParamters
{
    public $cid;
    public $promotion_cid = 0;
    public $tag_ids;
    public $price;
    public $title;
    public $desc;
    public $is_virtual = 0;
    public $images = array();
    public $post_fee = 0;
//    public $sku_properties;
//    public $sku_quantities;
//    public $sku_prices;
//    public $sku_outer_ids;
    public $skus_with_json;
    public $origin_price;
    public $buy_url;
    public $outer_id;
    public $buy_quota = 0;
    public $quantity = 0;
    public $hide_quantity = 0;
    public $fields;
    public $is_display = 1;
    public $auto_listing_time = 0;
    public $join_level_discount = 1;

    /**
     * 更新商品信息时使用
     *
     * 编辑商品时保留商品已有图片，值为图片的id，多个图片id用逗号分隔。
     * 如果不传递该参数，则保留所有图片；
     * 如果为空，则删除所有图片
     *
     * @var string
     */
    public $keep_item_img_ids = null;

}