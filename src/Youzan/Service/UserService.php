<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/24
 * Time: 12:47
 */

namespace Youzan\Service;


use Youzan\Model\ModelFactory;
use Youzan\Model\AccountDetail;

class UserService extends BaseService
{
    /**
     * @return null|AccountDetail
     */
    public function userBasicGet()
    {
        $method = 'kdt.user.basic.get';
        $response = $this->get($method);

        if ($this->isResponseError($response)) {
            return null;
        }
        return ModelFactory::objectFromData($response['response'], AccountDetail::class);
    }
}