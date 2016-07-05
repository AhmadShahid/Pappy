<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Project;
use App\Contracts\ProjectListener;
use App\Services\ProjectService;
use Illuminate\Support\MessageBag;

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

    public function __construct(Project $project , ProjectService $projectService)
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
        $projects = $this->_project->showAllProjects( $params=[] );
        return view('project.index',compact('projects'));
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
        return view('project.create',compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->only('title','description');
        return $this->_project_service->store( $inputs, $this );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = $this->_project_service->findProjectByID( $id );
        return view('project.create',compact('project','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inputs = $request->only('title','description');
        return $this->_project_service->store( $inputs, $this ,$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
