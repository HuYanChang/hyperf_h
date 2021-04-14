<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\Config\Annotation\Value;

/**
 * @AutoController()
 */
class ConfigController
{

    /**
     * @Value("bar")
     */
    private $bar;

    public function index()
    {
        echo 'config'.PHP_EOL;
        return $this->bar;
    }
}
