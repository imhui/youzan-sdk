<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/23
 * Time: 18:42
 */

namespace Youzan\Model;


class GoodsDetail
{
    public $num_iid;

    public $alias;

    public $title;

    public $cid;

    public $promotion_cid;

    public $tag_ids;

    public $desc;

    public $origin_price;

    public $outer_id;

    public $outer_buy_url;

    public $buy_quota;

    public $created;

    public $is_virtual;

    public $is_listing;

    public $is_lock;

    public $is_used;

    public $auto_listing_time;

    public $detail_url;

    public $share_url;

    public $pic_url;

    public $pic_thumb_url;

    public $num;

    public $sold_num;

    public $price;

    const POST_TYPE_NORMAL = 1; // 统一邮费
    const POST_TYPE_TEMPLATE = 2; // 运费模板

    public $post_type;

    public $post_fee;

    public $delivery_template_fee;

    public $delivery_template_id;

    public $delivery_template_name;

    /**
     * @var GoodsSku[]
     */
    public $skus = array();

    /**
     * @var GoodsImage[]
     */
    public $item_imgs = array();

    /**
     * @var GoodsQrcode[]
     */
    public $item_qrcodes = array();

    /**
     * @var GoodsTag[]
     */
    public $item_tags;

    public $item_type;

    public $is_supplier_item;

    public $template_id;

    public $template_title;

    public $join_level_discount;

    public $messages = array();

    public $order;

    public $purchase_right;

    public $ump_tags = array();

    public $ump_level = array();

    public $ump_tags_text = array();

    public $ump_level_text = array();
}