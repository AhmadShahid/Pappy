<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contracts\ProjectListener;
use App\Services\ScheduleService;
use App\Services\OrganizationService;
use Illuminate\Support\MessageBag;
use Session;

class ScheduleController extends BaseController
{

    /*
    |--------------------------------------------------------------------------
    | Schedule Controller
    | Houses all the functionality of Schedule
    |--------------------------------------------------------------------------
    */


    private $_schedule;
    private $_schedule_service;

    public function __construct(Schedule $schedule , ScheduleService $scheduleService)
    {
        
        $this->_schedule = $schedule;
        $this->_schedule_service = $scheduleService;
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = $this->_schedule_service->showAllSchedules( $params=[] );
        return view('schedules.index',compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
