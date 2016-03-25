<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/24
 * Time: 12:27
 */

namespace Youzan\Service;


use Youzan\Model\AccountShop;
use Youzan\Model\ModelFactory;

class ShopService extends BaseService
{
    /**
     * @return null|AccountShop
     */
    public function shopBasicGet()
    {
        $method = 'kdt.shop.basic.get';
        $response = $this->get($method);

        if ($this->isResponseError($response)) {
            return null;
        }
        return ModelFactory::objectFromData($response['response'], AccountShop::class);
    }
}