<?php
/**
 * Created by PhpStorm.
 * User: $_s
 * Date: 2020/8/1
 * Time: 16:15
 */

namespace Linlancer\Workerman\Callback\Environment;


use Symfony\Component\Dotenv\Dotenv;

class Callback
{
    protected $callback = [];

    public function __construct()
    {
        if (!defined('APP_PATH'))
            define('APP_PATH', __dir__.'/../../');
        $pattern = APP_PATH.'*.callback';
        $dotEnv = new Dotenv;
        $values = [];
        foreach (glob($pattern) as $callback) {
            $contents = file_get_contents($callback);
            $values[] = $dotEnv->parse($contents);
        }
        $this->callback = $values;

    }

    public function getCallback()
    {
        return $this->callback;
    }
}