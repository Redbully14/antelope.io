<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /*
    |--------------------------------------------------------------------------
    | Antelope User Model
    |--------------------------------------------------------------------------
    |
    */

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @author Oliver (Redbully14urh@gmail.com)
     * @var arr
     * @version 1.0.0
     */
    protected $fillable = [
        'name', 'email', 'password', 'selected_department'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @author Oliver (Redbully14urh@gmail.com)
     * @var arr
     * @version 1.0.0
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Executes many-to-many relationships to enable users to be in many departments.
     *
     * @author Oliver (Redbully14urh@gmail.com)
     * @param
     * @return \Illuminate\Database\Eloquent\Model
     * @access @everyone
     * @version 1.0.0
     */
    public function departments() {
        return $this->belongsToMany('App\Department');
    }

    /* File location: App/Http/User.php */
    /* End of File - User.php */
}
