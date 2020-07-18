<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AntelopeDepartment extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Antelope Department Controller
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
     * Allows a member to switch departments
     *
     * @author Oliver (Redbully14urh@gmail.com)
     * @param
     * @return 
     * @access @everyone
     * @version 1.0.0
     */
    public static function switchDepartment($department_id) {
    	$user = auth()->user();
    	
    	if (!self::validateDepartment($user, $department_id)) {
    		die();
    	}

    	$user->selected_department = $department_id;
        $user->save();

    	return;
    }

    /**
     * Validates if a member is in requesting department
     *
     * @author Oliver (Redbully14urh@gmail.com)
     * @param
     * @return 
     * @access @everyone
     * @version 1.0.0
     */
    public static function validateDepartment($user, $department_id) {
    	return $user->departments->contains($department_id);
    }

    /* File location: App/Http/Controllers/AntelopeDepartment.php */
    /* End of File - AntelopeDepartment.php */
}