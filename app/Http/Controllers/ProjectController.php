<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectInvitationRequest;
use App\Http\Requests\ProjectRequest;
use App\Jobs\SendInvitationEmail;
use App\Models\Project;
use App\Services\OrganizationService;
use App\Services\ProjectService;
use App\User;
use Session;

class ProjectController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | Project Controller
    | Houses all the functionality of project
    |--------------------------------------------------------------------------
    */

    private $_project;
    private $_project_service;

    public function __construct(Project $project, ProjectService $projectService)
    {
        $this->_project = $project;
        $this->_project_service = $projectService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = $this->_project->showAllProjects($params = []);

        return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // create the instances of objects
        $project = new Project();

        return view('project.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        $inputs = $request->only('title', 'description');

        return $this->_project_service->store($inputs, $this);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = $this->_project_service->findProjectByID($id);

        return view('project.create', compact('project', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectReqeust $request, $id)
    {
        $inputs = $request->only('title', 'description');

        return $this->_project_service->store($inputs, $this, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Send Invitation To Users.
     *
     * @return \Illuminate\Http\Response
     */
    public function showInvitationScreen($projectID)
    {
        $currentLoginUser = User::with('organization')->find(auth()->user()->id)->toArray();

        $project = $this->_project_service->findProjectByIDWithUsers($projectID);
        $inviteUsers = $project->users;
        $inviteUsers->prepend($currentLoginUser);

        $orgService = new OrganizationService();
        $orgs = $orgService->getOrgForDropDown();
        $autoOrgs = $orgService->getOrgForAutoComplete();

        return view('project.invite-users', compact('project', 'orgs', 'inviteUsers', 'autoOrgs'));
    }

    /**
     * Send Invitation To Users.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendInvitationToUsers(ProjectInvitationRequest $request)
    {
        ini_set('xdebug.max_nesting_level', 500);
        //$this->dispatch(new SendInvitationEmail($request));
        $this->dispatch(new SendInvitationEmail($request->only('invite', 'project_id', 'remove_user')));
        Session::flash('message', 'Invitation Send Successfully!');

        return redirect('dashboard')->withInput();
    }
}
