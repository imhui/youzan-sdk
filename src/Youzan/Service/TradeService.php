<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/8
 * Time: 11:30
 */

namespace Youzan\Service;


use Youzan\Model\GoodsDetail;
use Youzan\Model\ModelFactory;
use Youzan\Model\TradeDetail;

class TradeService extends BaseService
{
    /**
     * @param $tid
     * @return null|GoodsDetail
     */
    public function tradeGet($tid)
    {
        $method = 'kdt.trade.get';
        $params = array(
            'tid' => $tid
        );

        $response = $this->get($method, $params);
        if ($this->isResponseError($response)) {
            return null;
        }
        return ModelFactory::objectFromData($response['response']['trade'], TradeDetail::class);

    }


    /**
     * @param null $status
     * @param int $start_created
     * @param int $end_created
     * @param int $page_no
     * @param int $page_size
     * @param bool $use_has_next
     * @return array|null
     */
    public function tradesSoldGet($status = null, $start_created = 0, $end_created = 0, $page_no = 1, $page_size = 20, $use_has_next = false)
    {
        $method = 'kdt.trades.sold.get';

        $params = array(
            'page_no' => $page_no,
            'page_size' => $page_size
        );
        if ($status) {
            $params['status'] = $status;
        }
        if ($start_created) {
            $params['start_created'] = $start_created;
        }
        if ($end_created) {
            $params['end_created'] = $end_created;
        }

        if ($use_has_next) {
            $params['use_has_next'] = $use_has_next;
        }

        $response = $this->get($method, $params);
        if ($this->isResponseError($response)) {
            return false;
        }

        $total = !$use_has_next ? $response['response']['total_results'] : 0;
        $hasNext = $use_has_next ? $response['response']['has_next'] : false;
        $list = ModelFactory::objectListFromData($response['response']['trades'], TradeDetail::class);
        return array($list, $total, $hasNext);

    }

    /**
     * @param $tid
     * @param string $close_reason
     * @return null|TradeDetail
     */
    public function tradeClose($tid, $close_reason = '')
    {
        $method = 'kdt.trade.close';
        $params = array(
            'tid' => $tid,
            'close_reason' => $close_reason
        );

        $response = $this->post($method, $params);
        if ($this->isResponseError($response)) {
            return null;
        }
        return ModelFactory::objectFromData($response['response']['trade'], TradeDetail::class);
    }


    /**
     * @param $tid
     * @param string $memo
     * @param int $flag
     * @return null|TradeDetail
     */
    public function tradeMemoUpdate($tid, $memo = '', $flag = 0)
    {
        $method = 'kdt.trade.memo.update';
        $params = array(
            'tid' => $tid,
            'memo' => $memo,
        );
        if (in_array($flag, array(1, 2, 3, 4, 5))) {
            $params['flag'] = $flag;
        }

        $response = $this->post($method, $params);
        if ($this->isResponseError($response)) {
            return null;
        }
        return ModelFactory::objectFromData($response['response']['trade'], TradeDetail::class);
    }
}