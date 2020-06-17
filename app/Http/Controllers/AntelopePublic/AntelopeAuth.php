<?php

namespace App\Http\Controllers\AntelopePublic;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AntelopeAuth extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Antelope Auth Controller
    |--------------------------------------------------------------------------
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login
     *
     * @author Oliver (Redbully14urh@gmail.com)
     * @version 1.0.0
     */
    protected $redirectTo = RouteServiceProvider::HOME;

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
        $this->middleware('guest')->except('logout');
    }

    /**
     * Backend handling for the login page
     *
     * @author Oliver (Redbully14urh@gmail.com)
     * @param
     * @return \Illuminate\Contracts\Support\Renderable
     * @access @everyone
     * @version 1.0.0
     */
    public function showLoginForm()
    {
        return view('public.login');
    }

    /* File location: App/Http/Controllers/AntelopePublic/AntelopeAuth.php */
    /* End of File - AntelopeAuth.php */
}
