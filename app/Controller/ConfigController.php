<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 * @AutoController();
 */
namespace App\Controller;

use Hyperf\Config\Annotation\Value;

class ConfigController
{

    /**
     * @Value(config.app_name)
     */
    private $appName;

    public function index()
    {
        return $this->appName;
    }
}
