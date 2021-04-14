<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\HttpServer\Annotation\Controller;

/**
 * @AutoController()
 */
class ConfigController
{

    public function index()
    {
        // 获取 autoload/databases.php 里的配置
        return 'AutoController';
    }
}
