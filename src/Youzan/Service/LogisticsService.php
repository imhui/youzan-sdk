<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/23
 * Time: 22:51
 */

namespace Youzan\Service;


use Youzan\Model\CommonRegion;
use Youzan\Model\ModelFactory;

class LogisticsService extends BaseService
{
    /**
     * @param $tid
     * @param $outer_tid|null
     * @param $oids|null
     * @param $is_no_express
     * @param $out_stype
     * @param $out_sid
     * @return bool
     */
    public function onlineConfirm($tid, $is_no_express, $outer_tid = null, $oids = null, $out_stype = null, $out_sid = null)
    {
        $method = 'kdt.logistics.online.confirm';
        $params = array(
            'tid' => $tid,
            'is_no_express' => $is_no_express,
        );
        if ($outer_tid !== null) {
            $params['outer_tid'] = $outer_tid;
        }
        if ($out_stype !== null) {
            $params['out_stype'] = $out_stype;
        }
        if ($out_sid !== null) {
            $params['out_sid'] = $out_sid;
        }
        if ($oids !== null) {
            $params['oids'] = $oids;
        }

        $response = $this->post($method, $params);
        if ($this->isResponseError($response)) {
            return false;
        }
        return $response['response']['shipping']['is_success'];
    }

    /**
     * @param $tid
     * @return null|array
     */
    public function traceSearch($tid)
    {
        $method = 'kdt.logistics.trace.search';
        $params = array(
            'tid' => $tid,
        );

        $response = $this->get($method, $params);
        if ($this->isResponseError($response)) {
            return null;
        }
        return $response['response'];
    }

    /**
     * @param $tid
     * @return bool
     */
    public function onlineMarksign($tid)
    {
        $method = 'kdt.logistics.online.marksign';
        $params = array(
            'tid' => $tid,
        );

        $response = $this->post($method, $params);

        if ($this->isResponseError($response)) {
            return false;
        }
        return $response['response']['is_success'];
    }

    /**
     * @param int $level
     * @param null $parent_id
     * @param null $id
     * @return CommonRegion[]|null
     */
    public function regionsGet($level = 0, $parent_id = null, $id = null)
    {
        $method = 'kdt.regions.get';
        $params = array(
            'level' => $level
        );
        if ($parent_id != null) {
            $params['parent_id'] = $parent_id;
        }
        if ($id != null) {
            $params['id'] = $id;
        }
        $response = $this->get($method, $params);
        if ($this->isResponseError($response)) {
            return null;
        }

        $list = ModelFactory::objectListFromData($response['response']['regions'], CommonRegion::class);
        return $list;
    }
}