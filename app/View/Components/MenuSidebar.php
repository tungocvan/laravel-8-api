<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Http\Request;

class MenuSidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    private $active = '';
    public function __construct(Request $request)
    {
        // 
        //dd($request->path());
        $this->active = $request->path();
    
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
         $active = $this->active;      
        return view('components.menu-sidebar',compact('active'));
    }
}
