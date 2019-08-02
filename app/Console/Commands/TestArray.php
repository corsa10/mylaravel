<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

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

        $date =  mktime(0,0,0,date('m'),date('d'));
        $month = mktime(0, 0, 0, date("m"), date("d") - 1, date("Y"));

        $endTime = mktime(23, 59, 59, date('m', strtotime(date('Y-m',$month))) + 1, 0);


        dump(date('Y-m-d',$month),date('Y-m-d:H:i:s',$endTime));
        $endTime = microtime(true);
        $this->info("测试结束 --- 共计用时" . ($endTime - $startTime) . "秒");
    }

}
