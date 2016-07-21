<?php

namespace App\Services;

use App\Models\Project;
use App\Contracts\ProjectListener;

class ProjectService
{
    private $_project;

    public function __construct( Project $project )
    {
        
        $this->_project = $project;
    }

    public function store( $inputs , ProjectListener $listener,$id = '' )
    {
        try {
            if( isset($id) && !empty( $id ) ) {

                $findProjectObj = $this->findProjectByID( $id );
                $findProjectObj->update( $inputs );
            
            } else {

                $this->_project->create( $inputs );    
            }
            

            return $listener->projectCreationSucceeds( 'projects.index' );

        } catch(\Exception $e) {

            $messagebag = new \Illuminate\Support\MessageBag();
            $messagebag->add( 'error',$e->getMessage() );

            return $listener->projectCreationFails( $messagebag );
        }
        
    }

    public function findProjectByID( $id ) {

        return $this->_project->find( $id );
    }

    public function findProjectByIDWithUsers( $id ) {

        return $this->_project->with('users','users.organization')->find( $id );
    } 

}
