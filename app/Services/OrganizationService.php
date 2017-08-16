<?php

namespace App\Services;

use App\Models\Organization;

class OrganizationService
{
    public function __construct()
    {
    }

    public function store($inputs, $id = '')
    {
        try {
            if (isset($id) && !empty($id)) {
                $findOrgObj = $this->findOrgByID($id);
                $findOrgObj->update($inputs);
            } else {
                $this->_organization->create($inputs);
            }
        } catch (\Exception $e) {
        }
    }

    public function findOrgByID($id)
    {
        $org = new Organization();

        return $org->find($id);
    }

    public function getOrgForDropDown()
    {
        $org = new Organization();

        return $org->pluck('org_name', 'id');
    }

    public function getOrgForAutoComplete()
    {
        $org = new Organization();

        return $org->pluck('org_name');
    }
}
