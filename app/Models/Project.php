<?php

namespace App\Models;

use App\User;
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
     * The projects that belong to the users.
     */
    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('is_joined');
    }

    /**
     * Show List of all the client.
     *
     * @param array
     *
     * @return array of clients
     */
    public function showAllProjects($params)
    {
        $results = $this;

        if (isset($params['Search']) && !empty($params['Search'])) {
        }

        $toTake = config('setting.pagination');

        return $results->paginate($toTake);
    }
}
