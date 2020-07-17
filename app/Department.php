<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    /*
    |--------------------------------------------------------------------------
    | Antelope Department Model
    |--------------------------------------------------------------------------
    |
    */

    /**
     * The attributes that are mass assignable.
     *
     * @author Oliver (Redbully14urh@gmail.com)
     * @var arr
     * @version 1.0.0
     */
    protected $fillable = [
        'name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @author Oliver (Redbully14urh@gmail.com)
     * @var arr
     * @version 1.0.0
     */
    protected $hidden = [];

    /* File location: App/Http/Department.php */
    /* End of File - Department.php */
}
