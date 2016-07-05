<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends BaseModel
{
    
	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'projects';

    /**
     * Show List of all the client 
     * @param array
     * @return array of clients
    */

    public function showAllProjects( $params ){

        $results = $this; 

        if( isset( $params['Search'] ) && !empty( $params['Search'] ) ) {
            
        }

        $toTake = config('setting.pagination');  

        return $results->paginate( $toTake );
    }
}
