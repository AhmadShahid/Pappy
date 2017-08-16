<?php

namespace App\Http\Controllers;

use  App\Contracts\ProjectListener;
use Illuminate\Support\MessageBag;

class BaseController extends Controller implements ProjectListener
{
    public function projectCreationFails(MessageBag $errors)
    {
        return redirect()->back()->withErrors($errors)->withInput();
    }

    public function projectCreationSucceeds($url)
    {
        return redirect()->route($url)->withInput();
    }
}
