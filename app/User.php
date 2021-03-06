<?php

namespace App;

use App\Models\Organization;
use App\Models\Project;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The users that belong to the User  Projects.
     */
    public function projects()
    {
        return $this->belongsToMany(Project::class)->withPivot('is_joined');
    }

    /**
     * The users that belong to the organization.
     */
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
