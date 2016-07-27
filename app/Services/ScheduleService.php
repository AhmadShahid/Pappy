<?php

namespace App\Services;

use App\Models\Schedule;
use App\Contracts\ProjectListener;

class ScheduleService
{
    private $_schedule;

    public function __construct( )
    {
        
        $this->_schedule = new Schedule();
    }

    public function store( $inputs , ProjectListener $listener,$id = '' )
    {
        try {
            if( isset($id) && !empty( $id ) ) {

                $findProjectObj = $this->findProjectByID( $id );
                $findProjectObj->update( $inputs );
            
            } else {

                $this->_schedule->create( $inputs );    
            }
            

            return $listener->projectCreationSucceeds( 'schedules.index' );

        } catch(\Exception $e) {

            $messagebag = new \Illuminate\Support\MessageBag();
            $messagebag->add( 'error',$e->getMessage() );

            return $listener->projectCreationFails( $messagebag );
        }
        
    }

    public function findScheduleByID( $id ) {

        return $this->_schedule->find( $id );
    }

    /**
     * Show List of all the Schedules 
     * @param array
     * @return array of schedules
    */

    public function showAllSchedules( $params )
    {

        $results = $this->with('user'); 

        if( isset( $params['search'] ) && !empty( $params['search'] ) ) {
            
        }

        $toTake = config('setting.pagination');  

        return $results->paginate( $toTake );
    }


}
