<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class TableComponent extends Component
{
    public $title;

    /**
     * Create a new component instance.
     *
     * @param  $title
     */
    public function __construct()
    {
        //$this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('admin.components.table');
    }
}
