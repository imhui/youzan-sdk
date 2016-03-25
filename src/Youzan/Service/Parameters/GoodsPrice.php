<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/23
 * Time: 23:39
 */

namespace Youzan\Service\Parameters;


class GoodsPrice
{
    /**
     * @param float $price
     * @return float
     */
    static public function transformPrice($price)
    {
        return $price;
    }
}