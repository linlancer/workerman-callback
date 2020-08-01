<?php
/**
 * Created by PhpStorm.
 * User: $_s
 * Date: 2020/8/1
 * Time: 16:38
 */

use Linlancer\Workerman\Callback\Environment\Callback;
use PHPUnit\Framework\TestCase;

class CallbackTest extends TestCase
{

    public function testGetCallback()
    {
        $result = (new Callback)->getCallback();
        $this->assertIsArray($result);
        var_dump($result);
    }
}
