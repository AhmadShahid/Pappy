<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Mail;
use App\Http\Requests;
use App\Models\Organization;
use App\Services\OrganizationService;
use Illuminate\Support\MessageBag;
use App\Jobs\SendInvitationEmail;

class OrganizationController extends BaseController
{
    
    /*
    |--------------------------------------------------------------------------
    | Project Controller
    | Houses all the functionality of project
    |--------------------------------------------------------------------------
    */
    
    private $_organization;
    private $_organization_service;

    public function __construct(Organization $organization , OrganizationService $organizationService)
    {
        
        $this->_organization = $organization;
        $this->_organization_service = $organizationService;
    }

}
