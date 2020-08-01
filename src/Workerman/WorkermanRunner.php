<?php
/**
 * Created by PhpStorm.
 * User: $_s
 * Date: 2020/8/1
 * Time: 14:13
 */
namespace Linlancer\Workerman\Callback\Workerman;

use Workerman\Worker;
use Workerman\Connection\AsyncTcpConnection;

class WorkermanRunner
{
    public static function run()
    {
        global $argv;
        $argv[0] = 'workerman:httpserver';
        $worker = new Worker();
        $worker->count = env('WORKER_COUNT', 6);
        $worker->name = env('WORKER_NAME', 'worker');

        $worker->onMessage = function ($conn, $buffer) {

        };
        Worker::runAll();
    }
}