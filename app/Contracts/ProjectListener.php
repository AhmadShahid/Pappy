<?php

namespace App\Contracts;

use Illuminate\Support\MessageBag;

interface ProjectListener
{
    public function projectCreationFails(MessageBag $errors);

    public function projectCreationSucceeds($url);
}
