<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/8
 * Time: 11:00
 */

namespace Youzan\Service;

use Youzan\Lib\KdtApiClient;
use Symfony\Component\Filesystem\Filesystem;
use Youzan\Utility\StringUtility;

abstract class BaseService
{
    /**
     * @var KdtApiClient
     */
    protected $apiClient;

    /**
     * @var string
     */
    protected $cacheDir;

    /**
     * @var mixed
     */
    protected $lastError;

    /**
     * BaseService constructor.
     * @param KdtApiClient $apiClient
     * @param $cacheDir
     */
    public function __construct(KdtApiClient $apiClient, $cacheDir)
    {
        $this->apiClient = $apiClient;
        $this->cacheDir = $cacheDir;
    }

    /**
     * 上一次API请求的错误信息
     * @return mixed
     */
    public function getLastError()
    {
        return $this->lastError;
    }

    /**
     * @param $response
     * @return bool
     */
    protected function isResponseError($response)
    {
        if (!$response) {
            return true;
        }

        $error = null;
        $isError = isset($response['error_response']);
        if ($isError) {
            $error = $response['error_response'];
        }
        $this->lastError = $error;

        return $isError;
    }

    protected function saveRemoteImages($imageUrls = array())
    {
        $imagesCacheDir = $this->cacheDir . '/yzimages/';
        $fileSystem = new Filesystem();
        if (!$fileSystem->exists($imagesCacheDir)) {
            $fileSystem->mkdir($imagesCacheDir);
        }

        $fileNames = array();
        foreach ($imageUrls as $url) {

            if (StringUtility::hasPrefix('http://', $url) || StringUtility::hasPrefix('https://', $url)) {
                $filePath = $imagesCacheDir . time() . '.' . StringUtility::fileExtension($url);
                $fileData = file_get_contents($url);
                file_put_contents($filePath, $fileData);
                $fileNames[] = $filePath;
            }
            else {
                $fileNames[] = $url;
            }
        }

        return $fileNames;
    }

    protected function removeFiles($filePaths = array())
    {
        $fileSystem = new Filesystem();

        $files = array();
        foreach ($filePaths as $filePath) {
            if (StringUtility::hasPrefix($this->cacheDir, $filePath)) {
                $files[] = $filePath;
            }
        }
        $fileSystem->remove($files);
    }

    /**
     * @param $method
     * @param array $params
     * @return mixed|null
     */
    protected function get($method, $params = array())
    {
        try {
            return $this->apiClient->get($method, $params);
        } catch (\Exception $e) {
            $this->lastError = $e;
            return null;
        }
    }

    /**
     * @param $method
     * @param array $params
     * @param array $files
     * @return mixed|null
     */
    protected function post($method, $params = array(), $files = array())
    {
        try {
            return $this->apiClient->post($method, $params, $files);
        } catch (\Exception $e) {
            $this->lastError = $e;
            return null;
        }
    }
}