<?php

namespace App\Http\Controllers;

use App\Jobs\TestJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{

    public function firstJob(Request $request)
    {
        TestJob::dispatch('testController')->onQueue('test-first-queue');
        Log::info('写入队列-等待消费');
    }
}
