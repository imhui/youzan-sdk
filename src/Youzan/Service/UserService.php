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

    public function followerGet($user_id_or_openid, $fields = '')
    {
        $method = 'kdt.users.weixin.follower.get';
        $params = array(
            'fields' => $fields
        );

        $params[is_numeric($user_id_or_openid) ? 'user_id' : 'weixin_openid'] = $user_id_or_openid;

        $response = $this->get($method, $params);
        
        if ($this->isResponseError($response)) {
            return null;
        }
        return ModelFactory::objectFromData($response['response']['user'], AccountDetail::class);
    }

    public function followerGets(array $user_id_or_openids, $fields = '')
    {
        $method = 'kdt.users.weixin.follower.gets';

        $user_ids = [];
        $weixin_openids = [];

        foreach($user_id_or_openids as $user_id_or_openid)
        {
            if(is_numeric($user_id_or_openid))
            {
                $user_ids[] = $user_id_or_openid;
            }
            else
            {
                $weixin_openids[] = $user_id_or_openid;
            }
        }

        $params = array(
            'fields' => $fields,
            'user_ids' => implode(',', $user_ids),
            'weixin_openids' => implode(',', $weixin_openids)
        );

        $response = $this->get($method, $params);

        if ($this->isResponseError($response)) {
            return null;
        }
        return ModelFactory::objectListFromData($response['response']['user'], AccountDetail::class);
    }

}