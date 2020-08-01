<?php
/**
 * Created by PhpStorm.
 * User: $_s
 * Date: 2020/8/1
 * Time: 14:48
 */



/**
 * 加载环境变量
 * @param string $key
 * @param        $default
 * @return mixed
 */
function env(string $key, $default = null)
{
    return \Linlancer\Workerman\Callback\Environment\EnvReader::env($key, $default);
}