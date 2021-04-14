<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\Config\Annotation\Value;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\GetMapping;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;

/**
 * @AutoController()
 */
class ConfigController
{
    /**
     * @Value("databases.default.driver")
     */
    private $config;

    public function index()
    {
        // 获取 autoload/databases.php 里的配置
        return $this->config;
    }
}
