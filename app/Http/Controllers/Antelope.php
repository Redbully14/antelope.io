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
     * @author Oliver G.
     * @param
     * @return Laravel\View
     * @access @everyone
     * @version 1.0.0
     */
    public function dashboard()
    {
        return view('dashboard');
    }

    /* File location: app/Http/Controllers/Antelope.php */
    /* End of File - Antelope.php */
}