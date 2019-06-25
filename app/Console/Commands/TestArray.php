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

        $sql = "replace into wechat_wenba_rel(id,nick_name,uid)values";
        $studentList = [11111,22222,33333,44444];
        $wechatList = [
            ['Id'=>12,'NickName'=>'学霸君uid:11111'],
            ['Id'=>13,'NickName'=>'学霸君uid:22222'],
            ['Id'=>14,'NickName'=>'学霸君uid:33333'],
            ['Id'=>15,'NickName'=>'学霸君UID:44444'],
            ['Id'=>16,'NickName'=>'学霸君uid:11111'],
            ['Id'=>17,'NickName'=>'学霸君uid:22222'],
            ['Id'=>18,'NickName'=>'学霸君uid:22222'],
        ];
        foreach($wechatList as $k=>$item){
            foreach($studentList as $key=>$value) {
                if(false !== mb_strrpos($item['NickName'],$value)) {
                    $sql .= "(" . $item['Id'] . ",'" . addslashes($item['NickName']) . "',".$value."),";
                    continue 2;
                }
                dump($key,$value,$k,$item);
            }
        }
        $sql=rtrim($sql,',').";";
        dump($sql);
        DB::connection('mysql')->insert($sql);
        $endTime = microtime(true);
        $this->info("测试结束 --- 共计用时" . ($endTime - $startTime) . "秒");
    }

    /**
     * [test description]
     * @param  Array $params [description]
     * @return Array         [description]
     */
    public function test(array $params) :array
    {
        return [];
    }


}
