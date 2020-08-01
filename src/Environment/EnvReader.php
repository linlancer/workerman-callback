<?php
/**
 * Created by PhpStorm.
 * User: $_s
 * Date: 2020/8/1
 * Time: 14:17
 */

namespace Linlancer\Workerman\Callback\Environment;


use Symfony\Component\Dotenv\Dotenv;

class EnvReader
{
    /**
     * @var self
     */
    protected static $instance;

    /**
     * @var Dotenv
     */
    protected static $dotEnv;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    protected static function getInstance()
    {
        if (!defined('APP_PATH'))
            define('APP_PATH', __dir__.'/../../');
        if (is_null(self::$instance)) {
            self::$instance = new self;
            self::$dotEnv = new Dotenv();
            self::$dotEnv->load(APP_PATH.'/.env');
        }
        return self::$instance;
    }

    public static function env(string $key, $default)
    {
        return self::getInstance()->read($key, $default);
    }

    public function read(string $key, $default)
    {
        self::getInstance();
        return $_ENV[$key] ?? $default;
    }

    public static function getDotEnv()
    {
        self::getInstance();
        return self::$dotEnv;
    }


}