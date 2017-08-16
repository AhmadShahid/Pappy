<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends BaseModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'schedules';

    /**
     * The users that belong to the organization.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
