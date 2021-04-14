<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;
use Hyperf\HttpServer\Contract\RequestInterface;


/**
 * @Controller()
 */
class UserController
{
    /**
     *
     * @RequestMapping(path="register", methods="post")
     */
    public function register(RequestInterface $request){
        $mobile = $request->input('mobile');
        $pwd = $request->input('pwd');
        return ['mobile' => $mobile, 'pwd' => $pwd];
    }
}
