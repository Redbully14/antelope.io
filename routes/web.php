<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
|--------------------------------------------------------------------------
| Main Website Routes
|--------------------------------------------------------------------------
|
*/

/**
 * Webdomain: /dashboard
 *
 * @author Oliver (Redbully14urh@gmail.com)
 * @package GET
 * @category BaseRoutes
 * @access @Auth
 * @version 1.0.0
 */
Route::get('/dashboard', [
  'as' => 'dashboard',
  'uses' => 'Antelope@dashboard'
]);

Route::get('/', function () {
    return redirect('/dashboard');
});

/**
 * Webdomain: /developer_debug
 *
 * @author Oliver (Redbully14urh@gmail.com)
 * @package GET
 * @category BaseRoutes
 * @access @Auth
 * @version 1.0.0
 */
Route::get('/developer_debug', [
	'as' => 'developer_debug',
	'uses' => 'AntelopeDeveloper@antelopeDebug'
]);

/**
 * Webdomain: /switch_department/{id}
 *
 * @author Oliver (Redbully14urh@gmail.com)
 * @package POST
 * @category BaseRoutes
 * @access @Auth
 * @version 1.0.0
 */
Route::post('/switch_department/{department_id}', [
  'as' => 'switch_department',
  'uses' => 'AntelopeDepartment@switchDepartment'
]);


Route::namespace('AntelopePublic')->group(function() {
	/*
	|--------------------------------------------------------------------------
	| Public Antelope Routes
	|--------------------------------------------------------------------------
	|
	*/

	/**
	 * Webdomain: /login
	 *
	 * @author Oliver (Redbully14urh@gmail.com)
	 * @package GET
	 * @category AntelopePublic
	 * @access @everyone
	 * @version 1.0.0
	 */
	Route::get('/login', [
	  'as' => 'login',
	  'uses' => 'AntelopeAuth@showLoginForm'
	]);

	/**
	 * Webdomain: /login
	 *
	 * @author Oliver (Redbully14urh@gmail.com)
	 * @package POST
	 * @category AntelopePublic
	 * @access @everyone
	 * @version 1.0.0
	 */
	Route::post('/login', [
	  'as' => 'login',
	  'uses' => 'AntelopeAuth@login'
	]);

	/**
	 * Webdomain: /login
	 *
	 * @author Oliver (Redbully14urh@gmail.com)
	 * @package GET
	 * @category AntelopePublic
	 * @access @everyone
	 * @version 1.0.0
	 */
	Route::get('/logout', [
	  'as' => 'logout',
	  'uses' => 'AntelopeAuth@logout'
	]);
});

/* File location: routes/web.php */
/* End of File - web.php */