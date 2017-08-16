<?php

namespace App\Jobs;

use App\Models\Organization;
use App\Models\Project;
use App\Services\ProjectService;
use App\Services\UserService;
use App\User;
use Auth;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;

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
        $userService = new UserService();
        $requestObj = $this->request;
        $request = $requestObj['invite'];
        $request = array_where($request, function ($key, $value) {
            return empty($value['id']);
        });

        $projectId = $requestObj['project_id'];
        $remove_user_id = $requestObj['remove_user'];
        $deleted_user_ids = explode(',', $remove_user_id);
        foreach ($deleted_user_ids as $key => $value) {
            $userService->deleteUserByID($value);
        }

        $projectService = new ProjectService(new Project());
        $project = $projectService->findProjectByID($projectId);

        foreach ($request as $key => $records) {
            $records['token'] = $this->generateToken();
            $org = new Organization();
            $org->org_name = $records['organization'];
            $org->save();
            $user = new User();
            $user->name = $records['name'];
            $user->email = $records['email'];
            $user->activation_token = $records['token'];
            $user->designation = $records['title'];
            $org->users()->save($user);
            $user->projects()->sync([$projectId => ['is_joined' => true]]);
            $records['id'] = $user->id;
            $records['loggin_username'] = auth()->user()->name;
            $records['basecamp'] = $project->title;
            $records['basecamp_id'] = $project->id;
            $user = User::findOrFail(1);

            Mail::Queue('auth.emails.send_invitation', ['records' => $records], function ($m) use ($records) {
                $m->from('shahidahmad527@gmail.com', 'Your Application');

                $m->to($records['email'], $records['name'])->subject('Your Reminder!');
            });
        }
    }

    private function generateToken()
    {
        $length = 78;

        return $token = bin2hex(random_bytes($length));
    }
}
