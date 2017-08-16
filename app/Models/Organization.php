<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Organization extends BaseModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'organizations';

    /**
     * Get the users for the Organization.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * Show List of all the client.
     *
     * @param array
     *
     * @return array of clients
     */
    public function showAllOrganizations($params)
    {
        $results = $this;

        if (isset($params['Search']) && !empty($params['Search'])) {
        }

        $toTake = config('setting.pagination');

        return $results->paginate($toTake);
    }
}
