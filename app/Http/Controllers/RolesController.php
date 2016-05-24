<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Roles;

class RolesController extends Controller
{
    /**
     * Get the role overview.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
    	$data['roles'] = Roles::all();
    	return view('roles.index', $data);
    }

    /**
     * Create a role in the database.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store()
    {

    }    
}
