<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ItemsMenu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $classUl;
    public $classLi;
    public $classA;
    public $hrefA;
    public $srcImg;
    public $items;
    public $titleUl;
    
    public function __construct($classUl='nav flex-column',$classLi='nav-item mb-2',$classA='nav-link',$hrefA='#',$items=[],$srcImg=false,$titleUl='')
    {
        // $classUl,$classLi,$classA,$hrefA
        $this->classUl = $classUl;
        $this->classLi = $classLi;
        $this->classA = $classA;
        $this->hrefA = $hrefA;
        $this->items = $items;
        $this->srcImg = $srcImg;
        $this->titleUl = $titleUl;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.items-menu');
    }
}
