<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Antelope extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Antelope Main Controller
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
        $this->middleware('auth');
    }

    /**
     * Backend handling for the main dashboard system
     *
     * @author Oliver (Redbully14urh@gmail.com)
     * @param
     * @return \Illuminate\Contracts\Support\Renderable
     * @access @everyone
     * @version 1.0.0
     */
    public function dashboard()
    {
        return view('dashboard');
    }

    /* File location: App/Http/Controllers/Antelope.php */
    /* End of File - Antelope.php */
}