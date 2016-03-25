<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/23
 * Time: 19:05
 */

namespace Youzan\Model;


class ModelFactory
{
    /**
     * @param array $data
     * @param $className string
     * @return null|object
     * @throws \JsonMapper_Exception
     */
    static public function objectFromData($data, $className)
    {
        if (!$data) {
            return null;
        }

        $class = new $className();
        $mapper = new \JsonMapper();

        $dataObject = is_object($data) ? $data : json_decode(json_encode($data));
        $object = $mapper->map($dataObject, $class);
        return $object;
    }

    /**
     * @param $data array
     * @param $className string
     * @return array
     */
    static public function objectListFromData($data, $className)
    {
        if (!$data) {
            return null;
        }
        $mapper = new \JsonMapper();
        $dataObject = is_object($data) ? $data : json_decode(json_encode($data));
        $list = $mapper->mapArray($dataObject, array(), $className);
        return $list;
    }

}