<?php

namespace App\Jobs;
use Illuminate\Support\Facades\Log;
class TestJob extends Job
{
    protected $str;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($str)
    {
        $this->str=$str;
    }

    /**
     * 执行任务
     *
     * @return void
     */
    public function handle()
    {
        echo "hello job";
        Log::info("Job:".$this->str);
    }


    /**
     * 任务失败的处理过程
     *
     * @param  Exception  $exception
     * @return void
     */
    public function failed(Exception $exception)
    {
        // 给用户发送任务失败的通知，等等……
    }
}