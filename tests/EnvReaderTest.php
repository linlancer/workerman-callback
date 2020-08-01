<?php
/**
 * Created by PhpStorm.
 * User: $_s
 * Date: 2020/8/1
 * Time: 14:39
 */

use Linlancer\Workerman\Callback\Environment\EnvReader;

class EnvReaderTest extends PHPUnit\Framework\TestCase
{

    public function testEnv()
    {
        $result = EnvReader::env('WORKER_COUNT', 6);
        $this->assertEquals(4, $result);
    }

    public function testEnvFunction()
    {
        $result = env('WORKER_COUNT', 6);
        $this->assertEquals(4, $result);
    }

    public function testOverWrite()
    {
        $env = EnvReader::getDotEnv();
        $env->overload();
    }

}
