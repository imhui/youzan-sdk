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
     * @param $outerId|null
     * @param $oids|null
     * @param $is_no_express
     * @param $out_stype
     * @param $out_sid
     * @return bool
     */
    public function onlineConfirm($tid, $outerId, $oids, $is_no_express, $out_stype, $out_sid)
    {
        $method = 'kdt.logistics.online.confirm';
        $params = array(
            'tid' => $tid,
            'outer_tid' => $outerId,
            'oids' => $oids,
            'is_no_express' => $is_no_express,
            'out_stype' => $out_stype,
            'out_sid' => $out_sid
        );

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