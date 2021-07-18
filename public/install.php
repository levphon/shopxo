<?php
// +----------------------------------------------------------------------
// | ShopXO 国内领先企业级B2C免费开源电商系统
// +----------------------------------------------------------------------
// | Copyright (c) 2011~2099 http://shopxo.net All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( https://opensource.org/licenses/mit-license.php )
// +----------------------------------------------------------------------
// | Author: Devil
// +----------------------------------------------------------------------

// [ 安装入口文件 ]
namespace think;

// 加载基础文件
require __DIR__ . '/../vendor/autoload.php';

// 引入公共入口文件
require __DIR__.'/core.php';

// 执行HTTP应用并响应
$http = (new App())->http;
$response = $http->name('install')->run();
$response->send();
$http->end($response);
?>