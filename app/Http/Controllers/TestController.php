<?php

namespace App\Http\Controllers;

use App\Jobs\TestJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{

	/**
	 * [firstJob description]
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
    public function firstJob(Request $request)
    {
        TestJob::dispatch('testController')->onQueue('test-first-queue');
        Log::info('写入队列-等待消费');

        $array = [];
        $tes =[];
    }
}
