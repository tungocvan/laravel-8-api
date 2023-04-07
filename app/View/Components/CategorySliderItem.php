<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CategorySliderItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $url;
    public $title;
    public $href;
    public function __construct($url,$title,$href)
    {
        //
        $this->url = $url;
        $this->title = $title;
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.category-slider-item');
    }
}
