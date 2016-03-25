<?php
/**
 * Created by PhpStorm.
 * User: imhui
 * Date: 16/3/24
 * Time: 12:06
 */

header("Content-type:text/html;charset=utf-8");
require '../vendor/autoload.php';
require 'config.php';

$youzan = new \Youzan\Youzan(AppId, AppSecret, CacheDIR);
$category = $youzan->itemcategory();
$data = $category->itemcategoriesTagsGetpage(1, 20);
var_dump($data);