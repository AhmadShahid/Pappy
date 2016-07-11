<?php

namespace App\Jobs;

use Mail;
use App\User;
use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendInvitationEmail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

     protected $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $user = User::findOrFail(1);

        Mail::Queue('auth.emails.send_invitation', ['user' => $user], function ($m) use ($user) {
            $m->from('shahidahmad527@gmail.com', 'Your Application');

            $m->to("shahidahmad527@gmail.com", $user->name)->subject('Your Reminder!');
        });
    }
}
