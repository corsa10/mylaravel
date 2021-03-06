<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class TestTag extends Command
{
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
        $rel = "{\"34\":[1,7,9,2,4,3,43],\"35\":[1,7,9,2,4,5,6,35,43],\"32\":[1,9,2,3,43],\"38\":[1,7,9,2,43],\"22\":[1,9,2,3,43],\"24\":[1,7,2,28,4,6,3,43],\"25\":[1,7,9,2,4,5,6,35,43],\"27\":[1,2,3,7,29,43],\"28\":[1,2,3,4,7,29,43,49],\"212\":[1,7,2,4,43,6,3,49,29,5,28],\"12\":[1,2,3,6,7,9,50]}";
        $subject = "{\"0\":\"\xe6\x9c\xaa\xe7\x9f\xa5\",\"1\":\"\xe8\xaf\xad\xe6\x96\x87\",\"2\":\"\xe6\x95\xb0\xe5\xad\xa6\",\"3\":\"\xe8\x8b\xb1\xe8\xaf\xad\",\"4\":\"\xe7\x89\xa9\xe7\x90\x86\",\"5\":\"\xe5\x8c\x96\xe5\xad\xa6\",\"6\":\"\xe5\x8e\x86\xe5\x8f\xb2\",\"7\":\"\xe5\x9c\xb0\xe7\x90\x86\",\"8\":\"\xe7\x94\x9f\xe7\x89\xa9\",\"9\":\"\xe6\x94\xbf\xe6\xb2\xbb\",\"10\":\"\xe6\x96\x87\xe7\xa7\x91\xe7\xbb\xbc\xe5\x90\x88\",\"11\":\"\xe7\x90\x86\xe7\xa7\x91\xe7\xbb\xbc\xe5\x90\x88\",\"13\":\"\xe5\x8e\x86\xe5\x8f\xb2\xe4\xb8\x8e\xe7\xa4\xbe\xe4\xbc\x9a\",\"12\":\"\xe7\xa7\x91\xe5\xad\xa6\",\"14\":\"\xe6\x94\xbf\xe6\xb2\xbb\xe6\x80\x9d\xe5\x93\x81\"}";
        $test = "{\"0\":\"\xe6\x9c\xaa\xe7\x9f\xa5\",\"1\":\"\xe5\x8d\x95\xe9\x80\x89\xe9\xa2\x98\",\"3\":\"\xe8\xa7\xa3\xe7\xad\x94\xe9\xa2\x98\",\"4\":\"\xe5\xae\x9e\xe9\xaa\x8c\xe9\xa2\x98\",\"2\":\"\xe5\xa1\xab\xe7\xa9\xba\xe9\xa2\x98\",\"5\":\"\xe6\x8e\xa8\xe6\x96\xad\xe9\xa2\x98\",\"6\":\"\xe8\xae\xa1\xe7\xae\x97\xe9\xa2\x98\",\"7\":\"\xe5\xa4\x9a\xe9\x80\x89\xe9\xa2\x98\",\"9\":\"\xe5\x88\xa4\xe6\x96\xad\xe9\xa2\x98\",\"8\":\"\xe7\xbb\xbc\xe5\x90\x88\xe9\xa2\x98\",\"10\":\"\xe5\x86\x99\xe4\xbd\x9c\xe9\xa2\x98\",\"11\":\"\xe5\x8d\x95\xe8\xaf\x8d\xe6\x8b\xbc\xe5\x86\x99\",\"12\":\"\xe5\x8f\xa5\xe5\x9e\x8b\xe8\xbd\xac\xe6\x8d\xa2\",\"13\":\"\xe5\xae\x8c\xe5\x9e\x8b\xe5\xa1\xab\xe7\xa9\xba\",\"14\":\"\xe6\x94\xb9\xe9\x94\x99\xe9\xa2\x98\",\"15\":\"\xe6\x96\x87\xe8\xa8\x80\xe6\x96\x87\xe9\x98\x85\xe8\xaf\xbb\",\"16\":\"\xe6\x9d\x90\xe6\x96\x99\xe5\x88\x86\xe6\x9e\x90\xe9\xa2\x98\",\"17\":\"\xe7\x8e\xb0\xe4\xbb\xa3\xe6\x96\x87\xe9\x98\x85\xe8\xaf\xbb\",\"18\":\"\xe7\xbf\xbb\xe8\xaf\x91\",\"19\":\"\xe8\xa1\xa5\xe5\x85\xa8\xe5\xaf\xb9\xe8\xaf\x9d\",\"22\":\"\xe8\xbe\xa8\xe6\x9e\x90\xe9\xa2\x98\",\"20\":\"\xe8\xaf\x97\xe6\xad\x8c\xe9\x89\xb4\xe8\xb5\x8f\",\"21\":\"\xe8\xaf\xad\xe8\xa8\x80\xe8\xa1\xa8\xe8\xbe\xbe\",\"23\":\"\xe9\x80\x89\xe8\xaf\x8d\xe5\xa1\xab\xe7\xa9\xba\",\"24\":\"\xe9\x97\xae\xe7\xad\x94\xe9\xa2\x98\",\"25\":\"\xe9\x98\x85\xe8\xaf\xbb\xe7\x90\x86\xe8\xa7\xa3\",\"27\":\"\xe9\x80\x89\xe6\x8b\xa9\xe9\xa2\x98\",\"26\":\"\xe9\xbb\x98\xe5\x86\x99\",\"28\":\"\xe4\xbd\x9c\xe5\x9b\xbe\xe9\xa2\x98\",\"29\":\"\xe8\xbf\x9e\xe7\xba\xbf\xe9\xa2\x98\",\"30\":\"\xe6\x8e\xa2\xe7\xa9\xb6\xe9\xa2\x98\",\"31\":\"\xe5\x90\x8d\xe8\x91\x97\xe9\x98\x85\xe8\xaf\xbb\",\"33\":\"\xe8\xbf\x9e\xe8\xaf\x8d\xe6\x88\x90\xe5\x8f\xa5\",\"32\":\"\xe4\xb9\xa6\xe5\x86\x99\",\"34\":\"\xe5\x88\x97\xe4\xb8\xbe\xe9\xa2\x98\",\"35\":\"\xe7\xae\x80\xe7\xad\x94\xe9\xa2\x98\",\"36\":\"\xe5\x8d\x95\xe8\xaf\x8d\xe6\x9c\x97\xe8\xaf\xbb\",\"37\":\"\xe7\x9f\xad\xe6\x96\x87\xe6\x9c\x97\xe8\xaf\xbb\\t\",\"38\":\"\xe5\x8f\xa3\xe8\xbf\xb0\xe4\xbd\x9c\xe6\x96\x87\",\"39\":\"\xe4\xba\xa4\xe9\x99\x85\xe4\xbc\x9a\xe8\xaf\x9d\",\"40\":\"\xe7\x9c\x8b\xe5\x9b\xbe\xe8\xaf\xb4\xe8\xaf\x9d\",\"41\":\"\xe6\x83\x85\xe6\x99\xaf\xe5\xaf\xb9\xe8\xaf\x9d\",\"42\":\"\xe5\x9b\x9e\xe7\xad\x94\xe9\x97\xae\xe9\xa2\x98\",\"43\":\"\xe5\x88\xa4\xe6\x96\xad\xe9\xa2\x98\",\"44\":\"\xe8\xaf\xad\xe6\xb3\x95\xe5\xa1\xab\xe7\xa9\xba\",\"45\":\"\xe7\x9f\xad\xe6\x96\x87\xe5\xa1\xab\xe7\xa9\xba\\t\",\"46\":\"\xe9\x98\x85\xe8\xaf\xbb\xe5\xa1\xab\xe7\xa9\xba\",\"47\":\"\xe4\xbf\xa1\xe6\x81\xaf\xe5\x8c\xb9\xe9\x85\x8d\",\"48\":\"\xe4\xbb\xbb\xe5\x8a\xa1\xe5\x9e\x8b\xe9\x98\x85\xe8\xaf\xbb\",\"49\":\"\xe5\xa1\xab\xe8\xa1\xa8\xe9\xa2\x98\",\"50\":\"\xe5\xba\x94\xe7\x94\xa8\xe9\xa2\x98\"}";

        $rel_data = json_decode($rel, true, 256);

        $subject_data = json_decode($subject, true, 256);
        $test_data = json_decode($test, true, 256);
        $newData = [];
        $depts = [
            1 => '小学',
            2 => '初中',
            3 => '高中'
        ];
        foreach ($rel_data as $key => $value) {
            $dept = substr($key, 0, 1);
            $sub = substr($key, 1);

            $newData[$depts[$dept] . '-' . $subject_data[$sub]] = array_map(function ($message) use ($test_data) {
                return $test_data[$message];
            }, $value);

        }
        dd($newData);
    }
}
