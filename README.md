# 有赞 API PHP SDK

[有赞API](http://open.youzan.com/api) 的PHP实现, 对有赞官方提供的 ***KdtApiClient*** 的进一步封装

-
### 通讯协议
目前仅支持 **AppId / AppSecret** 签名通讯协议 适用于：个人开发者、单店铺开发者

-
### 已实现接口
```
商品接口
kdt.item.add 新增一个商品
kdt.item.delete 删除一个商品
kdt.item.get 得到单个商品信息
kdt.item.sku.update 更新SKU信息
kdt.item.update 更新单个商品信息
kdt.item.update.delisting 商品下架
kdt.item.update.listing 商品上架
kdt.items.custom.get 根据商品货号获取商品
kdt.items.inventory.get 获取仓库中的商品列表
kdt.items.onsale.get 获取出售中的商品列表
kdt.skus.custom.get 根据外部编号取商品Sku
kdt.items.update.delisting 批量下架商品
kdt.items.update.listing 批量上架商品
```
```
商品类目接口
kdt.itemcategories.get 获取商品分类二维列表
kdt.itemcategories.promotions.get 获取商品推广栏目列表
kdt.itemcategories.tags.get 获取商品自定义标签列表
kdt.itemcategories.tags.getpage 分页获取商品自定义标签列表
```
```
物流接口
kdt.logistics.online.confirm 卖家确认发货
kdt.logistics.online.marksign 卖家标记签收
kdt.logistics.trace.search 物流流转信息查询
```
```
店铺接口
kdt.shop.basic.get 获取店铺基本信息
```
```
交易接口
kdt.trade.close 卖家关闭一笔交易
kdt.trade.get 获取单笔交易的信息
kdt.trade.memo.update 修改一笔交易备注
kdt.trades.sold.get 查询卖家已卖出的交易列表
```
```
工具接口
kdt.regions.get 获取区域地名列表信息
```

-
### 安装（Composer）
```
composer require ckoo/youzan-sdk
```

##### 依赖
```
"symfony/filesystem": "~2.8.0",
"netresearch/jsonmapper": "0.10.*"
```

-
### 使用方法

##### 初始化
```
AppId: 店铺的AppId(应用ID)
AppSecret: 店铺的AppSecret(应用密钥)
CacheDIR: 文件缓存目录

use Youzan\Youzan;
$youzan = new Youzan(AppId, AppSecret, CacheDIR);

$youzan->goods(); // 获取商品操作类 GoodsService
$youzan->trade(); // 获取订单操作类 TradeService
$youzan->itemcategory(); // 获取商品类目操作类 ItemcategoryService
$youzan->logistics(); // 获取物流操作类 ItemcategoryService
$youzan->shop(); // 获取物流操作类 ShopService
```

##### 操作商品
```
/**
 * 获取商品列表
 */
$service = $youzan->goods(); 
list($items, $total) = $service->itemsOnsaleGet();


/**
 * 添加商品
 */

use Youzan\Service\Parameters\GoodsParamters;

// 创建商品参数对象
$parameters = new GoodsParamters();
$parameters->title = '测试商品标题';
$parameters->price = '999.00';
$parameters->images = array(
	'http://aaa.jpg',
	'http://bbb.jpg',
	'/path/xxxx/images/ccc.jpg'
);
// 添加商品
$item = $service->itemAdd($parameters);

```

##### 操作订单
```
/**
 * 获取订单列表
 */
 
use Youzan\Model\TradeStatus

$service = $youzan->trade();
list($result, $total) = $service->tradesSoldGet(TradeStatus::WAIT_BUYER_CONFIRM_GOODS);
```
