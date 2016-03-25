<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/23
 * Time: 23:51
 */

namespace Youzan\Service;

use Youzan\Model\GoodsCategory;
use Youzan\Model\GoodsPromotionCategory;
use Youzan\Model\GoodsTag;
use Youzan\Model\ModelFactory;

class ItemcategoryService extends BaseService
{
    /**
     * @return GoodsCategory[]|null
     */
    public function itemcategoriesGet()
    {
        $method = 'kdt.itemcategories.get';
        $response = $this->get($method);

        if ($this->isResponseError($response)) {
            return null;
        }
        return ModelFactory::objectListFromData($response['response']['categories'], GoodsCategory::class);
    }

    /**
     * @param bool $is_sort
     * @return GoodsTag[]|null
     */
    public function itemcategoriesTagsGet($is_sort = true)
    {
        $method = 'kdt.itemcategories.tags.get';
        $params = array(
            'is_sort' => intval($is_sort)
        );
        $response = $this->get($method, $params);

        if ($this->isResponseError($response)) {
            return null;
        }
        return ModelFactory::objectListFromData($response['response']['tags'], GoodsTag::class);
    }

    /**
     * @param int $page_no
     * @param int $page_size
     * @param string $order_by
     * @return GoodsTag[]|null
     */
    public function itemcategoriesTagsGetpage($page_no = 1, $page_size = 20, $order_by = 'created:desc')
    {
        $method = 'kdt.itemcategories.tags.getpage';
        $params = array(
            'page_no' => $page_no,
            'page_size' => $page_size,
            'order_by' => $order_by
        );
        $response = $this->get($method, $params);

        if ($this->isResponseError($response)) {
            return null;
        }
        return ModelFactory::objectListFromData($response['response']['tags'], GoodsTag::class);
    }

    /**
     * @return GoodsPromotionCategory[]|null
     */
    public function itemcategoriesPromotionsGet()
    {
        $method = 'kdt.itemcategories.promotions.get';
        $response = $this->get($method);

        if ($this->isResponseError($response)) {
            return null;
        }
        return ModelFactory::objectListFromData($response['response']['categories'], GoodsPromotionCategory::class);
    }
}