<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestArray extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:array';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '测试PHP数组函数';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info("测试开始");
        $startTime = microtime(true);

        $endTime = microtime(true);
        $this->info("测试结束 --- 共计用时" . ($endTime - $startTime) . "秒");
    }
}
