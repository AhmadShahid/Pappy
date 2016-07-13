<?php

namespace App\Services;

use App\Models\Project;
use App\Models\Organization;
use App\Contracts\ProjectListener;

class OrganizationService
{
    public function __construct( )
    {
    }

    public function store( $inputs ,$id = '' )
    {
        try {
            if( isset($id) && !empty( $id ) ) {

                $findOrgObj = $this->findOrgByID( $id );
                $findOrgObj->update( $inputs );
            
            } else {

                $this->_organization->create( $inputs );    
            }

        } catch(\Exception $e) {
            
        }
        
    }

    public function findOrgByID( $id ) {
        $org = new Organization();
        return $org->find( $id );
    } 

    public function getOrgForDropDown()
    {
        $org = new Organization();
        return $org->pluck( 'org_name','id' );
    }

}
