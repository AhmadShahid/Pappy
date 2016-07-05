<?php

namespace App\Contracts;

use App\Models\Project;
use Illuminate\Support\MessageBag;

interface ProjectListener {

	public function projectCreationFails( MessageBag $errors );

	public function projectCreationSucceeds( $url );

}