<?php

// 定义请求的开始时间
define('LARAVEL_START', microtime(true));

// Composer 自动加载
require __DIR__.'/../vendor/autoload.php';

// 引入服务容器，实现服务容器的实例化，并注册核心类服务
$app = require_once __DIR__.'/../bootstrap/app.php';

// 创建了Kernel::class的服务提供者
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

// 获取一个 Request，返回一个 Response。输入 HTTP 请求，返回 HTTP 响应
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

// 把服务器的结果返回给浏览器
$response->send();

// 执行比较耗时的请求
$kernel->terminate($request, $response);