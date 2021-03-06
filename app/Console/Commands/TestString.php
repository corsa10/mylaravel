<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Foundation\Bus\DispatchesJobs;

class TestString extends Command
{
    use DispatchesJobs;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:string';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '测试PHP字符串函数';

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
        //
        $this->info("测试开始");
        $startTime = microtime(true);
        dd(Carbon::now()->addQuarter());
        $endTime = microtime(true);
        $this->info("测试结束 --- 共计用时" . ($endTime - $startTime) . "秒");
    }
}
