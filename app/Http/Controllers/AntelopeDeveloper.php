<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Http\Controllers\AntelopeDepartment;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AntelopeDeveloper extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Antelope Developer Controller
    |--------------------------------------------------------------------------
    |
    */

    /**
     * Executes before running the main controllers
     *
     * @author Oliver (Redbully14urh@gmail.com)
     * @param
     * @return 
     * @access @everyone
     * @version 1.0.0
     */
    public function __construct()
    {
        //$this->middleware('auth'); -- haha auth goes brrrrtttt
    }

    /**
     * I'll litterally do whatever I want in this file and nobody can judge me.
     *  
     * @author Oliver (Redbully14urh@gmail.com)
     * @param
     * @return \Illuminate\Contracts\Support\Renderable
     * @access @everyone
     * @version 1.0.0
     */
    public function antelopeDebug()
    {
        $user = auth()->user();
        $department = User::find(1)->departments()->orderBy('name')->get();
        return view('debug')->with('department', $user->selected_department);
    }

    /* File location: App/Http/Controllers/AntelopeDeveloper.php */
    /* End of File - AntelopeDeveloper.php */
}