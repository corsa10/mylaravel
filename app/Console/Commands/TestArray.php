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

    private function test()
    {
        $result = [];
        DB::table('mistake_note')
        ->select('user_id','grade_id','subject_id','point2_name',
        DB::raw('GROUP_CONCAT(difficult) as difficult'),DB::raw('GROUP_CONCAT(mistake_cause) as mistake_cause'),
        DB::raw('count(*) AS num'))
            ->whereIn('grade_id',[2,3])
            ->whereIn('subject_id',[2,4,5])
            ->where('is_delete',0)
            ->groupBy('user_id', 'grade_id', 'subject_id','point2_name')
            ->having('num','>=',10)
            ->orderBy('num','grade_id','subject_id')
            ->chunk(10,function ($mistake_note) use (&$result) {
                foreach ($mistake_note as $item){
                    if(($item->grade_id==2 && $item->subject_id==2)
                    || ($item->grade_id ==3 && in_array($item->subject_id ,[2,4,5]))) {
                        $result[$item->user_id . '-' . $item->grade_id . '-' . $item->subject_id.'-'.$item->point2_name] = [
                            'user_id' => $item->user_id,
                            'grade_id' => $item->grade_id,
                            'subject_id' => $item->subject_id,
                            'point2_name' => $item->point2_name,
                            'difficult' => array_count_values(explode(',', $item->difficult)),
                            'mistake_cause' => array_count_values(explode(',', $item->mistake_cause))
                        ];
                    }

                }
            });
        dump($result);
    }
}
