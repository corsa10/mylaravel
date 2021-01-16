<?php

namespace App\Listeners\Settlement;

use App\Events\Settlement\SendMsg;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class SendMsgListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SendMsg  $event
     * @return void
     */
    public function handle(SendMsg $event)
    {
            dd('phpinfo');
    }
}
