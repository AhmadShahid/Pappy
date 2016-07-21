<?php

namespace App\Jobs;

use Illuminate\Http\Request;
use Mail;
use Auth;
use App\User;
use App\Models\Organization;
use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendInvitationEmail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

     protected $user;
     protected $request;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(array $request)
    {
        //$this->user = $user;
        $this->request = $request;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $requestObj = $this->request;
        $request = $requestObj['invite'];

        foreach ($request as $key => $records) {
            $records['token'] =  $this->generateToken();
            $org = new Organization();
            $org->org_name = $records['organization'];
            $org->save();
            $user = new User();
            $user->name = $records['name'];
            $user->email = $records['email'];
            $user->activation_token = $records['token'];
            $user->designation = $records['title'];
            $org->users()->save($user);
            $records['id'] = $user->id;
            $records["loggin_username"] = auth()->user()->name;
            $user = User::findOrFail(1);

            Mail::Queue('auth.emails.send_invitation', ['records' => $records], function ($m) use ($records) {
                $m->from('shahidahmad527@gmail.com', 'Your Application');

                $m->to("shahidahmad527@gmail.com", $records['name'])->subject('Your Reminder!');
            });
        }
    }


    private function generateToken(){
        $length = 78;
        return $token = bin2hex(random_bytes($length));
    }
}
