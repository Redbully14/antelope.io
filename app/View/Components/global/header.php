<?php

namespace App\View\Components\global;

use Illuminate\View\Component;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class header extends Component
{
    /**
     * Initializes the departments string.
     *
     * @var string
     */
    public $departments;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($departments)
    {
        $this->departments = $departments;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.global.header');
    }
}
