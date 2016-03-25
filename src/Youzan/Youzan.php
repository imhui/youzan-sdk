<?php

/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/7
 * Time: 12:24
 */

namespace Youzan;


use Youzan\Lib\KdtApiClient;
use Youzan\Service\ItemcategoryService;
use Youzan\Service\GoodsService;
use Youzan\Service\LogisticsService;
use Youzan\Service\ShopService;
use Youzan\Service\TradeService;

class Youzan
{
    private $appId;
    private $appSecret;

    /**
     * @var KdtApiClient
     */
    private $apiClient;

    /**
     * @var string
     */
    private $cacheDir;


    /**
     * @var ProductService
     */
    private $goodsService = null;

    /**
     * @var TradeService
     */
    private $tradeService = null;

    /**
     * @var LogisticsService
     */
    private $logisticsService = null;

    /**
     * @var ItemcategoryService
     */
    private $categoryService = null;

    /**
     * @var ShopService
     */
    private $shopService = null;

    /**
     * Youzan constructor.
     * @param $appId
     * @param $appSecret
     * @param $cacheDir
     */
    public function __construct($appId, $appSecret, $cacheDir)
    {
        $this->appId = $appId;
        $this->appSecret = $appSecret;
        $this->apiClient = new KdtApiClient($appId, $appSecret);
        $this->cacheDir = $cacheDir;
    }

    /**
     * @return GoodsService
     */
    public function goods()
    {
        if (!$this->goodsService) {
            $this->goodsService = new GoodsService($this->apiClient, $this->cacheDir);
        }

        return $this->goodsService;
    }

    /**
     * @return TradeService
     */
    public function trade()
    {
        if (!$this->tradeService) {
            $this->tradeService = new TradeService($this->apiClient, $this->cacheDir);
        }
        return $this->tradeService;
    }

    /**
     * @return LogisticsService
     */
    public function logistics()
    {
        if (!$this->logisticsService) {
            $this->logisticsService = new LogisticsService($this->apiClient, $this->cacheDir);
        }
        return $this->logisticsService;
    }

    /**
     * @return ItemcategoryService
     */
    public function itemcategory()
    {
        if (!$this->categoryService) {
            $this->categoryService = new ItemcategoryService($this->apiClient, $this->cacheDir);
        }
        return $this->categoryService;
    }

    /**
     * @return ShopService
     */
    public function shop()
    {
        if (!$this->shopService) {
            $this->shopService = new ShopService($this->apiClient, $this->cacheDir);
        }
        return $this->shopService;
    }

}