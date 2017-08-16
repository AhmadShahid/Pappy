<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Services\OrganizationService;
use Illuminate\Http\Request;

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

    public function __construct(Organization $organization, OrganizationService $organizationService)
    {
        $this->_organization = $organization;
        $this->_organization_service = $organizationService;
    }

    public function getOrgUsers(Request $request)
    {
        return $request->all();
    }
}
