<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BannerSliderItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $url;
    public function __construct($url)
    {
        //
        $this->url =$url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.banner-slider-item');
    }
}
