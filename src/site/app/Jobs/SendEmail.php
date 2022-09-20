<?php

namespace App\Jobs;

use App\Jobs\SendSingleMail;
use App\Mail\ActivationLink;
use App\Models\Link;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $tries = 3;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $links = Link::where('sended', 0)->get();
        foreach($links as $link) {
            $url = url('/acceptInvitation?token='.$link->token);
            SendSingleMail::dispatch(trim($link->user->email), $url);
            $link->update(['sended' => true]);
        }
        
    }
}
