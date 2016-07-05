<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Project;
use  App\Contracts\ProjectListener;
use  App\Services\ProjectService;
use Illuminate\Support\MessageBag;

class BaseController extends Controller implements ProjectListener
{

	public function projectCreationFails( MessageBag $errors ){

		return redirect()->back()->withErrors( $errors )->withInput();
	}

	public function projectCreationSucceeds( $url ){

		return redirect()->route( $url )->withInput();
	}

}