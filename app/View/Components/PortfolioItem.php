<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PortfolioItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public string $title;
     public array $categories;
     public string $image;
     public string $github;
     public array $itemsection;


    public function __construct(string $title, array $categories,array $itemsection, string $image, string $github)
    {
        //
        $this->title=$title;
        $this->categories=$categories;
        $this->image=$image;
        $this->github=$github;
        $this->itemsection=$itemsection;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.portfolio-item');
    }
}
